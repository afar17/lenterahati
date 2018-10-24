
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
                       <h4 class="gen-case"><a href="<?php echo site_url('quota_tk'); ?>"><i class="fa fa-list"></i> </a> Tambah Informasi </h4>
                    </header>
					 <div class="panel-body">
                            <div class="position-center">
					<?php 
						if(isset($edit)){
						?>
						<form method="post" role="form" action="<?php echo site_url("quota_tk/update"); ?>">
						<?php } else { ?>
						<form method="post" role="form" action="<?php echo site_url("quota_tk/save"); ?>">
						<?php } ?>
						<div class="form-group">
							<label for="judul">Tahun</label>
							<input type="text" class="form-control" id="tahun" name="tahun" placeholder="waktu" value="<?php if(isset($row->tahun)) echo $row->tahun;  ?>">
						</div>
                                                
                                                <div class="form-group">
							<label for="judul">Kuota</label>
							<input type="text" class="form-control" id="kuota"name="kuota" placeholder="kuota" value="<?php if(isset($row->kuota)) echo $row->kuota;  ?>">
						</div>
					   
						
								
	<?php 
	if(isset($edit)){
	?>
		<input type="hidden" name="tahun" value="<?php echo $row->tahun; ?>" />
		 <button type="submit" name="update" value="update" class="btn btn-info">Update</button>
	<?php } else { ?>
		 <button type="submit" name="save" value="save" class="btn btn-info">Save</button>
	<?php } ?>
                               
                            </form>
                            </div>

                        </div>
                </section>
            </div>
        </div>

        <!-- page end-->
		 </div>
</section>
 

