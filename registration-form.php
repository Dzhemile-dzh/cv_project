 <?php
	include 'dbconn.php';
	include 'inc-pages/head.php'; 
	include 'insertion.php';                           
?>
    <link href="../css/main.css" rel="stylesheet" media="all">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100  font-poppins">
        <div class="container">
            <div class="card card-4">
                <div class="card-body">
                	<h2 class="title">ALL GENERETED CVs</h2>
                	<form method="POST">
                		<div class="row" style="padding-bottom:20px">
	                		<div class="col-sm-4">
	                            <input type="date" name="u_start_date"  pattern="\d{4}-\d{2}-\d{2}" >
	                        </div>
	                   		<div class="col-sm-4">
	                            <input type="date" name="u_end_date"  pattern="\d{4}-\d{2}-\d{2} " >  
	                        </div>
	                   		<div class="col-sm-4">
	                           <button class='btn btn-primary' type='submit' name ='search'>Search</button>  
	                        </div>
                    	</div>
                    </form>
                	<div class="table-responsive">
				      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
				        <thead>
				          <tr>
				            <th>Name</th> 
				            <th>Surname</th>                                
				            <th>Family</th>
				            <th>Birthday</th>
				            <th>University</th>
				            <th>Technologies</th>  
				            <th>Grade</th>                   
				          </tr>
				        </thead>
				        <tfoot>
				          <tr>
				            <th>Name</th> 
				            <th>Surname</th>                                
				            <th>Family</th>
				            <th>Birthday</th>
				            <th>University</th>
				            <th>Technologies</th>
				            <th>Grade</th>                      
				          </tr>
				        </tfoot>
				        <tbody> 
				         <?php
				         $u_start_date = '1900-01-01';
				         $u_end_date = date('Y-m-d');
				         		if(isset($_POST['search'])){
                                    include 'dbconn.php';
                                   	$u_start_date = $_POST['u_start_date'];
                                   	$u_end_date = $_POST['u_end_date'];}
                                    $all_users = "SELECT *
		                                    	  FROM u_users 
		                                          LEFT JOIN uni_university 
		                                          ON u_uni_id = uni_id
								  				  LEFT JOIN tech_tecnologies
								  				  ON FIND_IN_SET(tech_id,u_tech_id)
								  				  WHERE u_birthday 
								  				  BETWEEN '$u_start_date' 
								  				  AND '$u_end_date'";
                                    $stmt = $conn->prepare($all_users);
                                    $stmt->execute();
                                    while( $row = $stmt->fetch() ) {
                                    	echo '<tr><td>'.$row['u_name'].'</td>
                                    			  <td>'.$row['u_surname'].'</td>
                                    			  <td>'.$row['u_family'].'</td>
                                    			  <td>'.$row['u_birthday'].'</td>
                                    			  <td>'.$row['uni_name'].'</td>
                                    			  <td>'.$row['u_tech_id'].'</td>
                                    			  <td>'.$row['uni_grade'].'</td></tr>';
                                    }
                            ?>
				          </tbody>
				        </table>
				    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc-pages/footer.php'; ?>