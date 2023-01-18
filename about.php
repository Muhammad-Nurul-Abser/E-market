<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>
        <div class="content-wrapper">
            
        <div class="main">
        <!-- about us -->
        <div class="title">
            <div class="text-center">
                <h1>About Us</h1>
                <h3 class="secret">The Secret Behind Refurbished Phones</h3>
                <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error harum doloremque
                    autem sunt, placeat vel ea voluptatibus quae alias tempora quo aperiam repellendus nam labore
                    blanditiis inventore temporibus quod. Iste non voluptatibus est accusamus unde vitae doloribus
                    eveniet quisquam earum. Possimus consequatur tenetur commodi ut voluptatum veniam voluptatibus?
                    Asperiores, reiciendis!</p>
            </div>
        </div>

        <!-- count brands/stores/clients -->
        <div class="counter">
            <!-- brands -->
            <div class="brands">
                <h3><span>225</span></h3>
                <p class=""><small>Brands</small></p>
            </div>

            <!-- stors -->
            <div class="stores">
                <h3><span>14</span></h3>
                <p><small>Stores</small></p>
            </div>

            <!-- clients -->
            <div class="clients">
                <h3><span>632</span></h3>
                <p><small>Happy Clients</small></p>
            </div>
        </div>

        <!-- image -->
        <div class="image">
            <img src="img/gadget.jpg" alt="" class="img-fluid">
        </div>

        <!-- card -->
        <div class="announcement">
            <!-- discount -->
            <div class="discount">
                <div class="speaker">
                    <img src="img/speaker.png" alt="" class="img-speaker">
                </div>
                <div class="containertext">
                    <h3>Discount Club</h3>
                    <p>Sign up for our Discount Club's Mobile and Watch</p>
                </div>
            </div>

            <!-- installment -->
            <div class="installment">
                <div class="timer">
                    <img src="img/timer.png" alt="" class="img-timer">
                </div>
                <div class="containertext">
                    <h3>Buy in Installments</h3>
                    <p>Purchase any item with an installment payment option</p>
                </div>
            </div>

            <!-- gift -->
            <div class="gift">
                <div class="giftbox">
                    <img src="img/gift.png" alt="" class="img-gift">
                </div>
                <div class="containertext">
                    <h3>Gift Cards</h3>
                    <p>Present your family and friends with our Gift Cards</p>
                </div>
            </div>
        </div>

        <!-- text -->
        <div class="secret-behind">
            <div class=" w-50 mx-auto py-3">
                <h3 class="behind-text">The Secret Behind Refurbished Phones and Watches</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatum ut explicabo cumque
                    doloremque distinctio fuga quae molestias minima, laudantium, excepturi quam consectetur amet
                    ducimus rerum, iste accusantium? Quia possimus velit obcaecati nulla nobis autem esse recusandae
                    labore fuga. Aliquid asperiores voluptatem voluptatum accusamus, nam architecto nihil commodi
                    tenetur vero placeat hic recusandae. Eos accusantium totam labore, maxime quam optio! Quasi eligendi
                    rem quisquam modi iure, dignissimos magnam dolorum consequatur consequuntur et beatae, aut
                    doloremque in nam neque eum. Sed sapiente nam delectus animi rerum suscipit odio unde ducimus iste
                    quaerat voluptatum voluptatem, officiis necessitatibus, laboriosam nisi! Aliquam debitis odit quos
                    maiores sunt, iste ipsum cumque consectetur illo harum quis corrupti. Corporis quibusdam eaque
                    cupiditate voluptatibus iure sunt tenetur laudantium veniam corrupti repudiandae, facere sapiente
                    eligendi sequi tempore molestias nisi, enim, minima rerum ut temporibus eos? Culpa, ipsum quo,
                    dolore ab harum tempora, consequuntur eaque itaque sed aperiam vero? Rerum.</p>
            </div>
        </div>

        <!-- statistics -->
        <div class="statistics pb-5">
            <div class="progressbar">
                <h4 class="discountClub">Discount Club</h4>
                <div class="containerP">
                    <div class="progress progress-striped">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                </div>
            </div>

            <div class="progressbar ">
                <h4 class="installment">Buy in Installments</h4>
                <div class="containerP">
                    <div class="progress progress-stripedIN">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>

            <div class="progressbar">
                <h4 class="giftCard">Gift Cards</h4>
                <div class="containerP">
                    <div class="progress progress-stripedGi">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="founderspeach">
            <div class="foundertext text-center mx-auto">
                <h3>The Founder</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sequi rerum amet, nemo magni odit
                    impedit suscipit ipsam quisquam ad nam voluptatum quis similique expedita doloremque totam quaerat
                    quasi commodi? Doloremque ad corrupti incidunt magnam quam quo excepturi, at modi commodi
                    dignissimos harum quae totam aliquid illo. Possimus, sequi. Quia!</p>
            </div>
        </div>
    </div>


        </div>
    <?php include 'includes/footer.php'; ?>
    </div>
</body>
<style>
.content-wrapper{
	background-color: white;
}
.main{
    width: 100%;
    min-height: 15rem;
}

.title{
    margin: 0 5rem;
    padding: 3rem 0;
}
.title .text-center{
    text-align: center;
}
.title .text-center .secret{
    margin-top: 4rem;
}

