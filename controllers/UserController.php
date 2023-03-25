<?php
require_once ("../../models/User.php");
class UserController{

    private $ejecuta;
    
    public function __construct()
    {
        $this->ejecuta = new User();
    }
    public function id( $id )
    {
        return $this->ejecuta->id( $id );
    }
    public function email( $email )
    {
        return $this->ejecuta->email( $email );
    }
    public function user( $email, $password )
    {
        return $this->ejecuta->user( $email, $password );
    }

    public function create( $values )
    {
        return $this->ejecuta->create( $values );
    }
    public function read()
    {
        return $this->ejecuta->read();
    }
    public function update($fillable, $conditions)
    {
        return $this->ejecuta->update( $fillable, $conditions );
    }
    public function delete($id, $profile)
    {
        return $this->ejecuta->delete( $id, $profile );
    }
    
}