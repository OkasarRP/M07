<?php
namespace App;

use App\src\shared\user\User;

class Admin extends User{ 

    public function __construct(int $id, string $username, string $password, string $email, string $role){

        parent::__construct($id, $username, $password, $email,'admin');

    }
 

}