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

class ProductionOrderWorkItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem;
        if (\array_key_exists('book', $data) && \is_int($data['book'])) {
            $data['book'] = (bool) $data['book'];
        }
        if (\array_key_exists('manualItem', $data) && \is_int($data['manualItem'])) {
            $data['manualItem'] = (bool) $data['manualItem'];
        }
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('book', $data) && $data['book'] !== null) {
            $object->setBook($data['book']);
            unset($data['book']);
        } elseif (\array_key_exists('book', $data) && $data['book'] === null) {
            $object->setBook(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('manualItem', $data) && $data['manualItem'] !== null) {
            $object->setManualItem($data['manualItem']);
            unset($data['manualItem']);
        } elseif (\array_key_exists('manualItem', $data) && $data['manualItem'] === null) {
            $object->setManualItem(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        } elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('shortDescription', $data) && $data['shortDescription'] !== null) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        } elseif (\array_key_exists('shortDescription', $data) && $data['shortDescription'] === null) {
            $object->setShortDescription(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] !== null) {
            $object->setTargetEndDate($data['targetEndDate']);
            unset($data['targetEndDate']);
        } elseif (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] === null) {
            $object->setTargetEndDate(null);
        }
        if (\array_key_exists('targetOrderTime', $data) && $data['targetOrderTime'] !== null) {
            $object->setTargetOrderTime($data['targetOrderTime']);
            unset($data['targetOrderTime']);
        } elseif (\array_key_exists('targetOrderTime', $data) && $data['targetOrderTime'] === null) {
            $object->setTargetOrderTime(null);
        }
        if (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] !== null) {
            $object->setTargetStartDate($data['targetStartDate']);
            unset($data['targetStartDate']);
        } elseif (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] === null) {
            $object->setTargetStartDate(null);
        }
        if (\array_key_exists('timeType', $data) && $data['timeType'] !== null) {
            $object->setTimeType($data['timeType']);
            unset($data['timeType']);
        } elseif (\array_key_exists('timeType', $data) && $data['timeType'] === null) {
            $object->setTimeType(null);
        }
        if (\array_key_exists('unitTime', $data) && $data['unitTime'] !== null) {
            $object->setUnitTime($data['unitTime']);
            unset($data['unitTime']);
        } elseif (\array_key_exists('unitTime', $data) && $data['unitTime'] === null) {
            $object->setUnitTime(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('book') && $data->getBook() !== null) {
            $dataArray['book'] = $data->getBook();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('manualItem') && $data->getManualItem() !== null) {
            $dataArray['manualItem'] = $data->getManualItem();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('shortDescription') && $data->getShortDescription() !== null) {
            $dataArray['shortDescription'] = $data->getShortDescription();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('targetEndDate') && $data->getTargetEndDate() !== null) {
            $dataArray['targetEndDate'] = $data->getTargetEndDate();
        }
        if ($data->isInitialized('targetOrderTime') && $data->getTargetOrderTime() !== null) {
            $dataArray['targetOrderTime'] = $data->getTargetOrderTime();
        }
        if ($data->isInitialized('targetStartDate') && $data->getTargetStartDate() !== null) {
            $dataArray['targetStartDate'] = $data->getTargetStartDate();
        }
        if ($data->isInitialized('timeType') && $data->getTimeType() !== null) {
            $dataArray['timeType'] = $data->getTimeType();
        }
        if ($data->isInitialized('unitTime') && $data->getUnitTime() !== null) {
            $dataArray['unitTime'] = $data->getUnitTime();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class => false];
    }
}
