<?php
require_once("task.php");

class TaskList {
    private $tasks;

    public function getAllTask(){
        $url = parse_url(getenv('DATABASE_URL'));
        $dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
        $pdo = new PDO($dsn, $url['user'], $url['pass']);

        $query = "SELECT * FROM public.todo;";
        $result = $pdo->query($query);

        foreach($result as $data){
            $task = new Task($data[0], $data[1], $data[2], $data[3]);
            $this->tasks[] = $task;
        }

        return $this->tasks;
    }
}

?>