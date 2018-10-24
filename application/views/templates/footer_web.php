
</div>
</div>
</div>
<div class="wrap">
	<div class="copy-right">
		<p>© 2018 Lentera Hati | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url('assetsadmin/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.PrintArea.js');?>"></script>
	<script src="<?php echo base_url('assets/js/html2canvas.js');?>"></script>
	<script type="text/javascript">
		$(window).load( function() {
			$("#tanggal").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			$("#tanggallahirayah").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			$("#tanggallahiribu").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			//cetak print
			$("#cetak").bind("click", function(event) {
				// cetak data pada area <div id="#data-mahasiswa"></div>
				$('#halaman-print').printArea();
			});
		});
	</script>
</body>
</html>
