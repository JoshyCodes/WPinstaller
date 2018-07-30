<?php
namespace wpInit;


function run_check($fnct, $file){

    if (!function_exists($fnct)) {

        return require($file);

    }

}