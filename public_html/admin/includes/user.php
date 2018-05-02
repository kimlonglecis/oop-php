<?php 
class User {
	public $id;
	public $password;
	public $username;
	public $first_name;
	public $last_name;
	/*Find All Users Function*/
	public static function find_all_users(){
		// global $database;
		// $result_set = $database->query("Select * FROM users");
		// return $result_set;
		return self::find_this_query("Select * From users");
	}

	/*Find User by Id Method*/
	public static function find_user_by_id($user_id){
		// global $database;
		// $result_set = $database->query("Select * FROM users where id = $user_id");
		// $found_user = mysqli_fetch_array($result_set);
		// return $found_user;
		$result_set =  self::find_this_query("Select * From users where id=$user_id");
		$found_user = mysqli_fetch_array($result_set);
		return $found_user;
	}

	/*Find Query Method*/
	public static function find_this_query($sql){
		global $database;
		$result_set = $database->query($sql);
		return $result_set;
	}

	/*Assign data to properties*/
	/*Tutorial Video #42-#43*/
	/*Long way to do this function*/
	public static function instantation($found_user){
		$the_object = new self;
		// $the_object->id 		= $found_user['id'];
		// $the_object->username 	= $found_user['username'];
		// $the_object->password 	= $found_user['password'];
		// $the_object->first_name = $found_user['first_name'];
		// $the_object->last_name 	= $found_user['last_name'];

		return $the_object;
	}
}
?>