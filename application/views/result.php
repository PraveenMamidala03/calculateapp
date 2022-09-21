
<?php include('header.php') ?>

<div class="container">
  
  <h1>What is <?=$num?> <?= $lenth ?> in <?=$type?>?</h1>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb p-0 ml-0 mb-2 pt-2">
    <li class="breadcrumb-item"><a href="<?=base_url('')?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?=base_url('height')?>">Height</a> </li>
    <li class="breadcrumb-item " aria-current="page"><a href="<?=base_url('height/').$lenth.'-to-'.$type?>"><?=$lenth.' to '.$type?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$num.' '.$lenth?></li>
  </ol>
</nav>
  <div class="mb-5 mt-5 p-4 bg-light rounded border-success  w-auto">
    <form name="convert"  action="<?=base_url('height/redirect/')?>" method="post">
      <table border="0" cellpadding="7" cellspacing="0">
        <tbody>
          <tr>
            <td><input type="number" step="0.1" name="unit1" style="width:250px;font-size:1em" value="<?=$num?>" autocomplete="off"></td>
            <td><strong><?= $lenth ?></strong></td>
          <input type="hidden"  name='lenth' value="<?=$lenth?>"  class="form-control" required>
          <input type="hidden"  name='unitMenu' value="<?=$type?>"  class="form-control" required>

          </tr>
          <tr>
            <td align="center" id="ftin">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><input type="number" step="0.1" name="unit2" style="width:250px;font-size:1em"  value="<?=$value?>"></td>
            <td><strong><?=$type?></strong></td>
          </tr>
          <tr>
            <td><input type="submit" value="Convert" style="font-size:1em;margin-bottom:15px"></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
  <h2 id="conversion-of-<?=$num?>-cmin-feet-by-using-online-converter"><strong>Conversion of <?=$num?> <?= $lenth ?> in <?=$type?> by using online converter: </strong></h2>
  <p>What are the <?=$num?> centimeters in <?=$type?> ? <strong>How tall is <?=$num?> <?= $lenth ?> in <?=$type?> ?</strong> In this article, you will learn how to convert <strong><?=$num?> <?= $lenth ?> in <?=$type?></strong> using simple calculations. Here we will let you know how to use our free online and handy calculator to convert the centimeters to <?=$type?> using different conversion methods. Use our page to convert the centimeter into <?=$type?>.</p>
  <div class="table-of-content p-4 bg-light rounded border-success mb-5">
    <h5><strong>Table of Contents</strong></h5>
    <ul>
      <li><a href="#conversion-of-<?=$num?>-cmin-<?=$type?>-by-using-online-converter">Conversion of <?=$num?> <?= $lenth ?> in <?=$type?> by using online converter</a></li>
      <li><a href="#<?=$num?><?= $lenth ?>-in-<?=$type?>=<?=$value?>"><?=$num?> <?= $lenth ?> in <?=$type?> =<?=$value?></a></li>
      <li><a href="#definition-of-<?=$num?>-<?= $lenth ?>">Definition of <?=$num?> <?= $lenth ?>:</a></li>
      <li><a href="#definition-of-<?=$num?>-<?=$type?>">Definition of <?=$num?> <?=$type?>:</a></li>
      <li><a href="#how-many-<?=$type?>-is-<?=$num?>cm">How many <?=$type?> is <?=$num?> <?= $lenth ?>?</a></li>
      <li><a href="#how-tall-is-<?=$num?>-<?= $lenth ?>-in-<?=$type?>">How tall is <?=$num?> <?= $lenth ?> in <?=$type?>:</a></li>
    </ul>
  </div>
  <h2 id="<?=$num?>-cm-in-<?=$type?>-=<?=$value?>">
  <strong><?=$num?> <?= $lenth ?> in <?=$type?> =<?=$value?></strong>
