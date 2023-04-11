<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/cbfa8b25c9.js" crossorigin="anonymous"></script>
	<link rel="icon" href="pics.png">
</head>
<body class="body-login">
    <div class="black-fill"><br /> <br />
    	<div class="d-flex p-2 justify-content-center align-items-center inline-flex-column">
    	<form class="login" 
    	      method="post"
			  
    	      action="req/login.php">
				
			  
    		<div class="text-center">
    			<img src="pics.png"
    			     width="100">
    		</div>
    		<h3>LOGIN</h3>
    		<?php if (isset($_GET['error'])) { ?>
    		<div class="alert alert-danger" role="alert">
			  <?=$_GET['error']?>
			</div>
			<?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" placeholder="Username" 
		           class="form-control"
		           name="uname">
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" placeholder="Password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Login As</label>
		    <select class="form-control"
		            name="role">
		    	<option value="1">Admin</option>
		    	<option value="3">Student</option>
		    	<option value="2">Teacher</option>
		    </select>
			
		  </div>
		  <button type="submit" class="btn btn-primary">Log In</button>

		  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
			  <a href="index.php">
			  <i class="fa fa-solid fa-house fs-1" aria-hidden="true"></i><br>
							</a>
			  </div>
		  
		  
		  
		</form>

		<section id="about"
		 class="d-flex justify-content-center align-items-center inline-flex-column">
		
				 
        	<div class="card mb-2 card-1">
			  	<div class="row g-0">
			    <div class="col-md-3">
				
				</div>

					<img src="img/fo.png">

							
			    
			    </div>
			  </div>
			</div>
        </section>
        
			
        
        <br /><br />

    	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>