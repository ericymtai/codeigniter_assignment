<?php 



  use ColorThief\ColorThief;
  
  
  //show default image on start
  if (isset($uploadedImage)){
    $sourceImage = base_url() . 'uploads/' . $uploadedImage['file_name'];
  }else{
   $sourceImage = base_url() . 'assets/images/popsicle.gif';
  }
  
  

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
    $palette_element = '<div class="palette palette-chip hover-rotate" data-rgb="'. $color .'">';
  
  //svg posicle template image
    $palette_element.= '<?xml version="1.0" encoding="UTF-8"?>
<svg width="38px" height="94px" viewBox="0 0 38 94" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Desktop-HD" transform="translate(-775.000000, -598.000000)">
            <g id="Group-2" transform="translate(482.000000, 595.000000)">
                <g id="Layer_1" transform="translate(311.780000, 50.250000) rotate(-360.000000) translate(-311.780000, -50.250000) translate(293.280000, 3.750000)">
                    <g id="Group" transform="translate(0.000000, 0.000000)">
                        <path d="M18.386273,91.0848867 L18.386273,91.0848867 C16.4394911,91.0848867 14.8820657,89.5081268 14.8820657,87.5857756 L14.8820657,60.4352651 L21.8904803,60.4352651 L21.8904803,87.5857756 C21.8904803,89.5297262 20.3330548,91.0848867 18.386273,91.0848867 Z" id="Shape" fill="#F9AC82"></path>
                        <path d="M17.6508221,82.0131171 C16.9370021,82.0131171 16.3529675,81.4299319 16.3529675,80.71715 L16.3529675,63.4807878 C16.3529675,62.7680059 16.9370021,62.1848207 17.6508221,62.1848207 C18.3646421,62.1848207 18.9486766,62.7680059 18.9486766,63.4807878 L18.9486766,80.71715 C18.9486766,81.4515314 18.386273,82.0131171 17.6508221,82.0131171 Z" id="Shape" fill="#F8BC95"></path>
                        <path d="M17.6508221,88.4713531 C16.9370021,88.4713531 16.3529675,87.8881679 16.3529675,87.175386 L16.3529675,84.7994464 C16.3529675,84.0866645 16.9370021,83.5034793 17.6508221,83.5034793 C18.3646421,83.5034793 18.9486766,84.0866645 18.9486766,84.7994464 L18.9486766,87.175386 C18.9486766,87.8881679 18.386273,88.4713531 17.6508221,88.4713531 Z" id="Shape" fill="#F8BC95"></path>
                        <path d="M23.5344294,67.6710814 L13.2597475,67.6710814 C6.70558191,67.6710814 1.3843782,62.3576163 1.3843782,55.8129825 L1.3843782,13.2188643 C1.3843782,6.6742305 6.70558191,1.36076544 13.2597475,1.36076544 L23.5344294,1.36076544 C30.088595,1.36076544 35.4097987,6.6742305 35.4097987,13.2188643 L35.4097987,55.834582 C35.4097987,62.3576163 30.088595,67.6710814 23.5344294,67.6710814 Z" id="Shape" fill="'.$color.'"></path>
                        <path d="M23.5344294,0.0647983543 L13.2597475,0.0647983543 C5.9917619,0.0647983543 0.0865236376,5.9614486 0.0865236376,13.2188643 L0.0865236376,55.834582 C0.0865236376,63.0919977 5.9917619,68.9886479 13.2597475,68.9886479 L13.605842,68.9886479 L13.605842,87.6073751 C13.605842,90.2425081 15.7689329,92.4024533 18.4079039,92.4024533 C21.0468748,92.4024533 23.2099658,90.2425081 23.2099658,87.6073751 L23.2099658,68.9886479 L23.5560603,68.9886479 C30.8240459,68.9886479 36.7292841,63.0919977 36.7292841,55.834582 L36.7292841,13.2188643 C36.7076532,5.9614486 30.7807841,0.0647983543 23.5344294,0.0647983543 Z M20.5926257,87.5857756 C20.5926257,88.7953449 19.5976039,89.7889196 18.386273,89.7889196 C17.1749421,89.7889196 16.1799202,88.7953449 16.1799202,87.5857756 L16.1799202,68.9670485 L20.5926257,68.9670485 L20.5926257,87.5857756 Z M34.1119441,55.8129825 C34.1119441,61.6448344 29.374775,66.3751143 23.5344294,66.3751143 L13.2597475,66.3751143 C7.41940192,66.3751143 2.68223276,61.6448344 2.68223276,55.8129825 L2.68223276,13.2188643 C2.68223276,7.38701239 7.41940192,2.65673253 13.2597475,2.65673253 L23.5344294,2.65673253 C29.374775,2.65673253 34.1119441,7.38701239 34.1119441,13.2188643 L34.1119441,55.8129825 Z" id="Shape" fill="#415267"></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>';
    

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




<div class="wrapper">
  
 
  <div class="item-container">
    <div class="item__image">
     <img src="<?php echo $sourceImage;?>" />
<!--  default image of "dribbble popsicle" by vino huang found here at https://dribbble.com/Vino123       -->
    </div>
    <div class="palette-container">

      <div class="palette-chips">
        <?php  echo make_palette($sourceImage); ?>
      </div>
    </div>
    
    <div class="current-color" data-clipboard-target="#current-color-text">
      <p id="current-color-text">click a flavor to get color!</p>
    </div>
     <div class="current-color__switch">
        <button class="current-type">hex</button>
        <button>rgb</button>
      </div>
  </div>


</div>

<script>
  
  new Clipboard('.current-color');
 
  var colorType = 'hex';
  
  $('.palette-chip').on('click', function(){
     $('.palette-chip').removeClass('rotate');
   var paletteColor = $(this).attr('data-rgb');
   $(this).attr('data-hex', rgb2hex(paletteColor));
    $('body').css(
      'background-color', paletteColor
    );
    $('label').css('border-color', paletteColor);
    $('.logo h1, label').css('color', paletteColor);
    if($(this).hasClass('hover-rotate')){
      $(this).css('transform', 'rotate(0deg)');
    }
    $(this).addClass('rotate');
    if(colorType == 'hex'){
        paletteColor = rgb2hex(paletteColor);
       $('.current-color p').text(paletteColor).css('color', paletteColor);
       $('.current-color__switch button').css('color', paletteColor);
    }else if(colorType == 'rgb'){
       $('.current-color p').text(paletteColor).css('color', paletteColor); 
        $('.current-color__switch button').css('color', paletteColor);
    }
    

  });
  
  $('.current-color__switch button').on('click', function(){
    $('.current-color__switch button').removeClass('current-type');
    $(this).addClass('current-type');
    colorType = $(this).text();
    
    if($('.palette-chip.rotate')){
      //super one liner!!!
      $('.current-color p').text($('.palette-chip.rotate').attr('data-' + $(this).text()));   
    }
    
  });
  
  //Function to convert hex format to a rgb color
function rgb2hex(rgb){
 rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
 return (rgb && rgb.length === 4) ? "#" +
  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
}

</script>


