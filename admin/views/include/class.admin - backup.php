<?php
require_once 'dbconfig.php';

class USER {

    private $conn;

    public function __construct() {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql) {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
	
	//function for admin login
	public function login($email, $upass) {
        try {
            $stmt = $this->runQuery("SELECT * FROM admin WHERE email=:email");
            $stmt->execute(array(":email" => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() == 1) {
                if ($userRow['verified_count'] == "Y") {
                    if ($userRow['upass'] == md5($upass)) {
                        //$_SESSION['userSession'] = $userRow['id'];
						$_SESSION['email'] = $userRow['email'];
                        //return true;
						header("Location: admindashboard.php");
                    } else {
                        header("Location: login.php?error");
                        exit;
                    }
                } else {
                    header("Location: login.php?inactive");
                    exit;
                }
            } else {
                header("Location: login.php?error");
                exit;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
	
	
	
	//function for student registration
	public function create($urn, $pass, $email, $type, $fname, $mname, $lname, $joining_date, $class, $admission_no, $section, $admission_year, $admission_term, $phone, $father_name, $father_occupation, $father_phone, $father_address, $mother_name, $mother_occupation, $mother_phone, $mother_address, $student_image, $parent_image, $religion, $gender, $dob, $verify, $status) {
        try {
            
            $stmt = $this->conn->prepare("INSERT INTO account(urn,pass,email,type,fname,mname,lname,joining_date,class,admission_no,section,admission_year,admission_term,phone,father_name,father_occupation,father_phone,father_address,mother_name,mother_occupation,mother_phone,mother_address,student_image,parent_image,religion,gender,dob,verify,status) 
			                                             VALUES(:urn, :pass, :email, :type, :fname, :mname, :lname, :joining_date, :class, :admission_no, :section, :admission_year, :admission_term, :phone, :father_name, :father_occupation, :father_phone, :father_address, :mother_name, :mother_occupation, :mother_phone, :mother_address, :student_image, :parent_image, :religion, :gender, :dob, :verify, :status)");

            $stmt->bindparam(":urn", $urn);
            $stmt->bindparam(":pass", $pass);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":type", $type);
            $stmt->bindparam(":fname", $fname);
            $stmt->bindparam(":mname", $mname);
            $stmt->bindparam(":lname", $lname);
            $stmt->bindparam(":joining_date", $joining_date);
            $stmt->bindparam(":class", $class);
            $stmt->bindparam(":admission_no", $admission_no);
            $stmt->bindparam(":section", $section);
            $stmt->bindparam(":admission_year", $admission_year);
            $stmt->bindparam(":admission_term", $admission_term);
            $stmt->bindparam(":phone", $phone);
            $stmt->bindparam(":father_name", $father_name);
            $stmt->bindparam(":father_occupation", $father_occupation);
            $stmt->bindparam(":father_phone", $father_phone);
            $stmt->bindparam(":father_address", $father_address);
            $stmt->bindparam(":mother_name", $mother_name);
            $stmt->bindparam(":mother_occupation", $mother_occupation);
            $stmt->bindparam(":mother_phone", $mother_phone);
            $stmt->bindparam(":mother_address", $mother_address);
            $stmt->bindparam(":student_image", $student_image);
            $stmt->bindparam(":parent_image", $parent_image);
			$stmt->bindparam(":religion", $religion);
			$stmt->bindparam(":gender", $gender);
			$stmt->bindparam(":dob", $dob);
			$stmt->bindparam(":verify", $verify);
			$stmt->bindparam(":status", $status);
            $stmt->execute();
            return $stmt;
			header("location:momo.php?er=$ex->getMessage()");
        } catch (PDOException $ex) {
			
            echo $ex->getMessage();
        }
    }
}
?>