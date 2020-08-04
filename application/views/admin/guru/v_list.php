  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('guru/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Desa</th>
                                              <th>Nama</th>
                                              <th>Usia</th>
                                              <th>Pekerjaan</th>
                                              <th>Foto</th>
                                              <th>Penyebaran</th>
                                              <th>Action</th>

                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($desa as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_desa?></td>
                                                <td><?=$value->usia?></td>
                                                <td><?=$value->pekerjaan?></td>
                                               
                                                <td><img style="width: 100px; height: auto; "; src="<?=base_Url('foto_pasien/'.$value->foto)?>" ></td>
                                                <td>
                                                   
                                                    <a href="<?=base_Url('guru/edit/'.$value->id_guru)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('guru/delete/'.$value->id_guru)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>