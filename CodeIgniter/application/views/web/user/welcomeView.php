<?php $this->load->view('web/template/headerView'); ?>
  
<title>Welcome</title>
</head>
<body>
      
  <div class="jumbotron text-center">
  <h1>Welcome to Easy Padhai</h1>
  </div>
    <div class="row">
        <div class="col-lg-5">
            <?php $this->load->view('web/user/loginView'); ?>
  
        </div>
        <div class="col-lg-7">
            <?php $this->load->view('web/user/registrationView'); ?>

        </div>
     
    </div>
  </body>
  </html>