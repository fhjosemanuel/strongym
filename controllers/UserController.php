<?php
require_once ("../../models/User.php");
class UserController{

    private $ejecuta;
    
    public function __construct()
    {
        $this->ejecuta = new User();
    }
}