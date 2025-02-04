<?php 
	
	include 'include/header.php';
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		
	
	$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";

		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$name=$row['name'];
				$blood_group=$row['blood_group'];
				$email=$row['email'];
				$contact_no=$row['contact_no'];
				$gender=$row['gender'];
				$city=$row['city'];
				$dob=$row['dob'];
				$date=explode("-",$dob);//ye string dob ko seperate kr deta with hash
				$password=$row['password'];
			}
		}
		if(isset($_POST['submit'])){
			if(isset($_POST['name']) && !empty($_POST['name'])){
					if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
							$name=$_POST['name'];
					}else{
						$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Only upper and lower case letters and space is allowed in the Name section</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>';
					}
				}else{
					$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Kindly enter valid name to proceed to proceed</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>';
				}
				if(isset($name)){
					$blood_group=$_POST['blood_group'];
					$gender=$_POST['gender'];
					$city=$_POST['city'];
					
					$email=$_POST['email'];
					$contact_no=$_POST['contact_no'];
					$day=$_POST['day'];
					$month=$_POST['month'];
					$year=$_POST['year'];
					$dob= $year."-".$month."-".$day;
	
					$sql= "update donor set name='$name',blood_group='$blood_group',gender='$gender',email='$email',city='$city',dob='$dob',contact_no='$contact_no' where id='$_SESSION[user_id]'";
					if(mysqli_query($conn,$sql)){
						$datasuccess= '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data updated.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
						?>
						<script>
							function myFunction(){
								location.reload();
							}
							</script>
						<?php
					}
					else{
						$updateError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Data not updated.Please try again</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					}
				}
			}
		}
		if(isset($_POST['update_pass'])){
        if($_POST['old_password']== $password){
            if($_POST['new_password']==$_POST['c_password']){
							$new_password=$_POST['new_password'];
             $sql="Update donor set password='$new_password' where id='$_SESSION[user_id]'";
						 if(mysqli_query($conn,$sql)){
							$newpasswordsuccess= '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Password updated.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
							?>
						<script>
							function myFunction(){
								location.reload();
							}
							</script>
						<?php
						 }
						}else{
              $newpasswordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Kindly ensure that both of the password entered are same</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
						}
				}else{
					$oldpasswordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Kindly enter the correct old password</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				}
		}
		if(isset($_POST['delete_account'])){
			
			if(isset($_POST['account_password']) && !empty($_POST['account_password'])){
				$account_password=$_POST['account_password'];
				if($account_password==$password){
					$showForm=' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Are you sure to delete your account?</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					</button>
					<form target="" method="post">
					<br>
					<input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
					<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>
	
					<button type="button" class="btn btn-info" data-dismiss="alert">
					<span aria-hidden="true">Oops! No </span>
					</button>      
			</form>
	</div>';
				}else{
					$passwordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Entered Password is not same.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
				}
				
			}else{
				$deleteaccountError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Account not deleted.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			}
		}
		if(isset($_POST['userID'])){
			$userID=$_POST['userID'];
			$sql="Delete from donor where id='$userID'";
			 if(mysqli_query($conn,$sql)){
        header("Location:logout.php");
			}
			else{
				$deletesubmitfailure='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Account not deleted.Please try again</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
			}
			 }
		 
		include 'include/sidebar.php';
?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
    <?php if(isset($updateError)) echo $updateError;
		if(isset($showForm)) echo $showForm;
		if(isset($deletesubmitfailure)) echo $deletesubmitfailure;
		if(isset($passwordError)) echo $passwordError;

		?>

					<form class="form-group" action="" method="post" >
					<?php if(isset($datasuccess)) echo $datasuccess;?>
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name;?>">
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" >
                <option value="">---Select Your Blood Group---</option>
								<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>';?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="<?php if(isset($gender)) echo $gender;?>" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="<?php if(isset($gender)) echo $gender;?>"style="margin-left:10px;">
													Third<input type="radio" name="gender" id="gender" value="<?php if(isset($gender)) echo $gender;?>"style="margin-left:10px;">
				    </div><!--gender-->
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="day" name="day" style="margin-bottom:10px;" required>
                <option value="">---Day---</option>
								<?php if(isset($date['2'])) echo '<option selected="" value="'.$date['2'].'">'.$date['2'].'</option>';?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
								<?php if(isset($date['1'])) echo '<option selected="" value="'.$date['1'].'">'.$date['1'].'</option>';?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
								<?php if(isset($date['0'])) echo '<option selected="" value="'.$date['0'].'">'.$date['0'].'</option>';?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</
								option>
								<option value="2000" >2000</
								option>
								<option value="2001" >2001</
								option>
								<option value="2002" >2002</
								option>
								<option value="2003" >2003</
								option>
								<option value="2004" >2004</
								option>
								<option value="2005" >2005</
								option>
								<option value="2006" >2006</
								option>
								<option value="2007" >2007</
								option>
              </select>
            </div><!--End form-group-->
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email;?>">
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="<?php if(isset($contact_no)) echo $contact_no; ?>" placeholder="03********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
            </div><!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
							<option value="">-- Select --</option>
							<?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>';?>
