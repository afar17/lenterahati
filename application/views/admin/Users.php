
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
                       <h4 class="gen-case"><a href="<?php echo site_url('users/daftar'); ?>"><i class="fa fa-list"></i> </a> DATA USERS </h4>
					   
                    </header>
					
					 <div class="panel-body">
					 <a href="<?php echo site_url('Users/tambah'); ?>">
					   <button class='btn btn-primary'><i class='fa fa-plus'></i> Tambah</button>
					   </a>
                            <table class='table'>
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Level</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($users as $row) { ?>
						<tr>
							<td><?php echo $no++ ; ?></td>
							<td><?php echo $row->username ; ?></td>
							<td><?php echo $row->level ; ?></td>
							<td>
							<a href="<?php echo site_url("Users/remove/".$row->id_user); ?>" onclick="return confirm('Ingin Menghapusnya ?')">
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
 

