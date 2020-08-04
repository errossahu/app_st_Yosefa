  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('guru/add');?>
                                    
                                      <div class="col-md-6">
                                          <div class="form-group">
                                      <label>NIP</label>
                                      <input class="form-control" type="text" name="nip" required>

                                      </div>

                                          </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                      <label>Nama Guru</label>
                                      <input class="form-control" type="text" name="nama_guru" required>
 
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
                                   </div>                               </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Mata Pelajaran</label>
                                      <select name="id_mapel" class="form-control">
                                        <option value="">--Pilihan MataPelajaran--</option>
                                        <?php foreach ($mapel as $key => $value) {?>
                                           <option value="<?=$value->id_mapel?>"><?=$value->nama_mapel?></option>
                                         <?php }?>
                                      </select>
                                    </div>
                                  </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Pendidikan</label>
                                      <select name="pendidikan" class="form-control">
                                        <option value="">--Pilih Pendidikan--</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                 <div class="form-group">
                                      <label>Foto</label>
                                      <input class="form-control" type="file" name="foto" required>
 
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