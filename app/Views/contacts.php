<style>
.hii{
  color:black;
  font-size:18px;
  
}
.lead{
    color:black;
    font-size:18px;
  }

  .read-more-container{
    display: flex;
    flex-direction: column;
    color: #111;
    gap: 1rem;
}


.reads-more-container{
    display: flex;
    flex-direction: column;
    color: #111;
    gap: 1rem;
}

.container{
    border-radius: 2px;
    line-height: 1.4rem;
}

.read-more-btn{
    color: #0984e3;
}

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: inline;
}

.reads-more-text{
    display: none;
}

.reads-more-text--show{
    display: inline;
}

.row{
  padding: top 200px;
}
/*comment */
/*.reviews {
    background: var(--light-bg);
}

.reviews .slide{
    padding:2rem;
    border:var(--border);
    background: var(--white);
    text-align: center;
    box-shadow:var(--box-shadow);
}

.reviews .slide .star i{
    font: size 1.7em;
    color:var(--main-color);
}

.reviews .slide p{
    font: size 1.5em;
    Color:var(--light-black);
    line-height:2;
    padding:1rem 0;
}

.reviews .slide h3{
    font: size 2em;
    color:var(--black);

}
.reviews .slide span{
    font: size 1.5rem;
    color:var(--main-color);
    display: block;

}
.reviews .slide img{
    height: 7rem;
    width: 7rem;
    border-radius:50%;
    margin-top:1rem;
}*/


</style>

<!--
<section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="slide">
                    <div class="star">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat accusantium aliquid qui ut facilis unde incidunt
                         laudantium nemo deserunt blanditiis? Facere ipsum fugit nesciunt accusamus quam impedit officia,
                          laborum excepturi.adipisicing elit. Assumenda a similique </p>
                    <h3>john</h3>
                    <span>travelers</span>
                    <img src="img/c1.jpg" width="100"height="100">
                </div>
                <div class="slide">
                    <div class="star">
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda a similique </p>
                    <h3>john</h3>
                    <span>travelers</span>
                    <img src="img/c1.jpg" width="100"height="100">
                </div>
                <div class="slide">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda a similique </p>
                    <h3>john</h3>
                    <span>travelers</span>
                    <img src="img/c1.jpg" width="100"height="100">
                </div>
                <div class="slide">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda a similique </p>
                    <h3>john</h3>
                    <span>travelers</span>
                    <img src="img/c1.jpg" width="100"height="100">
                </div>
            </div>
        </div>
     </section>
-->
<!--  <div class="popup" id="popup">
        <img src="img/tick.png">
        <h2>Thank You</h2>
        <p>Submitted Successfully</p>
        <button type="button" onclick="closepopup()">Ok</button>
    </div>
<script>
      let popup=document.getElementById("popup");
      
      function openpopup() {
        popup.classList.add("open-popup");
      }

      function closepopup() {
        popup.classList.remove("open-popup");
      }
  
  </script>-->
  
