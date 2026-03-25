<?php

namespace Sprint;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Sprint\Resources\Co;

class SprintConnector extends Connector
{
    use AlwaysThrowOnErrors;

    public function __construct(protected readonly string $token) {}

    public function resolveBaseUrl(): string
    {
        return 'https://sprt.ibs.ve.it/api/v2';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    public function richiesteCo(): Co
    {
        return new Co($this);
    }
}