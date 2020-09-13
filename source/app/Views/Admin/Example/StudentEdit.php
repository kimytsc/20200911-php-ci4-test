<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="<?=site_url('admin/example/students/'.$student->s_id); ?>" method="post">
		<input type="hidden" name="_method" value="PUT">
		<p>Student Name
			<input type="text" name="std" placeholder="Student Name" value="<?=$student->s_name?>">
		</p>
		<p>Student Subject
			<input type="text" name="subject" placeholder="Student Name" value="<?=$student->s_subject?>">
		</p>
		<input type="hidden" value="<?=$student->s_id?>" name="id">
		<button type="submit">Update Student</button>
	</form>
</body>
</html>
