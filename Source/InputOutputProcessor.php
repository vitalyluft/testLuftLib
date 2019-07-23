<?php
declare(strict_types = 1);
namespace MyTestLib\Source;

class InputOutputProcessor
{
    public function getUserInput(string $message): string 
    {
        echo $message;
        $userInput = trim(fgets(STDIN));
        
        return "$userInput";
    }
}

