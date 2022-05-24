<?php
if (isset($_POST['s_register'])) {
	
	$fname = trim($_POST['fname']);
    $fname = strip_tags($fname);
    $fname = htmlspecialchars($fname);
	
    $mname = trim($_POST['mname']);
    $mname = strip_tags($mname);
    $mname = htmlspecialchars($mname);

    $lname = trim($_POST['lname']);
    $lname = strip_tags($lname);
    $lname = htmlspecialchars($lname);
	
	$email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
	
	//fixed values for the meantime
	$urn=$email;
	$type="student";
	$status=1;
	$verify=1;
	
	$pass = $_POST['pass'];
	$gender = trim($_POST['gender']);
	$dob = trim($_POST['dob']);
	$class = trim($_POST['class']);
	$religion = trim($_POST['religion']);
	$joining_date = trim($_POST['joining_date']);
	$phone = trim($_POST['phone']);
	$admission_no = trim($_POST['admission_no']);
	$section = trim($_POST['section']);
	$admission_year = trim($_POST['admission_year']);
	$admission_term = trim($_POST['admission_term']);
	$father_name = trim($_POST['father_name']);
	$father_occupation = trim($_POST['father_occupation']);
	$father_phone = trim($_POST['father_phone']);
	$father_address = trim($_POST['father_address']);
	$mother_name = trim($_POST['mother_name']);
	$mother_occupation = trim($_POST['mother_occupation']);
	$mother_phone = trim($_POST['mother_phone']);
	$mother_address = trim($_POST['mother_address']);
	$student_image = trim($_POST['student_image']);
	$parent_image = trim($_POST['parent_image']);
	
	//header("location:farmer.php?mn=$admission_term");
	
	//check for duplicate
	$stmt = $reg_user->runQuery("SELECT * FROM account WHERE email=:email");
    $stmt1 = $reg_user->runQuery("SELECT * FROM account WHERE urn=:urn");
    $stmt2 = $reg_user->runQuery("SELECT * FROM account WHERE admission_no=:admission_no");
    $stmt->execute(array(":email" => $email));
    $stmt1->execute(array(":urn" => $urn));
     $stmt2->execute(array(":admission_no" => $admission_no));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
     $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
	 
	 if ($stmt->rowCount() > 0 || $stmt1->rowCount() > 0 || $stmt2->rowCount() > 0) {
        $msg = "
		      <div class='alert alert-danger'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  URN, Email or Admission Number Already Exists! Please, try another one!
			  </div>
			  ";
    }
	
	else{
		
		//actual action 
		if ($reg_user->create($urn, $pass, $email, $type, $fname, $mname, $lname, $joining_date, $class, $admission_no, $section, $admission_year, $admission_term, $phone, $father_name, $father_occupation, $father_phone, $father_address, $mother_name, $mother_occupation, $mother_phone, $mother_address, $student_image, $parent_image, $religion, $gender, $dob, $verify, $status)) {
		$msg = "
		      <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Success:</strong>  Registration Success...
			  </div>
			  ";	
		}
		//actual action ends
	}
}
?>