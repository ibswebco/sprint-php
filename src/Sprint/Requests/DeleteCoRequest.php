<?php

namespace Sprint\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteCoRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/richieste/{$this->codice}";
    }
    
    public function __construct(
        protected string $codice
    ) {}
}