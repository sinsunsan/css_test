<?php  
include "styles.php"; // File that contains the array of styles to be tested 
include "config.php"; // Configuration file
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link type="text/css" rel="stylesheet" media="all" href="gen.css" />
      
      <?php
      
      foreach ($config['css'] as $key => $value) { // css files to be included
        print '<link type="text/css" rel="stylesheet" media="all" href="' . $value . '" />';
      }
      
      ?>
    </head>
    

    
    <body>
      
      <div id="test-container">
        <div>
        <?php
         echo '<div>Test page for the site ' . $config['site-name'] . '</div>'; 
        ?>
        <br><br>
        
        <?php
        
        //print_r($element);
          foreach ($element as $key => $array) {
            print '<div class="test-group">' . $key;
            foreach ($array as $key1 => $array1) {
               (isset($array1['content'])) ? $content = $array1['content'] : $content = '';
               (isset($array1['class'])) ? $class = $array1['class'] : $class = '';
               (isset($array1['tag'])) ? $tag = $array1['tag'] : $tag = 'div';
               
                print '<div class="test-item" title="' . $array1['title'] . '">' . $array1['title'];
                  print '<'. $tag . ' class="' . $class . '">' . $class . '</'. $tag .'>';
                  if ($content != '') {
                     print '<div class="' . $array1['class']. '">' . $array1['content'] . '</div>';
                  }
          
                print '</div>'; 
            }
            print '</div>'; 
            
          }
          
        ?>
    
      </div>
    </body>

  </html>
