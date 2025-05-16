<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleIdIdCreateLabelPdfPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int|null
     */
    protected $printCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $startPosition;
    /**
     * 
     *
     * @return int|null
     */
    public function getPrintCount(): ?int
    {
        return $this->printCount;
    }
    /**
     * 
     *
     * @param int|null $printCount
     *
     * @return self
     */
    public function setPrintCount(?int $printCount): self
    {
        $this->initialized['printCount'] = true;
        $this->printCount = $printCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartPosition(): ?int
    {
        return $this->startPosition;
    }
    /**
     * 
     *
     * @param int|null $startPosition
     *
     * @return self
     */
    public function setStartPosition(?int $startPosition): self
    {
        $this->initialized['startPosition'] = true;
        $this->startPosition = $startPosition;
        return $this;
    }
}