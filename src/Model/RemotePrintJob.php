<?php

namespace Webhubworks\WeclappApiCore\Model;

class RemotePrintJob extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $printStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $printerName;
    /**
     * 
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $weclappOsHardwareId;
    /**
     * 
     *
     * @var string|null
     */
    protected $weclappOsId;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }
    /**
     * 
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrintStatus(): ?string
    {
        return $this->printStatus;
    }
    /**
     * 
     *
     * @param string|null $printStatus
     *
     * @return self
     */
    public function setPrintStatus(?string $printStatus): self
    {
        $this->initialized['printStatus'] = true;
        $this->printStatus = $printStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrinterName(): ?string
    {
        return $this->printerName;
    }
    /**
     * 
     *
     * @param string|null $printerName
     *
     * @return self
     */
    public function setPrinterName(?string $printerName): self
    {
        $this->initialized['printerName'] = true;
        $this->printerName = $printerName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeclappOsHardwareId(): ?string
    {
        return $this->weclappOsHardwareId;
    }
    /**
     * 
     *
     * @param string|null $weclappOsHardwareId
     *
     * @return self
     */
    public function setWeclappOsHardwareId(?string $weclappOsHardwareId): self
    {
        $this->initialized['weclappOsHardwareId'] = true;
        $this->weclappOsHardwareId = $weclappOsHardwareId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeclappOsId(): ?string
    {
        return $this->weclappOsId;
    }
    /**
     * 
     *
     * @param string|null $weclappOsId
     *
     * @return self
     */
    public function setWeclappOsId(?string $weclappOsId): self
    {
        $this->initialized['weclappOsId'] = true;
        $this->weclappOsId = $weclappOsId;
        return $this;
    }
}