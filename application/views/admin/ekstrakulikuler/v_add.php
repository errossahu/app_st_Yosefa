  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    
                                    <?php echo form_open_multipart('ekstra/add');
                                       


                                    ?>
                                  <?php if ($this->session->flashdata('pesan')) {
                                      echo '<div class="alert alert-success alert-dismissible " >
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;
                                          </button>';
                                    echo $this->session->flashdata('pesan');
                                    echo '</div>';
                                  }?>

                                </div>
                                <div class="panel-body">
                                    
                                 
                                    
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Nama Ekstra</label>
                                              <input autofocus=""  class="form-control" type="text" name="nama_ekstra" required>

                                        </div>

                                          </div>
 
                                        <div class="form-group">
                                      <label>Sekilas</label>
                                      <textarea id="editor" style="height: 120px; / height: 50%;" class="form-control" type="text" name="sekilas" required></textarea> 
 
                                    </div>
                                    

                       
                                 <div class="form-group">
                                      <label>Foto</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="gambar" required>
 
                          
                                  </div>
                                 

                                    <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                      <button  type="reset" class="btn btn-success">Reset</button> 
                           
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>