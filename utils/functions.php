<?php 

/*
Function sanitize for cleaning data enter by the user in the champs of a formulaire
 * @param mixed $data
 * @return void
 */
function sanitize($data){
    htmlentities(strip_tags(stripslashes(trim($data))));
};