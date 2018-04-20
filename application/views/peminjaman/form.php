  <div class="panel panel-primary">
    <div class="panel-heading">Panel Peminjaman</div>
    <div class="panel-body">
    	<?php echo form_open_multipart('',['class'=>'form-horizontal'],'') ?>
    	<?php $btn=(isset($content['IsNewRecord'])?'Simpan':'Ubah');?>
        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">No Faktur</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'id','value'=>$content['id'],'class'=>'form-control','id'=>'id','type'=>'hidden']) ?>
              <?php echo form_input(['name'=>'no_faktur','value'=>$content['no_faktur'],'class'=>'form-control','id'=>'no_faktur']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'tanggal','value'=>$content['tanggal'],'class'=>'form-control','id'=>'tanggal']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Anggota</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'id_anggota','value'=>$content['id_anggota'],'class'=>'form-control','id'=>'id_anggota']) ?>
            </div>
          </div>
        </div>


    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'simpan','type'=>'submit','content'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '.$btn.'']);?>
    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'batal','type'=>'reset','content'=>'<i class="glyphicon glyphicon-refresh"></i> Batal']);?>
        <a href="<?php echo site_url()?>peminjaman/index" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
    	<?php echo form_close()?>
	</div>
  </div>
