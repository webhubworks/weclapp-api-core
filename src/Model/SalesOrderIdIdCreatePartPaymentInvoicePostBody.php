<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreatePartPaymentInvoicePostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}
