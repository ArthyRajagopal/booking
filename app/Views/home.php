<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
}

.icon {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 10%;
}

.card img{
    height:200px;
    transition: 1s;
}

.card-head{
    overflow:hidden;
}

.card img:hover{
    transform: scale(1.5);
    transition: 1s;
}

h5{
    text-color:black;
}
.carousel-item {

    opacity: 0.5;
}
.carousel-item:hover {
  opacity: 1.0;
}
.container{
    z-index: 1;
}
.hi{
    z-index: 1;
}
.my{
    z-index: 2;
}
.content{
  text-align: center;
  transition: back 20s linear infinite;
  background-image: url("img/t1.jpeg");
}

.contents{
  text-align: center;
}

.content p{
  font-size: 50px;
  color: #fff;
  font-weight: 600;

}
.content a{
  text-decoration: none;
  display: inline-block;
  color: white;
  font-size: 50px;
  border: 2px solid #fff;
  padding: 14px 70px;
  border-radius: 50px;
  margin-top: 20px;
}

video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: center;
     object-position: center;
}


.back-video{
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: -1;
  background-size: cover;
  background-position: center;
}

@media (min-aspect-ratio: 16/9){
  .back-video{
    width:100%
    height: auto;
  }
}
@media (max-aspect-ratio: 16/9){
  .back-video{
    width:auto;
    height: 100%;
    }
}

/gallery/

index.html
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.containers{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 40px 20px 0 20px;
}

.containers .heading{
  width: 50%;
  padding-bottom: 50px;
}
.containers .heading h3{
  font-size: 3em;
  font-weight: bolder;
  padding-bottom: 10px;
  border-bottom: 3px solid #222;
  color: orange;
}

.containers .heading h3 span{
  font-weight: 100;
}
.containers .box{
 display: flex;
 flex-direction: row;
 justify-content: space-between;
}


.containers .box .dream{
  display: flex;
  flex-direction: column;
  width: 32.5%;
}

.containers .box .dream img{
  width: 100%;
  padding-bottom: 15px;
  border-radius: 5px;
}

.containers .btn{
  margin: 40px 0 70px 0;
  background: #222;
  padding: 15px 40px ;
  border-radius: 5px;
}

.containers .btn a{
 color: #fff;
 font-size: 1.2em;
 text-decoration: none;
 font-weight: bolder;
 letter-spacing: 3px;
}

@media only screen and (max-width: 769px){
    .containers .box{
   flex-direction: column;
  }

.containers .box .dream{
  width: 100%;
}

}

@media only screen and (max-width: 643px){
.containers .heading{
  width: 100%;
}
.containers.heading h3{
  font-size: 1em;

}
}

/* map */
.about-section{


    background: linear-gradient(to right, rgba(4,168,100,1) 0%, rgba(106,193,96,1) 100%);
    z-index: 1;
}

.about-section::before {
    
    color: #616161;
    position: absolute;
    left: 10px;
    bottom: -16px;
    font-size: 275px;
    z-index: 1;
    font-family: lucoCleanBold;
    line-height: 1;
    opacity: 0.2;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}
* {
    outline: none !important;
}
*, ::after, ::before {
    box-sizing: border-box;
}

.text-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
.animated-text {
  font-size: 50px;
  position: relative;
  animation: move-right 5s linear ;
}
@keyframes move-right {
  0% {
    right: 100%;
  }
  100% {
    right:0%;
  }
}
.animate-text {
  font-size: 50px;
  position: relative;
  animation: move-left 5s linear ;
}
@keyframes move-left {
  0% {
    left: 100%;
  }
  100% {
    left:0%;
  }
}

</style>
<br><br><br>


<div class="hero">
  <video autoplay loop muted plays-inline class="back-video"width="1500"height="700">
    <source src="img/vid.mp4" type="video/mp4">
  </video>

<div class="content" style="strong: 200px;">
  <b>
  <div class="text-container"style="padding-bottom: 270px;padding-top: 270px;">

  <style>


body{
    justify-content:center;
    align-items:center;
}
.content{
     position: relative;
}

.content h4{
    position: absolute;
    transform:translate(-30%,-30%);
    font-size:6em;
}
.content h4:nth-child(1){
     color:transparent;
     -webkit-text-stroke:2px #ff3300;
}
.content h4:nth-child(2){
     color:#ff3300;
     animation:animate 4s ease-in-out infinite;
}
@keyframes animate{
    0%,100%{
      clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
    }
    50%{
      clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
    }
}
</style>

