<?php

namespace Sprint\Resources;

use Saloon\Http\Response;
use Sprint\Models\SprintRichiesta;
use Sprint\Requests\CreateCoRequest;
use Sprint\Requests\DeleteCoRequest;
use Sprint\Requests\UpdateCoRequest;
use Sprint\SprintResource;


class Co extends SprintResource
{
    public function creaRichiesta(string $descrizione): Response
    {
        return $this->connector->send(new CreateCoRequest(descrizione: $descrizione));    
    }

    public function modificaRichiesta(SprintRichiesta $richiesta): Response
    {
        return $this->connector->send(new UpdateCoRequest($richiesta));
    }

    public function eliminaRichiesta(string $codice): Response
    {
        return $this->connector->send(new DeleteCoRequest(codice: $codice));
    }
}