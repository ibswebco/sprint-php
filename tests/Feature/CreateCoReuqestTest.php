<?php

use Sprint\SprintConnector;

it('crea una richiesta di co', function() {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
    $dotenv->load();

    $token = $_ENV['SPRINT_API_KEY'];

    $connector = new SprintConnector($token);

    $descr = 'test da sdk 2';

    $response = $connector->richiesteCo()->creaRichiesta($descr);

    expect($response->json())->toBeArray();
});