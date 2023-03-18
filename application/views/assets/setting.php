<?php
$query  = $this->db->query("select * from setting");
    $row = $query->row();
?>
<a class="b-close"><img src="plugin/bpopup/close.jpg" alt="close" /></a>
<div class="alert alert-info" role="alert">
    <strong>Setting Website</strong>
</div>
<hr>

<form method="post" id="simpanbayar" action="main/updatesetting/">
<div id="notif"></div>
<br>
<table class='table table-sm'>
	
	<tr>
		<td>Nama Website</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="a" value="<?php echo $row->web ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>Keywords</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="b" value="<?php echo $row->keyword ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="c" value="<?php echo $row->telp ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>Alamat Email</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="d" value="<?php echo $row->email ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>URL Youtube</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="e" value="<?php echo $row->yt ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>URL Facebook</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="f" value="<?php echo $row->fb ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td>URL Instagram</td>
		<td>
            <div class="form-group">
              <input type="text"
                class="form-control" name="g" value="<?php echo $row->ig ?>" id="" aria-describedby="helpId" placeholder="">
            </div>
        </td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" class='btn btn-primary' name="save" value="SIMPAN" /></td>	
	</tr>
</table>
</form>

<script type="text/javascript">
	//<![CDATA[
	$("#simpanbayar").on('submit',function(e){
				$('#simpanbayar').waiting();
				e.preventDefault();
					$.ajax({
						url:  $(this).attr('action'),
						type: 'post',
						data: $(this).serialize(),
						dataType: "html",
						success: function(dt){	
							$(".bersih").val('');
							$('#simpanbayar').waiting('done');
                            $("#notif").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Informasi</strong> Berhasil Setting Website !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
						},
						error: function(dt){
							alert("Ada kesalahan sistem");
						},
					});//end of ajax()
				}); 
	//]]>
</script>
