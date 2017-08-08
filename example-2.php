<?php 

$language = 'pt_BR';
setlocale(LC_ALL, $language);
putenv("LC_ALL=$language");

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "locale"); 
textdomain($domain);

echo gettext("other message");


 ?>