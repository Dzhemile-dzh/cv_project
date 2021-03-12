<?php 
    include 'inc-pages/head.php';
    include 'dbconn.php';
?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">CV Generator</h2>
                    <form name="blog post" action="registration-form.php" method="post">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label>First  Name</label>
                                    <input class="input--style-4" type="text" name="u_name" required="" pattern="[A-Za-z]{2,}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label>Last Name</label>
                                    <input class="input--style-4" type="text" name="u_surname" required="" pattern="[A-Za-z]{2,}">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label>Family Name</label>
                                    <input class="input--style-4" type="text" name="u_family" required="" pattern="[A-Za-z]{2,}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label >Birthday</label>
                                    <div class="input-group-icon">
                                        <input type="date" name="u_birthday" required pattern="\d{4}-\d{2}-\d{2}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label >University <i class="fas fa-edit" data-toggle="modal" data-target="#universityAdd" style="color:#4272d7"></i></label>
                                    <?php
                                    $qa = "SELECT * FROM uni_university";
                                    $stmta = $conn->prepare( $qa );
                                    $stmta->execute();
                                    echo '<select class="selectpicker" name="u_uni_id" id="u_uni_id">';
                                    while( $row = $stmta->fetch() ) {
                                        $selected = ''; 
                                        echo ('<option value="'. $row['uni_id'].'" '.$selected.'>'. $row['uni_name'].'</option>');
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="modal fade" id="universityAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add University</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>University Name</label>
                                                            <input class="input--style-4" type="text" name="uni_name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Grade</label>
                                                            <input class="input--style-4" type="text" name="uni_grade" >
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-primary" name="university_add" type="submit" onclick="insertUni();" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label >Technologies<i class="fas fa-edit" style="color:#4272d7"  data-toggle="modal" data-target="#technologyAdd"></i></label>  
                                    <?php
                                    $q = "SELECT * FROM tech_tecnologies";
                                    $stmt = $conn->prepare( $q );
                                    $stmt->execute();
                                    echo '<select class="selectpicker" multiple name="u_tech_id[]">';
                                    while( $row = $stmt->fetch()) {
                                        echo '<option value="'. $row['tech_name'].'('.$row['tech_id'].')'.'">' . $row['tech_name'] .'</option>';
                                    }
                                    echo '</select>';
                                    ?>
                                    </div>
                                    <script>$('select').selectpicker();</script>    
                                </div>
                                <div class="modal fade" id="technologyAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Technology</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label>Technology Name</label>
                                                            <input class="input--style-4" type="text" name="tech_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-primary" name="technology_add" type="submit" onclick="insertTech();" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <button class="btn btn-primary"  name='ADD_CV' id ='ADD_CV' style="width:100%">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'inc-pages/footer.php'; ?>


