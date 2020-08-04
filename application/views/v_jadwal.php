
<div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/berita')?>">berita</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
   <br><br><br>   
  <div class="contact">
<div class="row">

  <div class="col-lg-1 text-center">
  </div>
  
  <div class="col-lg-10 text-center" style="text-align: center;">
    <h4 >JADWAL SISWA </h4><br>
    <table  class="table">
  <thead class="thead-dark">
    <tr>
      <th style="width: 5%;" scope="col">No</th>
      <th style="width: 5%;" scope="col">Tahun</th>
      <th style="width: 5%;" scope="col">Keterang File</th>
      
      <th style="width: 5%;" scope="col">Download</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $no=1; 
    foreach ($jadwal as $key => $value) {?>
     
    <tr>
      <th scope="row"><?=$no++?></th>

      <td><b style="color: black"><?=$value->tahun?></b></td>
      <td><b style="color: black"><?=$value->ket_file?></b></td>
      <td class="text-center">
                        <a href="<?=base_url('home/download_jadwal/'.$value->id_file) ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i>Download</a>
                      </td>
    </tr>
 <?php }?>
  </tbody>
</table>

  </div>
  <div class="col-lg-1 text-center">
  </div>
</div>



</div>
<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(<?=base_Url()?>template/front-end/images/newsletter_background.jpg)"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

            <!-- Newsletter Content -->
            <div class="newsletter_content text-lg-left text-center">
              
            </div>

            <!-- Newsletter Form -->
            <div class="newsletter_form_container ml-lg-auto">
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
