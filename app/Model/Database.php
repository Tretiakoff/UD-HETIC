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

    public function setCall ($interval, $number) {
        $req = $this->pdo->prepare(
            ('INSERT INTO phone_call (time_slot, phone) VALUES ( :interval, :number)')
        );
        $req->execute([
            "interval" => $interval,
            "number" => $number,
        ]);

        return ([
            "data" => 'success'
        ]);
    }

    public function getContact () {
        $req = $this->pdo->prepare(
            ('SELECT * FROM contact')
        );
        $req->execute();

        $calls = $req->fetchAll();

        return ([
            "data" => $calls
        ]);
    }

    public function getCall () {
        $req = $this->pdo->prepare(
            ('SELECT * FROM phone_call')
        );
        $req->execute();

        $calls = $req->fetchAll();

        return ([
            "data" => $calls
        ]);
    }
}