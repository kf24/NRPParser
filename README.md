# NRPParser
Parser dla laravela do numerów NIP, REGON PESEL

## Instalacja
do pliku composer.json w sekcji require-dev dodajemy

### composer.json
['kf24/nrpparser':'dev-master']

### config/app.php

[    'providers' => \[

            ..
            kf24\nrpparser\ProviderNRPParser::class,
]