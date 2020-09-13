<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.css')?>" type="text/css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if (!empty($message) && isset($message)): ?>
					<?=$message ?>
				<?php endif; ?>
				<br>
				<a class="btn btn-success" href="<?=site_url('admin/example/students/new'); ?>">New User</a>
				<h1>All Students</h1>
				<table class="table">
					<th>ID</th>
					<th>Name</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Edit</th>
					<th>Delete</th>
					<?php if(count($students) > 0): ?>
						<?php foreach ($students as $myStudent): ?>
							<tr>
								<td>
									<?=$myStudent->s_id;?>
								</td>
								<td>
									<?=$myStudent->s_name;?>
								</td>
								<td>
									<?=$myStudent->s_subject;?>
								</td>
								<td>
									<?=$myStudent->s_date;?>
								</td>
								<td>
									<a class="btn btn-info" href="<?=site_url('admin/example/students/'.$myStudent->s_id.'/edit')?>">Edit</a>
								</td>
								<td>
									<a class="btn btn-danger" href="#delete" onclick="studentDelete(<?=$myStudent->s_id?>)">Delete</a>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=base_url('bootstrap/js/bootstrap.js')?>"></script>
	<script>
		function studentDelete(sid)
		{
			$.ajax({
				type: "delete",
				url: `<?=site_url('admin/example/students')?>/${sid}`,
				data: {},
				success: function() {
					location.href="<?=site_url('admin/example/students')?>"
				},
				error: function(e) {
					alert('error');
				}
			});
		}
	</script>
</body>
</html>
