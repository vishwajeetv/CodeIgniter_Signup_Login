<?php $this->load->view('web/template/headerView'); ?>
  
<title>Success</title>
</head>
<body>
      
  <div class="jumbotron text-center">
  <h1>Login Successful ! <?php echo  $this->session->userdata('username'); ?> is Awesome !</h1>
  </div>
    <div><a class="btn btn-danger btn-lg" href="<?php echo base_url()?>index.php/UserController/logOut">LogOut</a></div>
  </body>
  </html>