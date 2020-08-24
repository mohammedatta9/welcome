<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--first mobile-->
    </head>
	<body>
	<div class="container">
	<br><br>
	<div class="row">
		 <div class="col-md-6 ">
		 <?php 
		 if(isset($_POST['login'])){
			 extract($_POST);
			 if(isset($_POST['accept']))
				 $accepted=1;
			 else
				 $accepted=0;
             $gender="";
             
			 if(isset($_POST['gender']))
				 $gender=$_POST['gender'];
			 echo "yor name is $name<br>yor email is $email<br>yor gender is $gender<br>yor phone is  $phone<br>yor accepted is $accepted <br>yor country is $country <br>";
		 }else{		
		?>
        <form class="form-horizontal" action=<?php echo $_SERVER['PHP_SELF']?>  method='POST' >
			
			<div class="form-group row">
				<label class="col-2 col-form-label">fullname</label>
				<div class="col-10">
					<input class="form-control" type="text" name="name">
				</div>
			</div>
			<div class="form-group row">
			  <label  class="col-2 col-form-label">Email</label>
			  <div class="col-10">
				<input class="form-control" type="email" name="email">
			  </div>
			</div>
			<div class="form-group row">
			  <label class="col-2 col-form-label">Password</label>
			  <div class="col-10">
				<input class="form-control" type="password" name="password">
			  </div>
			</div>
			<div class="form-group row">
			  <label class="col-2 col-form-label">Phone</label>
			  <div class="col-10">
				<input class="form-control" type="number" name="phone">
			  </div>
			</div>
            
			<div class="form-group row">
			  <label class="col-2 col-form-label">Country</label>
			  <div class="col-10">
				    <select class="form-control" name="country">
                        <option value="PS">Palestine</option>
                        <option value="SA">KSA</option>
                        <option value="AE">UAE</option>
                        <option value="EG">ARE</option>
                        <option value="DE">Germany</option>
                    </select>
			  </div>
			</div>
			 <fieldset class="form-group row">
			  <label  class="col-2 col-form-label">Gender</label>
			  <div class="col-10">
				<div class="form-check">
				  <label class="form-check-label">
					<input class="form-check-input" type="radio" name="gender" value="male">
					Male
				  </label>
				  <label class="form-check-label">
					<input class="form-check-input" type="radio" name="gender" value="female">
					Female
				  </label>
				</div>
			   </div>
			</fieldset>
			<div class="form-group row">
			<label class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input"  name="accept" value="true">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">accept on condition of this site</span>
			</label>
			</div>
			<button type="submit" class="btn btn-primary" name="login">Submit</button>
		</form>
		 <?php }?>
		</div>
			  </div>
			</div>
	</body>
</html>
