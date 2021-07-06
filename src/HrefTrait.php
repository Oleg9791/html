<?php


namespace W1020\HTML;


trait HrefTrait
{
    protected string $href = "";

    /**
     * @param string $href
     * @return $this
     */
    public function setHref(string $href): static
    {
        $this->href = $href;
        return $this;
    }
}