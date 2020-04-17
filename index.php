<?php
include "Stack.php";

$newStack = new Stack();
$newStack->push("first Item");
$newStack->push("second Item");
$newStack->push("third Item");
$newStack->push("fourth Item");
$newStack->push("fourth Item");
echo "<br>";

echo $newStack->top();
echo "<br>";

$newStack->pop();
$newStack->pop();
$newStack->pop();

echo $newStack->top();
echo "<br>";

$newStack->pop();
$newStack->pop();



