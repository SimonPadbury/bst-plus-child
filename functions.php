<?php
/*
This child theme needs to instruct WordPress where to find the stylesheet, as below.

Notice that the 'add_action' line ends with '101'? This guarantees that the child stylesheet 
(bst-plus-child.css') is added to the webpage <head> AFTER the BST Plus parent theme stylesheets.
(Because in the BST Plus enqueue (functions/enqueues.php), the 'add_action' line ends with '100'.)
*/

function bst_plus_child_enqueues() {

	wp_register_style('bst-plus-child', get_bloginfo('stylesheet_directory') . '/css/bst-plus-child.css', false, null);
	wp_enqueue_style('bst-plus-child');

  /* Enqueue your own styles and scripts in here */

}
add_action('wp_enqueue_scripts', 'bst_plus_child_enqueues', 101);

?>
