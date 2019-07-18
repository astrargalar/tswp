<?php
function starter_excerpt_more () {
  return '<a href="' . get_permalink() . '">'. __(' leer más...', 'starter') .'</a>';
}

add_filter( 'excerpt_more', 'starter_excerpt_more' );

function starter_excerpt_length () {
  return 40;
}

add_filter( 'excerpt_length', 'starter_excerpt_length' );
