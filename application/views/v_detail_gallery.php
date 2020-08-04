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
                <li><a href="<?=base_Url('home/gallery')?>">Gallery</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<div class="contact">
 

<div class="about">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center">
            <h2 class="section_title">Welcome To Gallery  Photo <b><?=$nama_gallery->nama_gallery?></b></h2>
          <!--   <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum</p></div> -->
          </div>
        </div>
      </div>
      <div class="row about_row">
        
        <!-- About Item -->
        <?php foreach ($detail_gallery as $key => $value) {
          # code...
        ?>
        <div class="col-lg-4 about_col about_col_left">
          <div class="about_item">
            <div style="width: 250px ; height: 180px;" class="about_item_image"><img src="<?=base_Url('foto/'.$value->foto)?>"  alt=""></div>
            <div class="about_item_title"><a href="#"><?=$value->ket_foto?> </a></div>
            
          </div>
        </div>
      <?php }?>

      </div>
    </div>
  </div>
