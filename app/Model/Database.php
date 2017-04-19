<?php

namespace App\Model;


class Database
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function setContact ($lastname, $firstname, $email, $message) {
        $req = $this->pdo->prepare(
            ('INSERT INTO contact (lastname, firstname, email, message) VALUES ( :lastname, :firstname, :email, :message)')
        );
        $req->execute([
            "lastname" => $lastname,
            "firstname" => $firstname,
            "email" => $email,
            "message" => $message
        ]);

        return ([
            "data" => 'success'
        ]);
    }
}