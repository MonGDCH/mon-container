<?php

class Test
{
    public function say()
    {
        return 'Hello World!';
    }

    public function demo(A $a)
    {
        return $a->name();
    }
}