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

class SalesOrderIdIdCreateDropshippingPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('orderItemIds', $data) && $data['orderItemIds'] !== null) {
            $values = [];
            foreach ($data['orderItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setOrderItemIds($values);
            unset($data['orderItemIds']);
        } elseif (\array_key_exists('orderItemIds', $data) && $data['orderItemIds'] === null) {
            $object->setOrderItemIds(null);
        }
        if (\array_key_exists('supplierId', $data) && $data['supplierId'] !== null) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        } elseif (\array_key_exists('supplierId', $data) && $data['supplierId'] === null) {
            $object->setSupplierId(null);
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
        if ($data->isInitialized('orderItemIds') && $data->getOrderItemIds() !== null) {
            $values = [];
            foreach ($data->getOrderItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['orderItemIds'] = $values;
        }
        $dataArray['supplierId'] = $data->getSupplierId();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody::class => false];
    }
}
