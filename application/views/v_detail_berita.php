























<div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/berita')?>">Detail Berita</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<div class="contact">
    




				<!-- isi Kontent -->


				<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?=$berita->judul_berita?></div>
						<div class="blog_meta">
							<ul>
								<li>Di Post Tanggal :<a href="#"><?=$berita->tgl_berita?></a></li>
								<li>By <a href="#">: <?=$berita->nama_user?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?=base_Url('gambar_berita/'.$berita->gambar_berita)?>" alt=""></div>
						<p><?=$berita->isi_berita?></p>

								
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- Comments -->
					<div class="comments_container">

			
					</div>
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

					
						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Courses</div>
							<div class="sidebar_latest">

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
              <div class="newsletter_title">sign up for news and offers</div>
              <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
            </div>

            <!-- Newsletter Form -->
            <div class="newsletter_form_container ml-lg-auto">
              <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                <button type="submit" class="newsletter_button">subscribe</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>   