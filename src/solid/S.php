<?php
//Single responsibility
//BEFORE SOLID/////////////////////////////////////////////
class Order
{
    private int $totalSum;
    private string $name;

    public function getItems(){}
    public function getItem(){}
    public function calcTotalSum(){}
    public function deleteItem(){}
    public function addItem(){}

    public function printOrder(){}
    public function genToJSON(){}
    public function genToHTML(){}
    public function genToXML(){}

    public function loadOrder(){}
    public function saveOrder(){}
    public function updateOrder(){}
    public function daeleteOrder(){}
}


//AFTER SOLID/////////////////////////////////////////////
abstract class OrderItemAPI
{
    private int $totalSum;
    private string $name;
    abstract protected function getItems():array|bool;
    abstract protected function getItem():string;
    abstract protected function calcTotalSum():int;
    abstract protected function deleteItem():bool;
    abstract protected function addItem():bool;
}

abstract class OrderViewer
{
    abstract protected function printOrder();
    abstract protected function genToJSON();
    protected function  genToHTML(){}
    protected function genToXML(){}
}

abstract class OrederRepository
{
    abstract protected function loadOrder(){}
    abstract protected function saveOrder(){}
    abstract protected function updateOrder(){}
    abstract protected function daeleteOrder(){}
}

////////////////////////////////////////////////
// ALL CLASSES MUST BE IN DIFFERENT FILES !!! //
////////////////////////////////////////////////
?>