<div class="content">
<h4>VEEGO</h4>
<h4>VEEGO</h4>

<h3 style="padding-top: 95px;padding-left: 50px;color:blue;font-weight:bolder;">Play And Connect</h3>
</div>
  </div></b>
  

</div>


<!--<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
	    	<div class="carousel-indicators">
	    		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1 "style="color:blue"></button>
		    	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  		</div>
	  	<div class="carousel-inner">
	    	<div class="carousel-item active" >
	      		<img src="img/imgm1.jpg"  width="1500" height="500"  class="center" >
	      		<div class="carousel-caption">
	        	<h5>Fun</h5>
	        	<p>Some representative placeholder content for the first slide. !! stylist car!!</p>
	        	<p><a href="#" class="btn btn-warning mt-3">MORE INFO</a></p>
	      	</div>
	    </div>
	    	<div class="carousel-item">
	      		<img src="img/imgm2.jpg" width="1200" height="500"  class="center">
	      		<div class="carousel-caption">
	        	<h5 >Play</h5>
	        	<p>Some representative placeholder content for the second slide.</p>
                <p><a href="#" class="btn btn-warning mt-3">MORE INFO</a></p>
	     		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<img src="img/imgm3.jpg" width="1200" height="500"  class="center">
	      		<div class="carousel-caption">
	        	<h5>Enjoy</h5>
	        	<p>Some representative placeholder content for the third slide.</p>
                <p><a href="#" class="btn btn-warning mt-3">MORE INFO</a></p>
	      		</div>
	    	</div> 
	  </div>
	  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  	</button>
	  	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  	</button>
	</div>

    <style="background-color:#a0abf59b;"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container-fluid"  style="background-color:white;align-content:center;">
    <style>

    .realistic-marker-highlight{
  position:relative;
}

