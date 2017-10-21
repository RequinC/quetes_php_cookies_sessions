<?php
/**
 * Created by PhpStorm.
 * User: emlv
 * Date: 21/10/17
 * Time: 14:31
 */


session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit();