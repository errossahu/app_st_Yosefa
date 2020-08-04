  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?=base_Url('berita/add')?>" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></a>

                                </div>
                                <div class="panel-body">


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Judul Berita</th>
                                              <th>Slug Berita</th>
                                              <th>Tgl</th>

                                              <th>Gambar</th>
                                              <th>Nama User</th>
                                                <th>Aksi</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($berita as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->judul_berita?></td>
                                                <td><?=$value->slug_berita?></td>
                                                <td><?=$value->tgl_berita?></td>
                                                <td><img src="<?=base_Url('gambar_berita/'.$value->gambar_berita)?>" width="100px" height="auto">   </td>
                                                 <td><?=$value->nama_user?></td>
                                                 
                                                <td>
                                                   
                                                    <a href="<?=base_Url('berita/edit/'.$value->id_berita)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('berita/delete/'.$value->id_berita)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>