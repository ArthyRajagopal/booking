<br>
<head>
<style>
.cafeteria {
  padding: 50px 0;
  text-align: center;
}

.cafeteria h2 {
  font-size: 2.5rem;
  margin-bottom: 50px;
}


.item {
  width: 300px;
  margin: 20px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  text-align: center;
}


.menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.menu-item {
  width: 300px;
  margin: 0 20px 40px;
  text-align: left;
}

.menu-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  margin-bottom: 20px;
}

.menu-item h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

.menu-item p {
  font-size: 1.1rem;
  line-height: 1.5;
}


.container2 {
  
  display: flex;
  justify-content: center;
  align-items: center;
}




.cafeteria-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1000px;
  margin: 0 auto;
}

.card1 {
  flex-basis: calc(50% - 10px);
  margin-bottom: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  justify-content: center;
  align-items: center;
}



.card1.third-card {
  flex-basis: calc(50% - 10px);
  margin-top: 20px;
  

}

.card1 img {
  display: block;
  width: 100%;
  border-radius: 5px 5px 0 0;
  
}

.card1 h3 {
  margin: 10px;
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.card1 p {
  margin: 10px;
  font-size: 16px;
  color: #666;
}


.card1 a:hover {
  background-color: #555;
}

.card1 img {
  width: 100%;
  height: 350px; /* Set the height of the image to the desired height */
  object-fit: cover;
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
</style>
</head>


<section id="cafeteria">
<div class="containers">
<img src="img/ff4.jpg" style="padding :5px;width: 100%; height: 500px;">
<div class="heading1">
      <h3>CAFETERIA </h3>
    </div>
    <p style="color:black ;font-size:20px">
    We're excited to offer nutritious and delicious food options to fuel your body before and after your workouts.
    We understand that a healthy diet is important for everyone, especially for those who engage in physical activity. That's why we've designed our menu to include a variety of whole foods and fresh ingredients that are low in saturated fat, sugar, and sodium.

Our menu includes options such as fresh salads, grilled chicken sandwiches, fruit smoothies, and whole grain wraps, just to name a few. We also offer vegetarian and gluten-free options to accommodate a range of dietary needs.
    </p>
    
    <br>
    <div class="heading1">
      <h3>"Fuel Your Fitness Here"</h3>
    </div>
<div class="cafeteria-cards">
  <div class="card1">
    <img src="img/s3.jpeg" alt="Cafeteria item 1">
    <h3 style="color:blue">Energy Bars and Snacks:</h3>
    <p style="color:black ;font-size:20px"> We offer a variety of energy bars and snacks that are perfect for a quick and healthy snack. Our bars are made with natural ingredients and are packed with protein and fiber to keep you energized throughout the day.

</p>
  </div>
  <div class="card1">
    <img src="img/s12.jpeg" alt="Cafeteria item 2">
    <h3 style="color:blue">Smoothies and Juices:</h3>
    <p style="color:black ;font-size:20px"> We have a variety of smoothies and juices made with fresh fruits and vegetables. Our smoothies are blended with Greek yogurt or almond milk for a creamy texture, and our juices are made with a variety of nutrient-packed ingredients.

</p>
   
  </div>
  <div class="container2">
  <div class="card1 third-card">
    <img src="img/s1.jpeg" alt="Cafeteria item 3">
    <h3 style="color:blue"> Sandwiches and Wraps:</h3>
    <p style="color:black ;font-size:20px">  We have a variety of sandwiches and wraps made with fresh ingredients and served on whole-grain bread or tortilla wraps. You can choose from a variety of fillings, including chicken, turkey, ham, cheese, and veggies.

</p>


  </div>
</div>

  <div class="cafeteria-cards">
  <div class="card1">
    <img src="img/soup1.jpeg" alt="Cafeteria item 4">
    <h3 style="color:blue">Healthy Soups:</h3>
    <p style="color:black ;font-size:20px"> At our sports center cafeteria, we offer a variety of healthy and delicious soups that are perfect for a warm and satisfying meal. Made with wholesome ingredients and packed with flavor, our soups are a great way to fuel your body before or after a workout.</h3>

</p>
  </div>
  <div class="card1">
    <img src="img/rice.jpeg" alt="Cafeteria item 5">
    <h3 style="color:blue">Rice Varities:</h3>
    <p style="color:black ;font-size:20px">  Rice is a staple food that provides energy, fiber, and essential nutrients to fuel your active lifestyle. At our sports center cafeteria, we offer a variety of rice dishes that are not only delicious but also nutritious. Our rice dishes are expertly seasoned and can be paired with a variety of proteins and vegetables.</p>
  </div>
  <div class="container2">
  <div class="card1 third-card">
    <img src="img/drinks.jpeg" alt="Cafeteria item 6">
    <h3 style="color:blue">Hot Drinks:</h3>
    <p style="color:black ;font-size:20px">  After a long and intense workout, there's nothing better than a hot drink to help you unwind and re-energize. At our sports center cafeteria, we offer a variety of hot drinks that are not only delicious but also provide a range of health benefits.
</p>
</div>

</div>

<p style="color:black ;font-size:20px">
In addition to our food options, we've made sure to provide nutritional information for each item on our menu, so you can make informed choices about what you're eating.

Thank you for choosing to eat at our healthy cafeteria. We hope you enjoy your meal and feel energized to tackle your next workout!</p>
</div> 



</section>