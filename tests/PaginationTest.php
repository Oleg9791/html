<?php

use PHPUnit\Framework\TestCase;
use W1020\HTML\Pagination;

class PaginationTest extends TestCase
{
    public function testPg()
    {
        $pg = new Pagination();
        $html = '<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="?page=1">&laquo;</a>
    </li>    <li class="page-item">
      <a class="page-link" href="?page=0">&raquo;</a>
    </li>
  </ul>
</nav>';
        $this->assertEquals($html, $pg->html());

        $html = <<<HTML
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="?page=1">&laquo;</a>
    </li><li class='page-item'><a class='page-link' href='?page=1'>1</a></li><li class='page-item'><a class='page-link' href='?page=2'>2</a></li><li class='page-item'><a class='page-link' href='?page=3'>3</a></li><li class='page-item'><a class='page-link' href='?page=4'>4</a></li>    <li class="page-item">
      <a class="page-link" href="?page=1">&raquo;</a>
    </li>
  </ul>
</nav>
HTML;
        $this->assertEquals($html, $pg->setPageCount(4)->html());

    }
}