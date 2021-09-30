<?php include 'header.php' ?>
<body>
    
    
    <?php
require 'config.php';
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$passYearInter = $_POST['passYearInter'];
$passYearGradu = $_POST['passYearGradu'];
$skills = $_POST['skills'];
$collegename = ($_POST['collegename']);
$joiningDate = $_POST['joiningDate'];
$department = $_POST['department'];
$duration = $_POST['duration'];
$source = $_POST['source'];
$hrIdNumber = $_POST['hrIdNumber'];

$status = 0;

// echo "1 $name 
//       2 $number 
//       3 $email 
//       4 $password 
//       5 $address 
//       6 $passyearInter 
//       7 $passyearGradu 
//       8 $skills 
//       9 $collegename 
//       10 $joiningDate 
//       11 $department 
//       12 $duration 
//       13 $source 
//       14 $hrIdNumber 
//       15 $status";
// ?>
<?php
$htmlContent = ' '

?>  
     
    <!--personal details-->
    
    <!-- PHP CODE   -->
              <?php
if (isset($_POST['signup']))
{
    $query = "SELECT * FROM newuser WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    if ($result)
    {
        if (mysqli_num_rows($result) > 0)
        {

?>  <script>                                                                                    
                     swal("Sorry!", "Acount is already exit!", "error", {
                         button: "Close",
                     });
                     setTimeout('Redirect()', 4000);
                     function Redirect()
                     {  
                         window.location="login.php"; 
                         
                     } 
                    </script>
                     
                   
                   <?php
        }
        else
        {
            $reg_query = "INSERT INTO `newuser` (`id`,`name`, `number`, `email`, `password`, `address`, `passyearInter`, `passyearGradu`,
                    `skills`, `collegename`, `joiningDate`, `department`, `duration`, `source`, `hrIdNumber`, `status`) 
                            VALUES('','$name','$number','$email','$password','$address','$passYearInter','$passYearGradu',
                            '$skills','$collegename','$joiningDate','$department', '$duration', '$source', '$hrIdNumber','$status')";

            $result = mysqli_query($db, $reg_query);

            echo mysqli_error($db);
            $done = 2;
?>          
                    <script type="text/javascript"> 
                     swal({
                       title: "Good job!",
                       text: "Thaks your Application is submitted! . We will send you mail for Confirmation within 10 minutes.",
                       icon: "success",\
                       button: "OK",
                      });
                    setTimeout('Redirect()', 4000);
                    function Redirect()
                     {  
                         window.location="login.php"; 
                         
                     } 
                   </script>
                    
                   
  
                    
                   
             <?php
            // start Code for Email
            function sanitize_my_email($field)
            { // function for sanitizer
                $field = filter_var($field, FILTER_SANITIZE_EMAIL);
                if (filter_var($field, FILTER_VALIDATE_EMAIL))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            $template = "./inlude/emailTem.php";
            $to_email = $email;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html; charset-IOS-8859-1" . "\r\n";

            // Additional headers
            $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

            $subject = 'INIESTA WEBTECH Interview confirmation Update';
            $message = $htmlContent;
            $headers = 'From: support@iniestawebtech.com';
            $secure_check = sanitize_my_email($to_email); //check if the email address is invalid $secure_check
            if ($secure_check == false)
            {
                echo "Invalid input";

            }
            else
            { //send email
                mail($to_email, $subject, $message, $headers);

            }

            //End Code for Confirmation Email Email
            

            
        }
    }
}

