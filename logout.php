<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 22/04/18
 * Time: 22:43
 */

session_start();
session_destroy();

header('Location: login.php');
exit();

?>