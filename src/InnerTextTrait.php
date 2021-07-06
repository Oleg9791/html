<?php


namespace W1020\HTML;


trait InnerTextTrait
{
    protected string $innerText = "";

    /**
     * @param string $innerText
     * @return $this
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }
}