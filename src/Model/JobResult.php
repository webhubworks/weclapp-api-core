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
     * @deprecated
     *
     * @var list<string>|null
     */
    protected $errors;

    /**
     * @var JobProgress|null
     */
    protected $progress;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @deprecated
     *
     * @return list<string>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param  list<string>|null  $errors
     *
     * @deprecated
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function getProgress(): ?JobProgress
    {
        return $this->progress;
    }

    public function setProgress(?JobProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
