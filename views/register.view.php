<?php require 'partials/header.php'; ?>

<h1>Register new Board</h1>

<form method="POST" action="/register" >
	<div class="form-group" >
		<label for="text">Name</label>
		<input type="text" class="form-control" id="text" placeholder="Enter email" name="name" required>
	</div>
	<div class="form-group" >
		<label for="email">Email address</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
  	</div>
 	<div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  	</div>
  	<div class="form-group">
  	   	<label for="password">Password</label>
  	   	<input type="password" class="form-control" id="password" placeholder="Password" name="repeatpassword" required>
  	 </div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
	
<?php require 'partials/footer.php'; ?>