<?php
require_once("task.php");
require_once("tasklist.php");

function insert() {
    if(!empty($_POST)){
        $task = new Task($_POST['name'], $_POST['deadline'], false);
        return $task->create();
    } else {
        return false;
    }
}
?>

<script type="text/javascript">
window.onload = function() {
    var result ="<?php insert(); ?>";
    alert(result.toString());
}
</script>

<html>
    <body>
        <form method="post" action="index.php">
            <button type="submit"> Click </button>
            <input type="hidden" id="name" value="テスト"/>
            <input type="hidden" id="deadline" value="2021/12/02"/>
        </form>
    </body>
</html>
