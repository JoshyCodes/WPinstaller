<?php
namespace wpInit;

function Initiate() {

    run_check('banner_post()', '_init/banner.php');

    run_check('continuePrompt()', '_init/prompt.php');

    run_check('get_name()', '_init/info.php');

    banner_post();

    continueTest();

    return get_name();

}