<style type="text/css">
html { 
  background: url(uploads/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<!doctype html>
<?php
//$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$system_name  = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
date_default_timezone_set("Asia/Karachi"); 
$date  =
date('d-m-Y');
$time  =date('h:i:s A');
?>

<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
        <?php echo get_phrase('Contact_Us'); ?> | <?php echo $system_name; ?>
      </title>
  <!-- Tell the browser to be responsive to screen width -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/login_page/img/favicon.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
    <script src="<?php echo base_url();?>assets/login_page/js/vendor/modernizr-2.8.3.min.js"></script>
		  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">


 
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
	
  <div class="login-logo">
   
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  	<a href="<?php echo base_url();?>index.php?login" class="logo">
						<center><img src="<?php echo base_url();?>uploads/logo.png" height="110" alt=""></center>
					</a>
  	  <h3 class="login-box-msg"> <strong><?php echo $system_name; ?></strong></h3>
    <p class="login-box-msg" class="" style="color: red">Message Response Will Be Send To Provided Mobile Number </p>

			<form method="post" role="form" id="form_login"
            action="<?php echo base_url();?>index.php?login/public_msgs">

            
     	 <div class="form-group">
<select name="campus_id" id="campus_id" class="form-control">
        <option value=""><?php echo get_phrase('select_a_campus');?></option>
        <?php
          $campus = $this->db->get('campus')->result_array();
          foreach($campus as $rownew):
        ?>
        <option value="<?php echo $rownew['campus_id'];?>"><?php echo $rownew['campus_name'];?></option>
        <?php endforeach;?>
      </select>
                      
                </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="phone" class="form-control" name="phone" placeholder="Your Phone without zero (i.e  3482258263)" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <textarea type="msg" class="form-control" rows="5" name="msg" placeholder="Type Your Message Here" required></textarea>
        <span class="glyphicon glyphicon-mail form-control-feedback"></span>
      </div>
    
     <input type="hidden" class="form-control" name="status"
                                value="3">
                                <input type="hidden" class="form-control" name="date"
                                value="<?php echo $time;?> <?php echo $date;?> ">
       <div class="col-xs-9">
          
         
         
        </div>
        <!-- /.col -->
         
      
        	<button type="submit" class="btn btn-primary">Send Message <i class="glyphicon glyphicon-ok-sign"></i></button>
         
    		<hr>
        	 <a href="<?php echo base_url();?>">&nbsp;<botton class="label label-success" style="font-size: 11px;" style="width: 2px;"> <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;&nbsp; RETRUN TO MENU&nbsp;&nbsp;</a>
        </botton>
        
        <!-- /.col -->
      
   
   


</div>
			</div>
			<div class="image-area forgot-pass"></div>
		</div>

    <script src="<?php echo base_url();?>assets/login_page/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <?php if ($this->session->flashdata('reset_error') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('error');?>!!</strong>',
          message: '<?php echo $this->session->flashdata('reset_error');?>'
          },{
          // settings
          type: 'danger'
        });
      </script>
    <?php } ?>
    <?php if ($this->session->flashdata('reset_success') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('success');?>!!</strong>',
          message: '<?php echo $this->session->flashdata('reset_success');?>'
          },{
          // settings
          type: 'success'
        });
      </script>
    <?php } ?>

    </body>
</html>
