<?php

require_once __DIR__ . '/assets/data/db.php';

$genres = [];
$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? database : [];

foreach ($database as $album) {

  if(!in_array($album['genre'], $genres)) {
    $genres[] = $album['genre'];
  }

};

if(count($albums) === 0) {

  foreach($database as $album) {
    if($album['genre'] === $_GET['genre']) {
      $albums[] = $album['genre']
    }
  }

}

$response = [
  'albums' => $albums,
  'genres' => $genres
];



header('Content-Type: application/json');

echo json_encode($database);

?>