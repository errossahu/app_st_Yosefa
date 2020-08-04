  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('berita/edit/'.$berita->id_berita);?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Judul Berita</label>
                                              <input value="<?= $berita->judul_berita ?> " autofocus=""  class="form-control" type="text" name="judul_berita" required>

                                        </div>

                                          </div>
 
                                        <div class="form-group">
                                      <label>Isi Berita</label>
                                      <textarea  id="editor" style="height: 120px; / height: 50%;" class="form-control" type="text" name="isi_berita" required><?=$berita->isi_berita?></textarea> 
 
                                    </div>
                                    

                                                                <div class="form-group">
                                 
                                      <img width="100px" src="<?=base_Url('gambar_berita/'.$berita->gambar_berita)?>">

                                      
                                  </div>
                                 <div class="form-group">
                                      <label> Ganti Foto Berita </label>
                                      <input style="width: 280px "  class="form-control" type="file" name="gambar_berita">
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>