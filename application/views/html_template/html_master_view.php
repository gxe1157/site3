<?php
/* Full Service Mailers August 21 2015  Evelio Velez Jr. */
defined('BASEPATH') OR exit('No direct script access allowed');

//echo "APPPATH: ".APPPATH."<br>";
//echo "BASEPATH: ".BASEPATH."<br>";
//echo "__dir__: ".__DIR__."<br>";
//echo "<br><br><br> __file__: ".__FILE__."<br>";
//echo $contents;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/animate.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?= base_url() ?>public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>public/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>home">
                <img id="fsm_logo" src="<?= base_url() ?>public/images/logo.png" width=323 height=48 alt="logo"></a>
			</div>
			
            <div class="collapse navbar-collapse">
			
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>home" >Home</a></li>
					
					<?php if( $contents !== 'partials/upload' ):?>
					
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="icon-angle-down"></span></a>
                        <ul class="dropdown-menu">
							<li><a href="<?= base_url() ?>home/index/about-us/About Us">About Us</a></li>					
							<li><a href="<?= base_url() ?>home/index/contact-us/Contact Us">Contact Us</a></li>
                        </ul>
					</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="icon-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url() ?>home/index/multi_channel/Multi-Channel Solutions">Multi-Channel Solutions</a></li>												 
                            <li><a href="<?= base_url() ?>home/index/digital_print/Digital Printing With Variable Data">Digital Printing</a></li>						
                            <li><a href="<?= base_url() ?>home/index/non_profit/Non-Profit Campaigns">Non-Profit Campaigns</a></li>
                            <li><a href="<?= base_url() ?>home/index/political/Political Mailing Campaigns">Political Mailing Campaigns</a></li>
                            <li><a href="<?= base_url() ?>home/index/new_home_owner/New Home Owners">New Home Owners</a></li>
                            <li><a href="<?= base_url() ?>home/index/eddm/Every Door Direct Mail">Every Door Direct Mail</a></li>							
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>home/index/upload/Upload Files">Upload Files </a></li> 

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
						
						<ul class="dropdown-menu">
<!--							<li>
								<a href="<?php echo site_url('auth/change_password'); ?>"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
							</li>
							
							<li>
								<a href="<?php echo site_url('user_form/member_form/2/form_user1'); ?>"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
							</li>
							
							<li>
								<a href="#"><span class="glyphicon glyphicon-briefcase"></span> Billing</a>
							</li>
							
							<li class="divider"></li>
							<li>
								<a href="<?php echo site_url('auth/logout'); ?>"><span class="glyphicon glyphicon-off"></span> Sign out</a>
							</li>
-->							
							<li><a href="<?= base_url() ?>home/index/login/Customer Login">Login</a></li>											
						</ul>
					</li>
			    <?php endif ?>									
				</ul><!-- end nav pull-right -->

            </div>
        </div>
    </header><!--/header-->
	
	<?php if( $title !== "Full Service Mailers, Inc." ): ?>
		<div id="title" class="turquoise">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						 <h1><?= $title ?></h1>
					</div>
				</div>
			</div>
		</div><!--/#title-->
    <?php endif ?>
	
	
	<!-- Nav Goes Here -->
	<?php
		//	$this->load->view('partials/main');  // nav_.php is considered main navigation
    ?>   
	
	<!-- Contents goes here -->
	<?php
	$this->load->view($contents);
	?>				


    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Mailers.com is a wholly owned subsidiary of Full Service Mailers, Inc., a highly experienced and respected company that specializes in the development of multi-channel direct mail solutions.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-6">
                    <h4>Experts In:</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="<?= base_url() ?>home/index/multi_channel/Multi-Channel Direct Marketing Solutions">Multi-Channel Direct Marketing Solutions</a></li>												 
                            <li><a href="<?= base_url() ?>home/index/digital_print/Digital Printing With Variable Data">Digital Printing With Variable Data</a></li>						
                            <li><a href="<?= base_url() ?>home/index/non_profit/Non-Profit Campaigns">Non-Profit Campaigns</a></li>
                            <li><a href="<?= base_url() ?>home/index/political/Political Mailing Campaigns">Political Mailing Campaigns</a></li>
                            <li><a href="<?= base_url() ?>home/index/new_home_owner/New Home Owners Outreach">New Home Owners Outreach</a></li>
                            <li><a href="<?= base_url() ?>home/index/eddm/Every Door Direct Mail">Every Door Direct Mail (EDDM)</a></li>							
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
				
                <div class="col-md-2 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="<?= base_url() ?>home/index">Home</a></li>
                            <li><a href="<?= base_url() ?>home/index/about-us/About Us">About Us</a></li>
                            <li><a href="<?= base_url() ?>home/index/contact-us/Contact Us">Contact Us</a></li>
                            <li><a href="<?= base_url() ?>home/index/under_construction/Privacy Policy">Privacy Policy</a></li>
                            <li><a href="<?= base_url() ?>home/index/under_construction/Terms of Use">Terms of Use</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Full Service Mailers, Inc.</strong><br>
                        123 So. Newman St.<br>
                        Hackensack, NJ 07601<br>
                        <abbr title="Phone">Sales:</abbr> (973) 478-8813 Ext: 100<br />
                        <abbr title="Phone">Fax  :</abbr> (973) 478-5573
                    </address>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->



	
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2015 Full Service Mailers, Inc. All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo site_url('home/index'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('home/index/about-us/About Us'); ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('home/index/under_construction/Faq'); ?>">Faq</a></li>
                        <li><a href="<?php echo site_url('home/index/contact-us/Contact Us'); ?>">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

	<?php if( $title !=="Upload Files" ){ ?>
		<script src="<?= base_url() ?>public/js/jquery.js"></script>
	<?php } ?>
		<script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
	<?php if( $title !=="Upload Files" ){ ?>
		<script src="<?= base_url() ?>public/js/jquery.prettyPhoto.js"></script>
	<?php } ?>
		<script src="<?= base_url() ?>public/js/main.js"></script>
	
</body>
</html>
