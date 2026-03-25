<?php

namespace Sprint\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sprint\Models\SprintRichiesta;

class UpdateCoRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/richieste/{$this->richiesta->codice}";
    }

    public function __construct(
        protected SprintRichiesta $richiesta
    ) {}

    protected function defaultBody(): array
    {
        return [
            'descrizione' => $this->richiesta->descrizione,
            'speditore' => $this->richiesta->speditore,
            'destinatario' => $this->richiesta->destinatario,
            'paese_dest' => $this->richiesta->paeseDest,
            'paese_origine' => $this->richiesta->paeseOrigine,
            'trasporto' => $this->richiesta->trasporto,
            'osservazioni' => $this->richiesta->osservazioni,
            'merci' => $this->richiesta->merci,
            'quantita' => $this->richiesta->quantita,
            'valore_merce' => $this->richiesta->valoreMerce,
            'numero_coopie' => $this->richiesta->numeroCopie,
            'numero_aut' => $this->richiesta->numeroAut,
            'paese_comunitario' => $this->richiesta->paeseCounitario,
            'produzione' >= $this->richiesta->produzione,
            'azienda_produttrice' => $this->richiesta->aziendaProduttrice,
            'modifiche' => $this->richiesta->modifiche,
            'azienda_modifiche' => $this->richiesta->aziendaModifiche,
            'paese_extraue' => $this->richiesta->paeseExtraUe,
            'documentazione_allegata' => $this->richiesta->documentazioneAllegata,
            'giacenza_merci' => $this->richiesta->giacenzaMerci,
            'annotazioni_mittente' => $this->richiesta->annotazioniMittente,
            'annotazioni_interne' => $this->richiesta->annotazioniInterne,
            'proforma' => $this->richiesta->proforma,
            'stampa_azienda' => $this->richiesta->stampaAzienda,
            'email_contatto' => $this->richiesta->emailContatto,
            'cciaa' => $this->richiesta->cciaa,
        ];
    }
}