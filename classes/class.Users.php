<?php

	class Users{
	public $u_id, $u_name,$u_surname, $u_family, $u_birthday, $u_uni_id, $u_tech_id;
		function insert($u){
			$u = new Users;
			foreach ($_POST as $key => $data) {
				if (is_array($data) && count($data) > 0){
					$u->$key = implode(',',$data);
				}else{
					$u->$key = $data;
				}
			}
			$allowed = get_object_vars($this);
			$params = [];
			$setStr = "";
			$setParams = "";
			foreach ($allowed as $key => $allow){
				if (strstr($key, 'u_') && $key != 'u_id' && $u->$key != "")
					{
						$setStr .= "`".str_replace("`", "``", $key)."`,";
						$setParams .= ":".$key.",";
						$params[$key] = $u->$key;
					}
			}
			$setStr = rtrim($setStr, ",");
			$setParams = rtrim($setParams, ",");

			$servername = "localhost";
			$username = "dzhemile";
			$password = "7777777dzhemile";
  			$conn = new PDO("mysql:host=$servername;dbname=cv_project", $username, $password);
  			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("INSERT INTO u_users ($setStr) VALUES ($setParams)")->execute($params);
			return $conn->lastInsertId();
		}


	}
	