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
}