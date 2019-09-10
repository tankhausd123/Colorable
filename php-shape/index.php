<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$arr[0] = new Circle("Circle", 5);
$arr[1] = new Cylinder("Cylinder", 3, 8);
$arr[2] = new Rectangle('Rectanggle', 4, 9);
$arr[3] = new Square('Square', 5, 5, 5);
foreach ($arr as $value){
    if ($value instanceof Square){
        echo $value->name.": ".$value->howToColor();
    }
}