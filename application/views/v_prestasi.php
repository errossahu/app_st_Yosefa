
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
    <h4 >PRESTASI</h4><br>
    <table  class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Prestasi</th>
      <th scope="col">Tingkat</th>
      <th scope="col">Siswa</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1;
     foreach ($prestasi as $key => $value){ ?>
      
  
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><b style="color: black"><?=$value->nama_prestasi?></b></td>
      <td><b style="color: black"><?=$value->tingkat?></b></td>
      <td><b style="color: black"><?=$value->siswa?></b></td>
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
