<!-- Header Content -->

<div  style="background-color: white " class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?=base_Url()?>">

									<div class="logo_text" style="background-color: yellow;" >
<!-- 										<h3  style="color:  #0000ff"> -->
											<!-- <?=$setting->nama_sekolah?></h3><span style="font-family: arial; font-size: 30px;  font-style: italic;"   > </span> -->

												<img style="margin-left:-20px; height: 80px"  src="<?=base_Url('assets/3.jpg')?>">
										</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li ><a style="text-decoration: none" href="<?=base_Url('home')?>">Beranda</a></li>
									
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="<?=base_Url('home/profil')?>">Sejarah</a>
                        <!-- Deskripsi sejarah -->
                        <a class="dropdown-item" href="<?=base_Url('home/visi_misi')?>">Visi Misi</a>
            	     	 <a class="dropdown-item" href="<?=base_Url('home/profil')?>">Struktur Organisasi</a>
  <!--                   	    <a class="dropdown-item" href="<?=base_Url('home/profil')?>">Profil Sekolah</a> -->
					    <a class="dropdown-item" href="<?=base_Url('home/fasilitas')?>">Fasilitas </a>

  						    <a class="dropdown-item" href="<?=base_Url('home/prestasi')?>">Prestasi </a>
                        <a class="dropdown-item" href="<?=base_Url('home/guru')?>">Logo </a>




                        
	                    </a>


                        <div class="dropdown-divider"></div>

                        </div>
                        </li>
                        <!-- Akademik -->

                         <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akademik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

               
                       		<a  class="dropdown-item dropdown-toggle"  href="#" data-toggle="dropdown" >Kurikulum</a>
                       
                       			  <div  style="position: absolute ; margin-left: 158px; margin-top: -42vpx" class="dropdown-menu" aria-labelledby="navbarDropdown">
                       			  	    <a class="dropdown-item"   href="<?=base_Url('home/Kurikulum')?>">Silabus</a>	
                       			  	    <a class="dropdown-item"   href="<?=base_Url('home/Kurikulum')?>">Silabus</a>	
                       			  	    
                       			  </div>
                       		
                

    <!-- Deskripsi sejarah -->
                           <a class="dropdown-item" href="<?=base_Url('home/download')?>">Buku Siswa</a>
                              <a class="dropdown-item" href="<?=base_Url('home/jadwal')?>">Jadwal</a>

                        <a class="dropdown-item" href="<?=base_Url('home/guru')?>">Guru</a>
	                    <a class="dropdown-item" href="#">OSIS</a>
	                  
	                    </a>


                        <div class="dropdown-divider"></div>

                        </div>
                        </li>



















									<li><a href="<?=base_Url('home/gallery')?>">Galery</a></li>
									<li><a href="<?=base_Url('home/ekstra')?>">Ekstrakulikuler</a></li>
									<li><a href="<?=base_Url('home/berita')?>">Berita</a></li>

									<li><a href="<?=base_Url('home/tentang')?>">Lokasi </a></li>
								</ul>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
    </header>
    <div style="background-image: url(<?=base_Url('assets/2.jpg')?>); background-repeat: no-repeat; background-size: contain; border-image-source: initial;" class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?=base_Url('home')?>">Beranda</a></li>
				<li class="menu_mm"><a href="<?=base_Url('home/gallery')?>">Galery</a></li>
				<li class="menu_mm"><a href="<?=base_Url('home/download')?>">Materi</a></li>
				<li class="menu_mm"><a  href="<?=base_Url('home/berita')?>">Berita</a></li>
				<li class="menu_mm"><a  href="<?=base_Url('home/ekstra')?>">Ekstrakulikuler</a></li>
				
				<li class="menu_mm"><a href="<?=base_Url('home/tentang')?>">Lokasi</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>