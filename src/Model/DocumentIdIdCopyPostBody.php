<?php

namespace Webhubworks\WeclappApiCore\Model;

class DocumentIdIdCopyPostBody extends \ArrayObject
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
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $sourceDocumentId;
    /**
     * 
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceDocumentId(): string
    {
        return $this->sourceDocumentId;
    }
    /**
     * 
     *
     * @param string $sourceDocumentId
     *
     * @return self
     */
    public function setSourceDocumentId(string $sourceDocumentId): self
    {
        $this->initialized['sourceDocumentId'] = true;
        $this->sourceDocumentId = $sourceDocumentId;
        return $this;
    }
}