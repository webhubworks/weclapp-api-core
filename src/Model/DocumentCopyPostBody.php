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
     * 
     *
     * @var string|null
     */
    protected $entityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceDocumentId;
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityName(): ?string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceDocumentId(): ?string
    {
        return $this->sourceDocumentId;
    }
    /**
     * 
     *
     * @param string|null $sourceDocumentId
     *
     * @return self
     */
    public function setSourceDocumentId(?string $sourceDocumentId): self
    {
        $this->initialized['sourceDocumentId'] = true;
        $this->sourceDocumentId = $sourceDocumentId;
        return $this;
    }
}