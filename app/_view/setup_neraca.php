 <section class="wrapper">
<h3><i class="fa fa-angle-right"></i> Setup Neraca</h3>
  	
<div class="row mt">
<div class="col-lg-12">
   
        <div class="content-panel">
						    <div class="row">
    <div class="col-sm-6">
    <select class="form-control">
      <option selected>Account</option>
      <option>1001</option>
      <option>1002</option>
      <option>1003</option>
    </select>
    </div>
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Enter account code or descriptions" />
    </div>
  </div><br/>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Descriptions</th>
                <th>List Account</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i=1;$i<=800;$i++){?>
            <tr>
                <td data-title="No"><?php echo $i;?>.</td>
                <td data-title="Code">1001</td>
                <td data-title="Descriptions">Biaya Pengobatan</td>
                <td data-title="List Account">1001,1002,1003,1004-1006</td>
                <td data-title="Status"><input type="checkbox" data-toggle="switch"/></td>
                <td data-title="Action">
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
            </tr>
           <?php } ?>
            </tbody>
        </table>
        </section>
        </div><!-- /content-panel -->
    </div><!-- /col-lg-12 -->
</div><!-- /row -->
</section>
	