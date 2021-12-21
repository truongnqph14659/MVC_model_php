<?php
class Con_vit
{
    // var $ma_so;
    // var $name;
    // var $age;
    function run()
    {
        echo "con vịt" . $this->name . "tuổi" . $this->age;
    }
    function __construct($name, $ma_so, $age)
    {
        $this->name = $name;
        $this->ma_so = $ma_so;
        $this->age = $age;
    }
}
$Dieu = new Con_vit('nguyen quang truong', 'ph14659', 60);

$Dieu->run();
