<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $faker = Faker\Factory::create('id_ID');
        for($i=0; $i<20; $i++){
            echo $faker->name.'<br';
        }
    }

}

/* End of file Controllername.php */
