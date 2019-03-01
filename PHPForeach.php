<?php
/**
 * Created by PhpStorm.
 * User: Sameera
 * Date: 3/1/2019
 * Time: 3:54 PM
 */
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}