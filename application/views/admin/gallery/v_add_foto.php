  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">


                                </div>
                                <div class="panel-body">
                                    
                                   
                                    <?php echo form_open_multipart('gallery/add_foto/'.$gallery->id_gallery);

                                     if ($this->session->flashdata('pesan')) {
                                      echo '<div class="alert alert-success alert-dismissible " >
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;
                                          </button>';
                                    echo  $this->session->flashdata('pesan');

                                        echo '<div>Berhasil Disimpan</div>';
                                    echo '</div>';

                                  }

                                    ?>
                                    <div class="col-sm-6">
                                      <div style="width: 300px">
                                          <div class="form-group">
                                              <label>Keterangan Foto</label>
                                              <input autofocus=""  class="form-control" type="text" name="ket_foto" required>

                                        </div>

                                          </div>
                                   </div>       
 
                                     
                                   <div class="col-sm-6">
                                 <div class="form-group">
                                      <label>Foto</label>
                                      <input style="width: 280px "  class="form-control" type="file" name="foto" required>
 
                          
                                  </div>
                                  </div >
                                  <div class="col-sm-6">
                                     <button  type="submit"  class="btn btn-primary">Simpan </button>  
                                     <a class="btn btn-success" href="<?=base_Url('gallery')?>">
                                                                              Kembali
                                     </a>

                           
                                  </div>
                                    
                                    <?php
                                    echo form_close();

                                    ?>
                                    <hr>


                                  </div> 
                                </div>
                                        <?php
                                    $no=1;
                                  foreach ( $foto as $key => $value) {
                                      # code...
                                   ?>

                                 
                                      <div class="col-sm-3 text-center"  >
                                      <p>Foto : <?=$no++?></p>
                                      <label><?=$value->ket_foto?></label>
                                        <img style="border: 10px solid transparent;  border-image-slice: 30;"  width="225x" height="210px" src="<?=base_Url('foto/'.$value->foto)?>">
 <a style="margin-top: 1px" class="btn btn-danger btn-xs btn-block"  href="<?=base_Url('gallery/delete_foto/'.$value->id_gallery.'/'.$value->id_foto)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')"> <i class="fa fa-trash" ></i>
                                                    </a>
                                                                      </div>
                             
                                  <?php }?>

                                        </div>
                                      
                                       </div>
                                      
