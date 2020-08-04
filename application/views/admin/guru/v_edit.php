  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
           
                            <?php echo form_open_multipart('guru/edit/'.$guru->id_guru);?>
            
                                      <div class="col-md-6">
                                          <div class="form-group">
                                      <label>NIP</label>
                                      <input value="<?=$guru->nip?>" class="form-control" type="text" name="nip" required>

                                      </div>

                                          </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                      <label>Nama Guru</label>
                                      <input value="<?=$guru->nama_guru?>" class="form-control" type="text" name="nama_guru" required>
 
                                  </div>
                                    </div>
                                    
                                  <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input value="<?=$guru->tempat_lahir?>" class="form-control" type="text" name="tempat_lahir" required>
 
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                  <label>Tanggal</label>
                                  <input value="<?=$guru->tgl_lahir?>" name="tgl_lahir" class="form-control" type="text" id="tanggal">
                                   </div>                               </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Mata Pelajaran</label>
                                      <select name="id_mapel" class="form-control">
                                        <option value="<?=$guru->id_mapel?>" value=""><?=$guru->nama_mapel?></option>
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
                                        <option value="<?=$guru->pendidikan?>"><?=$guru->pendidikan?></option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                 <div class="form-group">
                                 
                                      <img width="100px" src="<?=base_Url('foto_guru/'.$guru->foto)?>">

                                      
                                  </div>
                                  <div class="form-group">
                                        <label>Ganti Foto</label>
                                      <input type="file" class="form-control" name="foto">
                                  </div>
                                  </div>
                                  <p> 
                                  </p>
                                 <div class="form-group">
                            <button  type="submit" style="margin-top: 170px; margin-left: 16px"  class="btn btn-primary">Simpan </button>  
                                      <button style="margin-top: 170px" type="reset" class="btn btn-success">Reset</button> 
                                  </div>
                                    <?php
                                    echo form_close();

                                    ?>
                                  </div> 
                                </div>