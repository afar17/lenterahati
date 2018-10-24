
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
                            <div class="position-center">
					<?php 
						if(isset($edit)){
						?>
						<form method="post" role="form" action="<?php echo site_url("sekolah/update"); ?>">
						<?php } else { ?>
						<form method="post" role="form" action="<?php echo site_url("sekolah/save"); ?>">
						<?php } ?>
                         <div class="form-group">
							<label for="kodeSekolah">Kode Sekolah</label>
							<input type="text" name="kodesekolah" class="form-control" autofocus id="kodesekolah" placeholder="Kode Sekolah" required value="<?php if(isset($row->kodesekolah)) echo $row->kodesekolah;  ?>">
						</div>
						<div class="form-group">
							<label for="namaSekolah">Nama Sekolah</label>
							<input type="text" class="form-control" id="namasekolah"name="namasekolah" placeholder="Kode Sekolah" value="<?php if(isset($row->namasekolah)) echo $row->namasekolah;  ?>">
						</div>
					   
						<div class="form-group">
							<label for="alamat">Alamat</label>
<textarea name="alamat" class="form-control" id="alamat"><?php if(isset($row->alamat)) echo $row->alamat;  ?></textarea>
						</div>
								
	<?php 
	if(isset($edit)){
	?>
		<input type="hidden" name="kodesekolahlama" value="<?php echo $row->kodesekolah; ?>" />
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
 

