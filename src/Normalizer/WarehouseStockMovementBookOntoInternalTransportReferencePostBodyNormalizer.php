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

class WarehouseStockMovementBookOntoInternalTransportReferencePostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody;
        if (\array_key_exists('bookFromLoadingEquipmentPlace', $data) && \is_int($data['bookFromLoadingEquipmentPlace'])) {
            $data['bookFromLoadingEquipmentPlace'] = (bool) $data['bookFromLoadingEquipmentPlace'];
        }
        if (\array_key_exists('bookLoadingEquipmentOnDissolveOfPreferred', $data) && \is_int($data['bookLoadingEquipmentOnDissolveOfPreferred'])) {
            $data['bookLoadingEquipmentOnDissolveOfPreferred'] = (bool) $data['bookLoadingEquipmentOnDissolveOfPreferred'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] !== null) {
            $object->setBaseArticleQuantity($data['baseArticleQuantity']);
            unset($data['baseArticleQuantity']);
        } elseif (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] === null) {
            $object->setBaseArticleQuantity(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        } elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('bookFromLoadingEquipmentPlace', $data) && $data['bookFromLoadingEquipmentPlace'] !== null) {
            $object->setBookFromLoadingEquipmentPlace($data['bookFromLoadingEquipmentPlace']);
            unset($data['bookFromLoadingEquipmentPlace']);
        } elseif (\array_key_exists('bookFromLoadingEquipmentPlace', $data) && $data['bookFromLoadingEquipmentPlace'] === null) {
            $object->setBookFromLoadingEquipmentPlace(null);
        }
        if (\array_key_exists('bookLoadingEquipmentOnDissolveOfPreferred', $data) && $data['bookLoadingEquipmentOnDissolveOfPreferred'] !== null) {
            $object->setBookLoadingEquipmentOnDissolveOfPreferred($data['bookLoadingEquipmentOnDissolveOfPreferred']);
            unset($data['bookLoadingEquipmentOnDissolveOfPreferred']);
        } elseif (\array_key_exists('bookLoadingEquipmentOnDissolveOfPreferred', $data) && $data['bookLoadingEquipmentOnDissolveOfPreferred'] === null) {
            $object->setBookLoadingEquipmentOnDissolveOfPreferred(null);
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        } elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('movementNote', $data) && $data['movementNote'] !== null) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        } elseif (\array_key_exists('movementNote', $data) && $data['movementNote'] === null) {
            $object->setMovementNote(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values_1 = [];
            foreach ($data['serialNumbers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSerialNumbers($values_1);
            unset($data['serialNumbers']);
        } elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] !== null) {
            $object->setSourceInternalTransportReferenceId($data['sourceInternalTransportReferenceId']);
            unset($data['sourceInternalTransportReferenceId']);
        } elseif (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] === null) {
            $object->setSourceInternalTransportReferenceId(null);
        }
        if (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] !== null) {
            $object->setSourceStoragePlaceId($data['sourceStoragePlaceId']);
            unset($data['sourceStoragePlaceId']);
        } elseif (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] === null) {
            $object->setSourceStoragePlaceId(null);
        }
        if (\array_key_exists('targetInternalTransportReferenceId', $data) && $data['targetInternalTransportReferenceId'] !== null) {
            $object->setTargetInternalTransportReferenceId($data['targetInternalTransportReferenceId']);
            unset($data['targetInternalTransportReferenceId']);
        } elseif (\array_key_exists('targetInternalTransportReferenceId', $data) && $data['targetInternalTransportReferenceId'] === null) {
            $object->setTargetInternalTransportReferenceId(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['articleId'] = $data->getArticleId();
        $dataArray['baseArticleQuantity'] = $data->getBaseArticleQuantity();
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('bookFromLoadingEquipmentPlace') && $data->getBookFromLoadingEquipmentPlace() !== null) {
            $dataArray['bookFromLoadingEquipmentPlace'] = $data->getBookFromLoadingEquipmentPlace();
        }
        if ($data->isInitialized('bookLoadingEquipmentOnDissolveOfPreferred') && $data->getBookLoadingEquipmentOnDissolveOfPreferred() !== null) {
            $dataArray['bookLoadingEquipmentOnDissolveOfPreferred'] = $data->getBookLoadingEquipmentOnDissolveOfPreferred();
        }
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && $data->getLoadingEquipmentArticleId() !== null) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && $data->getLoadingEquipmentIdentifierId() !== null) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('movementNote') && $data->getMovementNote() !== null) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        if ($data->isInitialized('serialNumbers') && $data->getSerialNumbers() !== null) {
            $values_1 = [];
            foreach ($data->getSerialNumbers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['serialNumbers'] = $values_1;
        }
        if ($data->isInitialized('sourceInternalTransportReferenceId') && $data->getSourceInternalTransportReferenceId() !== null) {
            $dataArray['sourceInternalTransportReferenceId'] = $data->getSourceInternalTransportReferenceId();
        }
        if ($data->isInitialized('sourceStoragePlaceId') && $data->getSourceStoragePlaceId() !== null) {
            $dataArray['sourceStoragePlaceId'] = $data->getSourceStoragePlaceId();
        }
        if ($data->isInitialized('targetInternalTransportReferenceId') && $data->getTargetInternalTransportReferenceId() !== null) {
            $dataArray['targetInternalTransportReferenceId'] = $data->getTargetInternalTransportReferenceId();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class => false];
    }
}
