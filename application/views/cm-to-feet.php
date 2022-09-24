<!doctype html>
<html>
<head itemscope itemtype="https://schema.org/WebSite">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>What is <?=$lenth?> to <?=$type?>?</title>
<meta name="description" content="We have updated many length and height calculation. You can find and caluclate what you want easily on web." />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="What is in <?=$type?>?" />
<meta property="og:description" content="What is 0.3<?=$lenth?> to <?=$type?> ?" />
<meta property="og:site_name" content="calculadora" />
<meta name="twitter:title" content="What is in <?=$type?>?" />
<meta name="twitter:description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" />
<meta name="twitter:site" content="@calculadora" />
<meta name="twitter:creator" content="@calculadora" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="calculadora" />
<link rel="canonical" href="https://calculadora.xyz/convert/<?=$lenth?>tofeet/0.4" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "https://calculadora.xyz/"
                },
                "headline": "Cursive Y: How to write Y in cursive",
                "description": "Cursive Y is the 25th letter in the English alphabet. It is a consonant. Cursive, also known as script or longhand, is a style of handwriting in which letters",
                "image": "https://calculadora.xyz/",
                "author": {
                    "@type": "Organization",
					"url": "https://calculadora.xyz/",
                    "name": "onlinebadi"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "Guru",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://calculadora.xyz/",
                        "width": 300,
                        "height": 100                    }
                },
                "datePublished": "Sep 12, 2022",
                "dateModified": "Sep 12, 2022"
            }
        </script> 
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["EducationalApplication", "WebApplication"],
      "name": "0.3",
      "operatingSystem": "All",
      "applicationCategory": "BusinessApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "ratingCount": "50"
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      }
    }
</script>
<link rel="stylesheet" href="https://calculadora.xyz/bootstrap.min.css">
</head>

<body>
	<header class="Regular shadow mb-4"> 
  <!-- Fixed navbar -->
  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-dark rounded">
      <div class="container"> <a class="navbar-brand text-primary" href="//calculadora.xyz/"><span class="main-logo"><strong>Calculadora</strong> |</span> <span class="text-secondary">THE BEST CALUCLATOR</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent3">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<div class="container">
  <h1>What is <?=$lenth?> to <?=$type?>?</h1>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb p-0 ml-0 mb-2 pt-2">
    <li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?=base_url('height')?>">Height</a> </li>
    <li class="breadcrumb-item active" aria-current="page"><?=$lenth.' to '.$type?></a></li>
  </ol>
