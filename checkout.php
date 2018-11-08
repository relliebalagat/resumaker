<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Design Soldier</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style>

<html>

<body>
<h3>Checkout</h3>
						<font color="black">
						<!--CONTENT PAGE 2 DITO FED AND NEAL-->
						<div class="panel panel-default credit-card-box">
							<div class="panel-heading display-table" >
								<div class="row display-tr" >
									<h3 class="panel-title display-td" >Payment Details</h3>
									<div class="display-td" >                            
										<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
									</div>
								</div>                    
							</div>
							<div class="panel-body">
								<form role="form" id="payment-form">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="cardNumber">CARD NUMBER</label>
											<div class="input-group">
												<input 
												type="tel"
												class="form-control"
												name="cardNumber"
												placeholder="Valid Card Number"
												autocomplete="cc-number"
												required autofocus 
												/>
												<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
											</div>
										</div>                            
									</div>
								</div>
								<div class="row">
									<div class="col-xs-7 col-md-7">
										<div class="form-group">
											<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
											<input 
											type="tel" 
											class="form-control" 
											name="cardExpiry"
											placeholder="MM / YY"
											autocomplete="cc-exp"
											required 
											/>
										</div>
									</div>
									<div class="col-xs-5 col-md-5 pull-right">
										<div class="form-group">
											<label for="cardCVC">CV CODE</label>
											<input 
											type="tel" 
											class="form-control"
											name="cardCVC"
											placeholder="CVC"
											autocomplete="cc-csc"
											required
											/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="couponCode">COUPON CODE</label>
											<input type="text" class="form-control" name="couponCode" />
										</div>
									</div>                        
								</div>
								<div class="row">
									<div class="col-xs-12">
										<button class="btn btn-success btn-lg btn-block" type="submit">Proceed</button>
									</div>
								</div>
								<div class="row" style="display:none;">
									<div class="col-xs-12">
										<p class="payment-errors"></p>
									</div>
								</div>
								</form>
							</div>
						</div>
						</font>
						
</body>
</html>