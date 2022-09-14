<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>STUDENT FORM</title>
</head>

<body>
	<div class="container bg-light mt-5">
		<div class="row">
			<div class="col-md-6">
				<h3 class="m-3 text-warning">
					STUDENT REGISTRATION
				</h3>
			</div>
			<div class="col-md-6">
				<h3 class="m-3 text-primary text-end">
					<a href="<?php echo e(route('show')); ?>" class="btn btn-info">+ VIEW Student</a>
				</h3>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<div class="row">
				<div class="col-md-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" class="form-control" name="name">
					<div class="text-danger">
						<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="col-md-6">
					<label for="email" class="form-label">Email</label>
					<input type="email" class="form-control" name="email">
					<div class="text-danger">
						<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" name="password">
					<div class="text-danger">
						<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="col-md-6">
					<label for="country" class="form-label">Country</label>
					<input type="text" class="form-control" name="country">
					<div class="text-danger">
						<?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="state" class="form-label">State</label>
					<input type="text" class="form-control" name="state">
					<div class="text-danger">
						<?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="col-md-6">
					<label for="city" class="form-label">City</label>
					<input type="text" class="form-control" name="city">
					<div class="text-danger">
						<?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<label for="inputAddress" class="form-label">Address</label>
					<input type="text" class="form-control" id="inputAddress" name="address">
					<div class="text-danger">
						<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<label for="gender" class="form-label">Gender</label>
				<div class="col-md-6">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="male">
						<label class="form-check-label" for="male">male</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="female">
						<label class="form-check-label" for="female">female</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="others">
						<label class="form-check-label" for="others">others</label>
					</div>
					<div class="text-danger">
						<?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="col-md-6">
					<label>Enter date:
						<input type="date" name="date" pattern="\d{4}-\d{2}-\d{2}">
						<span class="validity"></span>
					</label>
					<div class="text-danger">
						<?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="col-md-12">
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" name="image[]" class="form-control" placeholder="image" multiple>
            </div>
			<div class="text-danger">
					<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
        </div>
			</div>
			<div class="row mt-3">
				<button type="submit" class="col-md-12 btn btn-primary" name="submit" value="sbtok" class="btn btn-danger">Submit</button>
			</div>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH /var/www/html/laravel/laravelcrud/resources/views/studentform.blade.php ENDPATH**/ ?>