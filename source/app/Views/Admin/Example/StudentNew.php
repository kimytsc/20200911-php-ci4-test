<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('admin/example/students'); ?>" method="post">
		<p>Student Name
			<input type="text" name="std" placeholder="Student Name" value="">
		</p>
		<p>Student Subject
			<input type="text" name="subject" placeholder="Student Name" value="">
		</p>
		<input type="hidden" value="" name="id">
		<button type="submit">Add Student</button>
	</form>
</body>
</html>
