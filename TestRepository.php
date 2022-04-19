<?php

require __DIR__ . "/GetConnection.php";
require __DIR__ . "/Model/Comment.php";
require __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// insert
// $comment = new Comment(email: "rahmat@test.com", comment:'hi');
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// findById
// $comment = $repository->findById(11);
// var_dump($comment);

// findAll
$comments = $repository->findAll();
var_dump($comments);


$connection = null;