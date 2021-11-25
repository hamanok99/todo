<?php
require_once("tasklist.php");

$tasks = new TaskList();
$data = $tasks->getAllTask();
var_dump($data);
?>