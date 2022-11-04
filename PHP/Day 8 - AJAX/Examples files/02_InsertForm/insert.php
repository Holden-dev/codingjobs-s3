<?php

if (empty($_POST['name']))
    echo 'Name is mandatory!<br>';


if (empty($_POST['email']))
    echo 'Email is mandatory!';


var_dump($_POST);
