<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-16 09:08:07 --> Could not find the language line "General"
ERROR - 2023-11-16 09:10:54 --> Could not find the language line "General"
ERROR - 2023-11-16 13:37:17 --> Could not find the language line "General"
ERROR - 2023-11-16 16:01:46 --> Could not find the language line "General"
ERROR - 2023-11-16 21:44:27 --> Severity: Warning --> include_once(S:\Server-01\htdocs\perfex_crm\modules/ringcetral/views/table.php): Failed to open stream: No such file or directory S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 235
ERROR - 2023-11-16 21:44:27 --> Severity: Warning --> include_once(): Failed opening 'S:\Server-01\htdocs\perfex_crm\modules/ringcetral/views/table.php' for inclusion (include_path='S:\Server-01\php\PEAR') S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 235
ERROR - 2023-11-16 21:44:27 --> Severity: Warning --> Undefined variable $output S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 237
ERROR - 2023-11-16 21:44:31 --> Severity: Warning --> include_once(S:\Server-01\htdocs\perfex_crm\modules/ringcetral/views/table.php): Failed to open stream: No such file or directory S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 235
ERROR - 2023-11-16 21:44:31 --> Severity: Warning --> include_once(): Failed opening 'S:\Server-01\htdocs\perfex_crm\modules/ringcetral/views/table.php' for inclusion (include_path='S:\Server-01\php\PEAR') S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 235
ERROR - 2023-11-16 21:44:31 --> Severity: Warning --> Undefined variable $output S:\Server-01\htdocs\perfex_crm\application\libraries\App.php 237
ERROR - 2023-11-16 22:22:58 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:22:58 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:23:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') ENGINE=InnoDB DEFAULT CHARSET=utf8' at line 30 - Invalid query: CREATE TABLE `tblringcentral_data` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `uri` varchar(255) DEFAULT NULL,
        `sessionId` varchar(255) DEFAULT NULL,
        `startTime` timestamp NULL DEFAULT NULL,
        `duration` int(11) DEFAULT NULL,
        `durationMs` int(11) DEFAULT NULL,
        `type` varchar(255) DEFAULT NULL,
        `internalType` varchar(255) DEFAULT NULL,
        `direction` varchar(255) DEFAULT NULL,
        `action` varchar(255) DEFAULT NULL,
        `result` varchar(255) DEFAULT NULL,
        `toPhoneNumber` varchar(255) DEFAULT NULL,
        `fromName` varchar(255) DEFAULT NULL,
        `fromPhoneNumber` varchar(255) DEFAULT NULL,
        `fromExtensionId` varchar(255) DEFAULT NULL,
        `extensionUri` varchar(255) DEFAULT NULL,
        `extensionId` varchar(255) DEFAULT NULL,
        `reason` varchar(255) DEFAULT NULL,
        `reasonDescription` text,
        `telephonySessionId` varchar(255) DEFAULT NULL,
        `partyId` varchar(255) DEFAULT NULL,
        `transport` varchar(255) DEFAULT NULL,
        `lastModifiedTime` timestamp NULL DEFAULT NULL,
        `billingCostIncluded` int(11) DEFAULT NULL,
        `billingCostPurchased` int(11) DEFAULT NULL,
       
        PRIMARY KEY (`id`),
      
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2023-11-16 22:23:15 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: ALTER TABLE `tblringcentral_data`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1
ERROR - 2023-11-16 22:23:26 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:23:26 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:23:29 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:23:29 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:24:55 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:24:55 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:24:56 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:24:56 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:24:56 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:24:56 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:24:57 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:24:57 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:42 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:42 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:43 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:43 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:44 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:44 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:44 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:44 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:44 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:44 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:25:44 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:25:44 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:26:23 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:26:23 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:26:29 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:26:29 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:26:39 --> Query error: Table 'perfex_crm.tbladminmenu' doesn't exist - Invalid query: INSERT INTO `tbladminmenu` (`name`, `icon`, `position`, `class`, `collapse`, `parent`, `href`) VALUES ('RingCentral', 'fa-phone', 9, 'ringcentral', 0, NULL, 'http://localhost/perfex_crm/admin/ringcentral')
ERROR - 2023-11-16 22:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') ENGINE=InnoDB DEFAULT CHARSET=utf8' at line 30 - Invalid query: CREATE TABLE `tblringcentral` (
        `id` int(11) NOT NULL,
        `uri` varchar(255) DEFAULT NULL,
        `sessionId` varchar(255) DEFAULT NULL,
        `startTime` timestamp NULL DEFAULT NULL,
        `duration` int(11) DEFAULT NULL,
        `durationMs` int(11) DEFAULT NULL,
        `type` varchar(255) DEFAULT NULL,
        `internalType` varchar(255) DEFAULT NULL,
        `direction` varchar(255) DEFAULT NULL,
        `action` varchar(255) DEFAULT NULL,
        `result` varchar(255) DEFAULT NULL,
        `toPhoneNumber` varchar(255) DEFAULT NULL,
        `fromName` varchar(255) DEFAULT NULL,
        `fromPhoneNumber` varchar(255) DEFAULT NULL,
        `fromExtensionId` varchar(255) DEFAULT NULL,
        `extensionUri` varchar(255) DEFAULT NULL,
        `extensionId` varchar(255) DEFAULT NULL,
        `reason` varchar(255) DEFAULT NULL,
        `reasonDescription` text,
        `telephonySessionId` varchar(255) DEFAULT NULL,
        `partyId` varchar(255) DEFAULT NULL,
        `transport` varchar(255) DEFAULT NULL,
        `lastModifiedTime` timestamp NULL DEFAULT NULL,
        `billingCostIncluded` int(11) DEFAULT NULL,
        `billingCostPurchased` int(11) DEFAULT NULL,
       
        PRIMARY KEY (`id`),
      
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2023-11-16 22:34:44 --> Query error: Table 'perfex_crm.tblringcentral' doesn't exist - Invalid query: ALTER TABLE `tblringcentral`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1
ERROR - 2023-11-16 17:39:54 --> Query error: Table '(temporary)' is marked as crashed and should be repaired - Invalid query: SHOW COLUMNS FROM `tbloptions`
ERROR - 2023-11-16 17:39:54 --> Severity: error --> Exception: Call to a member function result_array() on bool S:\Server-01\htdocs\perfex_crm\system\database\DB_driver.php 1319
ERROR - 2023-11-16 22:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') ENGINE=InnoDB DEFAULT CHARSET=utf8' at line 30 - Invalid query: CREATE TABLE `tblringcentral_data` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `uri` varchar(255) DEFAULT NULL,
        `sessionId` varchar(255) DEFAULT NULL,
        `startTime` timestamp NULL DEFAULT NULL,
        `duration` int(11) DEFAULT NULL,
        `durationMs` int(11) DEFAULT NULL,
        `type` varchar(255) DEFAULT NULL,
        `internalType` varchar(255) DEFAULT NULL,
        `direction` varchar(255) DEFAULT NULL,
        `action` varchar(255) DEFAULT NULL,
        `result` varchar(255) DEFAULT NULL,
        `toPhoneNumber` varchar(255) DEFAULT NULL,
        `fromName` varchar(255) DEFAULT NULL,
        `fromPhoneNumber` varchar(255) DEFAULT NULL,
        `fromExtensionId` varchar(255) DEFAULT NULL,
        `extensionUri` varchar(255) DEFAULT NULL,
        `extensionId` varchar(255) DEFAULT NULL,
        `reason` varchar(255) DEFAULT NULL,
        `reasonDescription` text,
        `telephonySessionId` varchar(255) DEFAULT NULL,
        `partyId` varchar(255) DEFAULT NULL,
        `transport` varchar(255) DEFAULT NULL,
        `lastModifiedTime` timestamp NULL DEFAULT NULL,
        `billingCostIncluded` int(11) DEFAULT NULL,
        `billingCostPurchased` int(11) DEFAULT NULL,
       
        PRIMARY KEY (`id`),
      
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2023-11-16 22:46:11 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: ALTER TABLE `tblringcentral_data`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1
ERROR - 2023-11-16 22:46:23 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:46:23 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:46:25 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:46:25 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:46:26 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:46:26 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:47:07 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:47:07 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:47:24 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:47:24 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:47:27 --> Could not find the language line "goals"
ERROR - 2023-11-16 22:47:41 --> Query error: Table 'perfex_crm.tbladminmenu' doesn't exist - Invalid query: INSERT INTO `tbladminmenu` (`name`, `icon`, `position`, `class`, `collapse`, `parent`, `href`) VALUES ('RingCentral', 'fa-phone', 9, 'ringcentral', 0, NULL, 'http://localhost/perfex_crm/admin/ringcentral')
ERROR - 2023-11-16 22:47:57 --> Severity: Warning --> Undefined variable $setup_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 22:47:57 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 22:47:57 --> Severity: Warning --> Undefined variable $sidebar_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 22:47:57 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 22:52:18 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:52:18 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 22:52:22 --> Could not find the language line "goals"
ERROR - 2023-11-16 22:52:22 --> Could not find the language line "goals"
ERROR - 2023-11-16 22:52:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') ENGINE=InnoDB DEFAULT CHARSET=utf8' at line 30 - Invalid query: CREATE TABLE `tblringcentral_data` (
        `id` int(11) NOT NULL,
        `uri` varchar(255) DEFAULT NULL,
        `sessionId` varchar(255) DEFAULT NULL,
        `startTime` timestamp NULL DEFAULT NULL,
        `duration` int(11) DEFAULT NULL,
        `durationMs` int(11) DEFAULT NULL,
        `type` varchar(255) DEFAULT NULL,
        `internalType` varchar(255) DEFAULT NULL,
        `direction` varchar(255) DEFAULT NULL,
        `action` varchar(255) DEFAULT NULL,
        `result` varchar(255) DEFAULT NULL,
        `toPhoneNumber` varchar(255) DEFAULT NULL,
        `fromName` varchar(255) DEFAULT NULL,
        `fromPhoneNumber` varchar(255) DEFAULT NULL,
        `fromExtensionId` varchar(255) DEFAULT NULL,
        `extensionUri` varchar(255) DEFAULT NULL,
        `extensionId` varchar(255) DEFAULT NULL,
        `reason` varchar(255) DEFAULT NULL,
        `reasonDescription` text,
        `telephonySessionId` varchar(255) DEFAULT NULL,
        `partyId` varchar(255) DEFAULT NULL,
        `transport` varchar(255) DEFAULT NULL,
        `lastModifiedTime` timestamp NULL DEFAULT NULL,
        `billingCostIncluded` int(11) DEFAULT NULL,
        `billingCostPurchased` int(11) DEFAULT NULL,
       
        PRIMARY KEY (`id`),
      
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2023-11-16 22:52:42 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: ALTER TABLE `tblringcentral_data`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1
ERROR - 2023-11-16 22:52:49 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 22:52:49 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:06:37 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:06:37 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:10:29 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:10:29 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:10:30 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:10:30 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:10:44 --> Could not find the language line "goals"
ERROR - 2023-11-16 23:10:45 --> Could not find the language line "goals"
ERROR - 2023-11-16 23:10:50 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:10:50 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:38:04 --> Could not find the language line "goals"
ERROR - 2023-11-16 23:38:10 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:38:10 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:38:53 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:38:53 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:38:55 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:38:55 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:44:30 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:44:30 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:44:31 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:44:31 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:44:52 --> Could not find the language line "goals"
ERROR - 2023-11-16 23:44:57 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:44:57 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:45:09 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:45:09 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:45:14 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:45:14 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:52:43 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:52:43 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:52:46 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:52:46 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:53:18 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:53:18 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:53:18 --> Severity: Warning --> Undefined variable $setup_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:53:18 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:53:18 --> Severity: Warning --> Undefined variable $sidebar_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:53:18 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:53:39 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:53:39 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:53:39 --> Severity: Warning --> Undefined variable $setup_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:53:39 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:53:39 --> Severity: Warning --> Undefined variable $sidebar_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:53:39 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:54:07 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:54:08 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:54:08 --> Severity: Warning --> Undefined variable $setup_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:54:08 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\setup_menu.php 13
ERROR - 2023-11-16 23:54:08 --> Severity: Warning --> Undefined variable $sidebar_menu S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:54:08 --> Severity: Warning --> foreach() argument must be of type array|object, null given S:\Server-01\htdocs\perfex_crm\application\views\admin\includes\aside.php 12
ERROR - 2023-11-16 23:55:17 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:55:17 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:55:21 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:55:21 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 16
ERROR - 2023-11-16 23:56:52 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:56:52 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:56:53 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:56:53 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:15 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:15 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:17 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:17 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:23 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:23 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:45 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:45 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:46 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:46 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:47 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:47 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:47 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:47 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:47 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:47 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:57:51 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:57:51 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:59:07 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:59:07 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
ERROR - 2023-11-16 23:59:08 --> Query error: Table 'perfex_crm.tblringcentral_data' doesn't exist - Invalid query: SELECT *
FROM `tblringcentral_data`
ERROR - 2023-11-16 23:59:08 --> Severity: error --> Exception: Call to a member function result() on bool S:\Server-01\htdocs\perfex_crm\modules\ringcentral\models\Ringcentral_model.php 18
