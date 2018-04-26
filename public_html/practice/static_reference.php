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
			echo self::$wheel_count;
			echo self::$door_count;
			echo self::$set_count;
	}
}

echo Cars::$wheel_count;
echo "<br>";
echo Cars::car_detail();




 ?>