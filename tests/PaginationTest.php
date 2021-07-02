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
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
    </li>    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</nav>';
        $this->assertEquals($html, $pg->html());
    }
}