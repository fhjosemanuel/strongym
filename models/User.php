<?php
require_once "Query.php";
class User{
    private $Category;
    private static $model = "users";
    private static $fillable = [
                                    'name',
                                    'email',
                                    'password',
                                    'code_validation'
                                ];
    public function __construct()
    {
        $this->query = new Query();
    }

    public function id( $id )
    {
        return $this->query->get(self::$model, ["*"], ["id = $id"]);
    }
    public function email( $email )
    {
        return $this->query->get(self::$model, ["*"], ["email = '$email'"]);
    }
    public function user( $email, $password )
    {
        return $this->query->get(self::$model, ["*"], ["email = '$email'", "password = '$password'"]);
    }
    
    public function create( $values = array() )
    {
        return $this->query->insert(self::$model, self::$fillable, $values);
    }
    public function read()
    {
        return $this->query->get(self::$model, ["*"]);
    }
    public function update($fillable, $conditions)
    {
        return $this->query->update( self::$model, $fillable, $conditions );
    }
    public function delete($id, $profile)
    {
        return $this->query->delete( self::$model, ["id = $id"] );
    }
}