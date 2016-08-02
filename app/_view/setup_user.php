 <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>User Account List</h3>
  	
		  	<div class="row mt">
              <div class="col-lg-12">
                 
                <div class="content-panel">
						    <div class="row">
                  <div class="col-sm-6">
                  <select class="form-control">
                    <option selected>Category</option>
                    <option>User</option>
                    <option>Administrator</option>
                    <option>Owner</option>
                  </select>
                  </div>
                  <div class="col-sm-6"><input type="text" class="form-control" placeholder="Enter item name or ather fields" />
                  </div>
                </div><br/>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Username</th>
                                      <th>Password</th>
                                      <th>Name</th>
                                      <th>Address</th>
                                      <th>E-mail</th>
                                      <th>Category</th>
                                      <th>Menu</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php for($i=1;$i<=800;$i++){?>
                                  <tr>
                                      <td data-title="No"><?php echo $i;?>.</td>
                                      <td data-title="Username">aviv</td>
                                      <td data-title="Password">*****</td>
                                      <td data-title="Name">M. Aviv Sudarmanto</td>
                                      <td data-title="Address">Mojosari</td>
                                      <td data-title=">E-mail">aviv@xyz.com</td>
                                      <td data-title=">Category">Administrator</td>
                                      <td data-title=">Menu">sss</td>
                                      <td data-title="status"><input type="checkbox" data-toggle="switch"/></td>
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