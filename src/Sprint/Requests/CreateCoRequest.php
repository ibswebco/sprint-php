<?php

namespace Sprint\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateCoRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/richieste';
    }

    public function __construct(
        protected string $descrizione
    ) {}

    protected function defaultBody(): array
    {
        return [
            'descrizione' => $this->descrizione,
        ];
    }
}