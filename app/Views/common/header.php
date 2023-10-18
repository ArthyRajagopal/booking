<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<style>

.sticky {
  position: fixed;
  top: 0;
  width:  100%;
  z-index: 1;
}
.navbar {
  font-weight: bold;
  z-index: 3;
}
#navbarNav{

  float: right;
}

a{
  color:blue;
}
</style>


  <nav class="navbar navbar-expand-lg navbar-blue col-12 sticky " style="display: block;background-color:white;">
  <div style="width: 90%;margin-left: 90;">
    <div class="container1"> 
    <img src="img/loco.jpg" class="img-fluid" style="width :40px; height: 30px;">
      <a class="navbar-brand" href="#"><b class="bold " style="color: orange;margin-top: 200px ;">VEE<span style="color: blue;">Go</span></b></a>
    
      <button class="navbar-toggler float-end" style="margin-right: 90;color:black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    
      aria-controls="navbarNav " aria-expanded="false" aria-label="Toggle navigation">
    
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color:black"fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>
      
      </button>
    
      <div class="collapse navbar-collapse" id="navbarNav">
      <br>
        <ul class="navbar-nav">
        
          <li class="nav-item">
          
            <a class="nav-link active" aria-current="page" href="<?=site_url("public/home");?>"><span style="color:orange;font-size:18 ">H</span><span style="font-size:16" >ome</span> </a>
          
          </li>
        
          
        
          <li class="nav-item">
          
            <a class="nav-link" href="<?=site_url("public/book");?>"><span style="color:orange;font-size:18 ">B</span><span style="font-size:16" >ook</span></a>
          
          </li>
        
          <li class="nav-item">
          
            <a class="nav-link" href="<?=site_url("public/facilities");?>"><span style="color:orange;font-size:18 ">F</span><span style="font-size:16" >acilites</span></a>
          
          </li><li class="nav-item">
          
            <a class="nav-link" href="<?=site_url("public/contacts");?>"><span style="color:orange;font-size:18 ">C</span><span style="font-size:16" >ontact Us</span></a>
          
          </li>
        
        </ul>
      
      </div>
    
    </div>
    </div>
  </nav>