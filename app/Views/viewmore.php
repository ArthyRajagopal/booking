[4:49 pm, 04/04/2023] PRIYANKA RAVI: <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<style>
.cen {
  position: absolute;
  top: 75%;
  left: 45%;
}
</style>

<?php $validation =\Config\Services::validation(); ?>
<body class="bg-dark bg-gradient">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-secondary">View Details
            <a href="<?=base_url('public/index')?>" class= "btn btn-success float-end"  >Back</a>
            </h3>
                    </div>
                    <div class="card-body">
<?php
    if(session()->getFlashdata('status'))
    {
        echo "<h2>".session()->getFlashdata('status')."</h2>";
    }            
    ?>
    </div>
    
    <div class="card-body"><?php foreach($Bookm as $row) : ?>
        <table class="table table-bordered">
    
            <thead>
                
                <tr>
                    <th style="color:blue">ID</th>
                    <td><?= $row['id']?></td></tr><tr>
                    <th style="color:blue">Name</th>
                    <td><?= $row['name']?></td></tr><tr>
                     <th style="color:blue">Phone</th>
                    <td><?= $row['contact']?></td></tr><tr>

                    <th style="color:blue">E-mail</th>
                    <td><?= $row['email']?></td></tr><tr>
                    
                    <th style="color:blue">People</th>
                    <td><?= $row['people']?></td></tr>
                  
                       
                  
            </thead>
            <tbody>
                        
                        
            </form> 
                
            </tbody>
        </table><a href="<?=base_url('public/index/editt/'.$row['id'])?>"class="btn btn-primary btn cen " >Edit</a>
        <?php endforeach; ?>
    </div>
    <div class="col-md-6">
            
            <br><br><br><br></div>
</div>