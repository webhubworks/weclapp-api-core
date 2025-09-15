<?php

namespace Webhubworks\WeclappApiCore\Model;

class DropshippingDeliveryNoteFormTextBlockData extends \ArrayObject
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
     * @var string|null
     */
    protected $recordComment;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordFreeText;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordOpening;
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordComment(): ?string
    {
        return $this->recordComment;
    }
    /**
     * 
     *
     * @param string|null $recordComment
     *
     * @return self
     */
    public function setRecordComment(?string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordFreeText(): ?string
    {
        return $this->recordFreeText;
    }
    /**
     * 
     *
     * @param string|null $recordFreeText
     *
     * @return self
     */
    public function setRecordFreeText(?string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordOpening(): ?string
    {
        return $this->recordOpening;
    }
    /**
     * 
     *
     * @param string|null $recordOpening
     *
     * @return self
     */
    public function setRecordOpening(?string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;
        return $this;
    }
}