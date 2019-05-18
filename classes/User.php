<?php

/**
 * Author: Hameed Abdulrahaman
 * Email: hameedabdulrahamann@gmail.com
 * Phone: +2347064567799
 */
class User
{
	
	public function data()
	{
		$data = DB::query('SELECT * FROM users WHERE id =:id', array(':id'=>$_SESSION['user']))[0];
		return $data;
	}
	public function members(){
		$data = DB::query('SELECT * FROM users');
		return $data;
	}
	public function email($email)
	{
		$data = DB::query('SELECT * FROM users WHERE email =:email', array(':email'=>$email))[0];
		return $data;
	}
}

?>