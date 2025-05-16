<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionUpdateOrderPostBody extends \ArrayObject
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
    protected $entityType;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionUpdateOrderPostBodyOrderItem>
     */
    protected $order;
    /**
     * 
     *
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionUpdateOrderPostBodyOrderItem>
     */
    public function getOrder(): array
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionUpdateOrderPostBodyOrderItem> $order
     *
     * @return self
     */
    public function setOrder(array $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}