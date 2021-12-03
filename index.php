<?php
require_once("task.php");
require_once("tasklist.php");

//データ取得
//$tasks = new TaskList();
//$data = $tasks->getAllTask();
//var_dump($data);

// データ登録
$task = new Task("テスト2", "2021/11/29", false);
$result = $task->create();

if ($result) {
    echo "登録成功";
} else {
    echo "登録失敗";
}

?>