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
class PurchaseOrderIdIdProcessDropshippingPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('processPurchaseOrderItems', $data) && $data['processPurchaseOrderItems'] !== null) {
            $values = [];
            foreach ($data['processPurchaseOrderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem::class, 'json', $context);
            }
            $object->setProcessPurchaseOrderItems($values);
            unset($data['processPurchaseOrderItems']);
        }
        elseif (\array_key_exists('processPurchaseOrderItems', $data) && $data['processPurchaseOrderItems'] === null) {
            $object->setProcessPurchaseOrderItems(null);
        }
        if (\array_key_exists('shipmentParameters', $data) && $data['shipmentParameters'] !== null) {
            $object->setShipmentParameters($this->denormalizer->denormalize($data['shipmentParameters'], \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class, 'json', $context));
            unset($data['shipmentParameters']);
        }
        elseif (\array_key_exists('shipmentParameters', $data) && $data['shipmentParameters'] === null) {
            $object->setShipmentParameters(null);
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
        if ($data->isInitialized('processPurchaseOrderItems') && null !== $data->getProcessPurchaseOrderItems()) {
            $values = [];
            foreach ($data->getProcessPurchaseOrderItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['processPurchaseOrderItems'] = $values;
        }
        if ($data->isInitialized('shipmentParameters') && null !== $data->getShipmentParameters()) {
            $dataArray['shipmentParameters'] = $this->normalizer->normalize($data->getShipmentParameters(), 'json', $context);
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody::class => false];
    }
}