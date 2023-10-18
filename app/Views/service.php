<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
  .rules-container {
  background-color: #f2f2f2;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  text-align: center;
}
.rules-title {
  color: #333;
  font-size: 32px;
  margin-bottom: 20px;
}
.rules-list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.rules-list li {
  color: #555;
  font-size: 18px;
  margin-bottom: 10px;
  text-align: left;
}
.rules-list li:before {
  content: "\2022";
  color: #ff5a5f;
  font-size: 24px;
  display: inline-block;
  margin-right: 10px;
  vertical-align: middle;
}
span {
  font-weight: bold;
  color:blue;
}
/* services */
.services {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  margin: 30px;
}

.service {
  width: 400px;
  margin: 20px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  text-align: center;
}
.service h3 {
  font-size: 24px;
  margin-bottom: 10px;
}
.service p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}
/*heading */
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

.containers .heading1{
  width: 50%;
  padding-bottom: 50px;
}
.containers .heading1 h3{
  font-size: 3em;
  font-weight: bolder;
  padding-bottom: 10px;
  border-bottom: 3px solid #222;
  color: orange;
}

.containers .heading1 h3 span{
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
.containers .heading1{
  width: 100%;
}
.containers.heading1 h3{
  font-size: 1em;
}
}

h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 30px;
 }

h3 {
  font-size: 24px;
  font-weight:bold;
  color: blue;
}





/* croom*/


</style>


<div >
                  <img src="img/s1.webp"  style="padding :5px;width: 100%; height: 500px;">
              </div>
<div class="rules-container ">
  <h2 class="rules-title" style="color:orange">"Unleash your inner athlete!"</h2>
  <ul class="rules-list">
    <p class="p" style=" font-size:23px ;color:black">
    Our badminton and cricket courts are designed to meet international standards, ensuring that you have an authentic experience every time you play.Our facilities are well-maintained and regularly cleaned to ensure a safe and enjoyable playing experience for everyone.


Our coaches are highly qualified and experienced in both badminton and cricket. They are available to provide private lessons, group lessons, and clinics to help you improve your skills and take your game to the next level.
    </p>
    <h2 class="rules-title" style="color:orange">"Court Standards"</h2>
    <li>Appropriate sports attire and non-marking shoes must be worn at all times.</li>
    <li>No food, drinks, or chewing gum allowed on the courts.</li>
    <li>No smoking or vaping allowed on the premises.</li>
    <li style="color:black">No pets allowed on the courts.</li>
    <li><span style="color:black">Only booked number of persons are allowed.</span></li>

    <li>All equipment must be returned to the front desk after use.</li>
    <li>Please be considerate of other players and keep noise levels to a minimum.</li>
    <li >Players must follow the instructions of the court attendants at all times.</li>
    <li>Players must leave the court promptly at the end of their rental period.</li>
    <li>The management reserves the right to refuse service to anyone.</li>
  </ul>
</div><br>

<p class="p" style="text-align:center ;font-size:23px;color:black">We offer a range of services, including court rental, equipment rental, coaching, and league play.We offer a flexible booking system that allows you to reserve your court online, in person or over the phone. Our staff is available to answer any questions you may have and to help you choose the right court and equipment for your needs.
</p>

<div class="services">

<marquee width="100%" direction="right" height="380px">
<div class="service">
    <h3>Court Rental</h3>
<pre style="color:black">We have a variety of sports courts 
  available for rent,including tennis,
  basketball, volleyball, and more.Our
  courts are well-maintained and
  equipped with the necessary amenities 
  to ensure a great playing experience.</pre>
  </div>

</marquee>

<h1 style="text-align:center;color:orange">Other Services</h1>
<div class="services">
  <div class="service">
    <h3>Sports Clinic</h3>
    <p style="color:black">Our clinic offers a welcoming and supportive environment that focuses on the individual needs of each patient. We use evidence-based treatments and the latest technology to provide personalized care that is tailored to your specific injury and recovery goals.</p>
  </div>
  <div class="service">
    <h3>Coaching</h3>
    <p style="color:black">We offer coaching services for individuals and groups in various sports, including tennis, basketball, and volleyball. Our experienced coaches provide personalized training to help you improve your skills and reach your full potential.</p>
  </div>
  <div class="service">
    <h3>Tournaments and Leagues</h3>
    <p style="color:black">We organize regular tournaments and leagues for various sports to provide opportunities for players to compete and showcase their skills. Our tournaments and leagues are well-organized and provide a fun and competitive environment for all participants.</p>
  </div>
  <div class="service">
    <h3>Equipment Rental</h3>
    <p style="color:black">We provide equipment rental services for various sports, including rackets, balls, and nets. Our equipment is well-maintained and available at affordable prices.</p>
  </div>
  <div class="service">
    <h3>Special Events</h3>
    <p style="color:black">We host special events for various occasions, including birthdays, corporate events, and team building activities. Our facility can accommodate large groups and we provide customized services to meet your specific needs.</p>
  </div>
</div>
</div>
</div>