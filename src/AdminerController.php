<?php namespace Miroc\LaravelAdminer;

use Illuminate\Routing\Controller;

class AdminerController extends Controller {

    public function index()
    {
        require('../adminer/adminer-4.2.1-en.php');
        return new EmptyResponse();
    }

}
