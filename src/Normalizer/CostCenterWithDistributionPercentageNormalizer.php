<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;

class CostCenterWithDistributionPercentageNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        } elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
        }
        if (\array_key_exists('costCenterNumber', $data) && $data['costCenterNumber'] !== null) {
            $object->setCostCenterNumber($data['costCenterNumber']);
            unset($data['costCenterNumber']);
        } elseif (\array_key_exists('costCenterNumber', $data) && $data['costCenterNumber'] === null) {
            $object->setCostCenterNumber(null);
        }
        if (\array_key_exists('distributionPercentage', $data) && $data['distributionPercentage'] !== null) {
            $object->setDistributionPercentage($data['distributionPercentage']);
            unset($data['distributionPercentage']);
        } elseif (\array_key_exists('distributionPercentage', $data) && $data['distributionPercentage'] === null) {
            $object->setDistributionPercentage(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('costCenterNumber') && $data->getCostCenterNumber() !== null) {
            $dataArray['costCenterNumber'] = $data->getCostCenterNumber();
        }
        if ($data->isInitialized('distributionPercentage') && $data->getDistributionPercentage() !== null) {
            $dataArray['distributionPercentage'] = $data->getDistributionPercentage();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class => false];
    }
}
