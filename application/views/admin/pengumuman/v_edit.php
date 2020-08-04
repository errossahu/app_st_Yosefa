    <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('pengumuman/edit/'.$pengumuman->id_pengumuman);?>
                                    

                                      <div class="form-group">
                                      <label>Judul Pengumuman</label>
                                      <input value="<?=$pengumuman->judul_pengumuman?>" class="form-control" type="text" name="judul_pengumuman" required>

                                      </div>

                                     
                                        <div class="form-group">
                                      <label>Isi Pengumuman</label>
                                      <textarea value="<?=$pengumuman->isi_pengumuman?>" style="height: 120px" class="form-control" type="text" name="isi_pengumuman" required><?=$pengumuman->isi_pengumuman?> </textarea> 
 


                                    <br><br>  <div class="form-group">
                                 
                                      <img width="100px" src="<?=base_Url('pengumuman_sekolah/'.$pengumuman->pengumuman_sekolah )?>">

                                      
                                  </div>
                                     <div class="form-group">
                                    <button   type="submit"   class="btn btn-primary">Simpan </button>  
                                      <button type="reset" class="btn btn-success">Reset</button> 
                                     </div>
                                   
                                    </div> 
                                                                      <?php
                                    echo form_close();

                                    ?>

                                </div>