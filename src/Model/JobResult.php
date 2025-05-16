<?php

namespace Webhubworks\WeclappApiCore\Model;

class JobResult extends \ArrayObject
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
     * @deprecated
     *
     * @var list<string>|null
     */
    protected $errors;
    /**
     * 
     *
     * @var JobProgress|null
     */
    protected $progress;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @deprecated
     *
     * @return list<string>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<string>|null $errors
     *
     * @deprecated
     *
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * 
     *
     * @return JobProgress|null
     */
    public function getProgress(): ?JobProgress
    {
        return $this->progress;
    }
    /**
     * 
     *
     * @param JobProgress|null $progress
     *
     * @return self
     */
    public function setProgress(?JobProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}