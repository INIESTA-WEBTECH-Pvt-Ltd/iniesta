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
// echo var_dump($_POST);
// echo "1 $name 
//       2 $number 
//       3 $email 
//       4 $password 
//       5 $address 
//       6 $passYearInter 
//       7 $passYearGradu 
//       8 $skills 
//       9 $collegename 
//       10 $joiningDate 
//       11 $department 
//       12 $duration 
//       13 $source 
//       14 $hrIdNumber 
//       15 $status";
?>
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
            ?>

  <?php          
           ?> <script>swal("Sorry!", "Sorry Account already exists with this email!", "error");
           setTimeout(function(){
            window.location.href = 'login.php';
         }, 4000);</script> 
         
           <?php
        }
        else
        {
            $reg_query = "INSERT INTO `newuser` (`id`,`name`, `number`, `email`, `password`, `address`, `passyearInter`, `passyearGradu`,
                    `skills`, `collegename`, `joiningDate`, `department`, `duration`, `source`, `hrIdNumber`, `status`) 
                            VALUES('','$name','$number','$email','$password','$address','$passYearInter','$passYearGradu',
                            '$skills','$collegename','$joiningDate','$department', '$duration', '$source', '$hrIdNumber','$status')";
            $result = mysqli_query($db, $reg_query);
            //echo mysqli_error($db);
            $done = 2;
            
            
       ?>     
            <script>swal("Application Submitted Successfully!", "Thaks your Application is submitted! . We will send you mail for Confirmation within 10 minutes.", "success");
           setTimeout(function(){
            window.location.href = 'index.php';
         }, 4000);</script> 
            </script> 
<?php
           
        
			
		   $to = $email;                     	//  $toadmin = 'admin';
           $toadmin = 'hr@iniestawebtech.com';
          // $cc = 'abc@gmail.com';
         $subject = " Recruitment Update for application at Iniesta WebTech";

$htmlContent = '
    <html>
    <head>
        <title>Recruitment Update</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
    <h3>Dear '.$name.'</h3>

   
   <p>Thank you for applying and congratulations on being shortlisted at <strong> Iniesta 
webtech solution private limited. </strong> <br>

Based on your profile, we would like to shortlist you for a 
Interview Call with us after a brief interaction over call. </p>
    <div>
    <table>
    <tr><td><h4 style="color:black;padding:4px;margin: 0px;">Name</td><td><span style="color:blue;display: block;">'.$name.'</span></td> </h4></tr>
    <tr><td> <h4 style="color:black;padding:4px;margin: 0px;">Email </td><td><span style="color:blue;display: block;">'.$email.'</span></td> </h4> </tr>
    <tr><td> <h4 style="color:black;padding:4px;margin: 0px;">Contact No.</td><td><span style="color:blue;display: block;"> '.$number.'</span></td> </h4></tr> 
                
   </table>
</div>

 <h3>Thanks and Regards,<br></h3>
     <img src="http://www.iniestawebtech.com/assets/img/logo.png" width="100" height="100">
<p>www.iniestawebtech.com</p>
<h4>Team Iniesta webtech</h4><br><br>
 <p>If any query you can email us on Support@iniestawebtech.com</p>
    </body>
    </html>';


// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:INIESTA WEBTECH <hr@iniestawebtech.com>' . "\r\n";
// Send email
mail($toadmin,$subject,$htmlContenta,$headers);

        if(mail($to,$subject,$htmlContent,$headers))
        {
		 $query = "insert into registration(name,email,mobile,companyName, designation) 
			values('$name','$email','$mobile','$address','$companyName','$designation')";
        }	
		else{
			    echo "error is there".mysqli_error($con);
			}
			







        }
    }
}   
	?>

	    
	    
	    
		<!--personal details-->
		<div class="container mx-auto">
			<form class="needs-validation width mx-auto bg-light shadow p-4" action="" method="POST" novalidate>
				<h5>PERSONAL DETAILS :</h5>
				<div class="form-row d-flex justify-content-between">
					<div class="col-md-4 mb-1 ">
						<label for="validationCustom01">Name :</label>
						<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Enter Name" value="" required>
						<div class="valid-feedback"> This field is required </div>
					</div>
					<div class="col-md-4 mb-1">
						<label for="validationCustom02">Address :</label>
						<input type="address" name="address" class="form-control" id="validationCustom02" placeholder="Enter Address" value="" required>
						<div class="valid-feedback"> This field is required </div>
					</div>
				</div>
				<div class="form-row  justify-content-between d-flex">
					<div class="col-md-4  mb-1">
						<label for="validationCustom01">Number :</label>
						<input type="number" name="number" class="form-control" id="validationCustom01" placeholder=" Enter Number" value="" required>
						<div class="valid-feedback"> This field is required </div>
					</div>
					<div class="col-md-4  mb-1">
						<label for="validationCustom02">Email :</label>
						<input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Enter Email" value="" required>
						<div class="valid-feedback"> This field is required </div>
					</div>
				</div>
				<div class="form-row justify-content-between d-flex">
					<div class="col-md-4 mb-1">
						<label for="validationCustom01">Password :</label>
						<input type="password" name="password" class="form-control" id="validationCustom01" placeholder=" Password" value="" required>
						<div class="valid-feedback"> This field is required. </div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">Confirm Password :</label>
						<input type="password" class="form-control" id="validationCustom02" placeholder="Confirm passsword" value="" required>
						<div class="valid-feedback"> This field is required. </div>
					</div>
				</div>
				<h5>EDUCATION / SKILLS :</h5>
				<div class="form-row justify-content-between d-flex">
					<div class="col-md-4 mb-1">
						<label for="validationCustom01">12th Passing year :</label>
						 <input type="date" name="passYearInter" class="form-control" id="validationCustom01" placeholder="" value="" required> 
						<div class="valid-feedback"> This field is required. </div>
					</div>
					<div class="col-md-4 mb-1">
						<label for="validationCustom02">Graduation Passing year :</label>
						 <input type="date" name="passYearGradu"class="form-control" id="validationCustom02" placeholder="" value="" required> 
						<div class="valid-feedback"> This field is required. </div>
					</div>
				</div>
				<div class="form-row justify-content-between d-flex">
					<div class="col-md-4 mb-1">
						<label for="validationCustom01">Skills : </label>
						<input type="text" name="skills" class="form-control" id="validationCustom01" placeholder="" value="" required>
						<div class="valid-feedback"> This field is required. </div>
					</div>
					<div class="col-md-4 mb-1">
						<label for="validationCustom02">College name :</label>
						<input type="text" name="collegename" class="form-control" id="validationCustom02" placeholder="" value="" required>
						<div class="valid-feedback"> This field is required. </div>
					</div>
				</div>
				<h5>INTERNSHIP DETAILS :</h5>
				<div class="mb-1 row">
					<label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Joining Date :</label>
					<div class="col-sm-10">
						<input type="date" name="joiningDate" class="form-control form-control-sm" id="validationCustom02" required> </div>
				</div>
				<div class="mb-1 row">
					<label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Department :</label>
					<div class="col-sm-9 col-md-8">
						<select name="department" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
							<option selected value="0">Choose...</option>
							<option value="Web Development">Web Development</option>
							<option value="Graphic Designer">Graphic Designer</option>
							<option value="Digital Marketing">Digital Marketing</option>
							<option value="Data Analysis">Data Analysis</option>
							<option value="App Development">App Development</option>
						</select>
					</div>
				</div>
				<div class="mb-1 row">
					<label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">Duration :</label>
					<div class="col-sm-9 col-md-8">
						<select name="duration" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
							<option selected value="0">Choose...</option>
							<option value="1 month">1 months</option>
							<option value="2 months">2 months</option>
							<option value="3 months">3 months</option>
							<option value="4 months">6 months</option>
						</select>
					</div>
				</div>
				<div class="mb-1 row">
					<label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">How did you hear about us?</label>
					<div class="col-sm-9 col-md-8">
						<select name="source" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
							<option selected value="0">Choose...</option>
							<option value="HR">HR</option>
							<option value="Linkedin">Linkedin</option>
							<option value="Linkedin">Other</option>
						</select>
					</div>
				</div>
		
		
		<div class="mb-1 row">
			<label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">HR Reference Number</label>
			<div class="col-sm-10">
				<input type="text" name="hrIdNumber" class="form-control form-control-sm" id="validationCustom02" required placeholder="Enter HR Reference Manager name"> </div>
		</div>
		<button name="signup" class="btn btn-primary" type="submit">Submit form</button>
		
		</form>
		</div>
	
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
					if(form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();

	
	</script>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>