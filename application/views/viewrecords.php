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

    <nav class="navbar navbar-inverse">
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
		<?php //pre($answer); ?>
    <table class='table table-hover'>
         <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update Details</th>
        </tr>
        </thead>
         <tbody>
        <?php if(is_array($answer)): foreach($answer as $value):?>
        <tr>
            <th><?php echo $value['Name'] ?></th>
            <th><?php echo $value['mobile']?></th>
            <th><?php echo $value['email']?></th>
            <th>
            <button type="button" class="del btn btn-danger" for="<?php echo $value['id']; ?>" href = "#">delete</button></th>
            <th><button type="button" class="edit btn btn-info" for="<?php echo $value['id']; ?>"  href = "#" data-toggle="modal" data-target="#myModal">Edit</button>
            </th>
        </tr>
      <?php endforeach; endif;?>
      </tbody>
    </table>
	</div><!-- container -->
  <!-- Model box -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="
    margin-top: 8%">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Records</h4>
      </div>
      <div class="modal-body">
            <form role="form" method="POST" id="user_form">
      <div class="form-group">
         <input type="text" class="form-control" name="id" id="id" readonly>
         <label for="Name">Name:</label>
        <input type="text" class="form-control" name="Name" id="Name">
        <label for="mobile">Mobile No.:</label>
        <input type="text" class="form-control" name="mobile" id="mobile">
      </div>
    </form>
     <div class="error">

  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn_update">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
