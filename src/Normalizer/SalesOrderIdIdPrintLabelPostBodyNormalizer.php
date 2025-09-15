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
class SalesOrderIdIdPrintLabelPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdPrintLabelPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdPrintLabelPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdPrintLabelPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('itemLabelQuantityPrintSetting', $data) && $data['itemLabelQuantityPrintSetting'] !== null) {
            $object->setItemLabelQuantityPrintSetting($data['itemLabelQuantityPrintSetting']);
            unset($data['itemLabelQuantityPrintSetting']);
        }
        elseif (\array_key_exists('itemLabelQuantityPrintSetting', $data) && $data['itemLabelQuantityPrintSetting'] === null) {
            $object->setItemLabelQuantityPrintSetting(null);
        }
        if (\array_key_exists('salesOrderItemIds', $data) && $data['salesOrderItemIds'] !== null) {
            $values = [];
            foreach ($data['salesOrderItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setSalesOrderItemIds($values);
            unset($data['salesOrderItemIds']);
        }
        elseif (\array_key_exists('salesOrderItemIds', $data) && $data['salesOrderItemIds'] === null) {
            $object->setSalesOrderItemIds(null);
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
        $dataArray['itemLabelQuantityPrintSetting'] = $data->getItemLabelQuantityPrintSetting();
        if ($data->isInitialized('salesOrderItemIds') && null !== $data->getSalesOrderItemIds()) {
            $values = [];
            foreach ($data->getSalesOrderItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['salesOrderItemIds'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdPrintLabelPostBody::class => false];
    }
}