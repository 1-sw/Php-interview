<?php
//BEFORE SOLID(O)
class Device
{
    public int $pin;
    public string $ip;
    public string $root;
    public string $mac;
    public function shutdown(){}
    public function on(){}
    public function bios(){}
}

//AFTER SOLID(O)
class Device
{
    private int    $pin;
    private string $ip;
    private string $root;
    private string $mac;

    protected function shutdown(){}
    protected function on(){}
    protected function bios(){}

    abstract function getPin():int;
    abstract function getIp():string;
    abstract function getRoot():bool|string;
    abstract function getMac():string;
}
?>

