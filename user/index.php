
<?php 

	include 'include/header.php'; 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

	}else{
		header("Location:../index.php");
	}
	if(isset($_POST['date'])){
		$showForm=' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Are you sure to update your  record?</strong>
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
	}  
	if(isset($_POST['userID'])){
		$userID=$_POST['userID'];
		$currentdate=date_create();
		$currentdate=date_format($currentdate,'Y-m-d');
		$sql="Update donor set save_life_date='$currentdate' where id='$userID'";
		if(mysqli_query($conn,$sql)){
			$_SESSION['save_life_date']=$currentdate;
      header("Location:index.php");
		}
		else{
			$submitfailure='<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data not inserted.Please try again</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
		}
	}
	?>
<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.username{
		color:black;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							<?php
							if(isset($submitfailure)) echo $submitfailure;
							?>
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h2>Welcome </h2> <h1 style="font-weight:bold;" class="username"><?php
          if(isset($_SESSION['name'])) echo $_SESSION['name'];
          ?></h1>
							</div>
							<p class="text-center">Here you can manage your Account and update your profile</p>
              <div class="test-success text-center" id="data" style="margin-top: 20px;"><?php
							if(isset($showForm)) echo $showForm;
							?></div>
							<?php
							$safeDate=$_SESSION['save_life_date'];
							
							if($safeDate=='0'){
              echo '<form target="" method="post">
							<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button></form>';
							}else{
               
								$start=date_create("$safeDate");
								$end=date_create();
								$diff=date_diff($start,$end);
								$diffYear=$diff->y;
								$diffYear1=$diffYear*12;
                $diffMonth=$diff->m+$diffYear1;
								if($diffMonth>=3){
									echo '<form target="" method="post">
									<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save Life</button></form>';
								}else{
									echo '<div class="donors_data">
									<span class="name">Congratulations!</span>
									<span>You have already saved a life by donating your precious blood.Now you can donate the blood after 3 months of time.We are really thankful for your contribution. </span>
									</div>';
								}
}
							?>
		
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php

include 'include/footer.php'; 
?>