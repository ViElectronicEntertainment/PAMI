<?php

$category = ProjectData::getById($_GET["id"]);

$category->del();
Core::redir("./index.php?view=projects");


?>