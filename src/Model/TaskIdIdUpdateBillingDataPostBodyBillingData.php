<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskIdIdUpdateBillingDataPostBodyBillingData extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentTaskId;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceQuotaTreatmentType;
    /**
     * 
     *
     * @var EntityReference|null
     */
    protected $taskOwner;
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentTaskId(): ?string
    {
        return $this->parentTaskId;
    }
    /**
     * 
     *
     * @param string|null $parentTaskId
     *
     * @return self
     */
    public function setParentTaskId(?string $parentTaskId): self
    {
        $this->initialized['parentTaskId'] = true;
        $this->parentTaskId = $parentTaskId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceQuotaTreatmentType(): ?string
    {
        return $this->serviceQuotaTreatmentType;
    }
    /**
     * 
     *
     * @param string|null $serviceQuotaTreatmentType
     *
     * @return self
     */
    public function setServiceQuotaTreatmentType(?string $serviceQuotaTreatmentType): self
    {
        $this->initialized['serviceQuotaTreatmentType'] = true;
        $this->serviceQuotaTreatmentType = $serviceQuotaTreatmentType;
        return $this;
    }
    /**
     * 
     *
     * @return EntityReference|null
     */
    public function getTaskOwner(): ?EntityReference
    {
        return $this->taskOwner;
    }
    /**
     * 
     *
     * @param EntityReference|null $taskOwner
     *
     * @return self
     */
    public function setTaskOwner(?EntityReference $taskOwner): self
    {
        $this->initialized['taskOwner'] = true;
        $this->taskOwner = $taskOwner;
        return $this;
    }
}