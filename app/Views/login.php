<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<style>
	@import url(https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900);
* {
  box-sizing: border-box;
}

body {
	font-family: "Lato","Avenir Next",Arial,sans-serif;
  margin: 0;
  background: #000;
  background-size: cover;
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

.overlay {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center…
[11:57 am, 04/04/2023] Sai Manokar R A: <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
}

<style>
	@import url(https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900);
* {
  box-sizing: border-box;
}

body {
	font-family: "Lato","Avenir Next",Arial,sans-serif;
  margin: 0;
  background: #000;
  background-size: cover;
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

.overlay {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.overlay h2 {
    background: #000 none repeat scroll 0 0;
    color: tan;
    font-weight: 600;
    margin: 2rem 3rem 0;
    mix-blend-mode: overlay;
    padding: 5px 15px;
    text-align: center;
}
header {
	background:tan;
	position: fixed;
	width: 100%;
	text-align: center;
	color: white;
	-webkit-transition: .4s;
	transition: .4s;
	padding: 0.5em;
}
nav a {
    color: inherit;
    padding: 0 12px;
    text-decoration: none;
}

/contentabovevideo/

.container { position:relative; }
.container video {
    position:relative;
    z-index:0;
}
.overlay {
    position:absolute;
    top:0;
    left:0;
    z-index:1;
}

/* video*/
.content{
  text-align: center;
}

.content h1{
  font-size: 160px;
  color: #fff;
  font-weight: 600;

}
.content a{
  text-decoration: none;
  display: inline-block;
  color: #fff;
  font-size: 24px;
  border: 2px solid #fff;
  padding: 14px 70px;
  border-radius: 50px;
  margin-top: 20px;
}

.back-video{
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: -1;

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



</style>
<br>

<div class="card shadow container col-7 mt-5">
    <div class="row">
    <div class="col-lg-1 col-mt-1 col-1 order-2" >
            <img src="img/c41.jpg"  >
			
</div>
<div class="col-lg-5 col-mt-5 col-4 order-1" style="padding:30px">

	<form action="<?php echo site_url('public/');?>" method="post" novalidate>
<?php if(isset($validation)) { ?>
<div class="alert alert-danger" role="alert">
  <?= $validation->listErrors(); ?>
<?php } ?><br>
	<h1 style= " text-align :center color=blue"  >LOGIN HERE</h1>
	<div class="mb-3"><br>
		<label for="email" class="form-label"> E-MAIL </label>
		<input type="email"  class="form-control" id="email" name="email" placeholder="example@gmail.com">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label"> PASSWORD </label>
		<input type="password" class="form-control" id="password" name="password" placeholder="password">
	</div> <br><br>
	<div class="mb-3">
		<input type="submit" value="login" id = "submitform"class="btn btn-PRIMARY">
      <a href="<?php echo site_url('public/register') ?>">New User?Create an Account</a>


	</div>
</form>
</div>
</div>
</div><br><br><br>
</div>
<div class="hero">
  <video autoplay loop muted plays-inline class="back-video">
    <source src="img/1.mp4" type="video/mp4">
  </video>


</div>

</body>
</html>
<!--
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
	h1{
		color:  #00008B;
	}
	.login-form{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		width:90%;
		max-width:450px;
		background:#fff;
		padding:20px 30px;
		box-shadow:0px 5px 10px rgba(0,0,0,0.1);
	}
	.login-form .form-title{
		font-family:"Montserrat",sans-serif;
		text-align:center;
		font-size:30px;
		font-weight:600;
		margin: 20px 0px 30px;
		color:#111;
	}
  .login-form .form-input{
    margin:10px 0px;
  }
	.login-form .form-input label,
	.login-form .captcha label{
		display:block;
		font-size:15px;
		color:#111;
		margin-bottom:5px;
	}
	.login-form .form-input input{
		width: 100%;
		padding: 10px;
		border:1px solid #888;
		font-size:15px;
	}
	.login-form .captcha{
		margin: 15px 0px;
	}
	.login-form .captcha .preview{
		color:#555;
		width:100%;
		text-align:center;
		height: 40px;
		line-height:40px;
		letter-spacing:8px;
		border:1px dashed #888;
		font-family:"monospace";
	}
	.login-form .captcha .preview span{
		display:inline-block;
		user-select:none;
	}
	.login-form .captcha .captcha-form{
		display:flex;
	}
	.login-form .captcha .captcha-form input{
		width:100%;
		padding:8px;
		border:1px solid #888;
	}
	.login-form .captcha .captcha-form .captcha-refresh{
		width:40px;
		border:none;
		outline:none;
		background:#888;
		color:#eee;
		cursor:pointer;
	}
	.login-form #login-btn{
		margin-top:5px;
		width:100%;
		padding: 10px;
		border:none;
		outline:none;
		font-size:15px;
		text-transform:uppercase;
		background:#4c81ff;
		color:#fff;
		cursor:pointer;
	}
</style>
<div class="login-form">
  <div class="form-title">
    Member Login
  </div>
  <div class="form-input">
    <label for="username">Username</label>
    <input type="text" id="username">
  </div>
  <div class="form-input">
    <label for="password">Password</label>
    <input type="text" id="password">
  </div>
  <div class="captcha">
		<label for="captcha-input">Enter Captcha</label>
		<div class="preview"></div>
		<div class="captcha-form">
			<input type="text" id="captcha-form" placeholder="Enter captcha text">
			<button class="captcha-refresh">
			<i class="fa fa-refresh"></i>
			</button>
		</div>
    
	</div><div class="form-input">
      <button id="login-btn">Login</button>
    </div>
</div>
<script>
	(function(){
		const fonts = ["cursive","sans-serif","serif","monospace"];
		let captchaValue  = "";
		function generateCaptcha(){
			let value =btoa(Math.random()*1000000000);
			value = value.substr(0,5+Math.random()*5);
			captchaValue = value;
		}
		function setCaptcha(){
			let html = captchaValue.split("").map((char)=>{
				const rotate = -20 + Math.trunc(Math.random()*30);
				const font = Math.trunc(Math.random()*fonts.length);
				return '<span 
				style="transform:rotate(${rotate}deg);
				font-family:${fonts[font]}
				"
				>${char}</span>';
			}).join("");
			document.querySelector(".login-form .captcha .preview").innerHTML =html;
		}
		function initCaptcha(){
			document.querySelector(".login-form .captcha .captcha-refresh").addEventListener("click",function(){
				generateCaptcha();
				setCaptcha();
			});
			generateCaptcha();
			setCaptcha();
		}
		initCaptcha();

		document.querySelector(".login-form #login-btn").addEventListener("click",function(){
			let inputCaptchaValue = document.querySelector(".login-form .captcha input").value;
			if(inputCaptchaValue === captchaValue){
				swal("","Logging In!","success");
			} else {
				swal("Invalid captcha");
			}

		});
	})();
</script>-->