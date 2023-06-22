<?php 

trait Weightable {

    private $weight;
    
    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight, $unit= "kg"){
        $this->weight = "$weight $unit";
    }
}

?>