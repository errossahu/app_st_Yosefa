  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('fasilitas/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                            
                                              <th>Nama Fasilitas</th>
                                              <th>Foto</th>
                                              <th>Action</th>

                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($fasilitas as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>

                                                <td><?=$value->nama_fasilitas?></td>
                                                <td><img style="width: 100px; height: auto; "; src="<?=base_Url('foto_fasilitas/'.$value->foto)?>" ></td>
                                                <td>
                                                   
                                                    <a href="<?=base_Url('fasilitas/edit/'.$value->id_fasilitas)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('fasilitas/delete/'.$value->id_fasilitas)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>