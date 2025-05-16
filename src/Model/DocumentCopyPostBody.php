<?php

namespace Webhubworks\WeclappApiCore\Model;

class DocumentCopyPostBody extends \ArrayObject
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
     * @var string
     */
    protected $entityId;

    /**
     * @var string
     */
    protected $entityName;

    /**
     * @var string
     */
    protected $sourceDocumentId;

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }

    public function getSourceDocumentId(): string
    {
        return $this->sourceDocumentId;
    }

    public function setSourceDocumentId(string $sourceDocumentId): self
    {
        $this->initialized['sourceDocumentId'] = true;
        $this->sourceDocumentId = $sourceDocumentId;

        return $this;
    }
}
