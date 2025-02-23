<?php
include_once('../model.php');
class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/login':
				if (isset($_REQUEST['login'])) {
					//session_start();
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];

					$data = array("email" => $email, "password" => $password);

					$res = $this->select_where('admin', $data);

					$chk = $res->num_rows;

					if ($chk === 1) {
						$fetch = $res->fetch_object();


						$_SESSION['email'] = $email;

						echo "<script>
							alert('Login successful !');
							window.location='index'
						</script>";

					} else {
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
						</script>";
					}
				}
				include_once('login.php');
				break;

			case '/index':
				include_once('index.php');
				$res = $this->select('customers');
				$count = count($res);

				break;

			case '/Add Guard':
				if (isset($_REQUEST['submit'])) {
					$full_name = $_REQUEST['full_name'];
					$email = $_REQUEST['g_email'];
					$mobile_no = $_REQUEST['mobile_no'];
					$gender = $_REQUEST['gender'];
					$address = $_REQUEST['address'];
					$image = $_FILES['profile']['name'];
					$pdf = $_FILES['id_proof']['name'];

					$disability = $_REQUEST['disability'];

					//folder path for storing image
					$folderPath = "../guards/" . $email;
					if (!is_dir($folderPath)) {
						mkdir($folderPath, 0777, true); // Create folder with necessary permissions

					}

					if ($_FILES['id_proof']['size'] > 0) {
						$temp_name1 = $_FILES['id_proof']['tmp_name'];
						$pdfPath = $folderPath . '/' . $pdf;
						if (move_uploaded_file($temp_name1, $pdfPath)) {
							echo "PDF uploaded successfully!<br>";
						} else {
							echo "Failed to upload PDF.<br>";
						}
					}


					$temp_name2 = $_FILES['profile']['tmp_name'];
					$imagePath = $folderPath . '/' . $image;
					if (move_uploaded_file($temp_name2, $imagePath)) {
						echo "Image uploaded successfully!<br>";
					} else {
						echo "Failed to upload image.<br>";
					}

					$data = array("full_name" => $full_name, "g_email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address, "id_proof" => $pdf, "disability" => $disability, "profile_image" => $image);

					$res = $this->insert('guards', $data);

					if ($res) {
						echo "<script>
							alert('Add successful !');
							window.location='Add Guard';
						</script>";
					}
				}
				include_once('add_guard.php');
				break;

			case '/Manage Guard':
				$manage_guard = $this->select('guards');
				include_once('manage_guard.php');
				break;



			case '/Guard Posting':
				//$posting = $this->simple_joins('posting', 'guards', 'posting.gu_id=guards.gu_id', 'customers', 'posting.cust_id=customers.cust_id');
				$where = array("status" => "available");

				$res1 = $this->select_where('guards', $where);
				$fetch1 = [];
				if ($res1->num_rows > 0) {
					while ($row = $res1->fetch_object()) {
						$fetch1[] = $row;
					}

				}
				//Fetch Request Data
				$cust_id = '';
				$request_status = '';
				$request_where = '';
				if (isset($_REQUEST['request_id'])) {
					$id = $_REQUEST['request_id'];
					$request_where = array("req_id" => $id);
					$data = $this->select_where('request', $request_where);
					$fetch = $data->fetch_object();
					$request_status = $fetch->request_status;
					$cust_id = $fetch->cust_id;

				}
				$status_where = array("request_status" => "approve");
				//Insert Data in posting table and update status
				$update = array("status" => "posted");
				if (isset($_REQUEST['submit'])) {
					$posting_date = $_REQUEST['posting_date'];
					$selectlist = $_REQUEST['selectedList'];
					$address = $_REQUEST['address'];
					$selectlist;
					$arr = explode(',', $selectlist);
					//print_r($arr);
					foreach ($arr as $ar) {
						$guard_id = array("gu_id" => $ar);
						$check_where = array("cust_id" => $cust_id, "gu_id" => $ar);
						$check_posted = $this->select_where('posting', $check_where);
						$chk = $check_posted->num_rows;

						$data = array("posting_date" => $posting_date, "gu_id" => $ar, "address" => $address, "cust_id" => $cust_id);
						$res = $this->insert('posting', $data);
						if ($res) {
							$check = $this->update('guards', $update, $guard_id);
							if ($check) {
								$request_update = $this->update('request', $status_where, $request_where);

							}
						}
					}
				}

				include_once('guard_posting.php');
				break;
			case '/Posting':
				$posting_detail = $this->simple_joins('posting', 'guards', 'posting.gu_id=guards.gu_id', 'customers', 'posting.cust_id=customers.cust_id');
				include_once('posting.php');
				break;

			case '/Manage Customer':
				$manage_customer = $this->select('customers');
				include_once('manage_customer.php');
				break;
			case '/edit_profile':
				if (isset($_REQUEST['update'])) {
					$update = $_REQUEST['update'];
					$where = array("cust_id" => $update);
					$res = $this->select_where('customers', $where);
					$fetch = $res->fetch_object();
					$old_image = $fetch->image;

					if (isset($_REQUEST['submit'])) {
						$username = $_REQUEST['username'];
						$firstname = $_REQUEST['firstname'];
						$lastname = $_REQUEST['lastname'];
						$email = $_REQUEST['email'];
						$mobile_no = $_REQUEST['mobile_no'];

						$gender = $_REQUEST['gender'];
						$address = $_REQUEST['address'];
						if ($_FILES['image']['size'] > 0) {
							$image = $_FILES['image']['name'];
							$path = "../images/Customer/" . $image;
							$tmp_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_img, $path);

							$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address, "image" => $image);

							$res = $this->update('customers', $data, $where);

							if ($res) {
								$_SESSION['username'] = $username;
								unlink("../images/Customer/" . $old_image);
								echo "<script>
								alert('Upadte successful !');
								window.location='Manage Customer';
							</script>";
							}
						} else {
							$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address);

							$res = $this->update('customers', $data, $where);

							if ($res) {
								$_SESSION['username'] = $username;
								echo "<script>
								alert('Upadte successful !');
								window.location='Manage Customer';
								</script>";
							}
						}

					}
				}
				include_once('edit_profile.php');
				break;

			case '/Add Employee':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$re_password = md5($_REQUEST['re_password']);

					if ($password == $re_password) {
						$data = array("name" => $name, "email" => $email, "password" => $password);
						$res = $this->insert('employee', $data);
						if ($res) {
							echo "<script>
							alert('Signin successful !');
						</script>";

						}

					}
				}
				include_once('add_employee.php');
				break;

			case '/Manage Employee':
				$manage_employee = $this->select("employee");
				include_once('manage_employee.php');
				break;

			case '/Manage Contact us':
				$manage_contact = $this->select('contact');
				include_once('manage_contact.php');
				break;

			case '/Hiring Request':
				$hiring = $this->select('request');
				include_once('hiring_request.php');
				break;

			case '/Manage Complain':
				//$manage_complain = $this->select('complain');
				$manage_complain = $this->simple_joins('complain', 'guards', 'complain.gu_id=guards.gu_id', 'customers', 'complain.cust_id=customers.cust_id');
				include_once('manage_complain.php');

				break;

			case '/Manage Feedback':
				$manage_feedback = $this->join('feedback', 'customers', 'feedback.cust_id=customers.cust_id');
				include_once('manage_feedback.php');
				break;

			case '/delete':
				if (isset($_REQUEST['del_contacts'])) {
					$id = $_REQUEST['del_contacts'];
					$where = array("con_id" => $id);
					$res = $this->delete_where('contact', $where);
					if ($res) {
						echo "<script>
							alert('Contact Deleted successful !');
							window.location='Manage Contact Us';
						</script>";
					}
				}
				if (isset($_REQUEST['del_customer'])) {
					$id = $_REQUEST['del_customer'];
					$where = array("cust_id" => $id);
					$select = $this->select_where('customers', $where);
					$fetch = $select->fetch_object();

					if ($fetch->status == 'block') {
						$res = $this->delete_where('customers', $where);
						if ($res) {
							echo "<script>
							alert('Customer Deleted successful !');
							window.location='Manage Customer';
						</script>";
						} else {
							echo "<script>
							alert('Customer Not Deleted successful,Check Status !');
							window.location='Manage Customer';
						</script>";
						}
					} else {
						echo "<script>
							alert('Edit Status !');
							window.location='Manage Customer';
						</script>";

					}
				}
				//Delete Guards
				if (isset($_REQUEST['del_guard'])) {
					$id = $_REQUEST['del_guard'];
					$where = array("gu_id" => $id);
					$select = $this->select_where('guards', $where);
					$fetch = $select->fetch_object();
					$email = $fetch->g_email;
					$folder = "../guards";
					$folderToDelete = $folder . '/' . $email;
					$old_image = $fetch->profile_image;
					$id_proof = $fetch->id_proof;

					$res = $this->delete_where('guards', $where);
					if ($res) {
						unlink($folderToDelete . '/' . $old_image);
						unlink($folderToDelete . '/' . $id_proof);
						rmdir($folderToDelete);
						echo "<script>
							alert('Guard Deleted successful !');
							window.location='Manage Guard';
						</script>";
					}

				}
				if (isset($_REQUEST['del_employee'])) {
					$id = $_REQUEST['del_employee'];
					$where = array("em_id" => $id);
					$res = $this->delete_where('employee', $where);
					if ($res) {
						echo "<script>
							alert('Employeed Deleted successful !');
							window.location='Manage Employee';
						</script>";
					}

				}
				if (isset($_REQUEST['posting_delete'])) {
					$id = $_REQUEST['posting_delete'];
					$where = array("post_id" => $id);
					$res = $this->delete_where('posting', $where);
					if ($res) {
						echo "<script>
							alert('Posting Revoked successful !');
							window.location='Posting';
						</script>";
					}
				}

				//Request Delete 

				if (isset($_REQUEST['request'])) {
					$id = $_REQUEST['request'];
					$where = array("req_id", $id);
					$res = $this->delete_where('request', $where);
					if ($res) {
						echo "<script>
							alert('Request Deleted successful !');
							window.location='Hiring Request';
						</script>";
					}
				}

				//Complain Delete

				if (isset($_REQUEST['complain'])) {
					$id = $_REQUEST['complain'];
					$where = array('c_id'->$id);
					$res = $this->delete_where('complain', $where);
					if ($res) {
						echo "<script>
							alert('Complain Deleted successful !');
							window.location='Manage Complain';
						</script>";
					}
				}

				//Feedback Delete

				if (isset($_REQUEST['feedback'])) {
					$id = $_REQUEST['feedback'];
					$where = array('feed_id'->$id);
					$res = $this->delete_where('feedback', $where);
					if ($res) {
						echo "<script>
							alert('Feedback Deleted successful !');
							window.location='Manage Complain';
						</script>";
					}
				}
				break;
			case '/edit':
				if (isset($_REQUEST['edit_guard'])) {
					$update = $_REQUEST['edit_guard'];
					$where = array("gu_id" => $update);
					$res = $this->select_where('guards', $where);
					$fetch = $res->fetch_object();
					$old_image = $fetch->profile_image;

					if (isset($_REQUEST['submit'])) {

						$full_name = $_REQUEST['full_name'];
						$email = $_REQUEST['email'];
						$mobile_no = $_REQUEST['mobile_no'];
						$gender = $_REQUEST['gender'];
						$address = $_REQUEST['address'];
						if ($_FILES['profile_image']['size'] > 0) {
							$image = $_FILES['image']['name'];
							$path = "../guards/" . $image;
							$tmp_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_img, $path);

							$data = array("full_name" => $full_name, "g_email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address, "profile_image" => $image);

							$res = $this->update('guards', $data, $where);

							if ($res) {

								unlink("../guards/" . $old_image);
								echo "<script>
							alert('Upadte successful !');
							window.location='Manage Guard';
						</script>";
							}
						} else {
							$data = array("full_name" => $full_name, "g_email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address);
							$res = $this->update('guards', $data, $where);

							if ($res) {
								
								echo "<script>
							alert('Upadte successful !');
							window.location='Manage Guard';
							</script>";
							}
						}

					}
				}
				include_once('edit_guard.php');
				break;

			case '/status':
				if (isset($_REQUEST['complain_status'])) {
					$id = $_REQUEST['complain_status'];
					$arr1 = array('c_id' => $id);
					$manage_complain = $this->select_where('complain', $arr1);
					$res = $manage_complain->fetch_object();
					if ($res->complain_status == "pending") {
						$data = array('complain_status' => 'solved');
						$update = $this->update('complain', $data, $arr1);
						if ($update) {
							echo "<script>
								alert('Upadte successful !');
								window.location='Manage Complain';
							</script>";
						}
					}

				}
				//Block Customer

				if (isset($_REQUEST['block'])) {
					$cust_id = $_REQUEST['block'];
					// $cust_id;
					$data = array("cust_id" => $cust_id);

					$status = 'block';
					$where1 = array("status" => $status);
					$block = $this->update('customers', $where1, $data);

					if ($block) {
						echo "<script>window.location='Manage Customer';</script>";
					} else {
						echo "<script>
							alert('Customer Not Blocked ');
							window.location='edit_profile';
						<script>";
					}

				}
				if (isset($_REQUEST['unblock'])) {
					$cust_id = $_REQUEST['unblock'];
					// $cust_id;
					$data = array("cust_id" => $cust_id);

					$status = 'unblock';
					$where1 = array("status" => $status);
					$unblock = $this->update('customers', $where1, $data);

					if ($unblock) {
						echo "<script>window.location='Manage Customer';</script>";
					} else {
						echo "<script>
							alert('Customer Not Blocked ');
							window.location='edit_profile';
						<script>";
					}

				}

				break;


			case '/logout':
				if (isset($_SESSION['email'])) {
					unset($_SESSION['email']);

					echo "<script>alert('Logout Success');
						window.location='index';</script>";
				}
				break;
			default:
				include_once('error.php');
				break;
		}
	}

}

$obj = new control;
?>