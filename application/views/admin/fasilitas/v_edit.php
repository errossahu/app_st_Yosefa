  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('fasilitas/edit/'.$fasilitas->id_fasilitas);?>
                                    
                                     
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                      <label>Nama Fasilitas</label>
                                      <input value="<?=$fasilitas->nama_fasilitas?>" class="form-control" type="text" name="nama_fasilitas" required>
 
                                  </div>
                                    </div>
                                
                                  
                                  <div class="col-md-6">
                                 <div class="form-group">
                                      <label>Ganti Foto</label>
                                      <input class="form-control" type="file" name="foto" >
 
                                  </div>
                                  </div>
                                  <p> 
                                  </p>
                                 <div class="form-group">
                            <button  type="submit" style="margin-top: 24px; margin-left: 16px"  class="btn btn-primary">Simpan </button>  
                                      <button style="margin-top: 24px" type="reset" class="btn btn-success">Reset</button> 
                                  </div>
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>