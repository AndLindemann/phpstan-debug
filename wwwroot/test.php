<?php
// this one fails validation with Uncaught Error: Class 'Doctrine\ORM\Query\Expr' not found
use Doctrine\ORM\Query\Expr;

$expr = new Expr();
