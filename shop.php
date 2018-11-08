<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Design Soldier</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?
require 'header.php';
?>
<body style='background-image:img/light.jpg'>

    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Design Soldier</p>
                <div class="list-group">
                    <a href="#t-shirt" class="list-group-item">T-shirt</a>
                    <a href="#shorts" class="list-group-item">Shorts</a>
                    <a href="#hnb" class="list-group-item">Hats & Bonets</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    </div>

                </div>
			
			<div id="#t-shirt">
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/black.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1500.00</h4>
                                <h4><a href="#">Astronaut</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/bof.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1300.00</h4>
                                <h4><a href="#">Bofresco</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/death.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1250.00</h4>
                                <h4><a href="#">Death</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                           
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/f.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1400.00</h4>
                                <h4><a href="#">No F**K</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                           
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/fc.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1400.00</h4>
                                <h4><a href="#">Flying Coffin</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>

					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/ggbl.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1500.00</h4>
                                <h4><a href="#">G & G</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/ggwh.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1500.00</h4>
                                <h4><a href="#">G & G</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					
						<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/huf.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1300.00</h4>
                                <h4><a href="#">HUF</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/iron.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1400.00</h4>
                                <h4><a href="#">Iron Maiden</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/loyal.jpg" alt="">
                            <div class="caption">
								<h4><a href="#">Loyal To The Hood</a><br>
                                <h4 class="pull-left">1450.00<br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br></h4>
                                
                                </h4>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/metal.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1550.00</h4>
                                <h4><a href="#">Metallica</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/metalbl.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1550.00</h4>
                                <h4><a href="#">Metallica</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					

                </div>

            </div>
			
			<div id="#shorts">
				<div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/89bl.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1800.00</h4>
                                <h4><a href="#">89 (8&9)</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/bbred.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">2000.00</h4>
                                <h4><a href="#">Billionaire Boys</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
								
                            </div>
                        </div>
                    </div>

					
						<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/coop.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1800.00</h4>
                                <h4><a href="#">Cooper 9</a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>

					
					</div>
				</div>
				
				<div id="#hnb">
				<div class="row">
						
						<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/amflag.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1000.00</h4>
                                <h4><a href="#">American Flag </a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
				
				<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/artist.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1000.00</h4>
                                <h4><a href="#">ArtCon  </a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
				
				
				<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/bball.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">1000.00</h4>
                                <h4><a href="#">BBall   </a><br><br>
								<button class='btn btn-success' data-toggle='modal' data-target='#cartModal' onclick="addtoCart(this)">Add to cart</button><br>
                                </h4>
                            </div>
                        </div>
                    </div>
				
				</div>
				</div>
				
				
        </div>

    </div>
</div><button class='btn btn-info' data-toggle='modal' data-target='#showcart' onclick = 'showcarts()'>My Cart</button><br>
                                
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <center> <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
<div class='modal fade' id='cartModal'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h4>Add to cart</h4>
			</div>
			<div class='modal-body'>
				<table class='table'>
					<tr>
						<td>Product Name: </td>
						<td>
							<input type = 'text' class='form-control' id='txtProd'/>
						</td>
					</tr>
					<tr>
						<td>Unit Amount: </td>
						<td>
							<input type = 'text' class='form-control'  readonly id='txtAmount'/>
						</td>
					</tr>
					<tr>
						<td>Quantity: </td>
						<td>
							<input type = 'number' class='form-control' onkeyup='computeTamount(this.value)' id='txtQty'/>
						</td>
					</tr>
					<tr>
						<td>Total Amount: </td>
						<td>
							<input readonly type = 'text' class='form-control' id='txtTamount'/>
						</td>
					</tr>
				</table>
				<br>
				<button class='btn btn-primary' data-dismiss='modal' onclick = 'continue_cart()'>Continue</button>
			</div>
		</div>	
	</div>
</div>



<div class='modal fade' id='showcart'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h4>Items from Cart</h4>
			</div>
			<div class='modal-body'>
				<table class='table' >
				<tr>
					<th>#</th>
					<th>Product</th>
					<th>Amount</th>
					<th>Quantity</th>
					<!--<th>-</th>-->
				</tr>
				<tbody id='tbl_items'>
				</tbody>
				</table>
				<br>
				<h4>Total Cart: <span  id='super_total'></span></h4>
				<br>
				<div id='msg'></div>
				<button class='btn btn-primary' onclick='save_now()'>Finish Transaction</button>
			</div>
		</div>	
	</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script>
var cartAmount = [];
var cartProduct = [];
var cartQuantity = [];
var pname = document.getElementById("txtProd");
var qty = document.getElementById("txtQty");
var amount = document.getElementById("txtAmount");
var t_amount = document.getElementById("txtTamount");
var super_total = 0;
var itemCounter=0;
function addtoCart(e){
	//alert(e.parentNode.getElementsByTagName("a")[0].innerHTML);
	//alert(e.parentNode.parentNode.getElementsByTagName("h4")[0].innerHTML);
	pname.value = e.parentNode.getElementsByTagName("a")[0].innerHTML;
	amount.value =e.parentNode.parentNode.getElementsByTagName("h4")[0].innerHTML;
	t_amount.value = 0.00;
	qty.value = "";
	
}
function computeTamount(e){
	if(parseFloat(e)<0){return false;}
	t_amount.value=parseFloat(e)*parseFloat(amount.value);
}
function continue_cart(){
	super_total += parseFloat(t_amount.value);
	cartProduct[itemCounter] = pname.value;
	cartQuantity[itemCounter] = qty.value;
	cartAmount[itemCounter] = amount.value;
	//alert(super_total);
	itemCounter++;
}
function showcarts(){
	var tbl = document.getElementById("tbl_items");
	var i = 0;
	tbl.innerHTML = "";
	for(i=0;i<cartProduct.length;i++){
			tbl.innerHTML+="<tr><td>"+(i+1)+"</td><td>"+cartProduct[i]+"</td><td>"+cartQuantity[i]+"</td><td>"+cartAmount[i]+"</td><!--<td><button class='btn btn-danger' onclick = 'deleteItems(this.id)' id='"+i+"'>x</button></td>--></tr>";
	}
	
	document.getElementById("super_total").innerHTML = super_total.toFixed(2);
}
function deleteItems(e){
	//alert(cartProduct[e]);
	super_total-=(parseFloat(cartAmount[e])*parseFloat(cartQuantity[e]));
	cartProduct.splice(e);
	cartQuantity.splice(e);
	cartAmount.splice(e);
	itemCounter-=1;
	showcarts();
}
function save_now(){
	for(i=0;i<cartProduct.length;i++){
		$.ajax({
			type: "post",
			url: "../proj/save_items.php",
			data:{'t_qty': cartQuantity[i], 't_product': cartProduct[i], 't_amount': cartAmount[i]},
			cache:false,
			success: function(html){
				//$('#msg').html(html);
				document.getElementById("msg").innerHTML= "<div style ='margin:5px;' class='alert alert-success' id='a-msg'><h3>Publish Success! Refreshing Data...<i class='glyphicon glyphicon-reload'></i>";
				setTimeout("location.reload();",3000);
			}
		});
	}
}
</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	</body>

</html>
