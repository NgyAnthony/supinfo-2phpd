<?php

$sample = [];
$user1 = new User();
$user1 -> setUsername("root");
$user1 -> setPassword("rootPw");

$user2 = new User();
$user2 -> setUsername("guest");
$user2 -> setPassword("guestPw");

array_push($sample, $user1);
array_push($sample, $user2);
