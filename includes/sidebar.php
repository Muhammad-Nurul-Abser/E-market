
<div style="width: 100%;height:28.6rem; margin-bottom: 11rem;">
	<img style="width: 100%; height: 100%;" src="img/buy-laptop.png" alt="">
</div>


<div style="width: 100%;height:20rem; margin-bottom: 10rem">
	<img style="width: 100%; height: 100%;" src="img/big-sale.jpg" alt="">
</div>

<!-- <div style="width: 27rem;height:20rem; margin-bottom: 10rem">
	<img style="width: 100%; height: 100%;" src="img/pexels.jpg" alt="">
</div> -->
<div class="card">
    <div class="image">
        <img src="img/friday.jpg" alt="">
        <div class="date">
            <span class="day">11</span>
            <span class="month">DEC</span>
            <span class="year">2022</span>
        </div>
        <div class="discount">
            <span class="offer">20% OFF</span>
            <span class="offerN">(Digital payment)</span>
        </div>
        <div class="logo">
            <img src="images/market.png" alt="">
        </div>
    </div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Become a Subscriber</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Get free updates on the latest products and discounts, straight to your inbox.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
	    	<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  	</div>
	</div>
</div>



<Style>
	.card {
		height: 47rem;
		width: 100%
		cursor: pointer;
		margin-bottom: 15rem;
		box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }

    .image {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .image img {
        width: 100%;
        height: 100%;
    }

    .date{
        position: absolute;
        top: 0;
        left: 10px;
        width: 5.9rem;
		height: 10rem;
		cursor: default;
        text-align: center;
        background-color: rgb(0, 238, 255);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .date .day{
        color: tomato;
        font-size: 35px;
        font-weight: 500;
		cursor: default;
    }
	.date .month{
		font-size: 16px;
		cursor: default;
	}
	.date .year{
		font-size: 16px;
		cursor: default;
	}

    .discount{
        position: absolute;
        top: 405px;
        left: 10px;
        width: 8rem;
		color: #FE0000;
		font-weight: 600;
        border-radius: 5px;
        padding-top: 5px;
		cursor: default;
        padding-bottom: 5px;
        text-align: center;
        background-color: rgb(0, 238, 255);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .discount .offerN{
        font-size: 10px;
		cursor: default;
    }

    .logo{
        position: absolute;
		cursor: default;
        top: 415px;
        left: 175px;
        width: 8rem;
        border-radius: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: center;
        background: transparent;
    }
</Style>