<?php if(!isset($embed)) {/* Path to the /docs/ directory. */$path = getcwd();/* Explode path into array. */$path = explode('\\', $path);/* Search for "docs" in the array, and return the index */   $docsReverseIndex = count($path) - array_search('docs', $path);/* Repeat "../" docsReverseIndex times. */$docsPath = str_repeat('../', $docsReverseIndex - 1);/* Include main.php file. */include_once($docsPath.'main.php');}?><script>const textToParse = {"content":[{"id":"QrKcsXJAdC","type":"header","data":{"text":"Commandes","level":2}},{"id":"e1qAlU7GW1","type":"paragraph","data":{"text":"Ce <b>portail des commandes</b> contient des pages documentant de manière précise le fonctionnement et l'historique des modifications chaque (ou presque) commandes."}},{"id":"wXjW9ugL0B","type":"header","data":{"text":"Documentation","level":2}},{"id":"JpaTid_uMg","type":"paragraph","data":{"text":"Pour <b>plus</b> d'informations sur le <b>fonctionnement</b> de la <b>documentation</b> de <i>Server Analytics</i>, vous pouvez consulter l'article principal en cliquant sur le bouton <b>\"⏪ Accueil\"</b>."}}]}.content;</script>