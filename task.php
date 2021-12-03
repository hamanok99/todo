<?php

class Task {
    private $id;
    private $name;
    private $deadline;
    private $fix_flg;

    function __construct($name, $deadline, $fix_flg, $id = Null) {
        $this->id = $id;
        $this->name = $name;
        $this->deadline = $deadline;
        $this->fix_flg = $fix_flg;
    }

    public function isFix(){
        if($this->fix_flg) return true;
        return false;
    }

    public function deadlineOver(){
        $time1 = new DateTime();
        $time2 = new DateTime($this->deadline);
        if ($time1 > $time2) return true;
        return false;
    }

    public function create(){
        try
        {
            if (is_null($this->id))
            {
                echo $this->name;
                echo $this->deadline;
                $sql = sprintf("IINSERT INTO todo(name, deadline, fix_flg) VALUES('%s', '%s', false);", $this->name, $this->deadline);
                echo $sql;
                $url = parse_url(getenv('DATABASE_URL'));
                $dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
                $pdo = new PDO($dsn, $url['user'], $url['pass']);
                $pdo->exec($sql);
            }
        } catch (PDOException $e){
            echo "例外が発生しました : " . $e->getMessage();
        }
    }

    public function update(){
        if (!is_null($this->id))
        {
            $url = parse_url(getenv('DATABASE_URL'));
            $dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
            $pdo = new PDO($dsn, $url['user'], $url['pass']);
            $sql = "UPDATE FROM todo SET fix_flg = true";
            $pdo->exec($sql);
        }
    }
}

?>