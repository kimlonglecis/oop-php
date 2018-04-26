<?php 

/**
* 
*/
class Cars
{
	public $wheel_count = 4;
	private $door_count = 4;
	protected $set_count = 2;

	function get_values()
	{
			echo $this->wheel_count;
			echo $this->door_count;
			echo $this->set_count;
	}

	function set_values(){
		echo $this->door_count = 10;
	}
}

$bmw = new Cars;

echo $bmw->get_values();
echo $bmw->set_values();




 ?>