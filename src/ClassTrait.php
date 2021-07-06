<?php


namespace W1020\HTML;


trait ClassTrait
{
    protected string $class = "";

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

}