<?php
namespace wpInit;

function download_wp() {

    //download the latest WordPress build

    shell_exec('curl -O https://wordpress.org/latest.zip');

}