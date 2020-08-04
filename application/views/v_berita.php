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
<div class="contact">
    


  <!-- Courses -->

  <div class="courses">
    <div class="container">
      <div class="row">

        <!-- Courses Main Content -->
        <div class="col-lg-8">
          
          <div class="courses_container">
            <h2>Berita</h2>
            <div class="row courses_row">
              <?php foreach ($berita as $key => $value) {
                # code...
              ?>
              <!-- Course -->
              <div class="col-lg-6 course_col">
                <div class="course">
                  <div class="course_image"><img style="height: 150px; width: 100%;" src="<?=base_Url('gambar_berita/'.$value->gambar_berita)?>" alt="" ></div>
                  <div class="course_body">
                    <h3 class="course_title"><a href="<?=base_Url('home/detail_berita/'.$value->slug_berita)?>"><?=substr(strip_tags($value->judul_berita), 0,25)?>..</a></h3>
                    <div class="course_teacher">post by:<b><?=$value->nama_user?></b></div>
                    <div class="course_text">
                      <p><?=substr(strip_tags($value->isi_berita), 0,100)?>..</p>
                    </div>
                  </div>
                  <div class="course_footer">
                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                      <div class="course_info">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span>tgl_post: <?=$value->tgl_berita?></span>
                      </div>
                  
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
           
            </div>
            <div class="row pagination_row">
              <div class="col">
               <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                  <ul class="pagination_list">
                    <?php
                     if (isset($paginasi)) {
                      echo $paginasi;
                        # code...
                      } 
                    ?>

                  </ul>
                    

         
             
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Courses Sidebar -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Categories -->
 
            <!-- Latest Course -->
            <div class="sidebar_section">
              <div class="sidebar_section_title">Berita Terakhir</div>
              <div class="sidebar_latest">

                <!-- Latest Course -->
                <?php foreach ($latest_berita as $key => $value) {
                  # code...
                ?>
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image"><div><img src="<?=base_Url('gambar_berita/'.$value->gambar_berita)?>" alt=""></div></div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="<?=base_Url('home/detail_berita/'.$value->slug_berita)?>"><?=$value->judul_berita?></a></div>
                    <div class="course_info">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span>tgl_post: <?=$value->tgl_berita?></span>
                      </div>
                  
                  </div>
                </div>
              <?php }?>
            

              </div>
            </div>

            <!-- Gallery -->
            <
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
              <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>   