.counter{
    width: 100%;
    background-color: rgb(250, 237, 237);
    display: flex;
    justify-content: center;
    padding: 2rem 0rem;
}
.counter .brands{
    width: 25%;
    display: block;
    text-align: center;
}
.counter .stores{
    width: 25%;
    display: block;
    text-align: center;
}
.counter .clients{
    width: 25%;
    display: block;
    text-align: center;
}

.image{
    width: 100%;
    height: 35rem;
}
.image .img-fluid{
    width: 100%;
    height: 100%;
}
/* announcement */
/* discount */
.announcement{
    margin-top: 70px;
    padding: 5px 0;
    display: flex;
    justify-content: space-around;
}
.announcement .discount{
    width: 28%;
    height: 25rem;
    text-align: center;
    border: 2px solid rgba(0, 0, 0, 0.185);
}
.announcement .discount .speaker{
    width: 6rem;
    height: 6rem;
    text-align: center;
    border-radius: 50%;
    margin:60px auto 0 auto;
    border: 2px solid rgba(0, 0, 0, 0.473);
}
.announcement .discount .speaker img{
    width: 4rem;
    height: 4rem;
    margin-top: 8px;
    border-radius: 50%;
}

/* installment */
.announcement .installment{
    width: 28%;
    height: 25rem;
    text-align: center;
    border: 2px solid rgba(0, 0, 0, 0.185);
}
.announcement .installment .timer{
    width: 6rem;
    height: 6rem;
    text-align: center;
    border-radius: 50%;
    margin:60px auto 0 auto;
    border: 2px solid rgba(0, 0, 0, 0.473);
}
.announcement .installment .timer img{
    width: 4rem;
    height: 4rem;
    margin-top: 8px;
}


/* gift */
.announcement .gift{
    width: 28%;
    height: 25rem;
    text-align: center;
    border: 2px solid rgba(0, 0, 0, 0.185);
    margin-bottom: 1rem;
}
.announcement .gift .giftbox{
    width: 6rem;
    height: 6rem;
    text-align: center;
    border-radius: 50%;
    margin:60px auto 0 auto;
    border: 2px solid rgba(0, 0, 0, 0.473);
}
.announcement .gift .giftbox img{
    width: 4rem;
    height: 4rem;
    margin-top: 8px;
}


/* secret behind text */
.secret-behind{
    text-align: center;
    padding: 2rem 0;
    margin: 0px 5rem 0rem 5rem;
}
.secret-behind div{
    width: 50%;
    margin: 0 auto 0 auto;
}
.secret-behind div h3{
    margin-top: 4rem;
    margin-bottom: 2rem;
}
.secret-behind div p{
    white-space: normal;
    text-align: justify;
}

/* statistics */
.statistics{
    margin: 0 5rem;
    padding: 2rem 0;
}
.statistics .progressbar{
    width: 50%;
    margin: auto;
}
/* ...................... */

.containerP {
    width: 100%;
    text-align: center;
  }
  
  .progress {
    padding: 5px;
    background: rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.08);
  }
  
  .progress-bar {	
    height: 10px;
      /* background-color: #ee303c;   */
    border-radius: 4px;
    color: black;
    transition: 0.4s linear;  
    transition-property: width, background-color;  
    line-height: 9px!important;
  }
  
  .progress-striped .progress-bar { 	
    background-color: #FCBC51; 
    width: 100%; 
    background-image: linear-gradient(
          45deg, rgb(252,163,17) 25%, 
          transparent 25%, transparent 50%, 
          rgb(252,163,17) 50%, rgb(252,163,17) 75%,
          transparent 75%, transparent); 
    animation: progressAnimationStrike 6s;
  }
  .progress-stripedIN .progress-bar { 	
    background-color: #FCBC51; 
    width: 100%;
    background-size: 40px 40px;
    background-image: linear-gradient(
          45deg, rgb(252,163,17) 25%, 
          transparent 25%, transparent 50%, 
          rgb(252,163,17) 50%, rgb(252,163,17) 75%,
          transparent 75%, transparent); 
    animation: progressAnimationStrikeIN 6s;
  }
  .progress-stripedGi .progress-bar { 	
    background-color: #FCBC51; 
    width: 100%;
    background-size: 40px 40px;
    background-image: linear-gradient(
          45deg, rgb(252,163,17) 25%, 
          transparent 25%, transparent 50%, 
          rgb(252,163,17) 50%, rgb(252,163,17) 75%,
          transparent 75%, transparent); 
    animation: progressAnimationStrikeGi 6s;
  }
  
  @keyframes progressAnimationStrike {
       from { width: 0 }
       to   { width: 55% }
  }
  @keyframes progressAnimationStrikeIN {
       from { width: 0 }
       to   { width: 70% }
  }
  @keyframes progressAnimationStrikeGi {
       from { width: 0 }
       to   { width: 80% }
  }
  /* ................ */
  
/* foundertext */
.founderspeach{
    background-color: rgb(250, 237, 237);
    padding: 3rem 0;
    margin-bottom: 0rem;

}
.foundertext{
    width: 80%;
    margin: auto;
    text-align: justify;
    margin-top: 2rem;
    text-align: center;
    margin-bottom: 3rem;
}
</style>