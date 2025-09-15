<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdCreateCreditNoteOpenItemPostBody extends \ArrayObject
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
     * @var bool|null
     */
    protected $clearCreditNote;
    /**
     * 
     *
     * @return bool|null
     */
    public function getClearCreditNote(): ?bool
    {
        return $this->clearCreditNote;
    }
    /**
     * 
     *
     * @param bool|null $clearCreditNote
     *
     * @return self
     */
    public function setClearCreditNote(?bool $clearCreditNote): self
    {
        $this->initialized['clearCreditNote'] = true;
        $this->clearCreditNote = $clearCreditNote;
        return $this;
    }
}