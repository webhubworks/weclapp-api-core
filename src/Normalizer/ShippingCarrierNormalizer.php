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
class ShippingCarrierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ShippingCarrier::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ShippingCarrier::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ShippingCarrier();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('ecommerceShippingCarrier', $data) && $data['ecommerceShippingCarrier'] !== null) {
            $object->setEcommerceShippingCarrier($data['ecommerceShippingCarrier']);
            unset($data['ecommerceShippingCarrier']);
        }
        elseif (\array_key_exists('ecommerceShippingCarrier', $data) && $data['ecommerceShippingCarrier'] === null) {
            $object->setEcommerceShippingCarrier(null);
        }
        if (\array_key_exists('internalShippingCarrier', $data) && $data['internalShippingCarrier'] !== null) {
            $object->setInternalShippingCarrier($data['internalShippingCarrier']);
            unset($data['internalShippingCarrier']);
        }
        elseif (\array_key_exists('internalShippingCarrier', $data) && $data['internalShippingCarrier'] === null) {
            $object->setInternalShippingCarrier(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('shippingServiceProviderType', $data) && $data['shippingServiceProviderType'] !== null) {
            $object->setShippingServiceProviderType($data['shippingServiceProviderType']);
            unset($data['shippingServiceProviderType']);
        }
        elseif (\array_key_exists('shippingServiceProviderType', $data) && $data['shippingServiceProviderType'] === null) {
            $object->setShippingServiceProviderType(null);
        }
        if (\array_key_exists('trackingUrl', $data) && $data['trackingUrl'] !== null) {
            $object->setTrackingUrl($data['trackingUrl']);
            unset($data['trackingUrl']);
        }
        elseif (\array_key_exists('trackingUrl', $data) && $data['trackingUrl'] === null) {
            $object->setTrackingUrl(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('ecommerceShippingCarrier') && null !== $data->getEcommerceShippingCarrier()) {
            $dataArray['ecommerceShippingCarrier'] = $data->getEcommerceShippingCarrier();
        }
        if ($data->isInitialized('internalShippingCarrier') && null !== $data->getInternalShippingCarrier()) {
            $dataArray['internalShippingCarrier'] = $data->getInternalShippingCarrier();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('shippingServiceProviderType') && null !== $data->getShippingServiceProviderType()) {
            $dataArray['shippingServiceProviderType'] = $data->getShippingServiceProviderType();
        }
        if ($data->isInitialized('trackingUrl') && null !== $data->getTrackingUrl()) {
            $dataArray['trackingUrl'] = $data->getTrackingUrl();
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
        return [\Webhubworks\WeclappApiCore\Model\ShippingCarrier::class => false];
    }
}