<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration Form</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4" style="margin-top:20px">
					<h3>Registration</h3>
					<hr>

					<form action="{{route('register-user')}}" method="post">

						@if(Session::has('success'))
							<div class="alert alert-success">{{Session::get('success')}}</div>
						@endif

						@if(Session::has('fail'))
							<div class="alert alert-danger">{{Session::get('fail')}}</div>
						@endif

						@csrf

						<div class="form-group">
							<label for="name">Full Name: </label>
							<input type="text" class="form-group" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
							<span class="text-danger">@error('name') {{$message}} @enderror</span>
						</div>

						<br>
						<div class="form-group">
							<label for="email">Email: </label>
							<input type="email" class="form-group" placeholder="Enter Email ID" name="email" value="{{old('email')}}">
							<span class="text-danger">@error('email') {{$message}} @enderror
						</div>

						<br>
						<div class="form-group">
							<label for="password">Password: </label>
							<input type="password" class="form-group" placeholder="Enter Password" name="password" value="">
							<span class="text-danger">@error('password') {{$message}} @enderror
						</div>

						<br>
						<div class="form-group">
							<button class="btn btn-block btn-primary" type="submit">Register</button>
						</div>

						<br>
						<a href="/">Already Registered? Login Here.</a>

					</form>

				</div>
			</div>
		</div>
	</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>