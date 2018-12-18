$("#FormPendaftaran").submit(function(e){
	  e.preventDefault();
	  
	  $.ajax({
		  url:$(this).attr('action'),
		  type:"post",
		  dataType : "HTML",
		  data: new FormData($(this)[0]),
		  contentType : false,
		  processData : false,
		  success:function(hasil){
			swal(
				  'Berhasil!',
				  'Pendaftaran Anda Segera Kami Proses, Terimakasih!',
				  'success'
				); 
			$('#FormPendaftaran').trigger("reset");
		  }
		  ,error:function(err){
			swal(
			  'Gagal!',
			  error,
			  'error'
			);
		  }
	  });
  });