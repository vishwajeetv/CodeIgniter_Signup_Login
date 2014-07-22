<?php $this->load->view('web/template/headerView'); ?>
<body>


<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container">
    <h1>
       Codeigniter Signup Login
    </h1>

    <div ng-view>

    </div>
</div>



<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->

<script src="<?=base_url();?>angular/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url();?>angular/bower_components/angular/angular.js"></script>
<script src="<?=base_url();?>angular/bower_components/angular-route/angular-route.js"></script>
<script src="<?=base_url();?>angular/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>angular/bower_components/ui-bootstrap/ui-bootstrap-tpls-0.11.0.min.js"></script>
<script src="<?=base_url();?>angular/app/js/app.js"></script>
<script src="<?=base_url();?>angular/app/js/services.js"></script>
<script src="<?=base_url();?>angular/app/js/controllers.js"></script>
<script src="<?=base_url();?>angular/app/js/filters.js"></script>
<script src="<?=base_url();?>angular/app/js/directives.js"></script>
</body>
</html>
