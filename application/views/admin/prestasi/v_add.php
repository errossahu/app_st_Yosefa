	  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                  
                                    <?php echo form_open('prestasi/add/');?>
                                    

                                      <div class="form-group">
                                      <label>Nama Prestasi</label>
                                      <input  class="form-control" type="text" name="nama_prestasi" required>

                                      </div>

                                     
                                        <div class="form-group">
                                      <label>Tingkat</label>
                                      <textarea style="height: 120px" class="form-control" type="text" name="tingkat" required> </textarea> 
                                        
                                     <div class="form-group">
                                      <label>Nama Siswa</label>
                                     <textarea style="height: 120px" class="form-control" type="text" name="siswa" required> </textarea> 
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