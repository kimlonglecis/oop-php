<?php 

/**
* 
*/
class Cars
{
	public static $wheel_count = 4;
	private static $door_count = 4;
	protected static $set_count = 2;

	public static function car_detail()
	{
			echo Cars::$wheel_count;
			echo Cars::$door_count;
			echo Cars::$set_count;
	}
}

echo Cars::$wheel_count;
echo "<br>";
echo Cars::car_detail();




 ?>