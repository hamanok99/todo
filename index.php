<?php
require_once("task.php");
require_once("tasklist.php");

function insert()
{
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

    <?php if ($_POST['name']) : ?>
        var name = <?php $_POST['name']; ?>;
        var result ="<?php insert(); ?>";
        if (result){
            alert('登録完了');
        }
    <?php endif; ?>
}
</script>

<html>
    <body>
        <form method="post" action="index.php">
            <button type="submit"> Click </button>
            <input type="hidden" id="name" name="name" value="テスト"/>
            <input type="hidden" id="deadline" name="deadline" value="2021/12/02"/>
        </form>
    </body>
</html>
