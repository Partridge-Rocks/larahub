<?php

use PartridgeRocks\Larahub\Larahub;
use PartridgeRocks\Larahub\LarahubServiceProvider;


it('can create a Larahub instance', function () {
    $larahub = new Larahub();
    expect($larahub)->toBeInstanceOf(Larahub::class);
});



