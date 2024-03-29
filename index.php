<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
   <header class="header">
      <a href="index.php"><img src="images/logogo.jpg" alt=""></a>
       <nav class="navbar">
           <a href="index.php">home</a>
		   <a href="login.html">Log In</a>
		   <a href="equipment.php">Reserve A Studio</a>
		   <a href="booking_info.php">Booking Info</a>
           <a href="about.html">about</a>
           <a href="contact.html">contact</a>
		   <a href="location.html">location</a>
           <a href="admin.php">admin</a>
		   <a href="logout.php">Log Out</a>

		   
       </nav>
       <div class="icons">
           <div id="search-bar" class="fas fa-search"></div>
           <div id="menu-bar" class="fas fa-bars"></div>
       </div>

      <form action="" id="search-form">
          <input type="search" placeholder="search here">
      </form>
   </header>
   
<!-- main background -->

<div class="background-main">

    <div class="main-background-content">
	
        <h1>Welcome to 1DANCE STUDIO <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>!</h1>
    <p>Welcome to 1DANCE STUDIO! Step into a world where the beat never stops and the energy is contagious. Our studio is more than just a place to dance – it's a home for creativity, expression, and connection. 
	Offering a diverse range of classes and workshops, from the graceful movements to the intricate steps of tap dance, the lively rhythms of Irish dance, and the spirited footwork of clogging dance,
	there's something for everyone.</p>
	
	<p>Plus, you can now book our studios for the whole day, giving you uninterrupted access to perfect your craft. Whether you're refining your technique,
	or simply immersing yourself in the joy of movement, you'll find a opportunities for growth at 1DANCE STUDIO. Come join us and let your dance journey unfold!</p>
    <a href='register.html'>Register now</a>
    </div>
    
</div>


<!-- dance tour  -->


<div class="main-dance">

    <div class="dance-headings">
        <h1>Dance tour</h1>
    <p>We served 3 Dance Studios</p>
    </div>

<div class="mian-dance-inner">
    <div class="inner-dance">
        <img src="images/tapdance.jpg" alt="">
        <div class="dance-content">
            <h2>Tap Dance</h2>
            <p>
			A type of dance characterized by the use of metal plates attached to the dancer's shoes, 
            which create percussive sounds when they come into contact with the floor. It emphasizes rhythm and 
            syncopation, and dancers often create intricate patterns with their feet.
			</p>
        </div>
    </div>

    <div class="inner-dance">
        <img src="images/irishdance.jfif" alt="">
        <div class="dance-content">
            <h2>Irish Dance</h2>
            <p>
			Irish dance is a traditional form of dance originating from Ireland. It is known for its rapid leg 
            and foot movements, with dancers often performing intricate steps while keeping their upper body 
            relatively still. Irish dance is often accompanied by lively Irish music.
			</p>
        </div>
    </div>

    <div class="inner-dance">
        <img src="images/cloggingdance.jpg" alt="">
        <div class="dance-content">
            <h2>Clogging Dance</h2>
            <p>
			Clogging is a type of folk dance that originated in the Appalachian region of the United States. 
            It involves dancers wearing special shoes with taps on the toe and heel, which create rhythmic 
            sounds when struck against a hard surface. It unusual because it has also been influenced by Native American dance.
			</p>
        </div>
    </div>
</div>
</div>


<!-- pricing -->
<div id="price" class="main-pricing-container">

<h1>Equipment Price</h1>

<div class="main-price">
    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Speaker</h2>
            <p>RM 15.00</p>
        </div>
        <a href="#">Book now</a>
    </div>

    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Mirror</h2>
            <p>RM 15.00</p>
        </div>
        <a href="#">Book now</a>
    </div>

    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Tap Dance Shoe</h2>
            <p>RM 100.00 for 15 person</p>
        </div>
        <a href="#">Book now</a>
    </div>
	
	<div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Irish Dance Shoe</h2>
            <p>RM 100.00 for 15 person</p>
        </div>
        <a href="#">Book now</a>
    </div>
	
	<div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Clogging Dance Shoe</h2>
            <p>RM 120.00 for 15 person</p>
        </div>
        <a href="#">Book now</a>
    </div>
	
	
	
