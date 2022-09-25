<?php
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');

"<?xml version='1.0' encoding='UTF-8' ?>|" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?php echo base_url();?></loc>
    </url>
 
 
    <!-- Sitemap Categories -->
    <?php foreach($lenths as $key=>$value) { ?>
    <url>
        <?php for ($i=0; $i < 8; $i++) { 
            if ($i != $key) {       ?>
                <loc><?php echo base_url()."height/".$value.'-to-'.$lenths[$i] ?></loc>
        <?php  } } ?>
       
    </url>
    <?php } ?>
 
 
</urlset>