<?php
function info($name){
    echo $name;
    return 10;
}
$x = info("Danilo");
echo $x;
$car = "volvo";
function display(){
    global $car;
    echo $car;
}
display()











































?>
