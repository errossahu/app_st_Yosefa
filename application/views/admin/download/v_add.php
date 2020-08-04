  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('download/add');

                                    


                                    ?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Keterangan File</label>
                                              <input autofocus=""  class="form-control" type="text" name="ket_file" required>

                                        </div>

                                          </div>
 
                                     
                       
                                 <div class="form-group">
                                      <label>File</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="file" required>
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>