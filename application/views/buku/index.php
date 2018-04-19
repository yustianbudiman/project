<div class="panel panel-primary">
    <div class="panel-heading">Panel Buku</div>
    	<div class="panel-body">
    		<div class="clearfix" style="margin-bottom: 10px;">
    		<a href="<?php echo site_url()?>buku/create" class="btn btn-primary">Tambah</a>
    			
    		</div>
			<div class="table-responsive">
    		<table class="table table-bordered table-hover" id="tbl_mahasiswa">
    			<thead>
    				<tr>
                        <th>No</th>
    					<th>First Name</th>
    					<th>Last Name</th>
    					<th>Email</th>
	    				<th>Phone</th>
	    				<th class="tbl_center">aksi</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php
                    $no=1;
    				foreach (json_decode($result) as $key =>$value) {
    				?>
    				<tr>
                        <td><?php echo $no ?></td>
    					<td><?php echo $value->judul_buku ?></td>
    					<td><?php echo $value->pengarang ?></td>
    					<td><?php echo $value->penerbit ?></td>
    					<td><?php echo $value->tahun_terbit ?></td>
    					<td class="tbl_center">
    						<a href="<?php echo site_url()?>buku/update?id=<?php echo $value->id ?>" class="btn btn-primary  btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</a>
    						<button class="btn btn-primary btn-xs" id="tmp_btn_delete" data-toggle="modal" data-target="#myModal" json='<?php echo str_replace("'", "#", json_encode($value)) ?>'><i class="glyphicon glyphicon-trash"></i> Hapus</button>
    					</td>
    				</tr>
    				<?php
                    $no++;
    				}
    				?>
    			</tbody>
    		</table>
    		</div>
			<button class="btn btn-primary" id="tambah_post">Contoh JS</button>
    	</div>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="delete" json="">hapus</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
	$(document).on('click','#tambah_post',function(){
		var id='1';
		$.ajax({ 
		    type: 'GET', 
		    url: "<?php echo base_url().'buku/get'?>", 
		    data: { get_param: 'value' }, 
		    dataType: 'json',
		    beforeSend: function () {
            	$('.loading_new').css('display','block');
        	},
		    success: function (data) { 
		    	/*output*/
		    },
		    complete :function(){
		    	$('.loading_new').css('display','none');
		    }
		});
	});
	$(document).on('click','#tmp_btn_delete',function(){
		var json=$(this).attr('json');
			$('#delete').attr('json',json);
	});
	$(document).on('click','#delete',function(){
        var data=JSON.parse($(this).attr('json'));
        $.ajax({ 
            type: 'POST', 
            url: "<?php echo base_url().'buku/delete'?>", 
            data: { id: data.id }, 
            dataType: 'json',
            beforeSend: function () {
                $('.loading_new').css('display','block');
            },
            success: function (data) { 
                /*output*/
            },
            complete :function(){
                $('.loading_new').css('display','none');
                window.location.replace("<?php echo base_url().'buku/index'?>");
            }
        });
    });
</script>

