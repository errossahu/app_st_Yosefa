  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('gallery/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">

  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Gallery</th>
                                              <th>Sampul</th>

                                                <th>Aksi</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($gallery as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_gallery?></td>

                                                <td class="text-center">



                                                  <img src="<?=base_Url('sampul/'.$value->sampul)?>" width="100px"><br><br>
                                                    <i class="fa fa-image"> <?=$value->jml_foto?>Foto</i><br>
                                  <a href="<?=base_Url('gallery/add_foto/'.$value->id_gallery)?>" class="btn btn-success btn-xs"  ><i class="fa fa-plus"></i>Tambah Foto</a>

                                               



                                                </td>

                                                 
                                                <td class="text-center">
                                                   
                                                    <a href="<?=base_Url('gallery/edit/'.$value->id_gallery)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('gallery/delete/'.$value->id_gallery)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>