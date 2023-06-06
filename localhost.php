<?php

function getConnection()
{
    return
        new PDO("mysql:host=localhost;dbname=tabel_mhs", "arfan", "123", [PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
}
