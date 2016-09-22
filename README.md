# NRPParser:
Parser dla laravela do numerów NIP, REGON PESEL

## Instalacja:
do pliku composer.json w sekcji require-dev dodajemy

### composer.json

        'kf24/nrpparser':'dev-master'

### config/app.php

        'providers' => \[
                ..
                kf24\nrpparser\ProviderNRPParser::class,

### /resources/lang/pl/validation.php

        'pesel'=> 'Numer pesel jest nieprawidłowy.'
        'nip'=> 'Numer nip jest nieprawidłowy.'
        'regon'=> 'Numer regon jest nieprawidłowy.'


### Przykładowa walidacja

        \Validator::make(
                        [ // dane wejsciowe
                            'numer_nip'=>'xxxxxxxxxx',
                            'numer_regon'=>'xxxxxxxx',
                            'numer_pesel'=>'xxxxxxxxxxx'
                        ], 
                        [ // ustawienie walidatora
                            'numer_nip'=>'nip',
                            'numer_regon'=>'regon',
                            'numer_pesel'=>'pesel'
                        ]
                  )
