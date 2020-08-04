  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('gallery/edit/'.$gallery->id_gallery);?>
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Nama Gallery</label>
                                              <input value="<?=$gallery->nama_gallery?>" autofocus=""  class="form-control" type="text" name="nama_gallery" required>

                                        </div>

                                          </div>
   
                                <div class="form-group">
                                 
                                      <img width="100px" src="<?=base_Url('sampul/'.$gallery->sampul)?>">

                                      
                                  </div>
                                 <div class="form-group">
                                      <label>Ganti  Sampul</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="sampul" >
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>