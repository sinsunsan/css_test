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
              $content = '';
              $title = '';
              $class = '';
              $tag = '';
              (isset($array1['class'])) ? $class = $array1['class'] : $class = '';
              $class = 'class="' . $class . '"';
              
              if (isset($array1['title'])){
                $title = $array1['title'];
              }else {
                if (isset($array1['class'])){ $title .= $array1['class']; } 
                if (isset($array1['tag'])){$title .= $array1['tag']; }
              }  
              
              (isset($array1['content_inner'])) ? $content_inner = $array1['content-inner'] : $content_inner = '';
              
               if (isset($array1['content'])) {
                 $content = $array1['content'];
               } else {
                 if (isset($array1['class'])){ $content .= $array1['class']; } 
                 if (isset($array1['tag'])){$content .= $array1['tag']; } 
                 
               }
               
               (isset($array1['tag'])) ? $tag = $array1['tag'] : $tag = 'div';
               (isset($array1['repeat'])) ? $repeat = $array1['repeat'] : $repeat = 1;
                print '<div class="test-item" title="' . $title . '">' . $title;
                
                  if (isset($array1['htmlbefore'])) { print $array1['htmlbefore']; }
                  for ($i = 0 ; $i< $repeat ; $i++) {
                     print '<'. $tag . ' ' . $class . ' >' . $content . '</'. $tag .'>';
                      if ($content_inner != '') {
                         print '<div ' . $class. ' >' . $content_inner . '</div>';
                      }
                  }
                  if (isset($array1['htmlafter'])) { print $array1['htmlafter']; }
                  
                print '</div>';
            }
            print '</div>'; 
            
          }
          
        ?>
    
      </div>
    </body>

  </html>
