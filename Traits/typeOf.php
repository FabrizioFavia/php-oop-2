<?php 

trait TypeOf{

    private $type;

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

}

?>