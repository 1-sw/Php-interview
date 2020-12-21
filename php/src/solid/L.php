<?php
//SOLID (L)

class Rectangle
{
    public function __construct(
      private float $height,
      private float $weight,
    ){
      if($height < 0){
        $height = 0;
      }
      if($weight < 0){
        $weight = 0;
      }
    }
    public function getHeight():float{
        return $this->height;
    }
    public function getWeight():float{
        return $this->weight;
    }
}


$r = new Rectangle(5,5);


?>
