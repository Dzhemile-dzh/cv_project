<?php
	class Technologies{
	public $tech_id, $tech_name;
		function insert($tech){
			$tech = new Technologies;
			foreach ($_POST as $key => $data) {
				if (is_array($data) && count($data) > 0){
					$tech->$key = implode(',',$data);
				}else{
					$tech->$key = $data;
				}
			}
			$allowed = get_object_vars($this);
			$params = [];
			$setStr = "";
			$setParams = "";
			foreach ($allowed as $key => $allow){
				if (strstr($key, 'tech_') && $key != 'tech_id' && $tech->$key != "")
					{
						$setStr .= "`".str_replace("`", "``", $key)."`,";
						$setParams .= ":".$key.",";
						$params[$key] = $tech->$key;
					}
			}
			$setStr = rtrim($setStr, ",");
			$setParams = rtrim($setParams, ",");

			$servername = "localhost";
			$username = "dzhemile";
			$password = "7777777dzhemile";
  			$conn = new PDO("mysql:host=$servername;dbname=cv_project", $username, $password);
  			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("INSERT INTO tech_tecnologies ($setStr) VALUES ($setParams)")->execute($params);
			return $conn->lastInsertId();
		}
	}