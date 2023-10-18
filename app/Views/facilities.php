<style>

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
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

h4{
    color:orange;
}

h2{
    color:orange;
}

.uu p {
    color:black;
}

.uu i{
    color:black;
}
pre{
    color:blue;
}

/*gallery */
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

@media only screen and (max-width: 669px){
    .containers .box{
   flex-direction: column;
  }

.containers .box .dream{
  width: 100%;
}

}

@media only screen and (max-width: 543px){
.containers .heading{
  width: 100%;
}
.containers.heading h3{
  font-size: 1em;
}
}

</style>




<div class="partner-banner" style=" background-image: url('img/f1.jpg');background-position: center center; background-size: cover; background-attachment: fixed;">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-sm-12">
                        <h2 style="color:white">Play And Connect</h2>
						
                    </div>
                </div>
            </div>
</div>

<div > 
  <br><br><div class="container-fluid">
      <div class="container col-10 ">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12 order-1 pt-5">
                  <h2><b> Service Provided</h2></b><br>
                  <p class="text" style="color:black">Welcome to our badminton and cricket court booking center! We are dedicated to providing our customers with top-quality facilities for playing their favorite sports. Whether you are a seasoned athlete or a beginner, we have everything you need to enjoy a great game of badminton or cricket.</p>
                  <a href="<?=base_url('public/services')?>" class= "btn btn-primary float-center ">know more</a>
              </div>
              <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2">
                  <br><br>
                  <img src="img/imgs.jpg" class="img-fluid" style="padding :5px">
              </div>
          </div>
      </div>
  </div>
  <br><br>
  <div class="container-fluid" >
      <div class="container col-10">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12 order-2 pt-5">
                  <h2><b> Food Court</h2></b><br>
                  <p style="color:black">Our food court is designed to provide a convenient and enjoyable dining experience for all. With ample seating, a welcoming atmosphere, and a diverse range of food options, it's the perfect place to grab a bite with friends or family, or to refuel during a busy day of shopping or exploring.</p>
                  
                  <a href="<?=base_url('public/cafe')?>" class= "btn btn-primary float-center ">know more</a>
              </div>
              <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-1"><br>
                  <img src="img/imgf.jpg" class="img-fluid" style="padding :5px">
              </div>
          </div>
      </div>
  </div>
  <br><br>
  <div class="container-fluid">
      <div class="container col-10">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12 order-1 pt-5 ">
                  <h2><b> <span>Changing Room</span></h2></b><br>
                  <p style="color:black">A changing room, also known as a fitting room or a dressing room, is a private space provided in retail stores, gyms, and other public spaces where customers can try on clothes or accessories before making a purchase. Changing rooms are usually equipped with mirrors, seating, and hooks or hangers for customers to hang their clothes.</p>
                  <a href="<?=base_url('public/croom')?>" class= "btn btn-primary float-center ">know more</a>
              </div>
              <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2">
                  
                  <img src="img/imgc.jpg" class="img-fluid" style="padding :5px">
                </div>
          </div>
      </div>
  </div>
  </div>
  <br><br><div >
