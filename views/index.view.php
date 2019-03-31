<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	
<body>
	<div class="container">
		<h1>Hello</h1>

<!-- 		<?php if (isset($student)) {
			echo "<h3>" . $student . "</h3>";
		}
		?> -->

		<?php foreach ($users as $user) : ?>
			<li>
				<b>name:</b><a href="user/<?= $user->id; ?>"><?= $user->name; ?></a>, <b>email:</b> <?= $user->email; ?> 		
			</li>
		<?php endforeach; ?>

	</div>
</body>

</html>