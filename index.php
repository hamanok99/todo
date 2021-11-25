<?php
require_once("task.php");
require_once("tasklist.php");

//データ取得
//$tasks = new TaskList();
//$data = $tasks->getAllTask();
//var_dump($data);

// データ登録
$task = new Task("テスト2", "2021/11/29", false);
$task->create();


?>