  <div class="panel panel-primary">
    <div class="panel-heading">Panel mhs</div>
    <div class="panel-body">
    	<?php echo form_open_multipart('',['class'=>'form-horizontal'],'') ?>
    	<?php $btn=(isset($content['IsNewRecord'])?'Simpan':'Ubah');?>
    		<div class="col-sm-12">
              <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                  <?php echo form_input(['name'=>'_id','value'=>$content['_id'],'class'=>'form-control','id'=>'_id','type'=>'hidden']) ?>
                  <?php echo form_input(['name'=>'firstName','value'=>$content['firstName'],'class'=>'form-control','id'=>'firstName']) ?>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                  <?php echo form_input(['name'=>'lastName','value'=>$content['lastName'],'class'=>'form-control','id'=>'lastName']) ?>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label class="col-sm-2 control-label">email</label>
                <div class="col-sm-10">
                  <?php echo form_input(['name'=>'email','value'=>$content['email'],'class'=>'form-control','id'=>'email']) ?>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                  <?php echo form_input(['name'=>'mobileNumber','value'=>$content['mobileNumber'],'class'=>'form-control','id'=>'mobileNumber']) ?>
                </div>
              </div>
            </div>


    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'simpan','type'=>'submit','content'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '.$btn.'']);?>
    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'batal','type'=>'reset','content'=>'<i class="glyphicon glyphicon-refresh"></i> Batal']);?>
        <a href="<?php echo site_url()?>welcome/index" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"> </i> Kembali</a>
    	<?php echo form_close()?>
	</div>
  </div>
