<?php
/**
 * Created by PhpStorm.
 * User: calexande
 * Date: 11/6/2017
 * Time: 10:16 AM
 */
session_start();
//login verification  goes here
$_SESSION['username'] = "Clarkalex";
header('Location: foo.php');