 <section class="wrapper">
       	<h3><i class="fa fa-angle-right"></i> Item Master List</h3>
  	
		  	<div class="row mt">
              <div class="col-lg-12">
                 
                      <div class="content-panel">
						    <div class="row">
                  <div class="col-sm-6">
                  <select class="form-control">
                    <option selected>Category</option>
                    <option>abc</option>
                    <option>xyz</option>
                    <option>def</option>
                  </select>
                  </div>
                  <div class="col-sm-6"><input type="text" class="form-control" placeholder="Enter item name or scan barcode" />
                  </div>
                </div><br/>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Code</th>
                                      <th>Name</th>
                                      <th>Descriptions</th>
                                      <th>Type</th>
                                      <th>UM</th>
                                      <th class="numeric">Unit Price</th>
                                      <th class="numeric">Selling Price</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php 
                                  for($i=1;$i<=1000;$i++){?>
                                  <tr>
                                      <td data-title="No"><?php echo $i;?>.</td>
                                      <td data-title="Code">rwn01</td>
                                      <td data-title="Name">Buku tulis</td>
                                      <td data-title="Descriptions">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                      <td data-title="Type">Buku</td>
                                      <td data-title="UM">PCS</td>
                                      <td class="numeric" data-title="Low">$1.38</td>
                                      <td class="numeric" data-title="Volume">9,395</td>
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