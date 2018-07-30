<?php
namespace wpInit;

function cleaner($project){

    //unpack the compressed files

    shell_exec('unzip latest.zip');

    // move files from 'wordpress' dir back to current home dir

    shell_exec('mv wordpress/ ' . $project . '/');

    shell_exec('rm latest.zip');

}