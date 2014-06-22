<?php $this->load->view('web/template/headerView'); ?>
  
<title>Login</title> 
</head>
  <body>
      
  <div class="jumbotron text-center">
  <h1>Login</h1>
  </div>
  <div class="row">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
     <?php echo validation_errors(); ?> 
      <?php 
      
		echo form_open(base_url().'index.php/UserController/login');
      
      ?>
      <div class="form-group">
    <label for="userName">Username</label>
   
	<input type="text" name="username" class="form-control input-lg" id="userName" placeholder="Enter Username" required>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Enter Password" required>
  </div>
        


  <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
</form>
</div>
<div class="col-lg-3">
</div>
</div>
 
  </body>
</html>