<?php 

$Text='Hello world this is my first text for php';
echo $Text . '<br>';
echo strlen($Text) . '<br>';

$VariableText=$_GET['changeWord'];

$TextChange=str_replace($VariableText, 'XXX', $Text);
echo $TextChange . '<br>';
echo strlen($TextChange);

?>