<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh">
<option value="Amaravati">Amaravati</option>
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Vijayawada">Vijayawada</option>
<option value="Tirupati">Tirupati</option>
<option value="Guntur">Guntur</option>
<option value="Nellore">Nellore</option>
<option value="Kurnool">Kurnool</option>
<option value="Rajahmundry">Rajahmundry</option>
<option value="Kadapa">Kadapa</option>
</optgroup>
<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh">
<option value="Itanagar">Itanagar</option>
<option value="Naharlagun">Naharlagun</option>
<option value="Pasighat">Pasighat</option>
<option value="Tawang">Tawang</option>
</optgroup>
<optgroup title="Assam" label="&raquo; Assam">
<option value="Dispur">Dispur</option>
<option value="Guwahati">Guwahati</option>
<option value="Dibrugarh">Dibrugarh</option>
<option value="Silchar">Silchar</option>
<option value="Jorhat">Jorhat</option>
<option value="Nagaon">Nagaon</option>
<option value="Tinsukia">Tinsukia</option>
</optgroup>
<optgroup title="Bihar" label="&raquo; Bihar">
<option value="Patna">Patna</option>
<option value="Gaya">Gaya</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Darbhanga">Darbhanga</option>
<option value="Purnia">Purnia</option>
</optgroup>
<optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh">
<option value="Raipur">Raipur</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Durg">Durg</option>
<option value="Korba">Korba</option>
<option value="Rajnandgaon">Rajnandgaon</option>
</optgroup>
<optgroup title="Goa" label="&raquo; Goa">
<option value="Panaji">Panaji</option>
<option value="Margao">Margao</option>
<option value="Vasco da Gama">Vasco da Gama</option>
<option value="Mapusa">Mapusa</option>
<option value="Ponda">Ponda</option>
</optgroup>
<optgroup title="Gujarat" label="&raquo; Gujarat">
<option value="Gandhinagar">Gandhinagar</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Surat">Surat</option>
<option value="Vadodara">Vadodara</option>
<option value="Rajkot">Rajkot</option>
<option value="Bhavnagar">Bhavnagar</option>
<option value="Jamnagar">Jamnagar</option>
<option value="Junagadh">Junagadh</option>
</optgroup>
<optgroup title="Haryana" label="&raquo; Haryana">
<option value="Chandigarh">Chandigarh</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Faridabad">Faridabad</option>
<option value="Panipat">Panipat</option>
<option value="Ambala">Ambala</option>
<option value="Hisar">Hisar</option>
<option value="Karnal">Karnal</option>
</optgroup>
<optgroup title="Himachal Pradesh" label="&raquo; Himachal Pradesh">
<option value="Shimla">Shimla</option>
<option value="Dharamshala">Dharamshala</option>
<option value="Solan">Solan</option>
<option value="Mandi">Mandi</option>
<option value="Kullu">Kullu</option>
</optgroup>
<optgroup title="Jharkhand" label="&raquo; Jharkhand">
<option value="Ranchi">Ranchi</option>
<option value="Jamshedpur">Jamshedpur</option>
<option value="Dhanbad">Dhanbad</option>
<option value="Bokaro">Bokaro</option>
<option value="Deoghar">Deoghar</option>
</optgroup>
<optgroup title="Karnataka" label="&raquo; Karnataka">
<option value="Bengaluru">Bengaluru</option>
<option value="Mysore">Mysore</option>
<option value="Mangalore">Mangalore</option>
<option value="Hubli">Hubli</option>
<option value="Belgaum">Belgaum</option>
<option value="Gulbarga">Gulbarga</option>
</optgroup>
<optgroup title="Kerala" label="&raquo; Kerala">
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
<option value="Kochi">Kochi</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Thrissur">Thrissur</option>
<option value="Alappuzha">Alappuzha</option>
</optgroup>
<optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh">
<option value="Bhopal">Bhopal</option>
<option value="Indore">Indore</option>
<option value="Gwalior">Gwalior</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Ujjain">Ujjain</option>
</optgroup>
<optgroup title="Maharashtra" label="&raquo; Maharashtra">
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="Nagpur">Nagpur</option>
<option value="Nashik">Nashik</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Solapur">Solapur</option>
<option value="Amravati">Amravati</option>
</optgroup>
<optgroup title="Manipur" label="&raquo; Manipur">
<option value="Imphal">Imphal</option>
<option value="Churachandpur">Churachandpur</option>
<option value="Thoubal">Thoubal</option>
</optgroup>
<optgroup title="Meghalaya" label="&raquo; Meghalaya">
<option value="Shillong">Shillong</option>
<option value="Tura">Tura</option>
</optgroup>
<optgroup title="Mizoram" label="&raquo; Mizoram">
<option value="Aizawl">Aizawl</option>
<option value="Lunglei">Lunglei</option>
</optgroup>
<optgroup title="Nagaland" label="&raquo; Nagaland">
<option value="Kohima">Kohima</option>
<option value="Dimapur">Dimapur</option>
</optgroup>
<optgroup title="Odisha" label="&raquo; Odisha">
<option value="Bhubaneswar">Bhubaneswar</option>
<option value="Cuttack">Cuttack</option>
<option value="Rourkela">Rourkela</option>
<option value="Berhampur">Berhampur</option>
<option value="Sambalpur">Sambalpur</option>
</optgroup>
<optgroup title="Punjab" label="&raquo; Punjab">
<option value="Chandigarh">Chandigarh</option>
<option value="Ludhiana">Ludhiana</option>
<option value="Amritsar">Amritsar</option>
<option value="Jalandhar">Jalandhar</option>
<option value="Patiala">Patiala</option>
<option value="Bathinda">Bathinda</option>
</optgroup>
<optgroup title="Rajasthan" label="&raquo; Rajasthan">
<option value="Jaipur">Jaipur</option>
<option value="Jodhpur">Jodhpur</option>
<option value="Udaipur">Udaipur</option>
<option value="Kota">Kota</option>
<option value="Ajmer">Ajmer</option>
</optgroup>
<optgroup title="Sikkim" label="&raquo; Sikkim">
<option value="Gangtok">Gangtok</option>
</optgroup>
<optgroup title="Tamil Nadu" label="&raquo; Tamil Nadu">
<option value="Chennai">Chennai</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Madurai">Madurai</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Salem">Salem</option>
</optgroup>
<optgroup title="Telangana" label="&raquo; Telangana">
<option value="Hyderabad">Hyderabad</option>
<option value="Warangal">Warangal</option>
<option value="Nizamabad">Nizamabad</option>
<option value="Karimnagar">Karimnagar</option>
<option value="Khammam">Khammam</option>
</optgroup>
<optgroup title="Tripura" label="&raquo; Tripura">
<option value="Agartala">Agartala</option>
</optgroup>
<optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh">
<option value="Lucknow">Lucknow</option>
<option value="Kanpur">Kanpur</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Agra">Agra</option>
<option value="Meerut">Meerut</option>
<option value="Varanasi">Varanasi</option>
<option value="Allahabad">Allahabad</option>
</optgroup>
<optgroup title="Uttarakhand" label="&raquo; Uttarakhand">
<option value="Dehradun">Dehradun</option>
<option value="Haridwar">Haridwar</option>
<option value="Rishikesh">Rishikesh</option>
</optgroup>
<optgroup title="West Bengal" label="&raquo; West Bengal">
<option value="Kolkata">Kolkata</option>
<option value="Asansol">Asansol</option>
<option value="Siliguri">Siliguri</option>
<option value="Durgapur">Durgapur</option>
<option value="Howrah">Howrah</option>
<option value="Haldia">Haldia</option>
</optgroup>
	</select>
            </div><!--city end-->
            
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div>
				</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="" class="form-control">
							</div>
							<?php if(isset($oldpasswordError)) echo $oldpasswordError;
		            ?>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="" class="form-control">
							</div>
							<?php if(isset($newasswordError)) echo $newpasswordError;
		            ?>
								<?php if(isset($newpasswordsuccess)) echo $newpasswordsuccess;
		            ?>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
								
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->
					<?php if(isset($deleteaccountError)) echo $deleteaccountError;
					 

		            ?>
					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>