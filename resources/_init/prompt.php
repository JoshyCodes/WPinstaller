<?php
namespace wpInit;


function continuePrompt($Prompt = '', $Default = null) {

   // Default parameters
   if (is_null($Default)) $Default = false;

   // Append Y/n prompt to Prompt
   if (strlen($Prompt) > 0) $Prompt .= ' ';				// If Prompt has characters, append a spacer for [Y/n]
   $Prompt .= ($Default ? '[Y/n] ' : '[y/N] ');

   // Loop until a valid response is provided
   while (true) {

     // Get user input
     print "Would you like to continue $Prompt";
     $in = chop(fgets(STDIN));

     // user entered ENTER then continue
     if ($in == '') return true;
     // user entered "Y" or "y", return true and exit now.
     if ($in == 'Y' || $in == 'y') return true;
     // user entered "N" or "n", return false and exit now.
     if ($in == 'N' || $in == 'n') return false;

   }

 }

function continueTest() {

    if (!continuePrompt()) {

        die();

    } else {

        echo "Thank You! \n";
    }

}