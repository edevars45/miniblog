<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
=======
use App\Traits\Logger;

abstract class Controller
{
    use Logger; // Toutes tes classes contrôleurs héritent de ces méthodes
>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
}
