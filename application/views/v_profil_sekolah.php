<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/download')?>">profil</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>

  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center"style="text-align: center;" ><label><h7>Kepala Sekolah:</h7  ><h4  > <b><?=$profil->kepala_sekolah  ?></b></h4></label><img class="img-thumbnail" src="<?=base_Url('kep_sek/').$profil->foto_kepsek?>" class="rounded float-left" alt="..."></div>
     
          <div  class="col-sm-8 ">
              <div style="margin-left: 60px"  > 

                   <label style="text-align: center;"><b style="font-weight: 14px"><H4 style="text-align: center;   "> Sekilas SMPK ST YOSEFA LABUAN BAJO </H4></b></label>
                   <p><?=$profil->sejarah?>  </p><br><br>
              </div>
     
      
       </div>
      </div>
      <br><br><br><br><br>
       
      </div>
      
    </div>
   </div> 

<div class="contact">
    





<!-- content -->

 



<!-- penutup content -->





















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
              <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

 
</body>
</html>
  <!-- Home -->