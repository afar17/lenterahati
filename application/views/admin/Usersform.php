
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
                            <div class="position-center">
					<?php 
						if(isset($edit)){
						?>
						<form method="post" role="form" action="<?php echo site_url("users/update"); ?>">
						<?php } else { ?>
						<form method="post" role="form" action="<?php echo site_url("users/save"); ?>">
						<?php } ?>
    <div class="form-group"> 
	<label for="namalengkap">Nama Lengkap</label> 
			<input type="text" autofocus required name="namalengkap" class="form-control" id="namalengkap" placeholder="Nama Lengkap"> 
	</div> 
	<div class="form-group"> 
	<label for="inputUsername">Username</label> 
			<input type="text" autofocus required name="username" class="form-control" id="inputUsername" placeholder="Username"> 
	</div> 
	<div class="form-group"> 
		<label for="inputPassword1">Password</label> 
			<input type="password"  required name="password" class="form-control" id="inputPassword1" placeholder="Password"> 
	</div> 
	<div class="form-group"> 
		<label for="inputPassword2">Ulangi Password</label> 
			<input type="password"  name="confirmpassword"  class="form-control" id="inputPassword2" placeholder="Ulangi Password"> 
	</div>
	<div class="form-group"> 
		<label for="inputPassword2">Level</label> 
			<select name="level" class="form-control">
				<option value="">...Level...</option>
				<option value="Admin">Admin</option>
				<option value="operator_tk" selected>Operator TK</option>
				<option value="operator_sd" selected>Operator SD</option>
				<option value="operator_smp" selected>Operator SMP</option>
			</select>
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
 

