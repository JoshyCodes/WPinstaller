<?php
namespace wpInit;

function retrieve_Files($project) {

    run_check('download_wp()', '_downloads/wpDown.php');

    run_check('download_fuse()', '_downloads/fuseDown.php');

    run_check('cleaner()', '_downloads/cleanup.php');

    download_wp();

    download_Fuse();

    cleaner($project);

}