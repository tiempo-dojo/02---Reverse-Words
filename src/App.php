<?php
namespace App;

use InvalidArgumentException;

class App
{
    
    /**
     * @param string $needed
     * @return array
     */ 
    public function stringToArray($needed) 
    {   
        if (empty($needed) || !is_string($needed)) {
            throw new InvalidArgumentException;
        }
        return explode(' ', $needed);   
    }
    
    public function reverseWords($input)
    {
        $return = '';
        $input = $this->stringToArray($input);
        for ($i=count($input)-1; $i>=0; $i--)
        {
            $return .= $input[$i] . ' ';
        }
        
        return rtrim($return);
    }
    
}