<?php 
//include header file
include ('include/header.php');
?>

<div class="container-fluid header-img">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="header">
<h1 class="text-center" style="color:black; font-weight:bold;">Donate Blood, save life</h1>
<br>
<br>
</div>

<h1 class="text-center" style="color:black; font-weight:bold;">Search The Donors</h1>
<hr class="white-bar text-center" style="color:black;">

<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
<div class="form-group text-center justify-content-center">
<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
<option value="">-- Select --</option>
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
</div>
<div class="form-group center-aligned">
<select style="width: 220px; height: 45px;" name="blood_group" id="blood_group" class="form-control demo-default" required>
<option value="">-- Select --</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</div>
<div class="form-group center-aligned">
<button type="submit" class="btn btn-lg btn-default" id="search">Search</button>
</div>
</form>
</div>
</div>
</div>

<!-- donate section -->
<div class="container-fluid red-background">
<div class="row">
<div class="col-md-12">
<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
<hr class="white-bar">
<p class="text-center pera-text">
At our core, we are driven by a singular vision: to create a world where everyone has timely access to safe and sufficient blood, ensuring that no one suffers due to a shortage of this vital resource. We strive to foster a culture of regular blood donation, raising awareness and dispelling fears and stigmas associated with the process. Our goals focus on increasing the availability and accessibility of safe blood through targeted awareness campaigns, educational programs, and a well-organized network of blood banks and donors. We work tirelessly to ensure that blood donation is a seamless, rewarding experience by providing convenient opportunities and comprehensive support for our donors. Collaborating with healthcare providers, we maintain high standards of safety and efficiency in blood collection and distribution, always advocating for policies that bolster the blood supply chain. Ultimately, our mission is to save lives by ensuring that every individual in need has access to the life-saving blood they require, creating a resilient and compassionate community of donors ready to respond to emergencies and support those in need.
</p>
<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
</div>
</div>
</div>
<!-- end doante section -->


<div class="container">
<div class="row">
<div class="col">
<div class="card">
<h3 class="text-center red">Our Vission</h3>
<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
<p class="text-center">
Our vision is to create a world where every person has timely access to safe and sufficient blood, ensuring that no one suffers due to a shortage of this vital resource. We aspire to build a robust community of donors who are readily available to respond to emergencies and save lives. By fostering a culture of regular blood donation and raising awareness about its importance, we aim to eradicate the fear and stigma associated with blood donation. Our ultimate goal is to see a global network where blood donation is a common, selfless act of humanity.
</p>
</div>
</div>

<div class="col">
<div class="card">
<h3 class="text-center red">Our Goals</h3>
<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
<p class="text-center">
Our goals are centered on increasing the availability and accessibility of safe blood for those in need. We aim to encourage more individuals to become regular blood donors through targeted awareness campaigns and educational programs. By establishing a well-organized network of blood banks and donors, we ensure quick and efficient responses to blood requests. We collaborate with healthcare providers to maintain high standards of safety and hygiene in blood collection, storage, and transfusion processes. Additionally, we support research initiatives aimed at improving blood donation technology and discovering new ways to utilize donated blood effectively. Through blood donation drives, events, and partnerships with local organizations, we promote a sense of community responsibility and engagement.
</p>
</div>
</div>

<div class="col">
<div class="card">
<h3 class="text-center red">Our Mission</h3>
<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
<p class="text-center">
Our mission is to save lives by ensuring that safe blood is available to those who need it most. We are committed to raising awareness about the critical need for blood donations and the life-saving impact it can have on individuals and communities. By providing convenient and accessible opportunities for individuals to donate blood, including mobile donation units, community drives, and partnership programs, we facilitate donations. We offer comprehensive support and care for our donors, ensuring a positive and rewarding donation experience that encourages regular participation. Working closely with hospitals, healthcare providers, and other organizations, we ensure efficient and effective blood collection and distribution. Additionally, we advocate for policies and practices that support blood donation and ensure the safety and availability of the blood supply.
</p>
</div>
</div>
</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
?>

