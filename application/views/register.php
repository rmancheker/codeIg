<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
   <title>Register</title>
	 <?php css();?>
	 <?php js();?>

   <script type="text/javascript">
      var path = "<?php echo base_url();  ?>index.php/";
      //alert (path);
   </script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url().'index.php/crud/showrecords' ?>">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class = "container">
		<form role="form" method="POST" id="user_form" style="
    margin-top: 8%">
       <div class="form-group">
        <label for="pwd">Name:</label>
        <input type="text" class="form-control" name="Name" id="Name">
      </div>
		  <div class="form-group">
        <label for="pwd">Mobile No.:</label>
        <input type="text" class="form-control" name="mobile" id="mobile">
      </div>
       <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="text" class="form-control" name="email" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="pwd" id="pwd">
		  </div>
       <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" name="cnfpwd" id="cnfpwd">
      </div>
		  <div class="checkbox">
		    <label><input type="checkbox"> Remember me</label>
		  </div>
		  <button type="button" class="btn btn-default btn_add">Submit</button>
		</form>
     <div class="error">

  </div>
	</div><!-- container -->
 

  </body>
</html>
