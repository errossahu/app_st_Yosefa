  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('kurikulum/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">

  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Tahun</th>
                                              <th>Nama File</th>
                                              <th>File</th>

                                                <th>Aksi</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($kurikulum as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <th><?=$value->tahun?></th>
                                                <td><?=$value->ket_file?></td>

                                                <td >

                                                <?=$value->file?>
                                               



                                                </td>

                                                 
                                                <td class="text-center">
                                                   
                                                    <a href="<?=base_Url('kurikulum/edit/'.$value->id_file)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                    </a>                                          
                                                    

                                      <a class="btn btn-danger" href="<?=base_Url('kurikulum/delete/'.$value->id_file)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>