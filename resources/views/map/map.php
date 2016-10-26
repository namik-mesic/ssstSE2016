<?php
require __DIR__.'\Cornford\Googlmapper\Mapper';
include(\Cornford\Googlmapper\Models\Map::class);



$mapper = new \Cornford\Googlmapper\Mapper();
$mapper->map(43.860702, 18.429932,['zoom' => 10, 'markers' =>
    ['title' => 'My Location', 'animation' => 'DROP'], 'clusters' => ['size' => 10,
    'center' => true, 'zoom' => 20]]);)
$mapper->render();


