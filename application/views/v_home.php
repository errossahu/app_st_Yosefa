<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
<!-- Home -->
<br> <br>



<br><br>
<br><br> <br>
<br>
<div  class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->

			<div class="owl-carousel owl-theme home_slider ">




				<!-- Home Slider ITEM -->
				<?php foreach ($pengumuman as $key => $value) {
					# code...
				 ?>
				<div class="owl-item">
					<div class="home_slider_background"style="background-image: url(<?=base_Url('assets/1.jpg')?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									
								</div>
							</div>
						</div>
					</div>
				</div>

					<?php }?>
			
			
			
			</div>
		</div>
		<div style="margin-top: -15%" class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div style="margin-top: -15%" class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
	<!-- Features -->
		<br>	<br><br>	<br>	<br>	<br><br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>		
	<div  style="margin-top: -30%; background-color: #FFFFF0;" class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">WELCOME TO  SMPK ST. YOSEFA LABUAN BAJO</h2>
						<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<a  href="<?=base_Url('home/guru')?>">
							<div class="feature_icon"><img src="<?php echo base_Url()?>template/front-end/images/icon_guru.png" alt=""></div>
						<h3 class="feature_title">Guru</h3>
						<div class="feature_text"><p>Daftar Guru sMP ST. Yosefa </p></div>
						</a>
						
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400"><a  href="<?=base_Url('home/download')?>">
						<div class="feature_icon"><img src="<?php echo base_Url()?>template/front-end/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Materi</h3>
						<div class="feature_text"><p>Materi Ebook Siswa</p></div>

					</a>
						
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<a href="<?=base_Url('home/gallery')?>">
							<div class="feature_icon"><img src="<?php echo base_Url()?>template/front-end/images/camera.png" alt=""></div>
						<h3 class="feature_title">Gallery</h3>
						<div class="feature_text"><p>Gallery Foto SMP ST.Yosefa</p></div>

						</a>
						
					</div>
				</div>

				<!-- Features Item -->
					<div class="col-lg-3 feature_col">

					<div class="feature text-center trans_400">
							<a href="<?=base_Url('home/prestasi')?>">
							<div class="feature_icon"><img src="<?php echo base_Url()?>template/front-end/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Prestasi</h3>
						<div class="feature_text"><p>Prestasi siswa siswi SMP ST.Yosefa</p></div>
						
						</a>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<!-- Counter -->



	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_Url()?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Struktur Organisasi</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img style="margin-top: -80px "  src="<?=base_Url()?>Struktur_organisasi/kepsek.jpg"  alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nama Kepsek</a></div>
							<div class="team_subtitle">KEPALA SEKOLAH</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img style="margin-top: -20px  " src="<?=base_Url()?>Struktur_organisasi/kaur.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">NAMA KAUR</a></div>
							<div class="team_subtitle">Designer & Website</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?=base_Url()?>Struktur_organisasi/kesiswaan.jpg"  alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">John Tyler</a></div>
							<div class="team_subtitle">Quantum mechanics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img style="margin-top: -40px" src="<?=base_Url()?>Struktur_organisasi/pustakawati.jpg"  alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Veronica Vahn</a></div>
							<div class="team_subtitle">Math & Physics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Latest News -->
<div style="margin-top: -40px" class="contact">
    


  <!-- Courses -->

  <div style="background-color: #48D1CC;" class="courses">
    <div class="container">
      <div class="row">

        <!-- Courses Main Content -->
        <div class="col-lg-12">
          
          <div class="courses_container">
            <h2>Berita Terbaru</h2>
            <div class="row courses_row">
              <?php foreach ($berita as $key => $value) {
                # code...
              ?>
              
              <!-- Course -->
              <div style="margin-top: 10px" class="col-lg-3 course_col">
                <div class="course">
                  <div class="course_image"><img style="height: 150px; width: 100%;" src="<?=base_Url('gambar_berita/'.$value->gambar_berita)?>" alt="" ></div>
                  <div class="course_body">
                    <h3 class="course_title"><a href="<?=base_Url('home/detail_berita/'.$value->slug_berita)?>"><?=substr(strip_tags($value->judul_berita), 0,20)?>..</a></h3>
                    <div class="course_teacher">post by:<b><?=$value->nama_user?></b></div>
                    <div class="course_text">
                      <p><?=substr(strip_tags($value->isi_berita), 0,20)?>..</p>
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

    
    </div>
  </div><br><br><br><br>
  <h2 style="text-align: center;">Pengumuman</h2><br><br>
<div style="background-color: 	#FFFFF0;" class="table-responsive">

				<!-- Event -->
				
<table style="text-align: center;" class="table">

  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Pengumuman</th>
      <th scope="col">Judul Pengumuman</th>
      <th scope="col">Isi Pengumuman</th>
    </tr>
  </thead>
  <tbody>
  		<?php $no=0; foreach ($pengumuman as $key => $value) {
					# code...
				?>
    <tr>
    
      <th scope="row"><?=$no++?><?=$no++?></th>
      <td style="color: black"><?=$value->tgl?></td>
      <td style="color: black"><?=$value->judul_pengumuman?></td>
      <td style="color: black"><?=$value->isi_pengumuman?></td>
     
    </tr>
     <?php }?>
  </tbody>
</table>
				
</div>


	<!-- Newsletter --><br>	<br>	<br>	<br>	<br>	<br>	<br>	
	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_Url()?>template/front-end/images/newsletter.jpg" data-speed="0.8"></div>
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
</body>

</html>