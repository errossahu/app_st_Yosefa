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
                <li><a href="<?=base_Url('home/download')?>">Download</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<div class="contact">
    
    <!-- Contact Map -->

    


<!-- Newsletter -->
  <!-- Contact -->


    <!-- Contact Info -->

    <div style="margin-top: 10px" class="contact_info_container">
      <div class="container">
        <div >
          <div >
              <div class="text-center"><h2>DOWNLOAD AREA</h2></div>
              <br><br>
                <table style="margin-top: 20px"  class="table table-striped table-bordered table-hover" id="example">
                    <thead>
                  <tr>
                    <th width="50px" class="text-center">No</th>
                    <th class="text-center">Keterangan File</th>
                    <th width="100px" class="text-center">Download</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php $no=1; foreach ($download as $key => $value) { ?>
                    
                    <tr>
                      <td class="text-center" style="width: 30px"><?=$no++?></td>
                      <td width="100px" class="text-center"><b style="font-style: initial; font-weight: 2px; color: black; "><?=$value ->ket_file?></b></td>
                      <td class="text-center">
                        <a href="<?=base_url('home/lakukan_download/'.$value->id_file) ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i>Download</a>
                      </td>
                    </tr>
                <?php }?>
                  </tbody>
                  
                  </table>
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

 
</body>
</html>
  <!-- Home -->
