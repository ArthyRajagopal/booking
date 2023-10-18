<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


<?php $validation = \Config\Services::validation(); ?>
<div class="container col-8 mt-5" >
<div class="card shadow">
<div class="card-body" >
<div class="row" style="padding:30px">
    <div class="col-lg-4 col-mt-4 col-8 order-1" >
            <img src="img/i11.jpg" width="300" height="600" >
</div>
<div class="col-lg-7 col-mt-3 col-8 order-2" >

<h1 style="color:orange">Join Us</h1><br>
<form method="post" action="<?=base_url('public/register');?>" novalidate >
            
            <?php if (isset($validation)) : ?>       
               <div class="text-danger">
               <?= $validation->listErrors() ?></div>
          <?php endif; ?>
            <div class="mb-3">
                <label for ="name" class="form-label" style="color:blue"> Name </label>
                <input required type="text"  class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color:blue"> EMAIL </label>
                <input required type="email"  class="form-control" id="email" name="email" placeholder="Example@gmail.com">
            </div>
            <div class="mb-3">
                <label for ="name" class="form-label" style="color:blue"> GENDER </label>
                <td ><br><input type="radio" name="gender" value="Male"required /> Male
                    <input type="radio" name="gender" value="Female" required/> Female
                </td>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label" style="color:blue"> PASSWORD </label>
                <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div> 
            <div class="mb-3">
                <label for ="cpassword" class="form-label" style="color:blue"> PASSWORD AGAIN </label>
                <input required type="password"  class="form-control" id="cpassword" name="cpassword" placeholder="confirm password">
            </div>
            <div class="mb-3">
                <input type="submit" value="Register" class="btn btn-primary">
                <a href="<?= base_url('public/login') ?>" class= "btn btn-warning ">Back</a>
            </div>
        </form>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
     // $(document).ready(function  () {  
         <?php if(session()->getflashdata('status')) { ?>
            swal({
                    title: "<?= session()->getflashdata('status') ?>",
                    text: "<?= session()->getflashdata('status_text') ?>",
                    icon: "<?= session()->getflashdata('status_icon') ?>",
                    button: "ok",
                });
                <?php } ?>
            //});
    </script>
</div>
</div>
</div>
</div>
</div><br><br><br>
</div>
   