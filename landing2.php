<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	
	
	<title>Document</title>
</head>
<style>
	.slidecontainer {
  position: relative;
  overflow: hidden;
  margin:  0;
  width: 100%;
  height: 500px;
}

.image {
	object-fit: cover;
  position: absolute;
  opacity: 1;
  min-width: 100%;
  height: 120%;
  transition: opacity 1s ease-in-out;
  z-index: -1;
  -webkit-animation: zoom 40s; /* Chrome, Safari, Opera */
  animation: zoom 50s alternate;
  
}


/* Chrome, Safari, Opera */
@-webkit-keyframes zoom {
    from {
    	-webkit-transform: scale(1,1);
    }
    to {
    	-webkit-transform: scale(1.2,1.2);
    }
}

/* Standard syntax */
@keyframes zoom {
   from {
        transform: scale(1,1);
   }
   to {
        transform: scale(1.2,1.2);
   }
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 32px;
}
.bottom-left h1{
	color: #fff;
	text-shadow: 2px 2px #000;
	letter-spacing: 1px;
	font-weight: 600;
	text-transform: capitalize;
}

.package {
	margin-top: 40px;	
	height: 400px;
	overflow: hidden;
	display: flex;
		flex-direction: row;
		justify-content: space-between;
}
.packImg{
	flex: 1;
}
.package img{
	width: 400px;
	object-fit: cover;
}
.price{
	flex: 1;
	margin-left: 30px;
}
.inline .head{
	margin-bottom: 20px;
	font-size: 14px;
	font-weight: bold;
	color: 
#7d7d7d
;

}
dl.inline dd{
	display: inline;
	margin-left: : 50%;


}

dl.inline dd:after{
	display: block;
	content: " ";
	clear: left;
	 border-bottom: 2px dashed #ccc;
	 margin-bottom: 30px;
}

dl.inline dt{
	display: inline-block;
	min-width: 200px;
	font-weight: bold;
	font-size: 15px;
}
	.headImg {
		margin: 50px ;
		width: 1400px;	
		font-size: 16px;
		display: flex;

		flex-direction: row;
		justify-content: space-between;
	}

	.headImg .first {
		
		flex: 3;
		letter-spacing: 1px;
		font-weight: 500;

	}
	.headImg .first h3{
		margin: 20px 0;
	}

	.headImg .second  {
		flex: 1;
		margin-left: 50px;
		
	}
	.headImg .second img{
		width: 300px;
		object-fit: cover;
	}



.testimonial-quote blockquote {
  /* Negate theme styles */
  border: 0;
  margin: 0;
  padding: 0;
  background: none;
  color: gray;
  font-family: Georgia, serif;
  font-size: 1.5em;
  font-style: italic;
  line-height: 1.4 !important;
  margin: 0 25px 0;
  position: relative;
  text-shadow: 0 1px #fff;
  z-index: 1;
}



.testimonial-quote blockquote p {
  color: #75808a;
  line-height: 1.4 !important;
}

.testimonial-quote blockquote p:first-child:before { /* quotemarks */
  content: '\201C';
  color: #39BBCE;
  font-size: 7.5em;
  font-weight: 700;
  opacity: .3;
  position: absolute;
  top: -.4em;
  left: -.2em;
  text-shadow: none;
  z-index: -300;
}

.testimonial-quote img {
  border: 4px solid #39BBCE;
  border-radius: 50%;
  display: block;
  width: 120px;
  height: 120px;
  object-fit: cover;
  position: absolute;
  top: -.3em;
  left: 0;
}

.testimonial-quote cite {
  color: gray;
  margin-top: 10px;
  margin-left: -150px;
  display: block;
  font-size: .8em;
}

.testimonial-quote cite span {
  color: #39BBCE;
  font-size: 1em;
  font-style: normal;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-shadow: 0 1px white;
}

.testimonial-quote {
  position: relative;
  margin: 50px 0;
}

.testimonial-quote .quote-container {
  padding-left: 160px;
}

ul{
  list-style:none;
  list-style-type: square;

}



