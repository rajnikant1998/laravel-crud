<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>student list</title>
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<h3 class="m-3 text-warning">
					STUDENT LIST
				</h3>
			</div>
			<div class="col-md-6">
				<h3 class="m-3 text-primary text-end">
					<a href="<?php echo e(route('index')); ?>" class="btn btn-info">+ Add Student</a>
				</h3>
			</div>
		</div>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">name</th>
					<th scope="col">email</th>
					<th scope="col">country</th>
					<th scope="col">state</th>
					<th scope="col">city</th>
					<th scope="col">address</th>
					<th scope="col">date</th>
					<th scope="col">gender</th>
					<th scope="col">image</th>
					<th scope="col">action</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($stu->id); ?></td>
					<td><?php echo e($stu->name); ?></td>
					<td><?php echo e($stu->email); ?></td>
					<td><?php echo e($stu->country); ?></td>
					<td><?php echo e($stu->state); ?></td>
					<td><?php echo e($stu->city); ?></td>
					<td><?php echo e($stu->address); ?></td>
					<td><?php echo e($stu->date); ?></td>
					<td><?php echo e($stu->gender); ?></td>
					<td>
						<?php 
						$imgs = json_decode($stu->image);
						?>
						<?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<img src="<?php echo e(asset('uploads/students/'.$images)); ?>" width="70px" height="70px" alt="image">
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					</td>
					<td>
						<a class="btn btn-primary" href="<?php echo e(route('editdata',['id'=>$stu->id])); ?>">Edit</a>
						<a class="btn btn-danger" href="<?php echo e(route('destroy',['id'=> $stu->id ])); ?>">Delete</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH /var/www/html/laravel/laravelcrud/resources/views/studentlist.blade.php ENDPATH**/ ?>