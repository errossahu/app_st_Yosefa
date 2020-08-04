  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('ekstra/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Ekstra</th>
                                              <th>Slug </th>
                                              <th>Sekilas </th>
                                              <th>Gambar</th>
                                          
                                                <th>Aksi</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($ekstra as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_ekstra?></td>
                                                <td><?=$value->slug?></td>
                                                <td><?=$value->sekilas?></td>

                                                <td><img src="<?=base_Url('foto_ekstra/'.$value->gambar)?>" width="100px" height="auto">   </td>
                                                
                                                <td>
                                                   
                                                    <a href="<?=base_Url('ekstra/edit/'.$value->id_ekstra)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('ekstra/delete/'.$value->id_ekstra)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>