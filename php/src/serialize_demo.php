<?php
class Book
{
    public function __construct(
      public ?int $pages = 1,
      public ?string $name = NULL,
      public ?string $title = NULL){}

    public function dump()
    {
        echo "--------Dump\n";
        echo "Msg from ".__METHOD__.":\n";
        echo "Pages:".$this->pages."\n";
        $cache=$this->name ?? gettype($this->name);
        echo "Name:$cache\n";
        $cache=$this->title ?? gettype($this->title);
        echo "Title:$cache\n";
        echo "------------\n";
    }
    public function __sleep()
    {
        echo "This is cache object, you cannot save data!\n";
        $this->pages=NULL;
        $this->name=NULL;
        $this->title=NULL;
        return [];
    }
    public function __wakeup()
    {
        echo "This is cache object, you cannot get any data!\n";
        return [];
    }
}


//TESTS////////////
//$b1=new Book;
//$b1->dump();
//-----------------
$b2=new Book($pages=50,$name="Some Name",$title="Some title");
$b2->dump();
echo "START SERIALIZE\n";
var_dump(serialize($b2));
echo "START UNSERIALIZE\n";
echo "BEFORE:\n";
$s=serialize($b2);
echo $s."\n";
echo "AFTER:\n";
var_dump(unserialize($s));
//-----------------

?>
