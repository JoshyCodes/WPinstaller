<?php
namespace wpInit;


    function get_name()
    {

        print_r('What is the project name? ');

        $in = chop(fgets(STDIN));

        if ($in == null) {

            get_name();

        } else {

            return $in;
        }
    }




