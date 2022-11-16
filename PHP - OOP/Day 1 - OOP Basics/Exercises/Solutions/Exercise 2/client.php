<?php

require_once 'HtmlString.php';

$htmlString = new HtmlString('I need holidays');
// $htmlString->set_string('I need holidays');
echo $htmlString->get_string() . '<br>';
echo $htmlString->get_bold_string() . '<br>';
echo $htmlString->get_italic_string() . '<br>';
echo $htmlString->get_bold_italic_string() . '<br>';
