<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<style>
.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.8;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
.center {
  display: flex;
  justify-content: center;
  align-items: center;

}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
                if(session()->getFlashdata('status'))
                {
                    echo "<h2>".session()->getFlashdata('status')."</h2>";
                }            
            ?>
            <div class="card">
                <div class="card-header">
                    <h1 style="color:orange">Dashboard
                        <a href="<?php echo site_url("public/Login/logout"); ?>" class="nav-link btn btn-primary float-end"  style="color:white">LOGOUT</a>
                    </h1>
                </div>
                <div >
                <div class="mb-3">
                    <form >
                        
                    <div class="row"> 
                        <div class="col-md-5" style="padding: 10px 10px 10px 50px;width :600px">
                            <div class="form-group">
                            <label for ="start_date">Enter Start Date</label>
				    <input type="text" name="start_date" class="form-control form-control-ig"placeholder="Enter Start Date..." value="<?= set_value('start_date') ?>">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 10px 50px 10px 10px;width :600px">
                            <div class="form-group">
                                
                    <label for ="end_date">Enter End Date</label>
				    <input type="text" name="end_date" class="form-control form-control-ig"placeholder="Enter End Date..." value="<?= set_value('end_date') ?>">
                            </div>
                        </div>
                        <div class="col-md-1 center">
                            <div class="form-group">
                                <br>
                    <button class="btn button center " type="submit" id="button-addon2">Search</button>
                            </div>
                        </div>
                        </div>
                    
                    </form>
							</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="color:blue">ID</th>
                                <th style="color:blue">Court</th>
                                <th style="color:blue">Date</th>
                                <th style="color:blue">Slot </th>
                                <th style="color:blue">Name </th>
                                <th style="color:blue">View Booking </th>
                                <th style="color:blue">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                        <?php foreach($data as $row) : ?>
                            
                        <?php foreach($dataa as $rrr) : ?>
                            <?php if ($rrr['id']==$row['id']): ?>
                        
                                <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['court'] ?></td>
                                <td><?= $row['date'] ?></td>
                                <td><?= $row['slot'] ?></td>
                                
                                <td><?= $rrr['name'] ?></td>
                                <td><a href="<?=base_url('public/index/'.$row['id'])?>" >view details </a></td>
                                <td>
                                <a href="<?=base_url('public/index/edit/'.$row['id'])?>"class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?=base_url('public/index/delete/'.$row['id'])?>"class="btn btn-danger btn-sm">Delete</a>
                            <td>
                                </td>
                            </tr>
                   <?php endif;?>
                             
                            
                        <?php endforeach; ?>

                        <?php endforeach; ?>

                            </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
                    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
                    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
                    <script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                           /*$(document).ready(function () {
                              $('.confirm_del_btn').click(function (e){
                                e.preventDefault();
                                var id = $(this).val();
                              });
                                swal({
                                     title: "Are you sure?",
                                     text: "Once deleted, you will not be able to recover this imaginary file!",
                                     icon: "warning",
                                     buttons: true,
                                     dangerMode: true,
                                })
                                .then((willDelete) => {
                                     if (willDelete) 
                                    {
                                        $.ajax({
                                            url: "/index/delete/"+id,
                                            success: function(response) { 
                                                 swal({
                                                     title: response.status,
                                                     text:response.status_text,
                                                     icon: response.status_icon ,
                                                     buttons: "ok"
                                   }).then((confirmed) => {
                                      // window.onbeforeunload = null;
                                       window.location.reload();
                                   });
                                }      
                        });
                    }   
                        else 
                        {
                            swal("you have canceled on deleteing this data");
                        }
                    });

                });-->
<!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
<script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
       // var id; // define id variable outside click function
        $('.btn').click(function (e) {
            e.preventDefault();
            var id = $(this).val(); // assign the value of the clicked button to id variable
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete)
             {
                $.ajax({
                    URL: "/index/delete/"+id, // use lowercase "url" instead of "URL"
                    success: function(response) { 
                        swal({
                            title: response.status,
                            text: response.status_text,
                            icon: response.status_icon ,
                            buttons: "ok",
                        }).then((confirmed) => {
                            window.location.reload(); // remove commented line
                        }); 
                    }      
                });
            } 
            else
             {
                swal("you have canceled on deleteing this data");
            }
        });
    });
});   
</script>-->