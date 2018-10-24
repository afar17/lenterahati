

<body>
<section id="container">
<!--header start-->

<!--header end-->
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            
            <div class="col-sm-12 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"> GALERI </h4>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form role="form-horizontal" id="formGallery" method="post" action="<?php echo site_url("gallery/upload"); ?>" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="to" class="">Sekolah</label>
                                    <select name="sekolah" class="form-control">
                                        <option value="TKIT">TK IT</option>
                                        <option value="SDIT">SD IT</option>
                                        <option value="SMPIT">SMP IT</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bcc" class="">Judul</label>
                                    <input type="text" tabindex="1" name="judul" id="bcc" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="">Deskripsi</label>
                                     <textarea class="wysihtml5 form-control" name='deskripsi' rows="9"></textarea>
                                </div>

                                <div class="form-group">
                                  
                                    <input type="file" class="default" name="filefoto">
                                </div>

                                <div class="form-group">
                                    <div class='progress' style="height:25px;display: none" >
                                        <div id="progress-bar" class="progress-bar progress-bar-success" progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin='0' aria-valuemax='100' style="width: 30%;" ></div>
                                    </div>
                                </div>

                                <div class="compose-btn">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                                    <button class="btn btn-sm">Draft</button>
                                </div>
                               
                            </form>
                        </div>
                         
                    </div>
                    
                </section>
            </div>
        </div>

        <!-- page end-->
		 </div>
</section>
