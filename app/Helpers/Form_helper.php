<?php

//to display errors in validation

function display_error($validation,$field){
    if($validation->hasError($field)){
        return $validation->getError($field);
    }
}



?>