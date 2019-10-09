<?php 

//this class is used to set and retrieve the message according to the number
class result
{
	public $message;
	
	public function __construct($msg)
	{
		$this->message = $msg;
	}
	public function getMessage(){  return $this->message; }
}

//A function is used to create and return an instance of result class.
function Linio (){
	return new result("Linio");
}

function IT (){
	return new result("IT");
}

function Linianos (){
	return new result("Linianos");
}

function number($n){
	return new result($n);
}

echo "Miguel Rodriguez Martinez Challenge - Backend Developer <hr>";
echo "Numbers:<br>";
$numbers = 100;

//main task that checks numbers from 1 to n.
for($i=1; $i<=$numbers; $i++)
{

	if( (  (0 == (($i%3) + ($i%5)) ) && $res = Linianos() )  || 
		(  (0 == ($i%3)) && $res = Linio() )  || 
		(  (0 == ($i%5)) && $res = IT() ) || 
		( $res = number($i) ))
	{
		
		echo $res->getMessage()."<br>";

	
	}

}

/*
TEST CASES:

1. When $numbers=0;
2. When $numbers=1;
3. When $numbers=MAX_INT;
4. Change the increment to print only Linios numbers
5. Change the increment to print only IT numbers
6. Change the increment to print only Linianos numbers
*/


?>