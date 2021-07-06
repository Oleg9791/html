<?php


namespace W1020\HTML;


class A extends AbstractTag
{
    use HrefTrait;
    use InnerTextTrait;
    use ClassTrait;
    use StyleTrait;

    /**
     * @return string
     */
    public function html(): string
    {
        return "<a href='{$this->href}' class='{$this->class}' style='{$this->style}'>$this->innerText</a>";
    }
}