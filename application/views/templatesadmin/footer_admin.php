<!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="<?php echo base_url("assetsadmin/js/bootstrap.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/jquery.dcjqaccordion.2.7.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/scripts.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/jquery.slimscroll.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/jquery.nicescroll.js"); ?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url("assetsadmin/js/jquery.scrollTo.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/ckeditor/ckeditor.js"); ?>"></script>
<script src="<?php echo base_url('assetsadmin/js/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/raphael-min.js"); ?>"></script>
<script src="<?php echo base_url("assetsadmin/js/sweetalert2.all.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/toastr.min.js"); ?>"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		//fungsi upload gambar
		var inputFile = $('input[name=file]');
		var uploadURI = $('#formGallery').attr('action');
		var progressBar = $('#progress-bar');

			$("#formGallery").on('submit',(function(e) {
			e.preventDefault();
			 
			var form = $(this);
			var formgalleri = false;
			if (window.FormData){
				formgalleri = new FormData(form[0]);
			}
			 var formAction = form.attr('action');
			 
			$.ajax({
	        	url: uploadURI,   	// Url to which the request is send
				type: "POST",      				// Type of request to be send, called as method
				data:formgalleri ? formgalleri : form.serialize(), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
	    	    cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(result)  		// A function to be called if request succeeds
			    {
					swal(
					  'Berhasil!',
					  'File telah diunggah!',
					  'success'
					);
					$('#formGallery').trigger("reset");	
					$(".progress").fadeOut(5000);
			    },
				xhr: function() {
						var xhr = new XMLHttpRequest();
						xhr.upload.addEventListener("progress", function(event) {
							if (event.lengthComputable) {
								var percentComplete = Math.round( (event.loaded / event.total) * 100 );
								// console.log(percentComplete);
								
								$('.progress').show();
								progressBar.css({width: percentComplete + "%"});
								progressBar.text(percentComplete + '%');


							};
						}, false);

						return xhr;
						
				}
				,error: function(err) {
				  // Fail message
				  swal(
					  'Gagal!',
					  error,
					  'error'
					);
				}	        
			});
			
		}));
		//akhir fungsi upload gambar
		
		
	});
	//MEMBUAT INPUT AUDIO
	$('<audio id="chatAudio"><source src="<?php echo base_url('assets/audio/notifikasi.ogg'); ?>" type="audio/ogg"><source src="<?php echo base_url('assets/audio/notifikasi.mp3'); ?>" type="audio/mpeg"><source src="<?php echo base_url('assets/audio/notifikasi.wav'); ?>" type="audio/wav"></audio>').appendTo('body');
	
	Pusher.logToConsole = true;
	
    var pusher = new Pusher('c4aa79921b531bda044b', {
      cluster: 'mt1',
      forceTLS: true
    });
	var jumlah =0;
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
     // $("#hasil").append("<li class='media'>"+data.name+" : "+data.message+"</li>");
	 toastr.options = {
			  "debug": false,
			  "positionClass": "toast-bottom-right",
			  "onclick": null,
			  "fadeIn": 300,
			  "fadeOut": 1000,
			  "timeOut": 5000,
			  "extendedTimeOut": 1000
			}
	  toastr.info('Pesan Baru Dari '+data.name+" : "+ data.message + 'Success Alert', {timeOut: 5000});
	  $('#chatAudio')[0].play();
	  $("#jumlahNotif").html(jumlah=jumlah+1);
    });
	</script>
	<script>
		 
	</script>
<!-- calendar -->
	<script type="text/javascript" src="<?php echo base_url("assetsadmin/js/monthly.js"); ?>"></script>
	<script type="text/javascript">
		$(window).load( function() {
			$("#tanggal").datepicker({
				dateFormat:"dd/mm/yy"
			});
			
		});
	</script>
	<!-- //calendar -->
</body>
</html>