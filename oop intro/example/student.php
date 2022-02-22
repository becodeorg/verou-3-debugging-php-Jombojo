<?php

class Student extends Person
{
    public function talk() : string
    {
        return 'Jian is really good at pingpong - but ' . $this->name . ' is better!';
    }
}