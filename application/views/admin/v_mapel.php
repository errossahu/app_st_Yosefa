<div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary" style='font-size:24px'>Tambah Data <i class='fas fa-download'></i></button>

                                </div>
                                <div class="panel-body">

                              <?php

                              if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible " >
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('pesan');
                                    echo '</div>';
                            }?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                                <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Mata Pelajaran</th>
                                              <th>Action</th>

                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            <?php $no=1; foreach ($mapel as $key => $value){ ?>
                                                
                                        <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_mapel?></td>
                                                <td>

                                                    <button data-toggle="modal" data-target="#edit<?=$value->id_mapel?>" class="btn btn-primary">
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                       
                                                    </button>                                          
                                                  
                                                    <a class="btn btn-danger" href="<?=base_Url('mapel/delete/'.$value->id_mapel)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')">
                                                      <span class="glyphicon glyphicon-trash"></span>
                                                    </a>
                                                  
                                              </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                              
                            </div>
                        </div>




                           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm   " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah MataPelajaran</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open('mapel/add'); ?>
                                    <div class="form-group">
                                    <label>Nama Mapel</label>
                                    <input class="form-control" type="text" name="nama_mapel" required>
                                   
                                </div>
                                 </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>

                                </div>
                                <?php echo form_close();?>
                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->












                    <!-- MODAL EDIT -->

 <?php  foreach ($mapel as $key => $value) {
     # code...
  ?>                   
<div class="modal fade" id="edit<?=$value->id_mapel?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm   " role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Edit MataPelajaran</h4>
</div>
<div class="modal-body">
<?php echo form_open('mapel/edit/'.$value->id_mapel); ?>
<div class="form-group">
<label>Nama Mapel</label>
<input class="form-control" type="text" name="nama_mapel" value="<?=$value->nama_mapel?>" required>

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default btn-sm" >Close</button>
<button type="submit" class="btn btn-primary btn-sm">Save </button>

</div>
<?php echo form_close();?>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
                                    </div>

                                <?php }?>
                                    <!-- /.modal -->