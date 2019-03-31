<?php require 'partials/header.php'; ?>

<?php if (isset($_SESSION['email'])) : ?>

<h1>Users</h1>

<p> Welcome:  <?php echo $_SESSION['email']; ?></p>

<?php foreach ($users as $user) : ?>
	<li>
		<b>name:</b><a href="user/<?= $user->id; ?>"><?= $user->name; ?></a>, <b>email:</b> <?= $user->email; ?> 		
	</li>
<?php endforeach; ?>

<h1>Update your name</h1>

<form method="POST" action="/updateName">
	<label>Name:</label>
	<input type="text" name="name"></input>
	<label>Email:</label>
	<input type="text" name="email"></input>
</form>

<?php endif; ?>

<?php require 'partials/footer.php'; ?>