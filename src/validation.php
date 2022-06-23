<?php
namespace Ahmed\Package;
class validation{
    private $name;
    public $error=[];
    public function input($name){
        $this->name=$_REQUEST[$name];
        return $this;
    }
    public function required(){
        if($this->name=='' || empty($this->name) || strlen($this->name)==0){
            $this->error[]="plz name is required";
        }
    }
    public function show(){
        print_r($this->error);
    }
}


?>