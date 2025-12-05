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
class ParcelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Parcel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Parcel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Parcel();
        if (\array_key_exists('dhlGoGreenPlusService', $data) && \is_int($data['dhlGoGreenPlusService'])) {
            $data['dhlGoGreenPlusService'] = (bool) $data['dhlGoGreenPlusService'];
        }
        if (\array_key_exists('dhlPostalDeliveredDutyPaidService', $data) && \is_int($data['dhlPostalDeliveredDutyPaidService'])) {
            $data['dhlPostalDeliveredDutyPaidService'] = (bool) $data['dhlPostalDeliveredDutyPaidService'];
        }
        if (\array_key_exists('dhlPremiumInternationalService', $data) && \is_int($data['dhlPremiumInternationalService'])) {
            $data['dhlPremiumInternationalService'] = (bool) $data['dhlPremiumInternationalService'];
        }
        if (\array_key_exists('saturdayDelivery', $data) && \is_int($data['saturdayDelivery'])) {
            $data['saturdayDelivery'] = (bool) $data['saturdayDelivery'];
        }
        if (\array_key_exists('useDeliveryDateAsPreferredDeliveryDate', $data) && \is_int($data['useDeliveryDateAsPreferredDeliveryDate'])) {
            $data['useDeliveryDateAsPreferredDeliveryDate'] = (bool) $data['useDeliveryDateAsPreferredDeliveryDate'];
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('declaredValueAmount', $data) && $data['declaredValueAmount'] !== null) {
            $object->setDeclaredValueAmount($data['declaredValueAmount']);
            unset($data['declaredValueAmount']);
        }
        elseif (\array_key_exists('declaredValueAmount', $data) && $data['declaredValueAmount'] === null) {
            $object->setDeclaredValueAmount(null);
        }
        if (\array_key_exists('declaredValueCurrencyId', $data) && $data['declaredValueCurrencyId'] !== null) {
            $object->setDeclaredValueCurrencyId($data['declaredValueCurrencyId']);
            unset($data['declaredValueCurrencyId']);
        }
        elseif (\array_key_exists('declaredValueCurrencyId', $data) && $data['declaredValueCurrencyId'] === null) {
            $object->setDeclaredValueCurrencyId(null);
        }
        if (\array_key_exists('dhlGoGreenPlusService', $data) && $data['dhlGoGreenPlusService'] !== null) {
            $object->setDhlGoGreenPlusService($data['dhlGoGreenPlusService']);
            unset($data['dhlGoGreenPlusService']);
        }
        elseif (\array_key_exists('dhlGoGreenPlusService', $data) && $data['dhlGoGreenPlusService'] === null) {
            $object->setDhlGoGreenPlusService(null);
        }
        if (\array_key_exists('dhlPostalDeliveredDutyPaidService', $data) && $data['dhlPostalDeliveredDutyPaidService'] !== null) {
            $object->setDhlPostalDeliveredDutyPaidService($data['dhlPostalDeliveredDutyPaidService']);
            unset($data['dhlPostalDeliveredDutyPaidService']);
        }
        elseif (\array_key_exists('dhlPostalDeliveredDutyPaidService', $data) && $data['dhlPostalDeliveredDutyPaidService'] === null) {
            $object->setDhlPostalDeliveredDutyPaidService(null);
        }
        if (\array_key_exists('dhlPremiumInternationalService', $data) && $data['dhlPremiumInternationalService'] !== null) {
            $object->setDhlPremiumInternationalService($data['dhlPremiumInternationalService']);
            unset($data['dhlPremiumInternationalService']);
        }
        elseif (\array_key_exists('dhlPremiumInternationalService', $data) && $data['dhlPremiumInternationalService'] === null) {
            $object->setDhlPremiumInternationalService(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('reference', $data) && $data['reference'] !== null) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        elseif (\array_key_exists('reference', $data) && $data['reference'] === null) {
            $object->setReference(null);
        }
        if (\array_key_exists('saturdayDelivery', $data) && $data['saturdayDelivery'] !== null) {
            $object->setSaturdayDelivery($data['saturdayDelivery']);
            unset($data['saturdayDelivery']);
        }
        elseif (\array_key_exists('saturdayDelivery', $data) && $data['saturdayDelivery'] === null) {
            $object->setSaturdayDelivery(null);
        }
        if (\array_key_exists('shippingCarrierAddition', $data) && $data['shippingCarrierAddition'] !== null) {
            $object->setShippingCarrierAddition($data['shippingCarrierAddition']);
            unset($data['shippingCarrierAddition']);
        }
        elseif (\array_key_exists('shippingCarrierAddition', $data) && $data['shippingCarrierAddition'] === null) {
            $object->setShippingCarrierAddition(null);
        }
        if (\array_key_exists('shippingCarrierId', $data) && $data['shippingCarrierId'] !== null) {
            $object->setShippingCarrierId($data['shippingCarrierId']);
            unset($data['shippingCarrierId']);
        }
        elseif (\array_key_exists('shippingCarrierId', $data) && $data['shippingCarrierId'] === null) {
            $object->setShippingCarrierId(null);
        }
        if (\array_key_exists('shippingLabelsCount', $data) && $data['shippingLabelsCount'] !== null) {
            $object->setShippingLabelsCount($data['shippingLabelsCount']);
            unset($data['shippingLabelsCount']);
        }
        elseif (\array_key_exists('shippingLabelsCount', $data) && $data['shippingLabelsCount'] === null) {
            $object->setShippingLabelsCount(null);
        }
        if (\array_key_exists('trackingId', $data) && $data['trackingId'] !== null) {
            $object->setTrackingId($data['trackingId']);
            unset($data['trackingId']);
        }
        elseif (\array_key_exists('trackingId', $data) && $data['trackingId'] === null) {
            $object->setTrackingId(null);
        }
        if (\array_key_exists('trackingUrl', $data) && $data['trackingUrl'] !== null) {
            $object->setTrackingUrl($data['trackingUrl']);
            unset($data['trackingUrl']);
        }
        elseif (\array_key_exists('trackingUrl', $data) && $data['trackingUrl'] === null) {
            $object->setTrackingUrl(null);
        }
        if (\array_key_exists('useDeliveryDateAsPreferredDeliveryDate', $data) && $data['useDeliveryDateAsPreferredDeliveryDate'] !== null) {
            $object->setUseDeliveryDateAsPreferredDeliveryDate($data['useDeliveryDateAsPreferredDeliveryDate']);
            unset($data['useDeliveryDateAsPreferredDeliveryDate']);
        }
        elseif (\array_key_exists('useDeliveryDateAsPreferredDeliveryDate', $data) && $data['useDeliveryDateAsPreferredDeliveryDate'] === null) {
            $object->setUseDeliveryDateAsPreferredDeliveryDate(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('declaredValueAmount') && null !== $data->getDeclaredValueAmount()) {
            $dataArray['declaredValueAmount'] = $data->getDeclaredValueAmount();
        }
        if ($data->isInitialized('declaredValueCurrencyId') && null !== $data->getDeclaredValueCurrencyId()) {
            $dataArray['declaredValueCurrencyId'] = $data->getDeclaredValueCurrencyId();
        }
        if ($data->isInitialized('dhlGoGreenPlusService') && null !== $data->getDhlGoGreenPlusService()) {
            $dataArray['dhlGoGreenPlusService'] = $data->getDhlGoGreenPlusService();
        }
        if ($data->isInitialized('dhlPostalDeliveredDutyPaidService') && null !== $data->getDhlPostalDeliveredDutyPaidService()) {
            $dataArray['dhlPostalDeliveredDutyPaidService'] = $data->getDhlPostalDeliveredDutyPaidService();
        }
        if ($data->isInitialized('dhlPremiumInternationalService') && null !== $data->getDhlPremiumInternationalService()) {
            $dataArray['dhlPremiumInternationalService'] = $data->getDhlPremiumInternationalService();
        }
        if ($data->isInitialized('height') && null !== $data->getHeight()) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('length') && null !== $data->getLength()) {
            $dataArray['length'] = $data->getLength();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $data->getReference();
        }
        if ($data->isInitialized('saturdayDelivery') && null !== $data->getSaturdayDelivery()) {
            $dataArray['saturdayDelivery'] = $data->getSaturdayDelivery();
        }
        if ($data->isInitialized('shippingCarrierAddition') && null !== $data->getShippingCarrierAddition()) {
            $dataArray['shippingCarrierAddition'] = $data->getShippingCarrierAddition();
        }
        if ($data->isInitialized('shippingCarrierId') && null !== $data->getShippingCarrierId()) {
            $dataArray['shippingCarrierId'] = $data->getShippingCarrierId();
        }
        if ($data->isInitialized('shippingLabelsCount') && null !== $data->getShippingLabelsCount()) {
            $dataArray['shippingLabelsCount'] = $data->getShippingLabelsCount();
        }
        if ($data->isInitialized('trackingId') && null !== $data->getTrackingId()) {
            $dataArray['trackingId'] = $data->getTrackingId();
        }
        if ($data->isInitialized('trackingUrl') && null !== $data->getTrackingUrl()) {
            $dataArray['trackingUrl'] = $data->getTrackingUrl();
        }
        if ($data->isInitialized('useDeliveryDateAsPreferredDeliveryDate') && null !== $data->getUseDeliveryDateAsPreferredDeliveryDate()) {
            $dataArray['useDeliveryDateAsPreferredDeliveryDate'] = $data->getUseDeliveryDateAsPreferredDeliveryDate();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('width') && null !== $data->getWidth()) {
            $dataArray['width'] = $data->getWidth();
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
        return [\Webhubworks\WeclappApiCore\Model\Parcel::class => false];
    }
}