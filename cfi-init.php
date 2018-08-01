<?php
namespace wpInit;

    require('resources/functCheck.php');

    run_check('Initiate()', 'resources/startup.php');

    $project = Initiate();

    echo "Project initiated. May take a few moments \n";

    run_check('retrieve_Files()', 'resources/download.php');

    retrieve_Files($project);

    echo "File download complete... \n";


// Not complete commands below this point

    
    echo "Setting up database... \n";

    //add new DB table

