<?php

// Escape Sequences
// \t : tab
// \n : newline

// Singleline String
echo 'Single Quote : ';
echo 'Cant use escape sequences';
echo "\n";

echo "Double Quote : ";
echo "Can\t use\t escape sequences\n";

// Multiline String
echo <<<'NowDoc'
Description : 
The NowDoc text above and below can be changed to anything
same as Single Quote but can have more than one line
can't be parsing
NowDoc;

echo "\n";

echo <<<HereDoc
Description : 
The HereDoc text above and below can be changed to anything
same as Double Quote but can have more than one line
HereDoc;