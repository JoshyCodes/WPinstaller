<?php
namespace wpInit;

function create_Dir($dir){

    shell_exec('mkdir ' . $dir);

}