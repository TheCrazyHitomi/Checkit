<?php

require_once __DIR__. "/lib/session.php";

//previent les attaques de fixation de session
session_regenerate_id(true);

//supprime les données du serveur
session_destroy();

//supprime les donnéées du tableau $_SESSION
unset($_SESSION);

header('location: login.php');