<?php
namespace DrLev\Stopper;

class Main
{
    public function run()
    {
        ob_end_clean();
        echo "STOPPED FROM LIBRARY";
        exit(0);
    }
}