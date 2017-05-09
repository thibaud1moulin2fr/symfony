<?php

$clair = "yoyoyo";
$hash = password_hash($clair, PASSWORD_DEFAULT, ['cost' => 13]);
echo $hash;

password_verify($clair, $hash);