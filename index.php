<?php
define('SF_DEBUG',true);
define('SF_TRACE',true);
define('WORK_DIR',__DIR__);
$config = require(WORK_DIR . '/config/main1.php');
$Yii::app()->createApp($config)->bootstrap();
