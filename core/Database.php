<?php
class Database {
    private $name;
    private $user;
    private $pass;
    private $DB_DNS;
    private $DB_USER;
    private $DB_PASS;
    public $PDO;

    function __construct(){
        $this->name="website";
        $this->user="MARIUS";
        $this->pass="marius";
        $this->DB_DNS="mysql:host=localhost;dbname=".$this->name;//website
        $this->DB_USER=$this->user;//'MARIUS'
        $this->DB_PASS=$this->pass;//'marius'
        $option=[
            PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES=>false
        ];
        if(!$this->PDO){
            try{
                $this->PDO=new PDO($this->DB_DNS,$this->DB_USER,$this->DB_PASS,$option);
            }catch (PDOException $e){
                echo "error:".$e->getMessage();
            }
        }
        return $this->PDO  ;
    }

}