<?php

namespace App\Http\Controllers;

class DemoController extends Controller
{
    public function test()
    {
        // Option 1 : affichage direct (echo)
        $this->log('OK');

        // Option 2 : journal Laravel (recommandé)
        $this->logInfo('Tout roule');

        return 'Fini';
    }
}
