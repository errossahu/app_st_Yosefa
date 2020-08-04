























<div style="height: 170px" class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="<?=base_Url('home')?>">Home</a></li>
                <li><a href="<?=base_Url('home/ekstra')?>">Detail Ekstra</a></li>
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
						<div class="blog_title"><?=$ekstra->nama_ekstra?></div>
						<div class="blog_meta">
						
						</div>
						<div class="blog_image"><img src="<?=base_Url('foto_ekstra/'.$ekstra->gambar)?>" alt=""></div>
						<p><?=$ekstra->sekilas?></p>

								
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