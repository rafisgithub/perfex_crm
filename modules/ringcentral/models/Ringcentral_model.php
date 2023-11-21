<?php
/*
defined('BASEPATH') or exit('No direct script access allowed');
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

class Ringcentral_model extends App_Model
{
    public function __construct(){
        parent::__construct();
    }
    public function getAllRecords(){
        // $query = $this->db->get('tblringcentral_data');
        $query = $this->db->select("*");
            $this->db->from(db_prefix().'ringcentral_data');
            $query=$this->db->get();
    //    echo"<pre>"; print_r($query->result());exit;

        return $query->result();
    }
    
}*/


defined('BASEPATH') or exit('No direct script access allowed');
// require './vendor/autoload.php';
include("./modules/ringcentral/vendor/autoload.php");
include("./modules/ringcentral/models/env.php");
// error_reporting(0);
// error_reporting(E_ALL);
// error_reporting(1);

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;




class Ringcentral_model extends App_Model
{
   
    
    public function __construct()
    {
        parent::__construct();
        //  echo("hi");exit;



    }

    public function fetchDataFromS3AndInsertIntoDB()
    {

//         echo givemekey();
// echo("<br>");
// echo givemesecret();exit;
     
        $bucket = 'perfexcrm120';
        $audiofolder = 'recording/';
        $region = 'ap-southeast-1';

        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => $region,
            'credentials' => [
                'key'    => givemekey(),
                'secret' => givemesecret(),
            ],
        ]);

        try {

            $objects = $s3->listObjects([
                'Bucket' => $bucket,
                'Prefix' => $audiofolder,
            ]);

            if (!empty($objects['Contents'])) {

                foreach ($objects['Contents'] as $object) {
                    $result = $s3->getObject([
                        'Bucket' => $bucket,
                        'Key'    => $object['Key'],
                    ]);

                    $audioName = $object['Key'];

                    // print_r($result['Body']);
                    // exit;
                    $targetDirectory = 'modules/ringcentral/asset/recording';

                    if (!is_dir($targetDirectory)) {
                        mkdir($targetDirectory, 0755, true);
                    }

                    $localAudioPath = 'modules/ringcentral/asset/' . $audioName;
                    file_put_contents($localAudioPath, $result['Body']);

                }
            } else {
                echo ("No audio found in the S3 bucket.");
            }
        } catch (S3Exception $e) {
            log_message('error', 'Error fetching data from S3: ' . $e->getMessage());
        }


        $directory = 'modules/ringcentral/asset/recording';
                    
        $fileNames = scandir($directory);

        $phoneNumberPattern = '/\d{12}-(\d{10})/';
        
        
        foreach ($fileNames as $fileName) {
            
            if (is_file($directory . '/' . $fileName) && pathinfo($fileName, PATHINFO_EXTENSION) == 'mp3') {
                if (preg_match($phoneNumberPattern, $fileName, $matches)) {

                    $phoneNumber = $matches[1];
                    
                    $stmtCheck = $this->db->query("SELECT name, id FROM tblleads WHERE phonenumber = ?", [$phoneNumber]);
                    $leadInfo = $stmtCheck->row();
                    
                    // $stmtCheck = $this->db->query("SELECT COUNT(*) FROM tblleads_information WHERE recording = ?", [$audioName]);
                    // $count = $stmtCheck->row()->count;
                    // if($count==0){
                    if ($leadInfo) {
                        $this->db->insert('tblleads_information', [
                            'recording' => $fileName,
                            'lead_name' => $leadInfo->name,
                            'lead_id' => $leadInfo->id,

                        ]);
                        echo "Data inserted successfully.\n";
                    } 
                // }
                }
            }
        }
    }

    public function getAllRecords()
    {
        // $query = $this->db->get('tblringcentral_data');
        $query = $this->db->select("*");
        $this->db->from(db_prefix() . 'ringcentral_data');
        $query = $this->db->get();
        //    echo"<pre>"; print_r($query->result());exit;

        return $query->result();
    }
}
