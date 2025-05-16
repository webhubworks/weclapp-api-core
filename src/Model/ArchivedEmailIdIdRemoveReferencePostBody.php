<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArchivedEmailIdIdRemoveReferencePostBody extends \ArrayObject
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
    protected $entityId;

    /**
     * @var string|null
     */
    protected $entityName;

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }
}
