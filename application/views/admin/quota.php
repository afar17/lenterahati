
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            
            <div class="col-sm-12 mail-w3agile">
			<?php $this->load->view('admin/notif'); ?>
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"><a href="<?php echo site_url('quota_tk'); ?>"><i class="fa fa-newspaper-o"></i> </a> KUOTA </h4>
					  
                    </header>
					 <div class="panel-body">
					  <a href="<?php echo site_url('quota_tk/add'); ?>">
					   <button class='btn btn-info' type='button'><i class='fa fa-plus'></i> Tambah</button>
					   </a>
                             <table class="table" ui-jq="footable" ui-options='{
								"paging": {
								  "enabled": true
								},
								"filtering": {
								  "enabled": true
								},
								"sorting": {
								  "enabled": true
								}}'>
							<thead>
							  <tr>
								
                                                              <th>No</th>  
                                                              <th>Tahun</th>
                                                                <th>Kuota</th>
                                                                
								<th></th>
							  </tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($quota_tk as $row) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
                                                                        
									<td><?php echo $row->tahun; ?></td>
									<td><?php echo $row->kuota; ?></td>
                                                                        
									<td>
										
                                                                                <a href="<?php echo site_url("quota_tk/edit/".$row->tahun); ?>" >
										<button type = "button" class = "btn btn-info"><i class='fa fa-pencil'></i> Edit</button>
										</a>
										|
										<a href="<?php echo site_url("quota_tk/del/".$row->tahun); ?>" onclick="return confirm('Ingin Menghapusnya ?')">
										<button type = "button" class = "btn btn-danger"><i class='fa fa-times'></i> Delete</button>
										</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
							</table>

                        </div>
                </section>
            </div>
        </div>

        <!-- page end-->
		 </div>
</section>
 

