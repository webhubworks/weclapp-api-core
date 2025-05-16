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
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $sourceDocumentId;

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    public function getSourceDocumentId(): ?string
    {
        return $this->sourceDocumentId;
    }

    public function setSourceDocumentId(?string $sourceDocumentId): self
    {
        $this->initialized['sourceDocumentId'] = true;
        $this->sourceDocumentId = $sourceDocumentId;

        return $this;
    }
}
