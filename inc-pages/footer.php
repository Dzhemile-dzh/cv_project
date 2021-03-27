    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
    </script>
    <script type="text/javascript">
        function insertTech() {
          var tech_name = $('input[name="tech_name"]').val();
          $.ajax({
            type: "POST",
            url: "insertion.php",
            data: {tech_name:tech_name},
          });
            alert('The record has been inserted into the database!');
            $('#technologyAdd').modal('hide');
            location.href = "http://localhost/cv_project/index.php";
        }
        function insertUni() {
          var uni_name = $('input[name="uni_name"]').val();
          var uni_grade = $('input[name="uni_grade"]').val();
          $.ajax({
            type: "POST",
            url: "insertion.php",
            data: {uni_name:uni_name,uni_grade:uni_grade},
          });
            alert('The record has been inserted into the database!');
            $('#universityAdd').modal('hide');
            location.href = "http://localhost/cv_project/index.php";
        }
    </script>
</body>
</html>
