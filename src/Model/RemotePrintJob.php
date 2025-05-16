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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $documentId;
    /**
     * 
     *
     * @var string
     */
    protected $printStatus;
    /**
     * 
     *
     * @var string
     */
    protected $printerName;
    /**
     * 
     *
     * @var int
     */
    protected $quantity;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
    /**
     * 
     *
     * @var string
     */
    protected $weclappOsHardwareId;
    /**
     * 
     *
     * @var string
     */
    protected $weclappOsId;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentId(): string
    {
        return $this->documentId;
    }
    /**
     * 
     *
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId(string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrintStatus(): string
    {
        return $this->printStatus;
    }
    /**
     * 
     *
     * @param string $printStatus
     *
     * @return self
     */
    public function setPrintStatus(string $printStatus): self
    {
        $this->initialized['printStatus'] = true;
        $this->printStatus = $printStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrinterName(): string
    {
        return $this->printerName;
    }
    /**
     * 
     *
     * @param string $printerName
     *
     * @return self
     */
    public function setPrinterName(string $printerName): self
    {
        $this->initialized['printerName'] = true;
        $this->printerName = $printerName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWeclappOsHardwareId(): string
    {
        return $this->weclappOsHardwareId;
    }
    /**
     * 
     *
     * @param string $weclappOsHardwareId
     *
     * @return self
     */
    public function setWeclappOsHardwareId(string $weclappOsHardwareId): self
    {
        $this->initialized['weclappOsHardwareId'] = true;
        $this->weclappOsHardwareId = $weclappOsHardwareId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWeclappOsId(): string
    {
        return $this->weclappOsId;
    }
    /**
     * 
     *
     * @param string $weclappOsId
     *
     * @return self
     */
    public function setWeclappOsId(string $weclappOsId): self
    {
        $this->initialized['weclappOsId'] = true;
        $this->weclappOsId = $weclappOsId;
        return $this;
    }
}