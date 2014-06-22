<?php $this->load->view('web/template/headerView'); ?>
  
<title>Registration</title> </head>
  <body>
      
  <div class="jumbotron text-center">
  <h1>Register now!</h1>
  </div>
  <div class="row">
  <div class="col-lg-3">
   
  
  </div>
  <div class="col-lg-7">
     <?php echo validation_errors(); ?> 
      <?php 
      
      echo form_open(base_url().'index.php/UserController/register');
      
      ?>
      <div class="form-group">
    <label for="userName">Username</label>
   
	<input type="text" name="username" class="form-control input-lg" id="userName" placeholder="Enter Username" required>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Enter Password" required>
  </div>
          <div class="form-group">
    <label for="passwordConfirm">Confirm Password</label>
    <input type="password" name="passconf" class="form-control input-lg" id="confPassword" placeholder="Confirm Password" required>
  </div>

  <div class="form-group">
    <label for="userName">Email ID</label>
   
  <input type="email" name="email" class="form-control input-lg" id="userName" placeholder="Enter Email ID" required>

  </div>
  <div class="form-group">
    <label for="userName">Mobile Number</label>
   
  <input type="tel" name="telephoneNumber" class="form-control input-lg" id="telephone" placeholder="Enter Mobile No." required>

  </div>



  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
</div>
<div class="col-lg-2">
</div>
</div>
 
  </body>
</html>