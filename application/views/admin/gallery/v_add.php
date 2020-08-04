  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('gallery/add');?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Nama Gallery</label>
                                              <input autofocus=""  class="form-control" type="text" name="nama_gallery" required>

                                        </div>

                                          </div>
 
                                     
                       
                                 <div class="form-group">
                                      <label>Foto</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="sampul" required>
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>