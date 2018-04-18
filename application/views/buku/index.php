<div class="panel panel-primary">
    <div class="panel-heading">Panel Buku</div>
    	<div class="panel-body">
			<button class="btn btn-primary" id="tambah_post">Contoh JS</button>
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
</script>

