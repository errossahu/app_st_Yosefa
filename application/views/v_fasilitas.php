<div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/guru')?>">guru</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<div class="contact">
    

    <div style="margin-top: 10px" class="contact_info_container">
      <div class="container">
        <div >
          <div >
              
        <div class="col">
          <div class="section_title_container text-center">
            <h2 class="section_title">FASILITAS PENUNJANG</h2>
           
        </div>
            <div class="row team_row">
        
        <?php foreach ($fasilitas as $key => $value) {
          # code...
        ?>
        <!-- Team Item -->
        <div class="col-lg-3 col-md-6 team_col">
          <div class="team_item">
            <div class="team_image"><img src="<?=base_Url('foto_fasilitas/'.$value->foto)?>" alt=""></div>
            <div class="team_body">
              <div class="team_title" style="margin-top: -60px"><a href="#"><?=$value->nama_fasilitas?></a></div>
             
            </div>
          </div>
        </div>
      <?php }?>

        </div>
     
        </div>
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
