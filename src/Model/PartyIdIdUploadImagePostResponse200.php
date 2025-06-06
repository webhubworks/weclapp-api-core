<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyIdIdUploadImagePostResponse200 extends \ArrayObject
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
     * @var SuccessResponse|null
     */
    protected $result;

    public function getResult(): ?SuccessResponse
    {
        return $this->result;
    }

    public function setResult(?SuccessResponse $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
