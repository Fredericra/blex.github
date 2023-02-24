<?php 


class base
{
    private $base = "commerce";
    private $table;
    private $pdo;
    public function __construct($table)
    {
        $this->table = $table;
    }
    public function pdo()
    {
     
            $new = new PDO(
                "mysql:host=localhost;dbname=$this->base",
                "root",
                "",
                [
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                ]
            );
            return $new;
       
    }
    public function insertion($indextable)
    {
        $insertion = $this->pdo()->prepare("INSERT INTO $this->table SET {$indextable}");
        $insertion->execute();
        return $insertion;
    }
    public function select($inex,$execution)
    {
        $insertion = $this->pdo()->prepare("SELECT * FROM  $this->table WHERE $inex=?");
        $insertion->execute(array($execution));
        $sellect = $insertion->fetch();
        return $sellect;
    }
    public function selection_tous()
    {
       $this->pdo= $this->pdo()->prepare("SELECT * FROM $this->table");
       $this->pdo->execute();
       return $name=$this->pdo->fetch();
    }
    public function upgrade($index,$where,$execute)
    {
        $upgrade = $this->pdo()->prepare("UPDATE $this->table SET $index WHERE $where=?");
        $upgrade->execute(array($execute));
        return $upgrade;
    }
    public function delete($index,$execute)
    {
        $delete = $this->pdo()->prepare("DELETE FROM $this->table WHERE $index=?");
        $delete->execute(array($execute));
        return $delete;
    }
    public function relation($table1,$execute,$index,$colums)
    {
        $relation = $this->pdo()->prepare("SELECT * FROM $this->table FULL OUTER JOIN $table1 ON $this->table.$colums=$table1.$colums WHERE $index=?");
        $relation->execute(array($execute));
        $select = $relation->fetch();
    }
    public function last()
    {
        return $this->pdo()->lastInsertId();
    }
}



?>
