<div class="container">
		<div class="panel panel-primary" style="width: 500px; margin: 75px auto; border: 1px solid #3336a3; border-radius: 10px; padding: 2% 5%; background-color: white;">
			<div class="panel-heading">
				<h2 class="text-center" style="color: #61107a;">Profile</h2>

			</div>
			<div class="panel-body">
				<form method="post" action="user/changeProfile.php">
					<div class="form-group mb-2 row">
                        <div class="col">
                            <label for="fname" style="color: #040acf;" >First Name</label>
					        <input required="true" type="text" class="form-control" id="fname" name="fname" 
					  		        value="<?= htmlspecialchars($_SESSION["fname"] ?? "")?>" style="border: 1px solid #c3c4e8;">
                        </div>
                        <div class="col">
                            <label for="lname" style="color: #040acf;" >Last Name</label>
                            <input required="true" type="text" class="form-control" id="lname" name="lname" 
                                    value="<?= htmlspecialchars($_SESSION["lname"] ?? "")?>" style="border: 1px solid #c3c4e8;">
                        </div>
					</div>

                    <div class="form-group mb-2">
					  <label for="phone" style="color: #040acf;" >Phone number</label>
					  <input required="true" type="text" class="form-control" id="phone" name="phone" 
					  		 value='<?php echo $_SESSION["phone"] ?>' style="border: 1px solid #c3c4e8;">
					</div>

                    <div class="form-group mb-2">
					  <label for="birthdate" style="color: #040acf;" >Birthdate</label>
					  <input required="true" type="date" class="form-control" id="birthdate" name="birthdate" 
					  		 value='<?php echo $_SESSION["birthdate"] ?>' style="border: 1px solid #c3c4e8;">
					</div>

                    <div class="form-group mb-2">
					  <label for="address" style="color: #040acf;" >Address</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" 
					  		 value="<?= htmlspecialchars($_SESSION["address"] ?? "")?>" style="border: 1px solid #c3c4e8;">
					</div>
					
					<button class="btn" style="width: 100%; margin: 0.5rem auto; margin-top:1rem; color: #040acf; border: 1px solid #3336a3; border-radius: 5px; background-color: #f0f0f5;">Change Profile</button>
				</form>
                <?php
                if(isset($_REQUEST['set'])){
                    
                }
                ?>
			</div>
		</div>
	</div>