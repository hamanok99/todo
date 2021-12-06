<?php
require_once("task.php");
?>

<script type="text/javascript">
window.onload = function()
{
    <?php if ($_POST['name']) : ?>
        <?php $task = new Task($_POST['name'], $_POST['deadline'], false); ?>
        var result ="<?php $task->create(); ?>";
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
