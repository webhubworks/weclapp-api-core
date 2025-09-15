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
     * 
     *
     * @var list<string>|null
     */
    protected $filename;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getFilename(): ?array
    {
        return $this->filename;
    }
    /**
     * 
     *
     * @param list<string>|null $filename
     *
     * @return self
     */
    public function setFilename(?array $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
}