</style>
<body>

	<?php include("common/active.php"); ?>

	<?php 
		if(isset($_GET['article'])) {
			switch ($_GET['article']) {
				case '1':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post9.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Beginner Courses</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">Catch your first waves just in front of the hotel, surf teachers from our surf school Sunshinestories will take you out and get you up and standing in no time. Learning how to surf is for everyone and the feeling of sliding across the ocean is incredible. At Weligama beach just in front of Ceylon Sliders we have some of the best surf conditions in the world for a learner.</p>
			<h3> This lesson is for you if</h3>
			<ul>
				<li>You have never surfed before or you have had a lesson or two or you haven’t surfed for sometime. You might be able to stand up and ride whitewater waves but you have limited skill or experience at paddling out to the unbroken waves.</li>
				<li>You want to get a feel for surfing; you will learn the fundamentals of surfing – with these skills and experience you will begin pushing ‘outside’ to unbroken waves.</li>
			</ul>
			<div class="package">

				<img src="img/sub1.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">We offer experienced professional instructors in small groups which allows for fast learning and lots of fun. Our lessons begin on the beach and in the easier white waves where we take you through the basic theory and techniques of surfing..</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 100USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			
				  
				    <div class="testimonial-quote group">
				        <img src="img/prof1.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Had my first ever surf lesson here and it was incredible! We were recommended Freedom as the best surf school in Weligama by our hostel and I see why- I got a one-to-one lesson for 2000 LKR and my teacher was patient, encouraging and gave me feedback on how to improve each time I didn't manage to stand up! ”</p>
				            </blockquote>  
				            <cite><span>Olivia Williams</span><br>
				                USA
				            </cite>
				        </div>
      
   					</div>
   				
   			
			
			<div class="package">

				<img src="img/sub2.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">Three to six people in the group but need to be booked as a with minimum 3 people. Unou Other guests may join this lesson. Too book a private group lesson and guarantee other students won't join the particular lesson we will charge the duo rates. Price per person.</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 50USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			</div>

			<div class="second">
				<?php include("common/surf-catogery.php"); ?>

			</div>
			
		</div>

	<?php
					break;
				case '2':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post10.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Intermediate Courses</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">Have you been surfing for some time, but feel like you struggle on the board? The developing lesson might be the best thing you’ve ever done. Our surf teachers will help you get over any obstacles you have and maximise your progression. We’ll take you to the best suitable surf spot for your level and requirements on the south coast and help you progress in your surfing as well as having a good time together.</p>
			<h3> This lesson is for you if</h3>
			<ul>
				<li>You can handle your board and paddle out the back and ride unbroken waves successfully most of the time. You might be able to perform some basic moves like cutbacks or little floaters on whitewater sections.</li>
				<li>You want to push your limits; you will finetune your paddle, stance and style and begin developing more radical manoeuvers surfing both frontside and backside.</li>
			</ul>
			<div class="package">
				<img src="img/sub4.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">We offer experienced professional instructors in small groups which allows for fast learning and lots of fun. Our lessons begin on the beach and in the easier white waves where we take you through the basic theory and techniques of surfing..</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 100USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>

			<div id="kudo-wrap"> 
				  <div class="adj-layer">
				    <!-- <h1>Kudos</h1> -->
				    <div class="testimonial-quote group">
				        <img src="img/prof2.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit justo augue, vitae lobortis sapien interdum ut. Phasellus condimentum leo ut sem pulvinar, in sodales erat feugiat. Pellentesque ac cursus odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ”</p>
				            </blockquote>  
				            <cite><span>Jan Baby</span><br>
				                RMT<br>
				                TLC Medical Massage
				            </cite>
				        </div>
      
   					</div>
   				</div>
   			</div>

			<div class="package">

				<img src="img/sub3.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">Three to six people in the group but need to be booked as a with minimum 3 people. Unou Other guests may join this lesson. Too book a private group lesson and guarantee other students won't join the particular lesson we will charge the duo rates. Price per person.</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 50USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			</div>
			<div class="second">
				<?php include("common/surf-catogery.php"); ?>
			</div>
			
		</div>
	<?php
					break;
				case '3':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post11.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Advanced Courses</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">The level 3 lessons are for available for longboarders and shortboarders alike that want to take their surfing to the next level – we’ll match you with the best coach depending on what your expectation of the lesson and preference of board.  Have you been surfing some time, maybe even for a few years but feel stuck in your progression? With the level 3 lessons, we’ll take you out and analyze your surfing to pinpoint what you need to do to progress into becoming a styling longboarder or frothing shortboarder. Our surf teachers will take help you get over any obstacles you have and maximize your progression. We’ll take you to the best suitable surf spot for your level and requirements on the south coast and help you progress in your surfing as well as having a good time together.</p>
			<h3> This lesson is for you if</h3>
			<ul>
				<li>You’re an experienced surfer and can surf a wide range of conditions with confidence without the help of an in-water coach. You consistently trim, know how to generate speed or stall, perform basic moves and are at least attempting more advanced ones. You can handle yourself in crowds.</li>
				<li>You want to develop your board skills; you will work on perfecting your bottom turns or your stall to cross step, turning cutbacks into round houses or dropknee cutbacks, pushing top turns into airs and barrels or push towards the nose – cheater five’s, hang fives and hang tens.</li>
			</ul>
			<div class="package">

				<img src="img/sub5.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">We offer experienced professional instructors in small groups which allows for fast learning and lots of fun. Our lessons begin on the beach and in the easier white waves where we take you through the basic theory and techniques of surfing..</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 100USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>

			<div id="kudo-wrap"> 
				  <div class="adj-layer">
				    <!-- <h1>Kudos</h1> -->
				    <div class="testimonial-quote group">
				        <img src="img/prof3.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit justo augue, vitae lobortis sapien interdum ut. Phasellus condimentum leo ut sem pulvinar, in sodales erat feugiat. Pellentesque ac cursus odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ”</p>
				            </blockquote>  
				            <cite><span>Jan Baby</span><br>
				                RMT<br>
				                TLC Medical Massage
				            </cite>
				        </div>
      
   					</div>
   				</div>
   			</div>

			<div class="package">

				<img src="img/sub6.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">Three to six people in the group but need to be booked as a with minimum 3 people. Unou Other guests may join this lesson. Too book a private group lesson and guarantee other students won't join the particular lesson we will charge the duo rates. Price per person.</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 50USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			</div>
			<div class="second">
				<?php include("common/surf-catogery.php"); ?>
			</div>
			
		</div>
	<?php
					break;
				case '4':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post12.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Group Lesson</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	

			<h3> AT A GLANCE</h3>
			<div class="package">

				<img src="img/sub7.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">We offer experienced professional instructors in small groups which allows for fast learning and lots of fun. Our lessons begin on the beach and in the easier white waves where we take you through the basic theory and techniques of surfing..</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 100USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>

			<div id="kudo-wrap"> 
				  <div class="adj-layer">
				    <!-- <h1>Kudos</h1> -->
				    <div class="testimonial-quote group">
				        <img src="img/prof4.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit justo augue, vitae lobortis sapien interdum ut. Phasellus condimentum leo ut sem pulvinar, in sodales erat feugiat. Pellentesque ac cursus odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ”</p>
				            </blockquote>  
				            <cite><span>Jan Baby</span><br>
				                RMT<br>
				                TLC Medical Massage
				            </cite>
				        </div>
      
   					</div>
   				</div>
   			</div>

			<div class="package">

				<img src="img/sub8.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">Three to six people in the group but need to be booked as a with minimum 3 people. Unou Other guests may join this lesson. Too book a private group lesson and guarantee other students won't join the particular lesson we will charge the duo rates. Price per person.</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 50USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			</div>
			<div class="second">
				<?php include("common/surf-catogery.php"); ?>
			</div>
			
		</div>
	
	<?php
					break;
				case '5':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post13.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Solo lesson</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	

			<h3> AT A GLANCE</h3>
			<div class="package">

				<img src="img/sub9.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">We offer experienced professional instructors in small groups which allows for fast learning and lots of fun. Our lessons begin on the beach and in the easier white waves where we take you through the basic theory and techniques of surfing..</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 100USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>

			<div id="kudo-wrap"> 
				  <div class="adj-layer">
				    <!-- <h1>Kudos</h1> -->
				    <div class="testimonial-quote group">
				        <img src="img/prof5.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit justo augue, vitae lobortis sapien interdum ut. Phasellus condimentum leo ut sem pulvinar, in sodales erat feugiat. Pellentesque ac cursus odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ”</p>
				            </blockquote>  
				            <cite><span>Jan Baby</span><br>
				                RMT<br>
				                TLC Medical Massage
				            </cite>
				        </div>
      
   					</div>
   				</div>
   			</div>

			<div class="package">

				<img src="img/sub10.jpg" alt="" class="packImg">
				<div class="price">
					<dl class="inline">
						<p class="head">Three to six people in the group but need to be booked as a with minimum 3 people. Unou Other guests may join this lesson. Too book a private group lesson and guarantee other students won't join the particular lesson we will charge the duo rates. Price per person.</p>
						<dt>TOUR INCLUDES:</dt>
						<dd>Camp, Board, Shoes</dd>
						<dt>DAILY TIMES:</dt>
						<dd>Tours start 9am daily</dd>
						<dt>SHEDULE:</dt>
						<dd>4 hrs long tour</dd>
						<dt>PRICES:</dt>
						<dd>1 Lesson - 50USD</dd>
					</dl>
					<a class="btn" href="">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				
			</div>
			</div>
			<div class="second">
				<?php include("common/surf-catogery.php"); ?>
			</div>
			
		</div>
	<?php
					break;
				default:
					# code...
					break;
			}
		} else {
			echo "not set";
		}
	?>
	<?php include("common/footer.php"); ?>

	
</body>
</html>