<?php
//Define funtions
/*function myfunc()
{
    echo "This is function define sytax";

}
myfunc();*/

// Functions with Arguments

/*function myfunc($name,$age,$country){
    echo "I am ".$name.$age. "and I live in ".$country;

}
myfunc("Mahbub", 28,"Bangladesh");*/

//Function with Default Argument

/*function myfunc($v=25)
{
    echo $v."<br/>";
}
myfunc();*/

//Returning Values from a Function
function myfunc($x,$y){
    $z=$x+$y;
    echo $z;

}
myfunc(25,50);

?>