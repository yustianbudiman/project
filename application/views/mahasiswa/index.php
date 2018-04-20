<div class="panel panel-primary">
    <div class="panel-heading">Panel mahasiswa</div>
    	<div class="panel-body">
            <div class="clearfix" style="margin-bottom: 10px;">
    		<a href="<?php echo site_url()?>welcome/create" class="btn btn-primary">Tambah</a>
    			
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
    					<td><?php echo $value->firstName ?></td>
    					<td><?php echo $value->lastName ?></td>
    					<td><?php echo $value->email ?></td>
    					<td><?php echo $value->mobileNumber ?></td>
    					<td class="tbl_center">
    						<a href="<?php echo site_url()?>welcome/update?id=<?php echo $value->_id ?>" class="btn btn-primary  btn-xs"><i class="glyphicon glyphicon-pencil"></i> edit</a>
    						<button class="btn btn-primary btn-xs" id="delete" json='<?php echo str_replace("'", "#", json_encode($value)) ?>'><i class="glyphicon glyphicon-trash"></i> Hapus</button>
    					</td>
    				</tr>
    				<?php
                    $no++;
    				}
    				?>
    			</tbody>
    		</table>
    		</div>
			<button class="btn btn-primary" id="tambah">Tambah</button>
    	</div>
</div>
<script type="text/javascript">
	$(document).on('click','#tambah',function(){
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

    $(document).on('click','#delete',function(){
        var data=JSON.parse($(this).attr('json'));
        $.ajax({ 
            type: 'POST', 
            url: "<?php echo base_url().'welcome/delete'?>", 
            data: { _id: data._id }, 
            dataType: 'json',
            beforeSend: function () {
                $('.loading_new').css('display','block');
            },
            success: function (data) { 
                /*output*/
            },
            complete :function(){
                $('.loading_new').css('display','none');
                window.location.replace("<?php echo base_url().'welcome/index'?>");
            }
        });
    });
    $(document).ready(function(){
        $('#tbl_mahasiswa').DataTable();
    });

</script>
