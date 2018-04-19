  <div class="panel panel-primary">
    <div class="panel-heading">Panel Buku</div>
    <div class="panel-body">
    	<?php echo form_open_multipart('',['class'=>'form-horizontal'],'') ?>
    	<?php $btn=(isset($content['IsNewRecord'])?'Simpan':'Ubah');?>
        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Judul Buku</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'id[]','value'=>$content['id'],'class'=>'form-control','id'=>'id','type'=>'hidden']) ?>
              <?php echo form_input(['name'=>'judul_buku[]','value'=>$content['judul_buku'],'class'=>'form-control','id'=>'judul_buku']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Tahun terbit</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'tahun_terbit[]','value'=>$content['tahun_terbit'],'class'=>'form-control','id'=>'tahun_terbit']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Pengarang</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'pengarang[]','value'=>$content['pengarang'],'class'=>'form-control','id'=>'pengarang']) ?>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label class="col-sm-2 control-label">Penerbit</label>
            <div class="col-sm-10">
              <?php echo form_input(['name'=>'penerbit[]','value'=>$content['penerbit'],'class'=>'form-control','id'=>'penerbit']) ?>
            </div>
          </div>
        </div>


    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'simpan','type'=>'submit','content'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '.$btn.'']);?>
    		<?php echo form_button(['class'=>'btn btn-primary','id'=>'batal','type'=>'reset','content'=>'<i class="glyphicon glyphicon-refresh"></i> Batal']);?>
        <a href="<?php echo site_url()?>buku/index" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
    	<?php echo form_close()?>
	</div>
  </div>
