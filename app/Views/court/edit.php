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
                    <form action="<?= base_url('public/index/updatee/'.$Bookm['id']) ?>" method="POST">
                    <div class="row"> 


                    <table>
                        <tr>
                            <td><label>Court</label><br></td>
                            <td >
                            <select  name="court" style="width:190px" setvalue="<?= $Bookm['court'] ?>">
                            <option value="badminton1">badminton1</option>
                            <option value="badminton2">badminton2</option>
                            <option value="badminton3">badminton3</option>
                            <option value="cricket">cricket</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Date</label><br></td>
                            <td ><br><input type="text" name="date" value="<?= $Bookm['date'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label>Slot</label><br></td>
                            <td ><br><input type="text" name="slot" value="<?= $Bookm['slot'] ?>" ></td>
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