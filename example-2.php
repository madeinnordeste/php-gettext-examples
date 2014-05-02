<?php 

$language = 'en';
putenv("LANG=$language"); 
setlocale(LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "locale"); 
textdomain($domain);

echo gettext("other message");


 ?>