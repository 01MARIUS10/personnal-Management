<?php

class RouterLink{
    public $allRoute=["listing","add"];
    private $page;
    private $order;
    private $modify;
    public $route;
    public $origin;

    public function __construct()
    {
        $this->scriptName = $_SERVER["SCRIPT_NAME"] ?? " ";
        $this->page = $_GET["page"] ?? 1;
        $this->order = $_GET["order"] ?? "";
        $this->modify = $_GET["modify"] ?? "";

        $this->origin = "$this->scriptName?page=$this->page";
        $this->route = $this->origin; 

        if($this->order){
            $this->route .= "&&order=".$this->order;
        }
        if($this->modify){
            $this->route .= "&&modify=".$this->modify;
        }
    }

    public function routeOrder(string $p){
        $this->route = $this->origin;
        
        $this->route .="&&order=".$p;

        if($this->modify){
            $this->route .= "&&modify=".$this->modify;
        }
        return $this->route; 
    }

    public function routeModify(string $p){
        $this->route = $this->origin;

        if($this->order){
            $this->route .= "&&order=".$this->order;
        }

        $this->route .="&&modify=".$p;
        return $this->route; 
    }

    public function routePage(int $p){
        $this->route = $this->scriptName."?page=".$p ;
        if($this->order){
            $this->route .= "&&order=".$this->order;
        }
        if($this->modify){
            $this->route .= "&&modify=".$this->modify;
        }
        return $this->route; 
    }
    public function nextPage(){
        $page = (int)$this->page;
        return $this->routePage($page+1);
    }
    public function precPage(){
        $page = (int)$this->page -1;
        if($page<1){
            $page=1;
        }
        return $this->routePage($page);
    }

}