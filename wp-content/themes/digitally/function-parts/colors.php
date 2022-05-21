<?php

function digitally_generate_theme_option_css(){
 
    $digitally_primaryColor = ((get_theme_mod('digitally_primary_color'))?get_theme_mod('digitally_primary_color'):"#4f87ff");
    $digitally_secondaryColor = ((get_theme_mod('digitally_secondary_color'))?get_theme_mod('digitally_secondary_color'):"#334c80");
      
    ?>
    <style type="text/css" id="digitally-theme-option-css">

        :root {
            --primary: <?php echo $digitally_primaryColor; ?>;
            --secondary: <?php echo $digitally_secondaryColor; ?>;
        }
     
    </style>    
 
    <?php
 
}
 
add_action( 'wp_head', 'digitally_generate_theme_option_css' );

?>