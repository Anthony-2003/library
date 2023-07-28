<?php
// config.php
include 'data/db.php';

$dbConnection = DbManage::getInstance('root', '', 'libreria')->getConnection();
