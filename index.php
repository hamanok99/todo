<?php
require_once("task.php");
require_once("tasklist.php");

//データ取得
//$tasks = new TaskList();
//$data = $tasks->getAllTask();
//var_dump($data);

// データ登録
//$task = new Task("テスト2", "2021/11/29", false);
//$result = $task->create();
function php_func(){
    $task = new Task("テスト2", "2021/11/29", false);
    return $task->create();
}
?>

<script type="text/javascript">
    function clickMe(){
    var result ="<?php php_func(); ?>";
    document.write(result);
}

</script>

<html>
    <body>
        <form>
            <button onclick="clickMe()"> Click </button>
        </form>
    </body>
</html>
