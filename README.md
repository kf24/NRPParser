# NRPParser
Parser dla laravela do numerów NIP, REGON PESEL

## Instalacja
do pliku composer.json w sekcji require-dev dodajemy

### composer.json
'kf24/nrpparser':'dev-master'

### config/app.php

    'providers' => \[

            ..
            kf24\nrpparser\ProviderNRPParser::class,


### do walidatira dodajemy

$valid=\Validator::make(['numer_nip'=>'xxx-xxx-xx-xx'],['numer_nip'=>'required|nip']);