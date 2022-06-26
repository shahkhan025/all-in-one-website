<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0 => [
                'id'    => 1,
                'name'  => 'Shah',
                'email' => 'shah@gmail.com',
                'password' => '12345'
            ],

            1 => [
                'id'    => 2,
                'name'  => 'khan',
                'email' => 'khan@gmail.com',
                'password' => '9999'
            ],

        ];
    }


}