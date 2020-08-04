<div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/berita')?>">Ekstrakulikuler</a></li>
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
        <div class="col-lg-12">
          
          <div class="courses_container">
            <h2>Ekstrakulikuler</h2>
            <div class="row courses_row">
              <?php foreach ($ekstra as $key => $value) {
                # code...
              ?>
              <!-- Course -->
              <div class="col-lg-3 course_col">
                <div class="course">
                  <div class="course_image"><img style="height: 150px; width: 100%;" src="<?=base_Url('foto_ekstra/'.$value->gambar)?>" alt="" ></div>
                  <div class="course_body">
                    <h3 class="course_title"><a href="<?=base_Url('home/detail_ekstra/'.$value->slug)?>"><?=substr(strip_tags($value->nama_ekstra), 0,25)?>..</a></h3>
                    <!-- <div class="course_teacher">post by:<b><?=$value->nama_user?></b></div> -->
                    <div class="course_text">
                      <p><?=substr(strip_tags($value->sekilas), 0,100)?>..</p>
                    </div>
                  </div>
                  <div class="course_footer">
                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                      
                  
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
           
            </div>
           
          </div>
        </div>

        <!-- Courses Sidebar -->
      
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