.realistic-marker-highlight:before{
  content:"";
  background-color:#000;
  width:100%;
  height:40px;
  position:absolute;
  z-index:1;
  opacity: .3;
  filter:url(#marker-shape);
  left:-0.25em;
  top:0.1em;
  padding:0.75 5em;
}
.w3-card-4,.w3-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
.hii{
  background-color:orange ;
}
	</style>
  <svg xmlns="//www.w3.org/2000/svg" version="1.1" class="svg-filters" style="display:none;">
  <defs>
    <filter id="marker-shape">
      <feTurbulence type="fractalNoise" baseFrequency="0 0.15" numOctaves="1" result="warp" />
      <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warp" />
    </filter>
  </defs>
</svg>


</div>
<div class="container-fluid"  style="background-color:#ccc"><br><br><br>
            <div class="container col-12">
  <span class="realistic-marker-highlight" style= "color:black;font-size:30px"><b> Sports Court Table </b></span><br><br>
                <div class="row"><br>
             <p>&nbsp;&nbsp;</p>       
  <div class="col-md-3">
  <div class="card w3-hover-shadow w3-Amber  "style="height: 402px;">
              <div class="card-head" style="background-color:black">
            
          <h1 style="text-align:center;color:white;font-weight:10px">Badminton</h1>
          </div>
                            <div class="card-body hii "style=" "><pre style="color:black">
<b>Clay Court:</b> 
Rs. <span style="font-size:24px"><b>500</b> </span>per hour
Features:
Cooler surface
Slower surface
Better for sliding
Reduced risk of injury

Specially for: Begginers

Timing: 8:00 Am To 5:00 Pm</pre>
                        </div>
                    </div>
                </div>

  <div class="col-md-3">
  <div class="card w3-hover-shadow w3-Amber">
              <div class="card-head" style="background-color:black">
            
          <h1 style="text-align:center;color:white">Badminton</h1>
          </div>
          <div class="card-body hii"><pre style="color:black">
<b>Indoor court:</b> 
Rs. <span style="font-size:24px"><b>800</b> </span>per hour
Features:
Weather protection
Better lighting
Improved sound quality

specially for:All players

Timing: 12:00 Pm To 8:00 Pm</pre>
            </div>
        </div>
    </div>
<div class="col-md-3">
<div class="card w3-hover-shadow w3-Amber">
              <div class="card-head" style="background-color:black">
        <h1 style="text-align:center;color:white">Badminton</h1>
        </div>
        <div class="card-body hii"><pre style="color:black">
<b>Hard Court:</b>
Rs. <span style="font-size:24px"><b>600</b> </span>per hour
Features:
Greater speed and agility
Consistent bounce
Better durability

specially for:Professionals

Timing: 8:00 Am To 5:00 Pm</pre>
          </div>
        </div>
      </div>

      <div class="col-md-3">
          <div class="card w3-hover-shadow w3-Amber "style="height: 402px;">
              <div class="card-head" style="background-color:black">
              <h1 style="text-align:center;color:white">Cricket</h1>
              </div>
              <div class="card-body hii">
<pre style="color:black">
Cricket Court:
Rs. <span style="font-size:24px"><b>1000</b> </span>per two hours
Features:
Level playing surface
Good quality turf
Safe boundaries
Good lighting

Maximum people allowed <br>per slot is 20

Timing: 7:00 Am To 5:00 Pm
</pre>              

            </div>
              </div>
          </div>
      <a href="<?= base_url('public/book/') ?>" class= "btn btn-primary center " style="width:15%"> Book</a>
      </div>
      <br><br><br>
      
  </div>
</div>
<!--map-->
<section class="about-section">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">         
            <div class="col-md-6" >
                <div class="map-wrapper">
                <img src="img/nn.png" ><br>
              </div>
            </div><br><br><br><br>
            <div class="col-md-6 d-none d-md-block">
                <div class="app-users-wrapper wow  fadeIn slow animated" style="visibility: visible; animation-name: fadeIn;">
                    <h3 class="ltr-space">PLAY AND CONNECT HAS A USERS </h3>
                    <h1 class="section-title ltr-space wow  fadeInUp slow" style="visibility: visible; animation-name: fadeInUp;">In various 10+ Cities All over the India</h1>
                    <h6>JOIN WITH THE LARGEST SPORTS GROUND MANAGEMENT SOLUTION</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br>

  <!--search-->
</b>
  <section class="app-features-section"><br><br>
    <div class="container-fluid">
        <div class="row">
	                <div class="col-md-4">
                <div class="feature-wrap wow  fadeIn slow animated" style="visibility: visible; animation-name: fadeIn;">
                    <img src="https://www.playspots.in/wp-content/uploads/2020/02/search.png" class="img-fluid wow  bounceIn slower icon" alt="Playspots" style="visibility: visible; animation-name: bounceIn;"> <br>
                    <h4 class="wow  fadeInUp slow icon" style="visibility: visible; animation-name: fadeInUp;">Search</h4>
                    <div class="contents">
                    <p style="color:black">Are you looking to play after work, organize your Sunday Five's badminton or cricket  match? Explore the largest network of sports facilities whole over the India</p>
                    </div>
                </div>
            </div>
	            <div class="col-md-4">
                <div class="feature-wrap wow  fadeIn slow animated" style="visibility: visible; animation-name: fadeIn;">
                    <img src="https://www.playspots.in/wp-content/uploads/2020/02/book.png" class="img-fluid wow  bounceIn slower icon" alt="Playspots" style="visibility: visible; animation-name: bounceIn;"><br>
                    <h4 class="wow  fadeInUp slow icon" style="visibility: visible; animation-name: fadeInUp;color:black">Book</h4>
                    <div class="contents">
                    <p style="color:black">Once you've found the perfect ground or court, Connect with the venue through the Book Now Button to make online booking &amp; secure easier payment</p>
                    </div>
                </div>
            </div>
	            <div class="col-md-4">
                <div class="feature-wrap wow  fadeIn slow animated" style="visibility: visible; animation-name: fadeIn;">
                    <img src="https://www.playspots.in/wp-content/uploads/2020/02/play.png" class="img-fluid wow  bounceIn slower icon " alt="Playspots" style="visibility: visible; animation-name: bounceIn;"><br>
                    <h4 class="wow  fadeInUp slow icon" style="visibility: visible; animation-name: fadeInUp;">Play</h4>
                    <div class="contents">
                    <p style="color:black">You're the hero, you've found a stunning turf or court, booked with ease and now its time to play. The scene is set for your epic match.</p>
                    </div>
                </div>
            </div>
	            </div>
    </div><br><br><br><br>
</section>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed=new Typed(".auto-type",{
              strings:["stay well"],
              typeSpeed:150,
              
            })
        </script>