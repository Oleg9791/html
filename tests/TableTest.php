<?php

use PHPUnit\Framework\TestCase;
use W1020\HTML\Table;

class TableTest extends TestCase
{
    public function testTable()
    {
        $table = new Table();
        //echo $table->setData([[1, 2], [3, 4]])->html();
        $this->assertEquals("<table class=''></table>", $table->html());
        $this->assertEquals(
            "<table class=''><tr><td>1</td><td>2</td></tr><tr><td>3</td><td>4</td></tr></table>",
            $table->setData([[1, 2], [3, 4]])->html()
        );

    }

}