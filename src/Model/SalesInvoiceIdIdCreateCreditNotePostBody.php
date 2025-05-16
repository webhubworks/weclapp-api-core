<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdCreateCreditNotePostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $itemIds;

    /**
     * @return list<string>|null
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param  list<string>|null  $itemIds
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->initialized['itemIds'] = true;
        $this->itemIds = $itemIds;

        return $this;
    }
}
