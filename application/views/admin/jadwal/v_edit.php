  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('jadwal/edit/'.$jadwal->id_file);

                                    


                                    ?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Keterangan File</label>
                                              <input value="<?=$jadwal->ket_file?>" autofocus=""  class="form-control" type="text" name="ket_file" required>

                                        </div>

                                          </div>
 
                                     <div style="width: 300px" class="form-group">
                                              <label>Tahun</label>
                                              <input value="<?=$jadwal->tahun?>" autofocus=""  class="form-control" type="text" name="tahun" required>

                                        </div>
                       
                                 <div class="form-group">
                                      <label>Ganti File</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="file" >
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>