<?php


namespace W1020\HTML;


trait StyleTrait
{
    protected string $style = "";

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }
}