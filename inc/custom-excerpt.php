<?php
function tswp_excerpt_more()
{
  return '<a href="' . get_permalink() . '">' . __(' leer más...', 'tswp') . '</a>';
}

add_filter('excerpt_more', 'tswp_excerpt_more');

function tswp_excerpt_length()
{
  return 40;
}

add_filter('excerpt_length', 'tswp_excerpt_length');
