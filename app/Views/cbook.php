<!DOCTYPE html>
<html>
  <head>
    <title>Entertainment Booking Form</title>
 
  <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0#ff9900; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/02/8ca4045044162379597641472fa0bb5489ba418f.jpeg");      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: #008ae6; 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #ff9900;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0  #a82877;
      color: #a82877;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a82877;
      background: #a82877;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #a82877;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }

      .popup{
        width:400px;
        background: #fff;
        border-radius: 6px;
        top :0%;
        left: 50%;
        transform: translate(-50%,-50%) scale(0.1);
        text-align: center;
        padding:0 30px 30px;
        color:#333;
        visibility: hidden;
        transition:transform 0.4s,top 0.4s;
      }

      .open-popup{
        visibility:visible;
        top;50%;
        transform: translate(-50%,50%) scale(1);

      }
      .popup img{
        width:100px;
        margin-top:-50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);

      }

      .popup h2{
        font-size: 30px;
        font-weight:500;
        margin:30px 0 10px;
      }

      .popup button{
        width:100%;
        margin-top:50px;
        padding:10px 0;
        background: #6fd649;
        color: #fff;
        border:0;
        outline:none;
        font-size:18px;
        border-radius:4px;
        cursor:pointer;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);

      }
    </style>
  </head>
  <body>
  <?php $validation = \Config\Services::validation(); ?>

  <div class="container col-8 mt-5" >
    
    <div class="testbox" style="padding:30px">
    <form action="<?php echo site_url('public/cbook/store');?>" method="post">

      
        <div class="banner">
          <h1>Conform Booking</h1>
        </div>
        <div class="mb-3">
                 <label for ="Name">Name</label>
							   <input type="text" name="name" class="form-control <?=($validation->geterror('name'))? 'is-invalid':''?>"placeholder="name" value="<?= set_value('name') ?>">
							   <?php if($validation->getError('name')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('name') ?></div>
								<?php endif; ?>
							</div>
              
              <div class="mb-3">
								<label for ="email"> E-mail</label>
								<input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : '' ?>" placeholder="Email" value="<?= set_value('email') ?>">
							<?php if($validation->getError('email')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('email') ?></div>
								<?php endif; ?>
							</div>
          
              <div class="mb-3">
                 <label for ="contact">Contact Number</label>
							   <input type="text" name="contact" class="form-control <?=($validation->geterror('contact'))? 'is-invalid':''?>"placeholder="contact" value="<?= set_value('contact') ?>">
							   <?php if($validation->getError('contact')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('contact') ?></div>
								<?php endif; ?>
							</div>


              <div class="mb-3">
          <p style="color:#595959">Number Of People</p>
          <input type="text" name="people" class="form-control <?=($validation->geterror('people'))? 'is-invalid':''?>"placeholder="people" value="<?= set_value('people') ?>">
							   <?php if($validation->getError('people')) : ?>
									<div class="invalid-feedback"><?= $validation->getError('people') ?></div>
								<?php endif; ?></div>
          <button class="btn btn-primary " id="mybutton">Submit</button></div>
          
   </form></div>
    
        

  </body>
</html>