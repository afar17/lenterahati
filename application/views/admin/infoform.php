
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
                       <h4 class="gen-case"><a href="<?php echo site_url('info'); ?>"><i class="fa fa-list"></i> </a> Tambah Informasi </h4>
                    </header>
					 <div class="panel-body">
                            <div class="position-center">
					<?php 
						if(isset($edit)){
						?>
						<form method="post" role="form" action="<?php echo site_url("info/update"); ?>">
						<?php } else { ?>
						<form method="post" role="form" action="<?php echo site_url("info/save"); ?>">
						<?php } ?>
						<div class="form-group">
							<label for="judul">Tanggal Terbit</label>
							<input type="text" class="form-control" id="tanggal" name="tgl_terbit" placeholder="waktu" value="<?php if(isset($row->tgl_terbit)) echo $row->tgl_terbit;  ?>">
						</div>
                         <div class="form-group">
							<label for="judul">Sekolah</label>
							<select name="sekolah" class="form-control">
							<option value="">...Pilih Sekolah...</option>
							<?php foreach($sekolah as $skul) { ?>
								<option value="<?php echo $skul->kodesekolah; ?>" <?php if(isset($row->sekolah_kodesekolah) and $row->sekolah_kodesekolah==$skul->kodesekolah) echo "selected='selected'"; ?>><?php echo $skul->namasekolah; ?></option>
							<?php } ?>
							</select>
						</div>
                                                <div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" id="jdl_berita"name="jdl_berita" placeholder="judul" value="<?php if(isset($row->jdl_berita)) echo $row->jdl_berita;  ?>">
						</div>
					   
						<div class="form-group">
							<label for="isi_berita">Isi</label>
                                                <textarea  id="editor1" rows="10" cols="80" name="isi_berita"  height='60'><?php if(isset($row->isi_berita)) echo $row->isi_berita;  ?></textarea>
						</div>
								
	<?php 
	if(isset($edit)){
	?>
		<input type="hidden" name="id_info" value="<?php echo $row->id_info; ?>" />
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
 

