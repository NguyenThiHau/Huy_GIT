<?php

/**
 * Created by PhpStorm.
 * User: Moe-tan
 * Date: 1/16/2017
 * Time: 7:44 AM
 */
class person
{
    var $name;
    var $age;
    var $gender;
    var $skin;
    var $height;
    var $weight;
    var $sing;

    function __construct($name, $age, $gender, $skin, $height, $weight, $sing)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->skin = $skin;
        $this->height = $height;
        $this->weight = $weight;
        $this->sing = $sing;
    }

    function info()
    {
        echo('Name:' . $this->name . '<br/>');
        echo('Age:' . $this->age . '<br/>');
        echo('Gender:' . $this->gender . '<br/>');
        echo('Skin:' . $this->skin . '<br/>');
        echo('Height:' . $this->height . '<br/>');
        echo('Weight:' . $this->weight . '<br/>');
        echo('Sing:' . $this->sing . '<br/>');
    }

    function eating()
    {
        if ($this->weight > 70) {
            echo('Ban' . $this->name . 'an nhieu' . '<br/>');
        } elseif ($this->weight > 50) {
            echo('Ban' . $this->name . 'an du' . '<br/>');
        } else {
            echo('Ban' . $this->name . 'an it' . '<br/>');
        }
    }
}

$vhuy = new person('Vo le huy', 24, 'Male', 'trang', 171, 69, 'hay');
echo 'Ten cua doi tuong: ' . $vhuy->name . '<br/>';
$vhuy->info();
$vhuy->eating();
echo '------------------------------------<br/>';

$nam = new person('Dang Giang Nam', 20, 'Female', 'den', 165, 40, 'do');
echo 'Ten cua doi tuong: ' . $nam->name . '<br/>';
$nam->info();
$nam->eating();
echo '------------------------------------';