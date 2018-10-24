
<!--main content start-->
<div class="main-top">
				<div class="main">
			    <div class="section group">
				<div class="col span_2_of_3">
				  
				  	<h3><a href="<?php echo site_url('pendaftaran'); ?>"><i class="fa fa-list"></i> Penerimaan Siswa Baru (PSB)</a></h3>
					<?php 
					//ambil nilai batas dari controller
					$batas = $jumlahquota->kuota; 
					
					$jumlah_terdaftar = $this->bantuan->cekkuotatk();
					if($jumlah_terdaftar >= $batas) {
					?>
					<div class='alert alert-success'> 
					<button class="close" data-dismiss="alert">×</button>
					<h4 class='alert-heading'>PENDAFTARAN TK TUTUP !</h4>
					<span>
						<small>Maaf Pendaftaran TK Sudah Ditutup Karena Telah Mencapai Batas Quota</small>.
					</span>. 
					</div>
					<?php } ?>
					
					<a href="<?php if($jumlah_terdaftar <= $batas)  echo site_url('pendaftaran/formdaftar/tkit'); else echo "#"; ?>">
					<button <?php if($jumlah_terdaftar >= $batas) echo "disabled  class='btn btn-default'"; else echo "class='btn btn-primary'" ?>><i class='fa fa-plus'></i> Daftar TKIT</button>
					</a>
                        
					<a href="<?php echo site_url('pendaftaran/formdaftar/sdit'); ?>">
					<button class='btn btn-primary'><i class='fa fa-plus'></i> Daftar SDIT</button>
					</a>
                       
					<a href="<?php echo site_url('pendaftaran/formdaftar/smpit'); ?>">
					<button class='btn btn-primary'><i class='fa fa-plus'></i> Daftar SMPIT</button>
					</a>
        </div>

        <!-- page end-->
		 </div>
</section>
 

