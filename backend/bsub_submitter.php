<?php
// project: xml2web
// author : SOMJEET DASGUPTA .  3/6/2016

//=========================================================================//
$SAVE_DIRECTORY = "./";
$TEMP_STRAY_STRING = ""; // for saving  in a temporary file instead of original
$FORM_HANDLER = "#";
foreach ($_POST as $key => $value) {
  echo $key." ".$value."<br>";
  file_put_contents($key, $value);
}

$dom = new DOMDocument("5.0");
$form = $dom->createElement('form');
$attr = $dom->createAttribute('method');
$attr->value = 'post';
$form->appendChild($attr);
$attr = $dom->createAttribute('action');
$attr->value = $FORM_HANDLER;
$form->appendChild($attr);
$dom->appendChild($form);
$form->appendChild($dom->createElement('br')); // line breaker

$input = $dom->createElement('input');
$attr = $dom->createAttribute('type');
$attr->value = 'submit';
$input->appendChild($attr);
$attr = $dom->createAttribute('value');
$attr->value = 'SUBMIT JOB';
$input->appendChild($attr);
$attr = $dom->createAttribute('style');
$attr->value = "font-family: 'Oswald', sans-serif; font-size: 250%; position: absolute; top: 320px; left: 900px;";
$input->appendChild($attr);
$form->appendChild($input);

echo $dom->saveHTML();
?>
