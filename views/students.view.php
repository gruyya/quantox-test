<?php require 'partials/header.php'; ?>

<?php if (isset($_SESSION['email'])) : ?>

<h1>Students</h1>

<p> Welcome:  <?php echo $_SESSION['email']; ?></p>

	<ul>
	<?php foreach ($students as $student) : ?>
		<li>
			<p><b>name: </b><a href="student/<?= $student->id; ?>"><?= $student->name; ?></a></p>
		</li>
	<?php endforeach; ?>
	</ul>
	
<?php endif; ?>

<?php require 'partials/footer.php'; ?>