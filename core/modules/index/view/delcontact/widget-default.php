<?php

$client = ContactData::getById($_GET["id"]);
$client->del();
Core::redir("./index.php?view=contacts");

?>