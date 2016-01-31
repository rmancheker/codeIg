<html>
<head>
	<title>Register</title>
	<?php css();?>
	<?php js();?>
</head>
<body>
	<div class = "container">
		<form role="form" method="POST" action="<?php echo base_url(); ?>index.php/crud/register_action">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="text" class="form-control" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="pwd">
		  </div>
		  <div class="checkbox">
		    <label><input type="checkbox"> Remember me</label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>