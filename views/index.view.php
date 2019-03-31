<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="/">App</a>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="/">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="users">Users</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="contact">Contact</a>
		      </li>
		    </ul>
		    <ul class="navbar-nav mr-right">
		      <?php if (isset($_SESSION['email'])) : ?>
		      	<li class="nav-item active">
		      	  <a class="nav-link" href="logout">Logout</a>
		      	</li>
		      <?php else: ?>
		      	<li class="nav-item active">
		      	  <a class="nav-link" href="loginShow">Login</a>
		      	</li>
		      	<li class="nav-item active">
		      	  <a class="nav-link" href="registerShow">Register</a>
		      	</li>
		      <?php endif; ?>
		    </ul>
		  </div>
		</nav>

<!-- 		<?php foreach ($users as $user) : ?>
			<li>
				<b>name:</b><a href="user/<?= $user->id; ?>"><?= $user->name; ?></a>, <b>email:</b> <?= $user->email; ?> 		
			</li>
		<?php endforeach; ?> -->
	</div>
</body>

</html>