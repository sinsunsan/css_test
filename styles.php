<?php 
// Lorem ipsum text for paragrapher
$para="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl lacus, tempus in imperdiet sit amet, convallis sed ipsum. Morbi porttitor varius velit a rutrum. Mauris dui erat, dignissim ut faucibus ac, placerat sit amet arcu. Quisque sollicitudin egestas mi, eget rhoncus diam malesuada vel. In hac habitasse platea dictumst. Pellentesque nec ultrices felis... ";

// You can create as many main key like 'texte' 'button' 
// They will be used in the group header
// Array of element to be tested
// 'title' -> Name of the element to be output 
// 'class' -> Class to be tested
// 'content' -> html content inside the item (if ommited)
// 'content_inner -> the conten inside the div (for paragrapher)
// 'tag' -> hmlt tag to be used
// 'repeat' -> number of times to repeat the div
// 'htmlbefore' -> html before
// 'htmlafter' -> html after

$element['texte'] = array ( 
  array(
    'title' => 'Les liens de menu du footer',
    'content' => '<a href="#" >Cum saege</a>',
    'tag' => 'li',
    'repeat' => 5,
    'htmlbefore' => '<ul class="edi-menu-footer">',
    'htmlafter' => '</ul>',
  ),
  array(
    'title' => 'Les titres de section',
    'tag' => 'h2' , 
    'content' => '<span class="edi-title-bleu" >Mes groupes</span> de travail',
  ),
  array(
    'title' => 'Les titres H1',
    'tag' => 'h1'
  ),
  array(
    'title' => 'Les titres H2',
    'tag' => 'h2'
  ),
  array(
    'title' => 'Les titres H3',
    'tag' => 'h3'
  ),
  array(
    'title' => 'Les titres H4',
    'tag' => 'h4'
  ),
); 
    
$element['button'] = array ( 
  array(
    'title' => 'Bouton',
    'class' => 'seb-button',
  ),

);    
    
?>