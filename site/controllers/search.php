<?php

return function ($site) {

  $query   = get('q');
  $results = page('catalog')->grandchildren()->search($query, 'title|tags|code');

  return [
    'query'      => $query,
    'results'    => $results,
  ];

};