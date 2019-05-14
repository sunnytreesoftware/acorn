<?php

namespace Sunnytree\Acorn\Http;

class AcornController{

    public function welcome(){

        return view('acornwelcome::welcome');
//        return 'hello acorn';
    }
}