<?php 
header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url('home');?></loc>
     <priority>1.0</priority>
  </url>
 
  <?php foreach($berita as $data) { ?>
  <url>
     <loc><?php echo base_url('home/detail_berita/'.$data->slug_berita)?>);?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $data->tgl_berita;?></lastmod>
  </url>
  <?php } ?>
</urlset>
 
?>