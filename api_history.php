<?php
use GuzzleHttp\Psr7\Response;

require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('S:\Server-01\htdocs\perfex_crm');
$dotenv->load();

$rcsdk = new RingCentral\SDK\SDK(
    $_ENV['RC_CLIENT_ID'],
    $_ENV['RC_CLIENT_SECRET'],
    $_ENV['RC_SERVER_URL']
);

$platform = $rcsdk->platform();
$platform->login(["jwt" => $_ENV['RC_JWT']]);

$params = [
    'view' => 'Detailed'
];

$resp = $platform->get('/account/~/call-log', $params);

if ($resp) {
    // echo json_encode($resp->json()->records); exit;
    $callLogs = $resp->json()->records;
    // $callLog = json_decode($callLogJson);
    $pdo = new PDO('mysql:host=localhost;dbname=perfex_crm', 'root', '');


    foreach ($callLogs as $callLog) {
        //  echo json_encode($callLog); exit;

        $toPhoneNumber = isset($callLog->to->phoneNumber)?$callLog->to->phoneNumber:null;
        $fromName = isset($callLog->from->name) ? $callLog->from->name : null;
        $fromPhoneNumber = isset($callLog->from->phoneNumber) ? $callLog->from->phoneNumber : null;
        $fromExtensionId = isset($callLog->from->extensionId) ? $callLog->from->extensionId : null;

        $extensionUri = isset($callLog->extension->uri) ? $callLog->extension->uri : null;
        $extensionId = isset($callLog->extension->id) ? $callLog->extension->id : null;

        $billingCostIncluded = isset($callLog->billing->costIncluded) ? $callLog->billing->costIncluded : null;
        $billingCostPurchased = isset($callLog->billing->costPurchased) ? $callLog->billing->costPurchased : null;
    
    
        $stmt = $pdo->prepare("INSERT INTO tblringcentral_data       
            (uri, sessionId, startTime, duration, durationMs, type, internalType, direction, action, result, 
            toPhoneNumber, fromName, fromPhoneNumber, fromExtensionId, extensionUri, extensionId, reason, 
            reasonDescription, telephonySessionId, partyId, transport, lastModifiedTime, billingCostIncluded, 
            billingCostPurchased) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $stmt->bindParam(1, $callLog->uri);
        $stmt->bindParam(2, $callLog->sessionId);
        $stmt->bindParam(3, $callLog->startTime);
        $stmt->bindParam(4, $callLog->duration);
        $stmt->bindParam(5, $callLog->durationMs);
        $stmt->bindParam(6, $callLog->type);
        $stmt->bindParam(7, $callLog->internalType);
        $stmt->bindParam(8, $callLog->direction);
        $stmt->bindParam(9, $callLog->action);
        $stmt->bindParam(10, $callLog->result);
        $stmt->bindParam(11, $toPhoneNumber);
        $stmt->bindParam(12, $fromName);
        $stmt->bindParam(13, $fromPhoneNumber);
        $stmt->bindParam(14, $fromExtensionId);
        $stmt->bindParam(15, $extensionUri);
        $stmt->bindParam(16, $extensionId);
        $stmt->bindParam(17, $callLog->reason);
        $stmt->bindParam(18, $callLog->reasonDescription);
        $stmt->bindParam(19, $callLog->telephonySessionId);
        $stmt->bindParam(20, $callLog->partyId);
        $stmt->bindParam(21, $callLog->transport);
        $stmt->bindParam(22, $callLog->lastModifiedTime);
        $stmt->bindParam(23, $billingCostIncluded);
        $stmt->bindParam(24, $billingCostPurchased);
    
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error inserting call log: " . $e->getMessage() . "\n";
        }
    }
    
    echo "Call logs inserted into the database successfully.";
    
}    