?>
             <!-- END PHP CODE   -->
   

    <!--personal details-->
   
    <div class="container mx-auto">
        
    <form class="needs-validation width mx-auto bg-light shadow p-4" action="" method="POST" novalidate>
        <h5>PERSONAL DETAILS :</h5>
        <div class="form-row d-flex justify-content-between">
          <div class="col-md-4 mb-1 ">
            <label for="validationCustom01">Name :</label>
            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Enter  Name" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          <div class="col-md-4 mb-1">
            <label for="validationCustom02">Address :</label>
            <input type="address" name="address" class="form-control" id="validationCustom02" placeholder="Enter Address" value="" required>
            <div class="valid-feedback">
              This field is required
            </div>
          </div>
          </div>
          <div class="form-row  justify-content-between d-flex">
            <div class="col-md-4  mb-1">
              <label for="validationCustom01">Number :</label>
              <input type="number" name="number" class="form-control" id="validationCustom01" placeholder=" Enter Number" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
            <div class="col-md-4  mb-1">
              <label for="validationCustom02">Email :</label>
              <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Enter Email" value="" required>
              <div class="valid-feedback">
                This field is required
              </div>
            </div>
          </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Password :</label>
                  <input type="password" name="password" class="form-control" id="validationCustom01" placeholder=" Password" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Confirm Password :</label>
                  <input type="password" name="name" class="form-control" id="validationCustom02" placeholder="Confirm passsword" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <h5>EDUCATION / SKILLS :</h5>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">12th Passing year :</label>
                  <select name="passYearInter" class="form-control" id="ddlYears"></select>
                  <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required> -->
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">Graduation Passing year :</label>
                  <select name="passYearGradu" class="form-control" id="ddlYears1"></select>
                  <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required> -->
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <div class="form-row justify-content-between d-flex">
                <div class="col-md-4 mb-1">
                  <label for="validationCustom01">Skills : </label>
                  <input type="text" name="skills" class="form-control" id="validationCustom01" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
                <div class="col-md-4 mb-1">
                  <label for="validationCustom02">College name :</label>
                  <input type="text" name="collegename" class="form-control" id="validationCustom02" placeholder="" value="" required>
                  <div class="valid-feedback">
                    This field is required.
                  </div>
                </div>
            </div>
            <h5>INTERNSHIP DETAILS :</h5>
       
            <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Joining Date :</label>
                <div class="col-sm-10">
                  <input type="datetime-local" name="joiningDate" class="form-control form-control-sm" id="validationCustom02" required>
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Department :</label>
                <div class="col-sm-10">
                <div class="dropdown">
                  <button class="px-2 ml-0 py-1 rounded  dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Department
                  </button>
                  <div name="department" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" value="Web Development" type="button">Web development</button>
                    <button class="dropdown-item" value="Web Designing" type="button">Web designing</button>
                    <button class="dropdown-item" value="App Development" type="button">App development</button>
                    <button class="dropdown-item" value="Data Analysis" type="button">Data analysis</button>
                    <button class="dropdown-item" value="Digital Marketing" type="button">Digital Marketing</button>
                  </div>
                </div>
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Duration :</label>
                <div class="col-sm-10">
                <div class="dropdown">
                  <button class="px-2 ml-0 py-1 rounded  dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Duration
                  </button>
                  <div name="duration" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" value="1 month" type="button">1 months</button>
                    <button class="dropdown-item" value="2 months" type="button">2 months</button>
                    <button class="dropdown-item" value="3 months" type="button">3 months</button>
                    <button class="dropdown-item" value="6 months" type="button">6 months</button>
                    
                  </div>
                </div>
                </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">How you heard about us?</label>
                <div class="col-sm-10">
                <div class="dropdown">
                  <button class="px-2 ml-0 py-1 rounded  dropdown-toggle" type="button" id="dropdownMenu02  "
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Select
                  </button>
                  <div name="source" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" value="HR" type="button">HR</button>
                    <button class="dropdown-item" value="Linkedin" type="button">Linkedin </button>
                  </div>
              </div>
              <div class="mb-1 row">
                <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Hr Reference Number</label>
                <div class="col-sm-10">
                  <input type="text" name="hrIdNumber" class="form-control form-control-sm" id="validationCustom02" required  placeholder="Enter Hr Reference Manager name">
                </div>
              </div>
    
              <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        
      </form>
      
      <script>

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>

<script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
        var ddlYears1 = document.getElementById("ddlYears1");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = currentYear; i >= 1990; i--){
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
        for (var i = currentYear; i <= 2025; i++){
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears1.appendChild(option);
        }
    };
</script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
