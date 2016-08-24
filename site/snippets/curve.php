<? $color = (isset($color)) ? $color : '#fff' ?>
<? $key = (isset($key)) ? $key : 0 ?>
<svg version="1.1" id="curve_<?= $key ?>" class="section__curve <?= ($key % 2 != 0) ? 'section__curve--flipped' : '' ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 1400 138.2" style="enable-background:new 0 0 1400 138.2;" xml:space="preserve">
  <style type="text/css">
    #curve_<?= $key ?> .st0{clip-path:url(#SVGID_2_);fill:<?= $color ?>;}
  </style>
  <defs>
    <rect id="SVGID_1_" y="0" width="1400" height="138.2"/>
  </defs>
  <clipPath id="SVGID_2_">
    <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
  </clipPath>
  <circle class="st0" cx="1100.4" cy="4417" r="4417"/>
</svg>
