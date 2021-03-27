<?php

	class University{
	public $uni_id, $uni_name,$uni_grade;
		function insert($uni){
			$uni = new University;
			foreach ($_POST as $key => $data) {
				if (is_array($data) && count($data) > 0){
					$uni->$key = implode(',',$data);
				}else{
					$uni->$key = $data;
				}
			}
			$allowed = get_object_vars($this);
			$params = [];
			$setStr = "";
			$setParams = "";
			foreach ($allowed as $key => $allow){
				if (strstr($key, 'uni_') && $key != 'uni_id' && $uni->$key != "")
					{
						$setStr .= "`".str_replace("`", "``", $key)."`,";
						$setParams .= ":".$key.",";
						$params[$key] = $uni->$key;
					}
			}
			$setStr = rtrim($setStr, ",");
			$setParams = rtrim($setParams, ",");

			$servername = "localhost";
			$username = "dzhemile";
			$password = "7777777dzhemile";
  			$conn = new PDO("mysql:host=$servername;dbname=cv_project", $username, $password);
  			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("INSERT INTO uni_university ($setStr) VALUES ($setParams)")->execute($params);
			return $conn->lastInsertId();
		}

	}