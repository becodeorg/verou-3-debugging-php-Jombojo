<?php

class Teacher extends Person
{
    public function talk() : string
    {
        return 'Basile is good, but ' . $this->name . ' is better!';
    }
}