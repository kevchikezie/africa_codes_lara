<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 104.219.251.196/~vijaytupakula/preview/piluku/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2015 14:44:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<!--320-->
	<title>Africacodes</title>
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/material.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/material.css"> -->


    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css"> -->

    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/pstyle.css">
	<link rel="stylesheet" type="text/css" href="css/spin.css">

	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

</head>

<body>

	<div class="signin_wrapper" style="">
		<div class="row">
			
			<div class="theme-config">
				    <div class="theme-config-box">
				        <div class="spin-icon">
				            <i class="fa fa-cogs fa-spin"></i>
				        </div>
				        <div class="skin-setttings">
				            <div class="title">Instructions</div>
				            <div class="setings-item" style="padding:10px;">
				            	<p>	Implement login i.e bind to the database table 'Users'and use email as username.</p>
				            </div>
				            

				            
				        </div>
				    </div>
			</div>
			<div style="position: absolute; top: 40%; left: 28%;text-align:right;">
				<style type="text/css"> 
					  .big{
					  	font-size: 60px;
					    color: #FCB322;
					    margin: 0;
					    font-weight: bold;
					  }  
				</style>
				<div><h1 class="big"> Replace Me  </h1></div>
				<div><h1 class="big"> (1200x1110)</h1></div>
				

			</div>
			
			<div class="right_block">
				<div class="row">
					<form class="col-md-12 col-sm-12 col-xs-12">

                        <!-- fixes autocomplete off -->
                        <input style="display:none">
                        <input type="password" style="display:none">
                        <!-- /fixes autocomplete off -->

						<h2 class="signup-heading">Signin</h2>
						<div class="row">
							<div class="input-field col-md-12 col-sm-12 col-xs-12">
								<i class="ion-coffee prefix"></i>
								<input id="icon_prefix-2" name="icon_prefix-2" type="text" class="validate">
								<label for="icon_prefix-2">Username</label>
							</div>
							<div class="input-field col-md-12 col-sm-12 col-xs-12">
								<i class="ion-key prefix"></i>
								<input id="icon_prefix-3" type="password" class="validate">
								<label for="icon_prefix-3">Password</label>
							</div>
						</div>
						<div class="bottom_info">
							<!-- <a href="#" class="pull-right" data-toggle="modal" data-target="#forgot">forgot password?</a>
							<a href="#" class="pull-left">Register new account</a> -->
						</div>
						<div class="clearfix"></div>
						<a href="profile.html" class="btn btn-primary btn-block">Sign in</a>
					</form>
				</div>                
			</div>
			<!-- right_block -->
		</div>
		<!-- row -->


		<!-- Modal -->
		<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><i class="ion-android-settings"></i> Reset password</h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Enter Email here">
							<h6 class="note"><i class="ion-android-mail"></i> password will be sent to your email</h6>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->
	</div>
	<!-- wrapper -->
		
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- custom scrollbar plugin -->
	<!-- Compiled and minified JavaScript -->
	<script src="js/materialize.js"></script>


	<!-- spin -->
	<script type="text/javascript">
					$('.spin-icon').click(function () {
		        $(".theme-config-box").toggleClass("show");
		    });
	</script>
</body>

<!-- Mirrored from 104.219.251.196/~vijaytupakula/preview/piluku/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2015 14:44:08 GMT -->
</html>