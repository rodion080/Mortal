<?php
namespace application\main;
use application\libs\DB;

abstract class Model{

    protected $db;

    public function __construct(){
        $this->db=new DB;
    }
}