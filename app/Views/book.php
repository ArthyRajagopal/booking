<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<style>

.time-slots {
  width: 80%;
  margin: 0 auto;
}

.time-slots h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.time-slots ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.time-slots ul li {
  margin-bottom: 10px;
  display: inline-block;
}

.time-slots ul li a {
  display: block;
  padding: 10px;
  border-radius: 5px;
  color: #fff;
  background-color: #4CAF50;
  text-decoration: none;
  font-size: 10px;
}

.time-slots ul li a.booked {
  background-color: #f44336;
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
</style>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <script>
$(function(){
    var arrayofDates = [];
    $(".datepicker1").datepicker(
        {
            dateFormat:'yy-mm-dd',
            minDate: new Date(),
            beforeShowDay: function (date) {

            var string = jQuery.datepicker.formatDate("yy-mm-dd", date);
            return [arrayofDates.indexOf(string) == -1];
       }
    });
});
</script>

<style>

.seat{
  color: #fff;
  background-color: #4CAF50;
  text-align: center;
  padding: 10px 10px;
  border-radius: 5px;

  font-size: 13px;
  margin-bottom: 10px;
  display: inline-block;
}




</style>

<div class="container-fluid"  style="background-color:grey"><br><br><br>
            <div class="container col-12">
                <div class="row"><br>
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-head">
                                <img src="img/c1.jpg" class="card-img-top">
                            </div>
                            <div class="card-body hii">
                            <form action="<?php echo site_url('public/book/store');?>" method="post" novalidate>
                  <h5 class="card-title"style="color:orange">Badminton 1</h5>
                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                <input type="" class="datepicker1" name = "date" placeholder="mm-dd-yy"  style="width:95%">                 
                <div class="card-text2 hii">
                            
                  <label style="color: black; font-weight: bolder;">slot: </label><br>
                  
                  <div hidden>
                        <input type="text"  name="court" value="badminton1 ">
                        </div>
                        <div class="seat">
                        <input type="radio" id="slot1" name="slot" value="08:00-09:00 AM">
                        
                        <label for="slot1"> 08:00-09:00 AM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot2" name="slot" value="09:00-10:00 AM">
                        
                        <label for="slot2"> 09:00-10:00 AM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot3" name="slot" value="10:00-11:00 AM">
                        
                        <label for="slot3"> 10:00-11:00 AM</label>
                      </div>
                      <div class="seat"> 
                        <input type="radio" id="slot4" name="slot" value="11:00-12:00 PM">
                        <label for="slot4"> 11:00-12:00 PM</label><br>
                        
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot5" name="slot" value="12:00-01:00 PM">
                        <label for="slot5"> 12:00-01:00 PM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot6" name="slot" value="02:00-03:00 PM">
                        <label for="slot6"> 02:00-03:00 PM</label>
                        
                      </div> 
                      <div class="seat">
                        <input type="radio" id="slot7" name="slot" value="03:00-04:00 PM">
                        <label for="slot7"> 03:00-04:00 PM</label>
                        
                      </div> 
                      <div class="seat">
                        <input type="radio" id="slot8" name="slot" value="04:00-05:00 PM">
                        <label for="slot8"> 04:00-05:00 PM</label>
                        
                      </div> 
                      
                      <br><br>
                      <input type="submit" value="Book" id = "submitform"class="btn btn-PRIMARY" style="width:100%;">
          
                    </div><br><br>
                </form>

                        </div>
                    </div>
                </div>

  <div class="col-md-3">
      <div class="card shadow">
          <div class="card-head">
              <img src="img/c2.jpg" class="card-img-top">
          </div>
          <div class="card-body hii">
              
<form action="<?php echo site_url('public/book/store');?>" method="post" novalidate>
    <h5 class="card-title"style="color:orange">Badminton 2</h5>
  <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
  <input type="" class="datepicker1" name = "date" placeholder="mm-dd-yy" style="width:95%" >

                    
  <div class="card-text2 hii">
                              
  <label style="color: black; font-weight: bolder;">slot: </label><br>

  <div hidden>
      <input type="text"  name="court" value="badminton2">
      </div>
    
    <div class="seat">
      <input type="radio" id="slot11" name="slot" value="12:00-01:00 PM">
      <label for="slot11"> 12:00-01:00 PM</label>
    </div>
    <div class="seat">
      <input type="radio" id="slot12" name="slot" value="02:00-03:00 PM">
      <label for="slot12"> 02:00-03:00 PM</label>
    
    </div> 
    <div class="seat">
      <input type="radio" id="slot13" name="slot" value="03:00-04:00 PM">
      <label for="slot13"> 03:00-04:00 PM</label>
    
    </div> 
    <div class="seat">
      <input type="radio" id="slot14" name="slot" value="04:00-05:00 PM">
      <label for="slot14"> 04:00-05:00 PM</label>
    
    </div> 
    <div class="seat">
      <input type="radio" id="slot15" name="slot" value="05:00-06:00 PM">
      <label for="slot15"> 05:00-06:00 PM</label>
    
    </div> 
    <div class="seat">
      <input type="radio" id="slot16" name="slot" value="06:00-07:00 PM">
    
      <label for="slot16"> 06:00-07:00 PM</label>
    </div>
    <div class="seat"> 
      <input type="radio" id="slot17" name="slot" value="07:00-08:00 PM">
      <label for="slot17"> 07:00-08:00 PM</label><br>
    
    </div>
    <div class="seat"> 
      <input type="radio" id="slot18" name="slot" value="08:00-09:00 PM">
      <label for="slot18"> 08:00-09:00 PM</label><br>
    
    </div>
    <br><br>
    <input type="submit" value="Book" id = "submitform"class="btn btn-PRIMARY" style="width:100%;">

  </div><br><br>
</form>
            </div>
        </div>
    </div>
<div class="col-md-3">
    <div class="card shadow">
        <div class="card-head">
            <img src="img/c3.jpg" class="card-img-top">
        </div>
        <div class="card-body hii">
            <form action="<?php echo site_url('public/book/store');?>" method="post" novalidate>
              <h5 class="card-title"style="color:orange">Badminton 3</h5>
            <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
            <input type="" class="datepicker1" name = "date" placeholder="mm-dd-yy"  style="width:95%" >                 
            <div class="card-text2 hii">
                        
              <label style="color: black; font-weight: bolder;">slot: </label><br>
              
              <div hidden>
                    <input type="text"  name="court" value="badminton3">
                    </div>
                    <div class="seat">
                        <input type="radio" id="slot21" name="slot" value="08:00-09:00 AM">
                        
                        <label for="slot21"> 08:00-09:00 AM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot22" name="slot" value="09:00-10:00 AM">
                        
                        <label for="slot22"> 09:00-10:00 AM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot23" name="slot" value="10:00-11:00 AM">
                        
                        <label for="slot23"> 10:00-11:00 AM</label>
                      </div>
                      <div class="seat"> 
                        <input type="radio" id="slot24" name="slot" value="11:00-12:00 PM">
                        <label for="slot24"> 11:00-12:00 PM</label><br>
                        
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot25" name="slot" value="12:00-01:00 PM">
                        <label for="slot25"> 12:00-01:00 PM</label>
                      </div>
                      <div class="seat">
                        <input type="radio" id="slot26" name="slot" value="02:00-03:00 PM">
                        <label for="slot26"> 02:00-03:00 PM</label>
                        
                      </div> 
                      <div class="seat">
                        <input type="radio" id="slot27" name="slot" value="03:00-04:00 PM">
                        <label for="slot27"> 03:00-04:00 PM</label>
                        
                      </div> 
                      <div class="seat">
                        <input type="radio" id="slot28" name="slot" value="04:00-05:00 PM">
                        <label for="slot28"> 04:00-05:00 PM</label>
                        
                      </div>
                  <br><br>
                  <input type="submit" value="Book" id = "submitform"class="btn btn-PRIMARY" style="width:100%;">
      
                </div><br><br>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-3">
          <div class="card shadow "style="height: 682px;">
              <div class="card-head">
                  <img src="img/c4.jpg" class="card-img-top">
              </div>
              <div class="card-body hii">
                                              
              <form action="<?php echo site_url('public/book/store');?>" method="post" novalidate>
        <h5 class="card-title"style="color:orange">Cricket</h5>
      <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                <input type="" class="datepicker1" name = "date" placeholder="mm-dd-yy"  style="width:95%">                 
      <div class="card-text2 hii">
                  
        <label style="color: black; font-weight: bolder;">slot: </label><br>
        
        <div hidden>
              <input type="text"  name="court" value="cricket">
              </div>
            <div class="seat">
              <input type="radio" id="slot31" name="slot" value="07:00-09:00 AM">
              
              <label for="slot31"> 07:00-09:00 AM</label>
            </div>
            <div class="seat"> 
              <input type="radio" id="slot32" name="slot" value="09:00-11:00 AM">
              <label for="slot32"> 09:00-11:00 AM</label><br>
              
            </div>
            <div class="seat">
              <input type="radio" id="slot33" name="slot" value="11:00-01:00 PM">
              <label for="slot33"> 11:00-01:00 PM</label>
            </div>
            <div class="seat">
              <input type="radio" id="slot34" name="slot" value="01:00-03:00 PM">
              <label for="slot34"> 01:00-03:00 PM</label>
              
            </div> 
            <div class="seat">
              <input type="radio" id="slot35" name="slot" value="03:00-05:00 PM">
              <label for="slot35"> 03:00-05:00 PM</label>
              
            </div> 
            
            <br><br>
            <p>&nbsp;&nbsp;</p>
            <p>&nbsp;&nbsp;</p>

            <input type="submit" value="Book" id = "submitform"class="btn btn-PRIMARY" style="width:100%; ">

          </div><br><br>
      </form>
            </div>
              </div>
          </div>
      </div>
      <br><br><br>
  </div>
</div>