</nav>
  <div class="mb-5 mt-5 p-4 bg-light rounded border-success  w-auto">
    <form name="convert"  action="<?=base_url('height/redirect/')?>" method="post">
      <div class="row">
        <div class="col-md-2 mr-0 pr-0">
          <input type="number" autocomplete="off" name='unit1' class="form-control" required>
          <input type="hidden"  name='lenth' value="<?=($lenth=='feet')?'inches':$lenth?>"  class="form-control" required>
        </div>
        <div class="col-md-1 pr-0"><strong><?=$lenth?></strong></div>
        <div class="col-md-2 pl-0">
          <select name="unitMenu" class="form-control" required>
            <ul>
            <?php if( $lenth != 'cm') {  ?>
            <option value="cm"><?=$lenth?> to cm</option>
            <?php } if( $lenth != 'feet') {  ?>
            <option value="feet"><?=$lenth?> to feet</option>
            <?php } if( $lenth != 'inches') {  ?>
                <option value="inches"><?=$lenth?> to inches</option>
            <?php }if( $lenth != 'meter') {  ?>
            <option value="meter"><?=$lenth?> to meter (m)</option>
            <?php }if( $lenth != 'km') {  ?>
                <option value="km"><?=$lenth?> to kilometer (km)</option>
            <?php }if( $lenth != 'foot') {  ?>
                <option value="mm"><?=$lenth?> to millimeter (mm)</option>
            <?php } if( $lenth != 'mile') {?>
                <option value="mile"><?=$lenth?> to mile</option>
            <?php } if( $lenth != 'yard') {?>
            <option value="yard"><?=$lenth?> to yard (yd)</option>
            <?php }?>
            </ul>
          </select>
        </div>
        <tr>
          <td><input class="btn btn-primary" type="submit" value="Convert" ></td>
        </tr>
      </div>
    </form>
  </div>
  <h2><strong><?=$lenth?> to <?=$type?> by using online converter: </strong></h2>
  <p>We have updated many length and height calculation. You can find and caluclate what you want easily on web.</p>
  <div class="table-responsive">
    <h3><strong>Browse  <?=$lenth?> to <?=$type?></strong></h3>
    <table class="table bordered">
      <tbody>
        <tr>
            <?php  if($lenth == 'feet'){
                $convert = 'inches';
            }else{
                $convert = 'feet';
            }
            ?>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1-<?=($lenth=='feet')?'inches':$lenth?>">1 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2-<?=($lenth=='feet')?'inches':$lenth?>">2 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3-<?=($lenth=='feet')?'inches':$lenth?>">3 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4-<?=($lenth=='feet')?'inches':$lenth?>">4 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5-<?=($lenth=='feet')?'inches':$lenth?>">5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6-<?=($lenth=='feet')?'inches':$lenth?>">6 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7-<?=($lenth=='feet')?'inches':$lenth?>">7 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8-<?=($lenth=='feet')?'inches':$lenth?>">8 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9-<?=($lenth=='feet')?'inches':$lenth?>">9 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>10-<?=($lenth=='feet')?'inches':$lenth?>">10 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>11-<?=($lenth=='feet')?'inches':$lenth?>">11 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>12-<?=($lenth=='feet')?'inches':$lenth?>">12 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>13-<?=($lenth=='feet')?'inches':$lenth?>">13 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>14-<?=($lenth=='feet')?'inches':$lenth?>">14 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>15-<?=($lenth=='feet')?'inches':$lenth?>">15 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>16-<?=($lenth=='feet')?'inches':$lenth?>">16 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>17-<?=($lenth=='feet')?'inches':$lenth?>">17 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>18-<?=($lenth=='feet')?'inches':$lenth?>">18 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>19-<?=($lenth=='feet')?'inches':$lenth?>">19 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>20-<?=($lenth=='feet')?'inches':$lenth?>">20 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>21-<?=($lenth=='feet')?'inches':$lenth?>">21 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>22-<?=($lenth=='feet')?'inches':$lenth?>">22 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>23-<?=($lenth=='feet')?'inches':$lenth?>">23 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>24-<?=($lenth=='feet')?'inches':$lenth?>">24 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>25-<?=($lenth=='feet')?'inches':$lenth?>">25 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>26-<?=($lenth=='feet')?'inches':$lenth?>">26 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>27-<?=($lenth=='feet')?'inches':$lenth?>">27 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>28-<?=($lenth=='feet')?'inches':$lenth?>">28 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>29-<?=($lenth=='feet')?'inches':$lenth?>">29 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>30-<?=($lenth=='feet')?'inches':$lenth?>">30 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>31-<?=($lenth=='feet')?'inches':$lenth?>">31 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>32-<?=($lenth=='feet')?'inches':$lenth?>">32 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>33-<?=($lenth=='feet')?'inches':$lenth?>">33 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>34-<?=($lenth=='feet')?'inches':$lenth?>">34 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>35-<?=($lenth=='feet')?'inches':$lenth?>">35 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>36-<?=($lenth=='feet')?'inches':$lenth?>">36 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>37-<?=($lenth=='feet')?'inches':$lenth?>">37 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>38-<?=($lenth=='feet')?'inches':$lenth?>">38 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>39-<?=($lenth=='feet')?'inches':$lenth?>">39 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>40-<?=($lenth=='feet')?'inches':$lenth?>">40 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>41-<?=($lenth=='feet')?'inches':$lenth?>">41 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>42-<?=($lenth=='feet')?'inches':$lenth?>">42 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>43-<?=($lenth=='feet')?'inches':$lenth?>">43 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>44-<?=($lenth=='feet')?'inches':$lenth?>">44 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>45-<?=($lenth=='feet')?'inches':$lenth?>">45 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>46-<?=($lenth=='feet')?'inches':$lenth?>">46 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>47-<?=($lenth=='feet')?'inches':$lenth?>">47 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>48-<?=($lenth=='feet')?'inches':$lenth?>">48 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>49-<?=($lenth=='feet')?'inches':$lenth?>">49 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>50-<?=($lenth=='feet')?'inches':$lenth?>">50 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>51-<?=($lenth=='feet')?'inches':$lenth?>">51 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>52-<?=($lenth=='feet')?'inches':$lenth?>">52 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>53-<?=($lenth=='feet')?'inches':$lenth?>">53 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>54-<?=($lenth=='feet')?'inches':$lenth?>">54 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>55-<?=($lenth=='feet')?'inches':$lenth?>">55 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>56-<?=($lenth=='feet')?'inches':$lenth?>">56 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>57-<?=($lenth=='feet')?'inches':$lenth?>">57 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>58-<?=($lenth=='feet')?'inches':$lenth?>">58 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>59-<?=($lenth=='feet')?'inches':$lenth?>">59 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>60-<?=($lenth=='feet')?'inches':$lenth?>">60 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>61-<?=($lenth=='feet')?'inches':$lenth?>">61 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>62-<?=($lenth=='feet')?'inches':$lenth?>">62 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>63-<?=($lenth=='feet')?'inches':$lenth?>">63 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>64-<?=($lenth=='feet')?'inches':$lenth?>">64 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>65-<?=($lenth=='feet')?'inches':$lenth?>">65 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>66-<?=($lenth=='feet')?'inches':$lenth?>">66 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>67-<?=($lenth=='feet')?'inches':$lenth?>">67 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>68-<?=($lenth=='feet')?'inches':$lenth?>">68 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>69-<?=($lenth=='feet')?'inches':$lenth?>">69 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>70-<?=($lenth=='feet')?'inches':$lenth?>">70 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>71-<?=($lenth=='feet')?'inches':$lenth?>">71 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>72-<?=($lenth=='feet')?'inches':$lenth?>">72 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>73-<?=($lenth=='feet')?'inches':$lenth?>">73 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>74-<?=($lenth=='feet')?'inches':$lenth?>">74 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>75-<?=($lenth=='feet')?'inches':$lenth?>">75 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>76-<?=($lenth=='feet')?'inches':$lenth?>">76 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>77-<?=($lenth=='feet')?'inches':$lenth?>">77 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>78-<?=($lenth=='feet')?'inches':$lenth?>">78 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>79-<?=($lenth=='feet')?'inches':$lenth?>">79 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>80-<?=($lenth=='feet')?'inches':$lenth?>">80 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>81-<?=($lenth=='feet')?'inches':$lenth?>">81 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>82-<?=($lenth=='feet')?'inches':$lenth?>">82 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>83-<?=($lenth=='feet')?'inches':$lenth?>">83 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>84-<?=($lenth=='feet')?'inches':$lenth?>">84 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>85-<?=($lenth=='feet')?'inches':$lenth?>">85 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>86-<?=($lenth=='feet')?'inches':$lenth?>">86 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>87-<?=($lenth=='feet')?'inches':$lenth?>">87 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>88-<?=($lenth=='feet')?'inches':$lenth?>">88 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>89-<?=($lenth=='feet')?'inches':$lenth?>">89 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>90-<?=($lenth=='feet')?'inches':$lenth?>">90 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>91-<?=($lenth=='feet')?'inches':$lenth?>">91 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>92-<?=($lenth=='feet')?'inches':$lenth?>">92 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>93-<?=($lenth=='feet')?'inches':$lenth?>">93 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>94-<?=($lenth=='feet')?'inches':$lenth?>">94 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>95-<?=($lenth=='feet')?'inches':$lenth?>">95 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>96-<?=($lenth=='feet')?'inches':$lenth?>">96 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>97-<?=($lenth=='feet')?'inches':$lenth?>">97 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>98-<?=($lenth=='feet')?'inches':$lenth?>">98 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>99-<?=($lenth=='feet')?'inches':$lenth?>">99 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>100-<?=($lenth=='feet')?'inches':$lenth?>">100 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>101-<?=($lenth=='feet')?'inches':$lenth?>">101 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>102-<?=($lenth=='feet')?'inches':$lenth?>">102 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>103-<?=($lenth=='feet')?'inches':$lenth?>">103 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>104-<?=($lenth=='feet')?'inches':$lenth?>">104 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>105-<?=($lenth=='feet')?'inches':$lenth?>">105 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>106-<?=($lenth=='feet')?'inches':$lenth?>">106 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>107-<?=($lenth=='feet')?'inches':$lenth?>">107 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>108-<?=($lenth=='feet')?'inches':$lenth?>">108 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>109-<?=($lenth=='feet')?'inches':$lenth?>">109 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>110-<?=($lenth=='feet')?'inches':$lenth?>">110 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>111-<?=($lenth=='feet')?'inches':$lenth?>">111 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>112-<?=($lenth=='feet')?'inches':$lenth?>">112 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>113-<?=($lenth=='feet')?'inches':$lenth?>">113 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>114-<?=($lenth=='feet')?'inches':$lenth?>">114 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>115-<?=($lenth=='feet')?'inches':$lenth?>">115 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>116-<?=($lenth=='feet')?'inches':$lenth?>">116 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>117-<?=($lenth=='feet')?'inches':$lenth?>">117 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>118-<?=($lenth=='feet')?'inches':$lenth?>">118 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>119-<?=($lenth=='feet')?'inches':$lenth?>">119 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>120-<?=($lenth=='feet')?'inches':$lenth?>">120 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>121-<?=($lenth=='feet')?'inches':$lenth?>">121 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>122-<?=($lenth=='feet')?'inches':$lenth?>">122 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>123-<?=($lenth=='feet')?'inches':$lenth?>">123 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>124-<?=($lenth=='feet')?'inches':$lenth?>">124 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>125-<?=($lenth=='feet')?'inches':$lenth?>">125 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>126-<?=($lenth=='feet')?'inches':$lenth?>">126 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>127-<?=($lenth=='feet')?'inches':$lenth?>">127 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>128-<?=($lenth=='feet')?'inches':$lenth?>">128 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>129-<?=($lenth=='feet')?'inches':$lenth?>">129 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>130-<?=($lenth=='feet')?'inches':$lenth?>">130 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>131-<?=($lenth=='feet')?'inches':$lenth?>">131 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>132-<?=($lenth=='feet')?'inches':$lenth?>">132 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>133-<?=($lenth=='feet')?'inches':$lenth?>">133 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>134-<?=($lenth=='feet')?'inches':$lenth?>">134 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>135-<?=($lenth=='feet')?'inches':$lenth?>">135 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>136-<?=($lenth=='feet')?'inches':$lenth?>">136 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>137-<?=($lenth=='feet')?'inches':$lenth?>">137 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>138-<?=($lenth=='feet')?'inches':$lenth?>">138 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>139-<?=($lenth=='feet')?'inches':$lenth?>">139 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>140-<?=($lenth=='feet')?'inches':$lenth?>">140 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>141-<?=($lenth=='feet')?'inches':$lenth?>">141 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>142-<?=($lenth=='feet')?'inches':$lenth?>">142 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>143-<?=($lenth=='feet')?'inches':$lenth?>">143 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>144-<?=($lenth=='feet')?'inches':$lenth?>">144 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>145-<?=($lenth=='feet')?'inches':$lenth?>">145 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>146-<?=($lenth=='feet')?'inches':$lenth?>">146 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>147-<?=($lenth=='feet')?'inches':$lenth?>">147 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>148-<?=($lenth=='feet')?'inches':$lenth?>">148 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>149-<?=($lenth=='feet')?'inches':$lenth?>">149 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>150-<?=($lenth=='feet')?'inches':$lenth?>">150 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>151-<?=($lenth=='feet')?'inches':$lenth?>">151 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>152-<?=($lenth=='feet')?'inches':$lenth?>">152 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>153-<?=($lenth=='feet')?'inches':$lenth?>">153 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>154-<?=($lenth=='feet')?'inches':$lenth?>">154 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>155-<?=($lenth=='feet')?'inches':$lenth?>">155 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>156-<?=($lenth=='feet')?'inches':$lenth?>">156 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>157-<?=($lenth=='feet')?'inches':$lenth?>">157 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>158-<?=($lenth=='feet')?'inches':$lenth?>">158 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>159-<?=($lenth=='feet')?'inches':$lenth?>">159 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>160-<?=($lenth=='feet')?'inches':$lenth?>">160 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>160.5-<?=($lenth=='feet')?'inches':$lenth?>">160.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>161-<?=($lenth=='feet')?'inches':$lenth?>">161 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>161.5-<?=($lenth=='feet')?'inches':$lenth?>">161.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>162-<?=($lenth=='feet')?'inches':$lenth?>">162 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>162.5-<?=($lenth=='feet')?'inches':$lenth?>">162.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>163-<?=($lenth=='feet')?'inches':$lenth?>">163 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>163.5-<?=($lenth=='feet')?'inches':$lenth?>">163.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>164-<?=($lenth=='feet')?'inches':$lenth?>">164 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>164.5-<?=($lenth=='feet')?'inches':$lenth?>">164.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>165-<?=($lenth=='feet')?'inches':$lenth?>">165 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>165.5-<?=($lenth=='feet')?'inches':$lenth?>">165.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>166-<?=($lenth=='feet')?'inches':$lenth?>">166 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>166.5-<?=($lenth=='feet')?'inches':$lenth?>">166.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>167-<?=($lenth=='feet')?'inches':$lenth?>">167 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>167.5-<?=($lenth=='feet')?'inches':$lenth?>">167.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>168-<?=($lenth=='feet')?'inches':$lenth?>">168 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>168.5-<?=($lenth=='feet')?'inches':$lenth?>">168.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>169-<?=($lenth=='feet')?'inches':$lenth?>">169 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>169.5-<?=($lenth=='feet')?'inches':$lenth?>">169.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>170-<?=($lenth=='feet')?'inches':$lenth?>">170 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>170.5-<?=($lenth=='feet')?'inches':$lenth?>">170.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>171-<?=($lenth=='feet')?'inches':$lenth?>">171 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>171.5-<?=($lenth=='feet')?'inches':$lenth?>">171.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>172-<?=($lenth=='feet')?'inches':$lenth?>">172 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>172.5-<?=($lenth=='feet')?'inches':$lenth?>">172.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>173-<?=($lenth=='feet')?'inches':$lenth?>">173 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>173.5-<?=($lenth=='feet')?'inches':$lenth?>">173.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>174-<?=($lenth=='feet')?'inches':$lenth?>">174 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>174.5-<?=($lenth=='feet')?'inches':$lenth?>">174.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>175-<?=($lenth=='feet')?'inches':$lenth?>">175 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>175.5-<?=($lenth=='feet')?'inches':$lenth?>">175.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>176-<?=($lenth=='feet')?'inches':$lenth?>">176 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>176.5-<?=($lenth=='feet')?'inches':$lenth?>">176.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>177-<?=($lenth=='feet')?'inches':$lenth?>">177 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>177.5-<?=($lenth=='feet')?'inches':$lenth?>">177.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>178-<?=($lenth=='feet')?'inches':$lenth?>">178 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>178.5-<?=($lenth=='feet')?'inches':$lenth?>">178.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>179-<?=($lenth=='feet')?'inches':$lenth?>">179 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>179.5-<?=($lenth=='feet')?'inches':$lenth?>">179.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>180-<?=($lenth=='feet')?'inches':$lenth?>">180 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>180.5-<?=($lenth=='feet')?'inches':$lenth?>">180.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>181-<?=($lenth=='feet')?'inches':$lenth?>">181 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>181.5-<?=($lenth=='feet')?'inches':$lenth?>">181.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>182-<?=($lenth=='feet')?'inches':$lenth?>">182 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>182.5-<?=($lenth=='feet')?'inches':$lenth?>">182.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>183-<?=($lenth=='feet')?'inches':$lenth?>">183 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>183.5-<?=($lenth=='feet')?'inches':$lenth?>">183.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>184-<?=($lenth=='feet')?'inches':$lenth?>">184 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>184.5-<?=($lenth=='feet')?'inches':$lenth?>">184.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>185-<?=($lenth=='feet')?'inches':$lenth?>">185 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>185.5-<?=($lenth=='feet')?'inches':$lenth?>">185.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>186-<?=($lenth=='feet')?'inches':$lenth?>">186 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>186.5-<?=($lenth=='feet')?'inches':$lenth?>">186.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>187-<?=($lenth=='feet')?'inches':$lenth?>">187 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>187.5-<?=($lenth=='feet')?'inches':$lenth?>">187.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>188-<?=($lenth=='feet')?'inches':$lenth?>">188 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>188.5-<?=($lenth=='feet')?'inches':$lenth?>">188.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>189-<?=($lenth=='feet')?'inches':$lenth?>">189 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>189.5-<?=($lenth=='feet')?'inches':$lenth?>">189.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>190-<?=($lenth=='feet')?'inches':$lenth?>">190 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>190.5-<?=($lenth=='feet')?'inches':$lenth?>">190.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>191-<?=($lenth=='feet')?'inches':$lenth?>">191 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>191.5-<?=($lenth=='feet')?'inches':$lenth?>">191.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>192-<?=($lenth=='feet')?'inches':$lenth?>">192 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>192.5-<?=($lenth=='feet')?'inches':$lenth?>">192.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>193-<?=($lenth=='feet')?'inches':$lenth?>">193 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>193.5-<?=($lenth=='feet')?'inches':$lenth?>">193.5 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>194-<?=($lenth=='feet')?'inches':$lenth?>">194 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>195-<?=($lenth=='feet')?'inches':$lenth?>">195 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>196-<?=($lenth=='feet')?'inches':$lenth?>">196 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>197-<?=($lenth=='feet')?'inches':$lenth?>">197 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>198-<?=($lenth=='feet')?'inches':$lenth?>">198 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>199-<?=($lenth=='feet')?'inches':$lenth?>">199 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>200-<?=($lenth=='feet')?'inches':$lenth?>">200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>201-<?=($lenth=='feet')?'inches':$lenth?>">201 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>202-<?=($lenth=='feet')?'inches':$lenth?>">202 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>203-<?=($lenth=='feet')?'inches':$lenth?>">203 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>204-<?=($lenth=='feet')?'inches':$lenth?>">204 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>205-<?=($lenth=='feet')?'inches':$lenth?>">205 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>210-<?=($lenth=='feet')?'inches':$lenth?>">210 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>215-<?=($lenth=='feet')?'inches':$lenth?>">215 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>220-<?=($lenth=='feet')?'inches':$lenth?>">220 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>225-<?=($lenth=='feet')?'inches':$lenth?>">225 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>230-<?=($lenth=='feet')?'inches':$lenth?>">230 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>235-<?=($lenth=='feet')?'inches':$lenth?>">235 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>240-<?=($lenth=='feet')?'inches':$lenth?>">240 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>245-<?=($lenth=='feet')?'inches':$lenth?>">245 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>250-<?=($lenth=='feet')?'inches':$lenth?>">250 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>255-<?=($lenth=='feet')?'inches':$lenth?>">255 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>260-<?=($lenth=='feet')?'inches':$lenth?>">260 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>265-<?=($lenth=='feet')?'inches':$lenth?>">265 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>270-<?=($lenth=='feet')?'inches':$lenth?>">270 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>275-<?=($lenth=='feet')?'inches':$lenth?>">275 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>280-<?=($lenth=='feet')?'inches':$lenth?>">280 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>285-<?=($lenth=='feet')?'inches':$lenth?>">285 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>290-<?=($lenth=='feet')?'inches':$lenth?>">290 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>295-<?=($lenth=='feet')?'inches':$lenth?>">295 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>300-<?=($lenth=='feet')?'inches':$lenth?>">300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>305-<?=($lenth=='feet')?'inches':$lenth?>">305 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>310-<?=($lenth=='feet')?'inches':$lenth?>">310 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>315-<?=($lenth=='feet')?'inches':$lenth?>">315 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>320-<?=($lenth=='feet')?'inches':$lenth?>">320 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>325-<?=($lenth=='feet')?'inches':$lenth?>">325 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>330-<?=($lenth=='feet')?'inches':$lenth?>">330 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>335-<?=($lenth=='feet')?'inches':$lenth?>">335 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>340-<?=($lenth=='feet')?'inches':$lenth?>">340 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>345-<?=($lenth=='feet')?'inches':$lenth?>">345 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>350-<?=($lenth=='feet')?'inches':$lenth?>">350 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>355-<?=($lenth=='feet')?'inches':$lenth?>">355 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>360-<?=($lenth=='feet')?'inches':$lenth?>">360 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>365-<?=($lenth=='feet')?'inches':$lenth?>">365 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>370-<?=($lenth=='feet')?'inches':$lenth?>">370 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>375-<?=($lenth=='feet')?'inches':$lenth?>">375 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>380-<?=($lenth=='feet')?'inches':$lenth?>">380 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>385-<?=($lenth=='feet')?'inches':$lenth?>">385 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>390-<?=($lenth=='feet')?'inches':$lenth?>">390 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>395-<?=($lenth=='feet')?'inches':$lenth?>">395 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>400-<?=($lenth=='feet')?'inches':$lenth?>">400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>405-<?=($lenth=='feet')?'inches':$lenth?>">405 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>410-<?=($lenth=='feet')?'inches':$lenth?>">410 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>415-<?=($lenth=='feet')?'inches':$lenth?>">415 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>420-<?=($lenth=='feet')?'inches':$lenth?>">420 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>425-<?=($lenth=='feet')?'inches':$lenth?>">425 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>430-<?=($lenth=='feet')?'inches':$lenth?>">430 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>435-<?=($lenth=='feet')?'inches':$lenth?>">435 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>440-<?=($lenth=='feet')?'inches':$lenth?>">440 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>445-<?=($lenth=='feet')?'inches':$lenth?>">445 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>450-<?=($lenth=='feet')?'inches':$lenth?>">450 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>455-<?=($lenth=='feet')?'inches':$lenth?>">455 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>460-<?=($lenth=='feet')?'inches':$lenth?>">460 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>465-<?=($lenth=='feet')?'inches':$lenth?>">465 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>470-<?=($lenth=='feet')?'inches':$lenth?>">470 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>475-<?=($lenth=='feet')?'inches':$lenth?>">475 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>480-<?=($lenth=='feet')?'inches':$lenth?>">480 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>485-<?=($lenth=='feet')?'inches':$lenth?>">485 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>490-<?=($lenth=='feet')?'inches':$lenth?>">490 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>495-<?=($lenth=='feet')?'inches':$lenth?>">495 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>500-<?=($lenth=='feet')?'inches':$lenth?>">500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>600-<?=($lenth=='feet')?'inches':$lenth?>">600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>700-<?=($lenth=='feet')?'inches':$lenth?>">700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>800-<?=($lenth=='feet')?'inches':$lenth?>">800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>900-<?=($lenth=='feet')?'inches':$lenth?>">900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1000-<?=($lenth=='feet')?'inches':$lenth?>">1,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1100-<?=($lenth=='feet')?'inches':$lenth?>">1,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1200-<?=($lenth=='feet')?'inches':$lenth?>">1,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1300-<?=($lenth=='feet')?'inches':$lenth?>">1,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1400-<?=($lenth=='feet')?'inches':$lenth?>">1,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1500-<?=($lenth=='feet')?'inches':$lenth?>">1,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1600-<?=($lenth=='feet')?'inches':$lenth?>">1,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1700-<?=($lenth=='feet')?'inches':$lenth?>">1,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1800-<?=($lenth=='feet')?'inches':$lenth?>">1,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>1900-<?=($lenth=='feet')?'inches':$lenth?>">1,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2000-<?=($lenth=='feet')?'inches':$lenth?>">2,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2100-<?=($lenth=='feet')?'inches':$lenth?>">2,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2200-<?=($lenth=='feet')?'inches':$lenth?>">2,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2300-<?=($lenth=='feet')?'inches':$lenth?>">2,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2400-<?=($lenth=='feet')?'inches':$lenth?>">2,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2500-<?=($lenth=='feet')?'inches':$lenth?>">2,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2600-<?=($lenth=='feet')?'inches':$lenth?>">2,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2700-<?=($lenth=='feet')?'inches':$lenth?>">2,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2800-<?=($lenth=='feet')?'inches':$lenth?>">2,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>2900-<?=($lenth=='feet')?'inches':$lenth?>">2,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3000-<?=($lenth=='feet')?'inches':$lenth?>">3,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3100-<?=($lenth=='feet')?'inches':$lenth?>">3,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3200-<?=($lenth=='feet')?'inches':$lenth?>">3,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3300-<?=($lenth=='feet')?'inches':$lenth?>">3,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3400-<?=($lenth=='feet')?'inches':$lenth?>">3,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3500-<?=($lenth=='feet')?'inches':$lenth?>">3,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3600-<?=($lenth=='feet')?'inches':$lenth?>">3,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3700-<?=($lenth=='feet')?'inches':$lenth?>">3,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3800-<?=($lenth=='feet')?'inches':$lenth?>">3,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>3900-<?=($lenth=='feet')?'inches':$lenth?>">3,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4000-<?=($lenth=='feet')?'inches':$lenth?>">4,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4100-<?=($lenth=='feet')?'inches':$lenth?>">4,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4200-<?=($lenth=='feet')?'inches':$lenth?>">4,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4300-<?=($lenth=='feet')?'inches':$lenth?>">4,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4400-<?=($lenth=='feet')?'inches':$lenth?>">4,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4500-<?=($lenth=='feet')?'inches':$lenth?>">4,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4600-<?=($lenth=='feet')?'inches':$lenth?>">4,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4700-<?=($lenth=='feet')?'inches':$lenth?>">4,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4800-<?=($lenth=='feet')?'inches':$lenth?>">4,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>4900-<?=($lenth=='feet')?'inches':$lenth?>">4,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5000-<?=($lenth=='feet')?'inches':$lenth?>">5,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5100-<?=($lenth=='feet')?'inches':$lenth?>">5,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5200-<?=($lenth=='feet')?'inches':$lenth?>">5,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5300-<?=($lenth=='feet')?'inches':$lenth?>">5,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5400-<?=($lenth=='feet')?'inches':$lenth?>">5,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5500-<?=($lenth=='feet')?'inches':$lenth?>">5,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5600-<?=($lenth=='feet')?'inches':$lenth?>">5,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5700-<?=($lenth=='feet')?'inches':$lenth?>">5,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5800-<?=($lenth=='feet')?'inches':$lenth?>">5,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>5900-<?=($lenth=='feet')?'inches':$lenth?>">5,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6000-<?=($lenth=='feet')?'inches':$lenth?>">6,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6100-<?=($lenth=='feet')?'inches':$lenth?>">6,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6200-<?=($lenth=='feet')?'inches':$lenth?>">6,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6300-<?=($lenth=='feet')?'inches':$lenth?>">6,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6400-<?=($lenth=='feet')?'inches':$lenth?>">6,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6500-<?=($lenth=='feet')?'inches':$lenth?>">6,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6600-<?=($lenth=='feet')?'inches':$lenth?>">6,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6700-<?=($lenth=='feet')?'inches':$lenth?>">6,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6800-<?=($lenth=='feet')?'inches':$lenth?>">6,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>6900-<?=($lenth=='feet')?'inches':$lenth?>">6,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7000-<?=($lenth=='feet')?'inches':$lenth?>">7,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7100-<?=($lenth=='feet')?'inches':$lenth?>">7,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7200-<?=($lenth=='feet')?'inches':$lenth?>">7,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7300-<?=($lenth=='feet')?'inches':$lenth?>">7,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7400-<?=($lenth=='feet')?'inches':$lenth?>">7,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7500-<?=($lenth=='feet')?'inches':$lenth?>">7,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7600-<?=($lenth=='feet')?'inches':$lenth?>">7,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7700-<?=($lenth=='feet')?'inches':$lenth?>">7,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7800-<?=($lenth=='feet')?'inches':$lenth?>">7,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>7900-<?=($lenth=='feet')?'inches':$lenth?>">7,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8000-<?=($lenth=='feet')?'inches':$lenth?>">8,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8100-<?=($lenth=='feet')?'inches':$lenth?>">8,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8200-<?=($lenth=='feet')?'inches':$lenth?>">8,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8300-<?=($lenth=='feet')?'inches':$lenth?>">8,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8400-<?=($lenth=='feet')?'inches':$lenth?>">8,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8500-<?=($lenth=='feet')?'inches':$lenth?>">8,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8600-<?=($lenth=='feet')?'inches':$lenth?>">8,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8700-<?=($lenth=='feet')?'inches':$lenth?>">8,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8800-<?=($lenth=='feet')?'inches':$lenth?>">8,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>8900-<?=($lenth=='feet')?'inches':$lenth?>">8,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9000-<?=($lenth=='feet')?'inches':$lenth?>">9,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9100-<?=($lenth=='feet')?'inches':$lenth?>">9,100 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9200-<?=($lenth=='feet')?'inches':$lenth?>">9,200 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9300-<?=($lenth=='feet')?'inches':$lenth?>">9,300 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9400-<?=($lenth=='feet')?'inches':$lenth?>">9,400 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9500-<?=($lenth=='feet')?'inches':$lenth?>">9,500 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9600-<?=($lenth=='feet')?'inches':$lenth?>">9,600 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9700-<?=($lenth=='feet')?'inches':$lenth?>">9,700 <?=$lenth?> to <?=$type?></a></td>
        </tr>
        <tr>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9800-<?=($lenth=='feet')?'inches':$lenth?>">9,800 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>9900-<?=($lenth=='feet')?'inches':$lenth?>">9,900 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>10000-<?=($lenth=='feet')?'inches':$lenth?>">10,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>20000-<?=($lenth=='feet')?'inches':$lenth?>">20,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>30000-<?=($lenth=='feet')?'inches':$lenth?>">30,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>40000-<?=($lenth=='feet')?'inches':$lenth?>">40,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>50000-<?=($lenth=='feet')?'inches':$lenth?>">50,000 <?=$lenth?> to <?=$type?></a></td>
          <td><a href="<?=base_url('height/'.$lenth.'-to-'.$convert.'/')?>100000-<?=($lenth=='feet')?'inches':$lenth?>">100,000 <?=$lenth?> to <?=$type?></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php include('footer.php') ?>
