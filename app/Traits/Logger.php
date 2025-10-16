<?php

namespace App\Traits;

trait Logger
{
    // Affiche directement (utile pour un test rapide)
    public function log($msg)
    {
        echo $msg;
    }

    // Écrit dans storage/logs/laravel.log (recommandé)
    public function logInfo($msg)
    {
        \Illuminate\Support\Facades\Log::info($msg);
    }
}
