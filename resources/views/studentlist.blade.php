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
					<a href="{{ route('index') }}" class="btn btn-info">+ Add Student</a>
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
				@foreach($student as $stu)
				<tr>
					<td>{{ $stu->id }}</td>
					<td>{{ $stu->name }}</td>
					<td>{{ $stu->email }}</td>
					<td>{{ $stu->country }}</td>
					<td>{{ $stu->state }}</td>
					<td>{{ $stu->city }}</td>
					<td>{{ $stu->address }}</td>
					<td>{{ $stu->date }}</td>
					<td>{{ $stu->gender }}</td>
					<td>
						@php 
						$imgs = json_decode($stu->image);
						@endphp
						@foreach($imgs as $key => $images)
						<img src="{{ asset('uploads/students/'.$images) }}" width="70px" height="70px" alt="image">
						@endforeach
						
					</td>
					<td>
						<a class="btn btn-primary" href="{{ route('editdata',['id'=>$stu->id]) }}">Edit</a>
						<a class="btn btn-danger" href="{{ route('destroy',['id'=> $stu->id ]) }}">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>