<?php
class test_packet
{
    private $age = 20;
    protected $name =  "nguyen ngoc dieu";
    public function set_info($name)
    {
        $this->name = $name;
    }
    public function set_age($age)
    {
        $this->age = $age;
    }
    public function get_info()
    {
        echo "ten toi la $this->name";
    }
    public function get_age()
    {
        echo "tuoi toi la $this->age";
    }
}
class thua_ke extends test_packet
{
}
$dieu = new thua_ke();
$truong = new test_packet();

$truong->set_age(30);
$dieu->set_info('nguyen quang trương');

$dieu->get_info();
echo "<br>";
$truong->get_age();
