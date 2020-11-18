<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container card">
		<form method="POST" action="check_insert.php">

	  <div class="form-group">
	    <label for="exampleInputEmail1">product name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter product name" name="name"></div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">description</label>
	    <textarea class="form-control" placeholder="enter description" name="description"></textarea>
	  </div>

	  <button type="submit" class="btn btn-primary">Login</button>
	</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>