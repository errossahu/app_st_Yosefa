  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('download/edit/'.$download->id_file);?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Keterangan File</label>
                                              <input  value="<?=$download->id_file?>" autofocus=""  class="form-control" type="text" name="ket_file" required>

                                        </div>

                                          </div>
 
                                     
    
 
                   
                                 
                                  
                                 <div class="form-group">
                                      <label>Ganti File</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="file" >
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                     <a href="<?=base_Url('download')?>">
                                        <button   class="btn btn-success">Kembali</button> 
                                     </a>

                                     
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>