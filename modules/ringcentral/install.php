<?php

defined('BASEPATH') or exit('No direct script access allowed');

$CI =& get_instance(); 

if (!$CI->db->table_exists(db_prefix() . 'ringcentral_data')) {
    $CI->db->query('CREATE TABLE `' . db_prefix() . "ringcentral_data` (
        `id` int(11) NOT NULL,
        `user_id` int(11) NOT NULL,
        `phone_number` varchar(20) NOT NULL,
        `message` text NOT NULL,
        `call_duration` int(11) NOT NULL,
        `call_type` varchar(10) NOT NULL,
        `sms_timestamp` timestamp NULL DEFAULT NULL,
        `call_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `recording_url` varchar(255) NULL,
        PRIMARY KEY (`id`),
        KEY `user_id` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=" . $CI->db->char_set . ';');

    $CI->db->query('ALTER TABLE `' . db_prefix() . 'ringcentral_data`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1');

    $CI->db->insert('tbladminmenu', [
        'name' => 'RingCentral',
        'icon' => 'fa-phone', 
        'position' => 9, 
        'class' => 'ringcentral', 
        'collapse' => 0,
        'parent' => null,
        'href' => admin_url('ringcentral'),
    ]);
}
