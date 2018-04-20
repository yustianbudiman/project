  <div class="panel panel-primary">
    <div class="panel-heading">Panel anggotA</div>
    <div class="panel-body">
    	<?php echo form_open_multipart('',['class'=>'form-horizontal'],'') ?>
    	<?php $btn=(isset($content['IsNewRecord'])?'Simpan':'Ubah');?>
        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'id','value'=>$content['id'],'class'=>'form-control','id'=>'id','type'=>'hidden']) ?>
              <?php echo form_input(['name'=>'nama_anggota','value'=>$content['nama_anggota'],'class'=>'form-control','id'=>'nama_anggota']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'alamat','value'=>$content['alamat'],'class'=>'form-control','id'=>'alamat']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">No Telepon</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'no_telepon','value'=>$content['no_telepon'],'class'=>'form-control','id'=>'no_telepon']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'foto','value'=>$content['foto'],'class'=>'form-control','id'=>'foto']) ?>
            </div>
          </div>
        </div>


    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'simpan','type'=>'submit','content'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '.$btn.'']);?>
    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'batal','type'=>'reset','content'=>'<i class="glyphicon glyphicon-refresh"></i> Batal']);?>
        <a href="<?php echo site_url()?>anggota/index" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
    	<?php echo form_close()?>
	</div>
  </div>