</div>
</div>

<!-- pricing -->
<div id="price" class="main-pricing-container">

<h1>Our Studio Price </h1>

<div class="main-price">
    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Tap Dance Studio</h2>
			<h2>Fit 15 person</h2>
            <p>RM 40.00</p>
        </div>
        <a href="#">Book now</a>
    </div>

    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Irish Dance Studio</h2>
			<h2>Fit 15 person</h2>
            <p>RM 40.00</p>
        </div>
        <a href="#">Book now</a>
    </div>

    <div class="inner-price">
        <i class="fas fa-award"></i>
        <div class="price-content">
            <h2>Clogging Dance Studio</h2>
			<h2>Fit 15 person</h2>
            <p>RM 50.00</p>
        </div>
        <a href="#">Book now</a>
    </div>
</div>
</div>


<!-- Amazing dance -->
<div class="amazing-dance">
    <h1>Our Studio</h1>
    <div class="main-amazing">
        <div class="inner-amazing">
            <img src="images/studio1.jpg" alt="">
        </div>

        <div class="inner-amazing">
            <div class="amazing-content">
                <h1>Tap Dance Studio</h1>
            <p>A tap dance studio is a dedicated space where individuals can learn and perfect the art of tap dancing. Equipped with specialized floors, mirrors, sound systems and with their tap dance shoes.  
				The tap dance studio, tailored to fit 15 people comfortably, spans an area that typically measures around 20 feet by 30 feet. This size allows ample space for each dancer to move freely and 
				practice their routines without feeling cramped. Additionally, the layout is optimized to ensure that everyone has a clear view of the instructor and ample room to perfect their moves.
			</p>
            <a href="#">Register now</a>
            </div>
            
        </div>
    </div>

    <div class="main-amazing">
    
        <div class="inner-amazing">
            <div class="amazing-content">
                <h1>Irish dance studio</h1>
            <p>An Irish dance studio provides a dedicated space for learning traditional Irish dance forms. It's equipped with suitable flooring, special shoes and often mirrors for practice
				A studio designed to comfortably accommodate 15 individuals typically spans an area of approximately 25 feet by 30 feet. This size allows ample room for each dancer to move freely
				and practice their routines without feeling crowded. With this spacious layout, dancers can fully engage in their lessons, ensuring a productive and enjoyable learning experience.
			</p>
            <a href="#">Register now</a>
            </div>
            
        </div>
        <div class="inner-amazing">
            <img src="images/studio2.jpeg" alt="">
        </div>
    </div>
</div>

<div class="amazing-dance">

    <div class="main-amazing">
	
        <div class="inner-amazing">
            <img src="images/studio3.jpg" alt="">
        </div>

        <div class="inner-amazing">
            <div class="amazing-content">
                <h1>Clogging dance studio</h1>
            <p>A clogging dance studio is a specialized place where people can learn and practice clogging, a rhythmic dance style originating from the Appalachian region.
			These studios typically have suitable flooring and use their clogging dance shoes.
			The clogging studio, for 15 dancers, hums with Appalachian beats in its cozy 20x30 feet space. Specially designed floors amplify rhythms, while mirrors aid technique.
			</p>
            <a href="#">Register now</a>
            </div>
            
        </div>
    </div>







<!-- subscribe us -->

<div class="subscribe">
    <div class="subscribe-content">
        <h1>Subscribe us</h1>
        <p></p>
        <div class="myform">
            <input type="email" placeholder="email here"><span>Subscribe</span>
        </div>
    </div>
    
</div>

    <script src="script.js"></script>
</body>
</html>