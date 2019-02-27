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

    public function add_metabot_form()
    {
        include './view/metabot-form.php';

    }

    public function add_metabot()
    {
        $naam = $_POST['naam'];

        //toevoegen aan database

        include './view/metabot-store.php';

    }

    public function login()
    {
        if($_POST['password'] == 'kip')
        {
            $_SESSION['isIngelogd'] = true;   
            $_SESSION['naam'] = 'Stijn';
        }
    }

    public function logout()
    {
        
        $_SESSION['isIngelogd'] = false;   
        
    }


    public function login_form()
    {
        include './view/login-form.php';

    }


}