<div class="container uu">
    <div class="row">
        <div class="col-md-4" style=" display: flex; flex-direction: column; justify-content: center/right;">
            <div class="headtext text-left"> 
            <style>                	
                  div.a{
                     text-Align: center; 
                     color: orange;
                     font-size:245%;
                  }
                </style>
             <div class ="a">"Greatfull Team Of Our Court"</div> 
            <img src="img/pic.jpg" alt="" Align="right">
                <p>&nbsp;&nbsp;</P>	
                <p>&nbsp;&nbsp;</P>	                
                <style>
                    div.b{
                       color: orange;

                       font-family: timesnewromans;

                       font-size: 300%;
                     }
                     </style>
         <div class ="b"> MEET OUR TEAM </div>  
         <p>&nbsp;&nbsp;</p>  				
         <P> VEEGO Batminton court Have <br>different coach there
                Batminton coach,
                tennis coach,<br>
                cricket coach,
                food coach.
                our court coaches are creating<br> the best sportsmanship  
         </P>
                <p>&nbsp;&nbsp;</P>	
                <p>&nbsp;&nbsp;</P>	
                <p>&nbsp;&nbsp;</P>	
         <img src="img/pi.avif" alt="" width="450" height="380" Align="right" > 
            </div>
        </div>
        <div class="col-md-4">
            <div class="servebox">
                <p>&nbsp;&nbsp;</P>	
                <p>&nbsp;&nbsp;</P>	
                <p>&nbsp;&nbsp;</P>	
                    <!--<h3 style="color:blue;">BATMINTON</h3>  <h3 style="color:orange;">COACH </h3>-->
                    <h3><span style="color:blue;">BATMINTON</span>	<span style="color:orange;">COACH</span></h3>	
                <img src="img/pic2.jpg" alt=""  Align="left" width="380" height="380" class="img-fluid" >
                <div class="content">
                    <h5>Ajith Haridass</h5>
                    <p>Ajith has over 7 years of experience in the sport. He has 7 National titles and a World Championship title under his belt. The former Architect and entrepreneur is also a trained NLP practitioner and excellent communicator He won the All England Open Badminton Championships in 2001, becoming the second Indian to achieve this feat after Prakash Padukone. He runs the Gopichand Badminton Academy.</p></p>
                </div>
            </div>
            <div class="container">
                 <h6>Social Network</h6>
                 <i class="bi bi-instagram"></i>
                 <i class="bi bi-twitter"></i>
                 <i class="bi bi-facebook"></i>
            </div> 
              <p>&nbsp;&nbsp;</P>		
            <div class="servebox">
            <h3><span style="color:blue;">TENNIS</span>	<span style="color:orange;">COACH</span></h3>	
                <img src="img/pic3.jpg" alt=""  width="380" height="380" class="img-fluid">
                <div class="content">
                    <h5>Ramesh</h5>
                    <p>Ramesh is a former state player with over 30 years of experience of which 20 years is as a coach. He’s a qualified NIS/OGQ coach. His strength is in creating detailed and specific individual and group training programs based on player needs.
                       ramesh is a tamil nadu professional tennis coach and former player. He is the former head coach of tamil nadu, ramesh is considered one of the best tennis players of all time coaching TN almost his entire professional career, winning 85 titles together.</p>
                </div>
            </div>
            <div class="container">
                <h6>Social Network</h6>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
           </div> 
        </div>
        <div class="col-md-4 mt-xl-80">
            <div class="servebox">
            <p>&nbsp;&nbsp;</P>	
            <h3><span style="color:blue;">CRICKET</span>	<span style="color:orange;">COACH</span></h3>	
                <img src="img/pic6.jpg" alt="" width="320" height="320" class="img-fluid">
                <div class="content">
                    <h5>Rajesh</h5>
                    <p>Rajesh has over 35 years of experience in the sport. He has 2 National titles and  1 World Championship title under his belt. The former Architect and entrepreneur is also a trained NLP practitioner and excellent communicator Chandrakant Pandit is one of the top cricket coaches in India. Under his guidance, Vidarbha won two back-to-back Ranji Trophy championships.</p>
                </div>
            </div>	
            <div class="container">
                <h6>Social Network</h6>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
           </div> 
           <p>&nbsp;&nbsp;</P>		
            <div class="servebox">
            <h3><span style="color:blue;">CHIEF</span>	<span style="color:orange;">COOK</span></h3>	
                <img src="img/pic8.jpg" alt="" width="300" height="300" class="img-fluid">
                <div class="content">
                    <h5>Karthick</h5>
                    <p>karthick is expericence of 3 years cuisines he is well at south and north indian food,he woking in court 6 months and also winner by international cooking competition  and he had so many awarded by cooking.</p>
                </div>
            </div>
            <div class="container">
                <h6>Social Network</h6>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
           </div>
           <p>&nbsp;&nbsp;</P>		
           <div class="servebox">
           <h3><span style="color:blue;">BATMINTON 2</span>	<span style="color:orange;">COACH</span></h3>	
            <img src="img/pic7.jpg" alt="" width="320" height="320"class="img-fluid">
            <div class="content">
                <h5>Rajan</h5>
                <p></p>Rajan has over 5 years of experience in the sport. He has 2 National titles and 1 World Championship title under his belt. The former Architect and entrepreneur is also a trained NLP practitioner and excellent communicator</p>
            </div>
        </div> 
        <div class="container">
            <h6>Social Network</h6>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-facebook"></i>
       </div>
        </div>
    </div> 
  </div>

                    </div>


                    <br><br><br>
<div class="containers">
    <div class="heading">
      <h3>Photo <span>Gallery</span></h3>
    </div>
    
    <div class="box">
      
      <div class="dream">
        <img src="img/a1.jpeg" alt="hi">
         <img src="img/a9.jpeg">
          <img src="img/a3.jpeg">
           <img src="img/a15.jpeg">
            <img src="img/a5.jpeg">
            
      </div>

        <div class="dream">
        <img src="img/a16.jpeg">
         <img src="img/a7.jpeg">
          <img src="img/a8.jpeg">
           <img src="img/a12.jpeg">
            <img src="img/a6.jpeg">
            
      </div>

        <div class="dream">
        <img src="img/a11.jpeg">
         <img src="img/a2.jpeg">
          <img src="img/a13.jpeg">
           <img src="img/a14.jpeg">
            <img src="img/a4.jpeg" height="700">            
      </div>
    </div>
</div>