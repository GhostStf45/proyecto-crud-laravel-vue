<?php

namespace App\Exceptions;

use App\Entry;
use Exception;

class InvalidEntrySlugException extends Exception
{
    private $entry;

    public function __construct(Entry $entry)
    {
        $this->entry = $entry;

    }
    //Render the entry to redirect any url if it has a invalid name in route friendly
    public function render()
    {
        return redirect($this->entry->getUrl());
    }
}