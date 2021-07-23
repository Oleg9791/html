<?php

use PHPUnit\Framework\TestCase;
use W1020\HTML\Select;

class SelectTest extends TestCase
{
    public function testSel()
    {
        $sel = new Select();
        $html = "<select name=''></select>";
        $this->assertEquals($html, $sel->html());
        $html = "<select name=''><option value='1' >Ivanov</option><option value='2' >Petrov</option></select>";
        $this->assertEquals($html, $sel->setData([1 => "Ivanov", 2 => "Petrov"])->html());
        $html = "<select name=''><option value='1' >Ivanov</option><option value='2' >Petrov</option><option value='3' >Sidorov</option></select>";
        $this->assertEquals($html, $sel->setData([1 => "Ivanov", 2 => "Petrov",3 => "Sidorov"])->html());


    }
}