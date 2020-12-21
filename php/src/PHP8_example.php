<?php
class A
{
    public function __construct
    (
      public ?int $someProp = null,
      public ?float $prop = null,
      public ?string $foo = null
    ){
      echo "Some job done!\n";
    }
}

//===================================================
$test1 = new A;
echo "-----test1-----\n";
var_dump($test1);
echo "RESULT:\n";
var_dump($test1->someProp);
var_dump($test1->prop);
var_dump($test1->foo);

//===================================================
$test2 = new A(2,2.2,"Nice");
echo "-----test2-----\n";
var_dump($test2);
echo "RESULT:\n";
var_dump($test2->someProp);
var_dump($test2->prop);
var_dump($test2->foo);

?>
