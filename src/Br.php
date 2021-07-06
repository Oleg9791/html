<?php


namespace W1020\HTML;


class Br extends AbstractTag
{
    use ClassTrait;
    use StyleTrait;

    public function html(): string
    {
        return "<br class='{$this->class}' style='{$this->style}'>";
    }
}