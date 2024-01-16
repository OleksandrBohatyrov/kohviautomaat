<?php
$kasutaja = 'oleksandrbohatyrov';
$serverinimi = 'localhost';
$parool = '123456';
$andmebaas = 'oleksandrbohatyrov';
$yhendus = new mysqli($serverinimi, $kasutaja, $parool, $andmebaas);
$yhendus->set_charset('UTF8');
