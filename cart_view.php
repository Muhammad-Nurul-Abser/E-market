<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<h1 class="page-header">YOUR CART</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Quantity</th>
		        				<th>Subtotal</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
	        			</div>
	        		</div>
	        		<?php
	        			if(isset($_SESSION['user'])){
	        				echo "
                                <form action='sales.php' method='GET'>
                                    <select name='gateway'>
                                        <option value='bKash'>bKash</option>
                                        <option value='Nagad'>Nagad</option>
                                        <option value='Rocket'>Rocket</option>
                                    </select>
                                    <input type='text' name='pay' />
                                    <button type='submit'>Pay</button>
                                </form>
                                <div id='paypal-button'></div>
	        				";
	        			}
	        			else{
	        				echo "
	        					<h4>You need to <a href='login.php'>Login</a> to checkout.</h4>
	        				";
	        			}
	        		?>
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>

	    </div>
	  </div>
  	<?php $pdo->close(); ?>


	<!-- footer -->
	<footer class="Cfooter">
        <div class="container">
            <div class="grid">
                <div class="grid-item one">
                    <h6 style="color: aliceblue;">ABOUT</h6>
                    <p>
                        This website is the largest one-stop shopping destination in Bangladesh. Launched in 2021, the
                        online
                        store offers the widest range of products in categories ranging from Electronics to household
                        appliances, latest Smartphones, Camera, Computing & Accessories and Mobile Accessories.
                    </p>
                    <p>Follow us on to stay updated about our latest offers and promotions. Happy <span
                            class="onlnsppng">Online
                            shopping</span>!</p>
                </div>
                <div class="cat-section">
                    <div class=" two" >
                        <h6>CATEGORIES</h6>
                        <ul>
                            <li>Laptop</li>
                            <li>Desktop</li>
                            <li>Smartphone</li>
                            <li>Tablets</li>
                        </ul>
                    </div>
                    <div class=" three" >
                        <h6>QUICK LINKS</h6>
                        <ul>
                            <li>About Us</li>
                            <li>Contact Us</li>
                            <li>Contribute</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
			<hr>
				<div style="display: flex; justify-content: space-between">
					<div class="Allreserved">
						<p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by E-market/Zisan/Sezon/Shakil.
					</div>
					<div>
						<ul class="social-icons">
              				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              				<li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li>   
              				<li><a class="dribbble" href="#"><i class="fa fa-google"></i></a></li>
              				<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            			</ul>
					</div>
				</div>
        </div>
    </footer>
	<!-- footer end  -->
</div>





<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

	client: {
        sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
    	color: 'gold',
    	size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: {
                        	total: total,
                        	currency: 'USD'
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
			window.location = 'sales.php?gateway=PayPal&pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>
</body>

<style>
    .Cfooter {
        /* color: gray; */
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .container {}

    .cat-section {
        display: grid;
        grid-template-columns: auto auto;
		width: 50%;
    }

    h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .grid {
        display: flex;
    }

    .grid-item {
    }

    .one {
        width: 50%;
        text-align: justify;
        min-height: 12rem;
        padding: 0 15px 0 0;
    }

    .onlnsppng {
        background: -webkit-linear-gradient(blue, red);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .two {
        width: 100%;
        min-height: 12rem;
        padding: 0 15px 0 15px;
    }

    .two ul {
        padding-left: 0;
        list-style: none
    }

    .two ul li:hover {
        color: #3366cc;
    }

    .three {
        width: 100%;
        min-height: 12rem;
		margin-left: 19px;
        padding: 0 15px 0 15px;
    }

    .three ul {
        padding-left: 0;
        list-style: none
    }

    .three ul li:hover {
        color: #3366cc;
    }
	hr{
		border-top-color:#bbb;
  		opacity:0.5;
	}
	.Allreserved{
		padding-bottom: 1rem;
		padding-left: 0;
	}





.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:40px;
  height:40px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
</html>