<?php $validation = \Config\Services::validation(); ?>
<div class="container-fluid">
            <div class="container col-10"style="padding: top 200px;"><br><br>
                <div class="row"style="padding: top 200px;">
                    <div class="col-lg-6 col-md-6 col-12 order-2 pt-5">
                    <form action="<?php echo site_url('public/contacts');?>" method="post">
					        <div class="form-group">
							<div class="mb-3">
                 <label for ="Name">Name</label>
							   <input type="text" name="name" class="form-control <?=($validation->geterror('name'))? 'is-invalid':''?>"placeholder="name" value="<?= set_value('name') ?>">
							   <?php if($validation->getError('name')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('name') ?></div>
								<?php endif; ?>
							</div>
				            </div>
							<div class="mb-3">
								<label for ="email"> E-mail</label>
								<input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : '' ?>" placeholder="Email" value="<?= set_value('email') ?>">
							<?php if($validation->getError('email')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('email') ?></div>
								<?php endif; ?>
							</div>
							<div class="mb-3">
								<label for ="message">Message</label>
								<textarea name="message" id="message" class="form-control <?= ($validation->getError('message')) ? 'is-invalid' : '' ?>" placeholder="Message" rows="5"><?= set_value('message') ?></textarea>
								<?php if($validation->getError('message')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('message') ?></div>
								<?php endif; ?>
							</div>
								<button type="submit" class="btn btn-warning text-dark">Send</button>
							</div>
						</form>
                    <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-1"><br>
					<br>
                <img src="img/pic.avif"width="600"height="365">
                    </div>
                </div>
            </div>
        </div></div>
		<p>&nbsp;&nbsp;</P>		
<section id="review" class="review-section-padding"style="overflow-x: hidden; background-image: url('img/new.jpeg');background-position: center center; background-size: cover; background-attachment: fixed;" >            
    <div class="section-header text-center pb-5" >
                 <h2 style="color: orange;">Popular Reviews</h2>
                 <b>
	<div class="row">
    <div class="col-12 col-md-12 col-lg-4"> 
          <div class="card text-center bg-white pb-2"style=" background-image: url('img/new.jpeg');background-position: center center; background-size: cover; background-attachment: fixed;" >
              <div class="card-body text-dark">
                <div class="img-area mb-3" ></div>
                <img src="img/r1.jpg" alt=""class="img-fluid rounded-circle"  width="300" height="250">
            <h3 class="card-title" style="color: white;">A.K Arun</h3>
            <div class="read-more-container">
        <div class="container">
            <p style="color: white;">
            Nice place for Badminton & Cross fit. Often indulging you in workshops and competitions will make you feel encouraged. Environment also very nice.            </p>
        </div>
        </div>
          </div>
        </div>
      </div>
	  <div class="col-12 col-md-12 col-lg-4"> 
          <div class="card text-center bg-white pb-2"style=" background-image: url('img/new.jpeg');background-position: center center; background-size: cover; background-attachment: fixed;">
              <div class="card-body text-dark">
                <div class="img-area mb-3"></div>
                <img src="img/r2.jpg" alt=""class="img-fluid rounded-circle"width="300" height="250">
            <h3 class="card-title" style="color: white;">J.Kamal</h3>

            <div class="read-more-container">

        <div class="container">
            <p style="color: white;">
            For the first time in an international standard in Chennai. A great boon to the people of Chennai            </p>
        </div>
        </div>
          </div>
        </div>
      </div>
	  <div class="col-12 col-md-12 col-lg-4"> 
          <div class="card-shadow:20px text-center bg-white pb-2"style=" background-image: url('img/new.jpeg');background-position: center center; background-size: cover; background-attachment: fixed;">
              <div class="card-body text-dark">
                <div class="img-area mb-3"></div>
                <img src="img/r4.jpg"  alt=""class="img-fluid rounded-circle" width="300" height="250">
            <h3 class="card-title" style="color: white;">S.Aksharaa</h3>
            <div class="reads-more-container">

        <div class="container">
            <p style="color: white;">
            Finally! I found a badminton near my place. Nice and well maintained ambience. Go for it guys!!! Worth every penny!            </p>
        </div>
        </div>
          </div>
        </div>
      </div>
            </section>
					<section id="contact" class="contact-section-padding" >
                       <div class="container" >
                         <div class="row">
                           <div class="col-md-15">
                              <div class="section-header text-center pb-5">
								<p>&nbsp;&nbsp;</P>
                           <h2 style="color: orange;">Contact Details</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid hii" >
            <div class="container col-10">
                <div class="row  hii">
                    <div class="col-lg-6 col-md-6 col-12 order-2 ">
					<h3 style="color: blue;">Map</h3>
                    
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7772.768143384892!2d80.231612!3d13.074828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f9936fe7117%3A0x1e11d3e67405a7ee!2sDream%20Effects%20Multimedia%20%26%20IT%20Solutions%20-%20Web%20Development%20%7C%20Digital%20Marketing%20%7C%20Branding%20Designs!5e0!3m2!1sen!2sin!4v1676872977715!5m2!1sen!2sin" 
            width="400" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					<p>&nbsp;&nbsp;</P>
            </div>
                    <div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-1 hii"><br>
					<b><h3 style="color: blue;">Contact Us</h3></b>
  

                    <h5 style="color: black;">Phone No:</h5>
                    <p style="color: black;">6382515183</p>
                    <h5 style="color: black;">E-mail id:</h5>
                    <p style="color: black;">VEEGo_ptv_ltd@gmail.com</p>
                    <h5 style="color: black;">Address:</h5>
                    <p style="color: black;"> VEEGo company ptv .Ltd,
      Aminjikarai,Chennai.</p>
			</div>
		</div>
	</div>
    </div>
            </section>

<!--
            <style>
.slider{
  max-width: 4000px;
  display: flex;
}
.slider .card{
  flex: 1;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.card .content .btn button{
  background: #e74c3c;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
}

#card1{
    background: #0A7DAF;
  border: 1px solid black;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

@media(max-width:574px){

#card1{
    margin: 0 10px;
}
.slider{
  display: flex;
}

}
</style>
<section id="team" class="about-section-padding">
  <div class="container mx-auto mt-4">

  <div class="slider owl-carousel">
    <div class="card" id="card1" style="width: 20rem;">
        <div class="img">
<img src="img/9.jpg" alt="" style="width: 100% ; height: 200px;"></div>
<div class="content">
          <div class="title">
GENERAL CHECKUP</div>
<p>
A physical examination is a routine test your primary care provider (PCP) performs to check your overall health.</p>
</div>
</div>
      <div class="card" id="card1" style="width: 20rem;">
        <div class="img">
<img src="img/6.jpg" alt="" style="width: 100% ; height: 200px;"></div>
<div class="content">
          <div class="title">
ENT</div>
<p>
An ENT specialist or an otolaryngologist is a physician trained to treat patients with issues pertaining to the ear.</p>
</div>
</div>
<div class="card" id="card1" style="width: 20rem;">
        <div class="img">
<img src="img/7.jpg" alt=""></div>
<div class="content">
          <div class="title">
CARDIOLOGY</div>
<p>
Some of the strategies used by cardiologists to combat cardiovascular diseases include coronary artery bypass surgery.</p>
</div>
</div>
<div class="card" id="card1" style="width: 20rem;">
        <div class="img">
<img src="img/8.jpg" alt=""></div>
<div class="content">
          <div class="title">
DENTISTRY</div>
<p>
Dentistry, also known as dental medicine and oral medicine, is the branch of medicine focused on the teeth, gums, and mouth.</p>
</div>
</div>
</div>

 </div>
</section>-->
 

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
     // $(document).ready(function  () {  
         <?php if(session()->getflashdata('status')) { ?>
            swal({
                    title: "<?= session()->getflashdata('status') ?>",
                    text: "<?= session()->getflashdata('status_text') ?>",
                    icon: "<?= session()->getflashdata('status_icon') ?>",
                    button: "Okay",
                });
                <?php } ?>
            //});
    </script>