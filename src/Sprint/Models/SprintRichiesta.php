<?php

namespace Sprint\Models;

readonly class SprintRichiesta
{    
    public function __construct(
        public string $codice,
        public string $descrizione,
        public ?int $modelloId,
        public string $speditore,
        public string $destinatario,
        public string $paeseDest,
        public array $paeseOrigine,
        public ?string $trasporto,
        public ?string $osservazioni,
        public array $merci,
        public array $quantita,
        public ?string $valoreMerce,
        public ?int $numeroCopie,
        public ?int $numeroAut,
        public ?string $paeseCounitario,
        public ?string $produzione,
        public ?string $aziendaProduttrice,
        public ?string $modifiche,
        public ?string $aziendaModifiche,
        public ?string $paeseExtraUe,
        public ?string $documentazioneAllegata,
        public ?string $giacenzaMerci,
        public ?string $annotazioniMittente,
        public ?string $annotazioniInterne,
        public bool $proforma = false,
        public bool $stampaAzienda = true,
        public ?string $emailContatto,
        public ?array $cciaa,
    ) { }
}