	  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                  
                                    <?php echo form_open_multipart('pengumuman/add/');?>
                                    

                                      <div class="form-group">
                                      <label>Judul Pengumuman</label>
                                      <input  class="form-control" type="text" name="judul_pengumuman" required>

                                      </div>

                                     
                                        <div class="form-group">
                                      <label>Isi Pengumuman</label>
                                      <textarea style="height: 120px" class="form-control" type="text" name="isi_pengumuman" required> </textarea> 
                                        
                                     <div class="form-group">
                                      <label>Input Foto Pengumanan</label>
                                      <input type="file" name="pengumuman_sekolah" required>
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