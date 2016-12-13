<?php 

  use ColorThief\ColorThief;
  
  //store the source image
  $sourceImage = 'https://d13yacurqjgara.cloudfront.net/users/32512/screenshots/3021146/swiping_choose_tinder_travel_fantasy.gif';

  //store array containing rgb values for most dominant color
  $dominantColor = ColorThief::getColor($sourceImage, 1);
  
  //formatted dom color
  $dom_color =  make_rgb_color($dominantColor);

  //use this function to return a formatted rgb value
  function make_rgb_color($color){
  $r = $color[0];
  $g = $color[1];
  $b = $color[2];
  return $formatted_color = 'rgb(' .$r . ',' . $g . ',' . $b . ')';

  }


  //use this to create a html element containing the color and h3 with rgb value
  function make_color_palette_element($color){
    $palette_element = '<div class="palette palette-chip">';
    $palette_element.= '<div class="palette-chip__color" style="background-color:'.$color.';">&nbsp;</div>';
//     $palette_element.= '<h3 class="palette-chip__title">'.$color.'</h3>';
    $palette_element.= '</div>';
    return $palette_element;
  }

  //use this to make a palette from an array of rgb values from image
  function make_palette($image){
    $palette = ColorThief::getPalette($image, 9);
    $palette_output = '';
    foreach($palette as $color){
      $formatted_rgb = make_rgb_color($color);
      $palette_output.= make_color_palette_element($formatted_rgb);

    };
    return $palette_output;
  };
?>

<!-- start page template -->

<div class="wrapper">
  fdfsdf
  <div class="item-container">
    <div class="item__image">
     <img src="https://d13yacurqjgara.cloudfront.net/users/32512/screenshots/3021146/swiping_choose_tinder_travel_fantasy.gif" />
    </div>
    <div class="palette-container">
      <?php 
     
        echo '<div class="palette palette-chip palette--dominant">
                <div style="background-color:'.$dom_color.';">&nbsp;</div>
                <h3 class="palette-chip__title">dominant color '.$dom_color.'</h3>
              </div>'; 
      ?>
      <div class="palette-chips">
        <?php  echo make_palette($sourceImage); ?>
      </div>
    </div>
  </div>


</div>



