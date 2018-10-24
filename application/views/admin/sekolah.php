
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
                       <h4 class="gen-case"><a href="<?php echo site_url('sekolah'); ?>"><i class="fa fa-list"></i> </a> DATA SEKOLAH </h4>
					   
                    </header>
					
					 <div class="panel-body">
					 <a href="<?php echo site_url('sekolah/add'); ?>">
					   <button class='btn btn-primary'><i class='fa fa-plus'></i> Tambah</button>
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
								<th data-breakpoints="xs">Nomor</th>
								<th>Kode Sekolah</th>
								<th>Nama Sekolah</th>
								<th>Alamat</th>
								<th></th>
							  </tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($sekolah as $row) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $row->kodesekolah; ?></td>
									<td><?php echo $row->namasekolah; ?></td>
									<td><?php echo $row->alamat; ?></td>
									<td>
										<a href="<?php echo site_url("sekolah/edit/".$row->kodesekolah); ?>" >
										<button type = "button" class = "btn btn-info"><i class='fa fa-pencil'></i> Edit</button>
										</a>
										|
										<a href="<?php echo site_url("sekolah/del/".$row->kodesekolah); ?>" onclick="return confirm('Ingin Menghapusnya ?')">
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
 

