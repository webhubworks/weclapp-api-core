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

class PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParametersNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('deliveryNoteNumber', $data)) {
            $object->setDeliveryNoteNumber($data['deliveryNoteNumber']);
            unset($data['deliveryNoteNumber']);
        }
        if (\array_key_exists('shippingDate', $data)) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
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
        if ($data->isInitialized('deliveryDate') && $data->getDeliveryDate() !== null) {
            $dataArray['deliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('deliveryNoteNumber') && $data->getDeliveryNoteNumber() !== null) {
            $dataArray['deliveryNoteNumber'] = $data->getDeliveryNoteNumber();
        }
        if ($data->isInitialized('shippingDate') && $data->getShippingDate() !== null) {
            $dataArray['shippingDate'] = $data->getShippingDate();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class => false];
    }
}
