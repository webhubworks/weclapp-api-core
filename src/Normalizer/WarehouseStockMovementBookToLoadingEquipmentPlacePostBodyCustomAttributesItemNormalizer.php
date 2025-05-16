<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem();
        if (\array_key_exists('booleanValue', $data) && \is_int($data['booleanValue'])) {
            $data['booleanValue'] = (bool) $data['booleanValue'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attributeDefinitionId', $data)) {
            $object->setAttributeDefinitionId($data['attributeDefinitionId']);
            unset($data['attributeDefinitionId']);
        }
        if (\array_key_exists('booleanValue', $data)) {
            $object->setBooleanValue($data['booleanValue']);
            unset($data['booleanValue']);
        }
        if (\array_key_exists('dateValue', $data)) {
            $object->setDateValue($data['dateValue']);
            unset($data['dateValue']);
        }
        if (\array_key_exists('entityId', $data)) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        if (\array_key_exists('entityReferences', $data)) {
            $values = [];
            foreach ($data['entityReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values);
            unset($data['entityReferences']);
        }
        if (\array_key_exists('numberValue', $data)) {
            $object->setNumberValue($data['numberValue']);
            unset($data['numberValue']);
        }
        if (\array_key_exists('selectedValueId', $data)) {
            $object->setSelectedValueId($data['selectedValueId']);
            unset($data['selectedValueId']);
        }
        if (\array_key_exists('selectedValues', $data)) {
            $values_1 = [];
            foreach ($data['selectedValues'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSelectedValues($values_1);
            unset($data['selectedValues']);
        }
        if (\array_key_exists('stringValue', $data)) {
            $object->setStringValue($data['stringValue']);
            unset($data['stringValue']);
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
        if ($data->isInitialized('attributeDefinitionId') && null !== $data->getAttributeDefinitionId()) {
            $dataArray['attributeDefinitionId'] = $data->getAttributeDefinitionId();
        }
        if ($data->isInitialized('booleanValue') && null !== $data->getBooleanValue()) {
            $dataArray['booleanValue'] = $data->getBooleanValue();
        }
        if ($data->isInitialized('dateValue') && null !== $data->getDateValue()) {
            $dataArray['dateValue'] = $data->getDateValue();
        }
        if ($data->isInitialized('entityId') && null !== $data->getEntityId()) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityReferences') && null !== $data->getEntityReferences()) {
            $values = [];
            foreach ($data->getEntityReferences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['entityReferences'] = $values;
        }
        if ($data->isInitialized('numberValue') && null !== $data->getNumberValue()) {
            $dataArray['numberValue'] = $data->getNumberValue();
        }
        if ($data->isInitialized('selectedValueId') && null !== $data->getSelectedValueId()) {
            $dataArray['selectedValueId'] = $data->getSelectedValueId();
        }
        if ($data->isInitialized('selectedValues') && null !== $data->getSelectedValues()) {
            $values_1 = [];
            foreach ($data->getSelectedValues() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['selectedValues'] = $values_1;
        }
        if ($data->isInitialized('stringValue') && null !== $data->getStringValue()) {
            $dataArray['stringValue'] = $data->getStringValue();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class => false];
    }
}