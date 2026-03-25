<?php

use Sprint\SprintConnector;

it('elimina una richiesta co', function() {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
    $dotenv->load();

    $token = $_ENV['SPRINT_API_KEY'];

    $connector = new SprintConnector($token);
   
    $response = $connector->richiesteCo()->eliminaRichiesta('A26C25KOG2XW');

    expect($response->status())->toBe(200);
});