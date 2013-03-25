<?php

function ramclean_preprocess_node(&$variables) {

  switch ($variables['type']) {
    case 'news':

      $author = render($variables['content']['author']);
      $post_date = render($variables['content']['post_date']);
      $variables['author_and_date'] = 'Geschrieben von ' . $author . '  am ' . $post_date;

      break;
  }
}