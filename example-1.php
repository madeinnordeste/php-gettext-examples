<?php 

// I18N support information here
$language = 'pt_BR';

setlocale(LC_ALL, $language);

putenv("LC_ALL=$language");

/*
$results = putenv("LC_ALL=$language");
if (!$results) {
    exit ('putenv failed');
}
*/

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "locale"); 
textdomain($domain);

echo gettext("A string to be translated would go here");

 ?>