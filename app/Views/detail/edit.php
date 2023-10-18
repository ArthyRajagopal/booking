<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h1>Edit  
                        <a href="<?= base_url('public/index/') ?>" class= "btn btn-danger float-end">Back</a>
                    <h1>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('public/index/update/'.$cbookm['id']) ?>" method="POST">
                    <div class="row"> 


                    <table>
                        <tr>
                            <td><label>Name</label><br></td>
                            <td ><br><input type="text" name="name" value="<?= $cbookm['name'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label>Phone</label><br></td>
                            <td ><br><input type="text" name="contact" value="<?= $cbookm['contact'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label>E-mail</label><br></td>
                            <td ><br><input type="text" name="email" value="<?= $cbookm['email'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label>people</label><br></td>
                            <td ><br><input type="text" name="people" value="<?= $cbookm['people'] ?>" ></td>
                        </tr>
                        
                       
                    </table>
                        <div class="col-md-6">
                            <div class="form-group">
                                <br>
                                <button type="submit" class= "btn btn-success float-end" >Update</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>