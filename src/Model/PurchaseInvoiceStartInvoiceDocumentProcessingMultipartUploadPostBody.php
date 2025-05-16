<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostBody extends \ArrayObject
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
    protected $filename;

    /**
     * @return list<string>
     */
    public function getFilename(): array
    {
        return $this->filename;
    }

    /**
     * @param  list<string>  $filename
     */
    public function setFilename(array $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;

        return $this;
    }
}
