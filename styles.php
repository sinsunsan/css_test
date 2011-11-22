<?php 
// Lorem ipsum text for paragrapher
$para="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl lacus, tempus in imperdiet sit amet, convallis sed ipsum. Morbi porttitor varius velit a rutrum. Mauris dui erat, dignissim ut faucibus ac, placerat sit amet arcu. Quisque sollicitudin egestas mi, eget rhoncus diam malesuada vel. In hac habitasse platea dictumst. Pellentesque nec ultrices felis... ";

// You can create as many main key like 'texte' 'button' 
// They will be used in the group header
// Array of element to be tested
// 'title' -> Name of the element to be output 
// 'class' -> Class to be tested
// 'content' -> html content to be put
// 'tag' -> hmlt tag to be used
$element['texte'] = array ( 
  array(
    'title' => 'Titre de niveau 1',
    'class' => 'ar-tx-title-h1',
  ),
  array(
    'title' => 'Titre de niveau 2',
    'class' => 'ar-tx-title-h2',
  ),
  array(
    'title' => 'Titre de niveau 3',
    'class' => 'ar-tx-title-h3',
  ),
  array(
    'title' => 'Titre de niveau 4',
    'class' => 'ar-tx-title-h4',
  ),
  array(
    'title' => 'Texte de Teaser',
    'class' => 'ar-tx-teaser',
    'content' => $para,
  ),
); 
    
$element['button'] = array ( 
  array(
    'title' => 'Bouton',
    'class' => 'seb-button',
  ),
  array(
    'title' => 'Boutons transparents',
    'class' => 'seb-button-trans',
  ),
  array(
    'title' => 'Gros Boutons transparents',
    'class' => 'seb-button-big-trans',
  ),
  array(
    'title' => 'Boutons rectangulaires',
    'class' => 'seb-button-rect',
  ),
  array(
    'title' => 'Gros Boutons rectangulaires',
    'class' => 'seb-button-rect-big',
  )
);    
    
?>