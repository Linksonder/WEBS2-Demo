<?php

class MetabotController
{
    public function show_all()
    {    
        //dummy
        $metabots = Metabot::get_all();
    
        //data -> view?
        include './view/metabots-list.php';
    }
}