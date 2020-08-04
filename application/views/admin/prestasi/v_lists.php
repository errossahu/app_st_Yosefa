  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('prestasi/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Prestasi</th>
                                              <th>Tingkat</th>
                                              <th>Siswa</th>
                                                <th>Aksi</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($prestasi as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_prestasi?></td>
                                                <td><?=$value->tingkat?></td>
                                                <td><?=$value->siswa?></td>
                                                
                                                <td>
                                                   
                                                    <a href="<?=base_Url('prestasi/edit/'.$value->id_prestasi )?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('prestasi/delete/'.$value->id_prestasi)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>