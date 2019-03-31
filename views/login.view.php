<?php require 'partials/header.php'; ?>

<h1>Login</h1>

<form method="POST" action="/login" >
  <div class="form-group" >
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
<?php require 'partials/footer.php'; ?>