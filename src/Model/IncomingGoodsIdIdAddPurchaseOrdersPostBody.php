<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdAddPurchaseOrdersPostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $ids;

    /**
     * @return list<string>
     */
    public function getIds(): array
    {
        return $this->ids;
    }

    /**
     * @param  list<string>  $ids
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;

        return $this;
    }
}
