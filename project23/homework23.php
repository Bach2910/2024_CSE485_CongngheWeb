<?php
$users = [
    [
        "username" => "nothing",
        "password" => password_hash("123456", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Nothing",
        "email" => "NOTHINGHAPPEN@gmail.com",

    ],
    [
        "username" => "ChaGio",
        "password" => password_hash("nomoney12", PASSWORD_DEFAULT), // Store hashed password
        "name" => "ban cha gio",
        "email" => "BanChaGio123o@gmail.com"
    ],
    [
        "username" => "test",
        "password" => password_hash("testing123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Just testing",
        "email" => "hello123@gmail.com"
    ],
    [
        "username" => "otakuso1",
        "password" => password_hash("otaku123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Wibu là số 1",
        "email" => "maimaiwibu@153gmail.com"
    ]

];