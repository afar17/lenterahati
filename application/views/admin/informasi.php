
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
                       <h4 class="gen-case"><a href="<?php echo site_url('info'); ?>"><i class="fa fa-newspaper-o"></i> </a> INFORMASI </h4>
					  
                    </header>
					 <div class="panel-body">
					  <a href="<?php echo site_url('info/add'); ?>">
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
								<th data-breakpoints="xs">Nomor</th>
                                                                <th>Id Info</th>
                                                                <th>Waktu</th>
                                                                <th>Id User</th>
                                                                <th>Kode Sekolah</th>
                                                                <th>Judul Info</th>
                                                                <th>Isi</th>
                                                                
								<th></th>
							  </tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($informasi as $row) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $row->id_info; ?></td>
									<td><?php echo $row->tgl_terbit; ?></td>
                                                                        <td><?php echo $row->id_user; ?></td>
                                                                        <td><?php echo $row->sekolah_kodesekolah; ?></td>
                                                                        <td><?php echo $row->jdl_berita; ?></td>
									<td><?php echo $row->isi_berita; ?></td>
									<td>
										
                                                                                <a href="<?php echo site_url("info/edit/".$row->id_info); ?>" >
										<button type = "button" class = "btn btn-info"><i class='fa fa-pencil'></i> Edit</button>
										</a>
										|
										<a href="<?php echo site_url("info/del/".$row->id_info); ?>" onclick="return confirm('Ingin Menghapusnya ?')">
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
 

