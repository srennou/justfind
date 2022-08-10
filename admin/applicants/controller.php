<?php
require_once("../../include/initialize.php");
if (!isset($_SESSION['ADMIN_USERID'])) {
	redirect(web_root . "admin/index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add':
		doInsert();
		break;

	case 'edit':
		doEdit();
		break;

	case 'delete':
		doDelete();
		break;



	case 'addfiles':
		doAddFiles();
		break;

	case 'approve':
		doApproved();
		break;
}

function doInsert()
{
	global $mydb;
	if (isset($_POST['save'])) {


		if (
			$_POST['FNAME'] == "" or $_POST['LNAME'] == ""
			or $_POST['ADDRESS'] == ""
			or $_POST['CELLNO'] == ""
		) {
			$messageStats = false;
			message("All fields are required!", "error");
			redirect('index.php?view=add');
		} else {

			$birthdate =  $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

			$age = date_diff(date_create($birthdate), date_create('today'))->y;

			if ($age < 20) {
				message("Invalid age. 20 years old and above is allowed.", "error");
				redirect("index.php?view=add");
			} else {



				$sql = "SELECT * FROM tblemployees WHERE EMPLOYEEID='" . $_POST['EMPLOYEEID'] . "'";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$maxrow = $mydb->num_rows($cur);



				if ($maxrow > 0) {
					# code... 
					message("Employee ID already in use!", "error");
					redirect("index.php?view=add");
				} else {

					@$datehired = date_format(date_create($_POST['DATEHIRED']), 'Y-m-d');

					$emp = new Employee();
					$emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
					$emp->FNAME				= $_POST['FNAME'];
					$emp->LNAME				= $_POST['LNAME'];
					$emp->ADDRESS			= $_POST['ADDRESS'];
					$emp->BIRTHDATE	 		= $birthdate;
					$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];
					$emp->AGE			    = $age;
					$emp->SEX 				= $_POST['optionsRadios'];
					$emp->CELLNO				= $_POST['CELLNO'];
					$emp->CIVILSTATUS		= $_POST['CIVILSTATUS'];
					$emp->POSITION			= trim($_POST['POSITION']);

					$emp->EMP_EMAILADDRESS	= $_POST['EMP_EMAILADDRESS'];
					$emp->EMPUSERNAME		= $_POST['EMPLOYEEID'];
					$emp->EMPPASSWORD		= sha1($_POST['EMPLOYEEID']);
					$emp->DATEHIRED			=  @$datehired;
					$emp->COMPANYID			= $_POST['COMPANYID'];
					$emp->create();




					$autonum = new Autonumber();
					$autonum->auto_update('employeeid');

					message("New employee created successfully!", "success");
					redirect("index.php");
				}
			}
		}
	}
}

function doEdit()
{
	if (isset($_POST['save'])) {

		if (
			$_POST['FNAME'] == "" or $_POST['LNAME'] == ""
			or $_POST['ADDRESS'] == ""
			or $_POST['CELLNO'] == ""
		) {
			$messageStats = false;
			message("All fields are required!", "error");
			redirect('index.php?view=add');
		} else {

			$birthdate =  $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

			$age = date_diff(date_create($birthdate), date_create('today'))->y;
			if ($age < 20) {
				message("Invalid age. 20 years old and above is allowed.", "error");
				redirect("index.php?view=edit&id=" . $_POST['EMPLOYEEID']);
			} else {

				@$datehired = date_format(date_create($_POST['DATEHIRED']), 'Y-m-d');

				$emp = new Employee();
				$emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
				$emp->FNAME				= $_POST['FNAME'];
				$emp->LNAME				= $_POST['LNAME'];
				$emp->ADDRESS			= $_POST['ADDRESS'];
				$emp->BIRTHDATE	 		= $birthdate;
				$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];
				$emp->AGE			    = $age;
				$emp->SEX 				= $_POST['optionsRadios'];
				$emp->CELLNO				= $_POST['CELLNO'];
				$emp->CIVILSTATUS		= $_POST['CIVILSTATUS'];
				$emp->POSITION			= trim($_POST['POSITION']);

				$emp->EMP_EMAILADDRESS		= $_POST['EMP_EMAILADDRESS'];
				$emp->EMPUSERNAME		= $_POST['EMPLOYEEID'];
				$emp->EMPPASSWORD		= sha1($_POST['EMPLOYEEID']);
				$emp->DATEHIRED			=  @$datehired;
				$emp->COMPANYID			= $_POST['COMPANYID'];

				$emp->update($_POST['EMPLOYEEID']);


				message("Employee has been updated!", "success");
				redirect("index.php?view=edit&id=" . $_POST['EMPLOYEEID']);
			}
		}
	}
}
function doDelete()
{


	$id = 	$_GET['id'];

	$jobreg = new JobRegistration();
	$jobreg->delete($id);


	message("Employee(s) already Deleted!", "success");
	redirect('index.php');
}




function doApproved()
{
	global $mydb;

	if (isset($_POST['submit'])) {

		$id = $_POST['JOBREGID'];
		$applicantid = $_POST['APPLICANTID'];

		$remarks = $_POST['REMARKS'];
		$sql1 = "UPDATE IGNORE `tbljobregistration` SET `REMARKS`='{$remarks}',PENDINGAPPLICATION=0,HVIEW=0,DATETIMEAPPROVED=NOW() WHERE `REGISTRATIONID`='{$id}'";
		$mydb->setQuery($sql1);
		$cur = $mydb->executeQuery();


		$sql2 = "SELECT * FROM `tblfeedback` WHERE `REGISTRATIONID`='{$id}'";
		$mydb->setQuery($sql2);
		$res = $mydb->loadSingleResult();

		if ($res) {

			$sql3 = "UPDATE IGNORE `tblfeedback` SET `FEEDBACK`='{$remarks}' WHERE `REGISTRATIONID`='{$id}'";
			$mydb->setQuery($sql3);
			$curr = $mydb->executeQuery();
		} else {

			$sql4 = "INSERT IGNORE  INTO `tblfeedback` (`APPLICANTID`, `REGISTRATIONID`,`FEEDBACK`) VALUES ('{$applicantid}','{$id}','{$remarks}')";
			$mydb->setQuery($sql4);
			$curs = $mydb->executeQuery();
		}


		message("Applicant is calling for an interview.", "success");
		redirect("index.php?view=view&id=" . $id);
	}
}
