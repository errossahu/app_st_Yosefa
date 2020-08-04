  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('siswa/add');?>
                                    
                                      <div class="col-md-6">
                                          <div class="form-group">
                                      <label>NIS</label>
                                      <input class="form-control" type="text" name="nis" required>

                                      </div>

                                          </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                      <label>Nama Siswa</label>
                                      <input class="form-control" type="text" name="nama_siswa" required>
 
                                  </div>
                                    </div>
                                    
                                  <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input class="form-control" type="text" name="tempat_lahir" required>
 
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                  <label>Tanggal</label>
                                  <input name="tgl_lahir" class="form-control" type="text" id="tanggal">
                                   </div>                       
                                           </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Kelas</label>
                                      <select name="kelas" class="form-control">
                                        <option value="">--Pilihan Kelas--</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>

                                                                         </select>
                                    </div>
                                  </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Agama</label>
                                      <select name="agama" class="form-control">
                                        <option value="">--Pilih Agama--</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                      </select>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                 <div class="form-group">
                                      <label>Foto</label>
                                      <input class="form-control" type="file" name="foto_siswa" required>
 
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