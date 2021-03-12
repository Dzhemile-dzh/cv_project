<?php  
	include 'dbconn.php';
    require 'classes/class.Technologies.php';
    require 'classes/class.Users.php';
    require 'classes/class.University.php';
    $tech = new Technologies; 
    $u = new Users;
    $uni = new University;
    if(!empty($_POST['tech_name'])){ 
        $tech_id = $tech->insert($_POST);
    }
    if(!empty($_POST['uni_name']) && !empty($_POST['uni_grade'] )){ 
        $uni_id = $uni->insert($_POST);
    }
	if (isset($_POST['ADD_CV'])){
		$u_id = $u->insert($_POST);	
	}   
?>