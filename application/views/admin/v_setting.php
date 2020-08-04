    <?php echo form_open_multipart('setting/edit/');



                              if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible " >
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('pesan');
                                    echo '</div>';
                            }?>

<div class="col-sm-4" >
	
		<label>Kepala Sekolah</label><br>
		<div  	>
			
			<img class="img-thumbnail" src="<?=base_url('kep_sek/'.$setting->foto_kepsek)?>"><br>
			
		</div>
	


		<div style="margin-left: -10px" class="form-group">
					<label >Ganti Foto</label>
			<input  class="form-control" type="file" name="foto_kepsek">
		</div>
		
</div>
	
<br>
<div class="col-sm-8">
	<div class="form-group" >
		
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >Nama Kepala Sekolah</label>
			<input value="<?=$setting->kepala_sekolah?>" class="form-control" type="text" name="kepala_sekolah">
		</div>
			
	</div><br>
	<div class="form-group" >	
		
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >Nama Sekolah</label>
			<input value="<?=$setting->nama_sekolah?>" class="form-control" type="text" name="nama_sekolah">
		</div>
			
	</div><br>
	<div class="form-group" >
		
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >Alamat Sekolah</label>
			<input value="<?=$setting->alamat?>" class="form-control" type="text" name="alamat">
		</div>
			
	</div>



		<div class="form-group" >
		<br>
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >Visi </label>
			<textarea style="height: 50px" class="form-control"  name="visi" required><?=$setting->visi?></textarea>
		</div>
		</div>
		<div class="form-group" >
		<br>
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >misi </label>
			<textarea style="height: 50px" class="form-control"  name="misi" required><?=$setting->misi?></textarea>
		</div>

	


		</div>
</div>

	<div class=" col-sm-12" >
		<br>
		<div style="margin-left: -10px ; margin-top: -30px" class="form-group" >
			<label >Sejarah </label>
			<textarea id="editor" style="height: 200px" class="form-control"  name="sejarah" required><?=$setting->sejarah?></textarea>
		</div>
			
				
	</div>
              <button  type="submit"  class="btn btn-primary" >Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
<?php	
                                    echo form_close();?>

                               