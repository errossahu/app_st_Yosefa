  <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading col-md-3">
                                    <a href="<?=base_Url('siswa/add')?>" class="btn btn-primary" style='font-size:24px'><h6>Tambah Data</h6> <i class='fas fa-plus'></i></a>

                                </div>
                                <div class="panel-heading col-md-3">
                                    <a href="<?=base_Url('siswa/kelas_7')?>" class="btn btn-primary" style='font-size:24px'><h6>SISWA KELAS 7</h6>  <i class='fas fa-list '></i></a>

                                </div>
                                <div class="panel-heading col-md-3">
                                    <a href="<?=base_Url('siswa/kelas_8')?>" class="btn btn-primary" style='font-size:24px'><h6>SISWA KELAS 8</h6>  <i class='fas fa-list '></i></a>

                                </div>
                            <div class="panel-heading col-md-3">
                                    <a href="<?=base_Url('siswa/kelas_9')?>" class="btn btn-primary" style='font-size:24px'><h6>SISWA KELAS 9</h6>  <i class='fas fa-list '></i></a>

                                </div>
                                <div class="panel-body">
                                  <br><br>


  <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>NIs</th>
                                              <th>Nama Siswa</th>
                                              <th>Tempat Lahir</th>
                                              <th>Tanggal Lahir</th>
                                              <th>Kelas</th>
                                              <th>Agama</th>
                                              <th>Foto</th>
                                              <th>Action</th>

                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($siswa as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nis?></td>
                                                <td><?=$value->nama_siswa?></td>
                                                <td><?=$value->tempat_lahir?></td>
                                                <td><?=$value->tgl_lahir?></td>
                                                <td><?=$value->kelas?></td>
                                                <td><?=$value->agama?></td>
                                                <td><img style="width: 100px; height: auto; "; src="<?=base_Url('foto_siswa/'.$value->foto_siswa)?>" ></td>
                                                <td>
                                                   
                                                    <a href="<?=base_Url('siswa/edit/'.$value->id_siswa)?>"  class="btn btn-primary">
                                                            <i class="fa fa-pencil"></i>
                                                       
                                                    </a>                                          
                                                    

                                                    <a class="btn btn-danger" href="<?=base_Url('siswa/delete/'.$value->id_siswa)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <i class="fa fa-trash"></i>
                                                    </a>
 
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>