</h2>
  <p>Centimeters and<?=$type?> are the measuring units to measure the length or height of an object or a person. The centimeters to<?=$type?> converter uses the correct formula to get accurate results every time. If you want to convert <strong><?=$num?>cm to <?=$type?></strong></p>
  <h3 id="definition-of-<?=$num?>-<?= $lenth ?>"><strong>Definition of <?=$num?> <?= $lenth ?>:</strong></h3>
  <p>A centimeter (cm) is a unit used to measure the length in the International System of Units. </p>
  <p> In centimeters, centi equals one-hundredth of a meter. It is a Component of the metric system.
    
    Height is commonly measured in centimeters in countries like the United States.</p>
  <h2 id="definition-of-<?=$num?>-feet"><strong>Definition of <?=$num?><?=$type?>: </strong></h2>
  <p> It is a non-SI unit of length. The definition of<?=$type?> was also defined as equivalent. If we have the measurements in centimeters then we can convert them into<?=$type?> to illustrate the height. It is used to measure the height of a building, tower, or person.</p>
  <h2 id="how-many-<?= $type ?>-is-<?=$num?>cm"><strong>How many<?=$type?> is <?=$num?> <?= $lenth ?>? </strong></h2>
  <p>Converting <?=$num?> centimeters equals to<?=$type?> is easy by simply using the calculator or applying the formula to change the length <?=$num?> <?= $lenth ?> to ft. </p>
  <p> If you want to convert <strong><?=$num?> <?= $lenth ?> to ft</strong> you need to multiply the length in centimeters.</p>
  <h3 id="how-tall-is-<?=$num?>-<?= $lenth ?>-in-<?=$type?>"><strong>How tall is <?=$num?> <?= $lenth ?> in<?=$type?>: </strong></h3>
  <h2><strong>How to convert <?=$num?>cm in<?=$type?> as a fraction: </strong></h2>
  <p>For every decimal number, it has <?=$num?> as the denominator. So to convert <?=$num?>cm in<?=$type?> as a fraction. The numerator is <?=$num?> <?= $lenth ?> in<?=$type?> as a decimal and <?=$num?> as the denominator and then begins the simplification. The below is the answer to <?=$num?> <?= $lenth ?> in<?=$type?> as a fraction in its easiest form: </p>
  <h2><strong>Advantages of <?= $lenth ?> to ft converter: </strong></h2>
  <p>You need to use this resource for converting measurements because the converter is completely online. You don’t require space on your computer or mobile device for installing any application. This converter can be used for multiple unit conversions. The converter will be constantly updated so that you can use it whenever you need it.</p>
  <h4><strong>Conclusion: </strong></h4>
  <p>This is detailed information about <?=$num?>cm to<?=$type?>. If you want more information on centimeters, see our <?= $lenth ?> to<?=$type?> page that can be found in the title menu. Here you can convert <strong><?=$num?> <?= $lenth ?> to<?=$type?> and inches</strong>. </p>
  <p> We will describe briefly the possibilities of converting <?=$num?> centimeters with our calculator. Our conversion Table mentioned earlier will explain how the converter works and you can have all these calculations in one approach by downloading and installing software. It will be easy and effortless when you follow the instructions properly. </p>
  <div class="mb-5 mt-5 p-4 bg-light rounded border-success w-auto">
    <h3 class="mb-3"><strong>Select which height conversion you want</strong></h3>
    <form name="convert" action="<?=base_url('height/redirect/')?>" method="post">
      <div class="row">
        
        <div class="col-md-2">
          <input type="number" name="unit1" autocomplete="off" placeholder="Value" class="form-control">
          <input type="hidden"  name='lenth' value="<?=$lenth?>"  class="form-control" required>
        </div>
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
            <?php  } if( $lenth != 'mile') {?>
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
  <div class="table-responsive">
    <h2> Height Conversion Table</h2>
    <table class="table bordered table-sm table-striped">
      <thead>
        <tr>
          <th>cm</th>
          <th>Inches</th>
          <th>Feet</th>
          <th>Meters</th>
          <th>Km</th>
        </tr>
      </thead>
      <tbody>
      <?php
            $x=$num;
            $y=$num+0.99;
            for ($x; $x <=  $y; $x = $x + 0.01) {?>
              <tr>
                <td><?=$x ?></td>
                <td><?=number_format((float)$x / 2.54, 3, '.', ''); ?></td>
                <td><?=number_format((float)$x / 30.48, 3, '.', '') ?></td>
                <td><?=number_format((float)$x / 100, 3, '.', '') ?></td>
                <td><?=number_format((float)$x / 100000, 3, '.', '') ?></td>
              </tr>
              <?php
                  } ?>
          </tbody>
    </table>
  </div>
</div>
<?php include('footer.php') ?>
