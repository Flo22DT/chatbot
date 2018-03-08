<?php

function ecrire_log($errtxt){
         $fp = fopen('log.txt','a+'); // ouvrir le fichier ou le créer
         fseek($fp,SEEK_END); // poser le point de lecture à la fin du fichier
         $nouverr=$errtxt."\r\n"; // ajouter un retour à la ligne au fichier
         fputs($fp,$nouverr); // ecrire ce texte
         fclose($fp); //fermer le fichier
 }
  

$postdata = file_get_contents("php://input");


ecrire_log($postdata);

$