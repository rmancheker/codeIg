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
    <table class='table'>
        <tr><th>email</th>
            <th>mobile</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        <?php if(is_array($answer)): foreach($answer as $value):?>
        <tr><th><?php echo $value['mobile']?></th>
            <th><?php echo $value['email']?></th>
            <th><a class = 'del' for="<?php echo $value['id']; ?>" href = "#">delete</a></th>
            <th><a class = 'edit' for="<?php echo $value['id']; ?>"  href = "#" data-toggle="modal" data-target="#myModal">edit</a></th>
        </tr>
      <?php endforeach; endif;?>
    </table>
	</div><!-- container -->
  <!-- Model box -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
            <form role="form" method="POST" id="user_form" style="
    margin-top: 8%">
      <div class="form-group">
        <div class="form-group">
        <label for="pwd">Mobile No.:</label>
        <input type="text" class="form-control" name="mobile" id="mobile">
      </div>
        <label for="email">Email address:</label>
        <input type="text" class="form-control" name="email" id="email">
        <input type="text" class="form-control" name="id" id="id">
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
