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
class OpenItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\OpenItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\OpenItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\OpenItem();
        if (\array_key_exists('cleared', $data) && \is_int($data['cleared'])) {
            $data['cleared'] = (bool) $data['cleared'];
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
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amountDiscount', $data) && $data['amountDiscount'] !== null) {
            $object->setAmountDiscount($data['amountDiscount']);
            unset($data['amountDiscount']);
        }
        elseif (\array_key_exists('amountDiscount', $data) && $data['amountDiscount'] === null) {
            $object->setAmountDiscount(null);
        }
        if (\array_key_exists('amountOpen', $data) && $data['amountOpen'] !== null) {
            $object->setAmountOpen($data['amountOpen']);
            unset($data['amountOpen']);
        }
        elseif (\array_key_exists('amountOpen', $data) && $data['amountOpen'] === null) {
            $object->setAmountOpen(null);
        }
        if (\array_key_exists('amountPaid', $data) && $data['amountPaid'] !== null) {
            $object->setAmountPaid($data['amountPaid']);
            unset($data['amountPaid']);
        }
        elseif (\array_key_exists('amountPaid', $data) && $data['amountPaid'] === null) {
            $object->setAmountPaid(null);
        }
        if (\array_key_exists('clearanceDate', $data) && $data['clearanceDate'] !== null) {
            $object->setClearanceDate($data['clearanceDate']);
            unset($data['clearanceDate']);
        }
        elseif (\array_key_exists('clearanceDate', $data) && $data['clearanceDate'] === null) {
            $object->setClearanceDate(null);
        }
        if (\array_key_exists('cleared', $data) && $data['cleared'] !== null) {
            $object->setCleared($data['cleared']);
            unset($data['cleared']);
        }
        elseif (\array_key_exists('cleared', $data) && $data['cleared'] === null) {
            $object->setCleared(null);
        }
        if (\array_key_exists('openItemNumber', $data) && $data['openItemNumber'] !== null) {
            $object->setOpenItemNumber($data['openItemNumber']);
            unset($data['openItemNumber']);
        }
        elseif (\array_key_exists('openItemNumber', $data) && $data['openItemNumber'] === null) {
            $object->setOpenItemNumber(null);
        }
        if (\array_key_exists('openItemType', $data) && $data['openItemType'] !== null) {
            $object->setOpenItemType($data['openItemType']);
            unset($data['openItemType']);
        }
        elseif (\array_key_exists('openItemType', $data) && $data['openItemType'] === null) {
            $object->setOpenItemType(null);
        }
        if (\array_key_exists('paymentApplications', $data) && $data['paymentApplications'] !== null) {
            $values = [];
            foreach ($data['paymentApplications'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PaymentApplication::class, 'json', $context);
            }
            $object->setPaymentApplications($values);
            unset($data['paymentApplications']);
        }
        elseif (\array_key_exists('paymentApplications', $data) && $data['paymentApplications'] === null) {
            $object->setPaymentApplications(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('amountDiscount') && null !== $data->getAmountDiscount()) {
            $dataArray['amountDiscount'] = $data->getAmountDiscount();
        }
        if ($data->isInitialized('amountOpen') && null !== $data->getAmountOpen()) {
            $dataArray['amountOpen'] = $data->getAmountOpen();
        }
        if ($data->isInitialized('amountPaid') && null !== $data->getAmountPaid()) {
            $dataArray['amountPaid'] = $data->getAmountPaid();
        }
        if ($data->isInitialized('clearanceDate') && null !== $data->getClearanceDate()) {
            $dataArray['clearanceDate'] = $data->getClearanceDate();
        }
        if ($data->isInitialized('cleared') && null !== $data->getCleared()) {
            $dataArray['cleared'] = $data->getCleared();
        }
        if ($data->isInitialized('openItemNumber') && null !== $data->getOpenItemNumber()) {
            $dataArray['openItemNumber'] = $data->getOpenItemNumber();
        }
        if ($data->isInitialized('openItemType') && null !== $data->getOpenItemType()) {
            $dataArray['openItemType'] = $data->getOpenItemType();
        }
        if ($data->isInitialized('paymentApplications') && null !== $data->getPaymentApplications()) {
            $values = [];
            foreach ($data->getPaymentApplications() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentApplications'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\OpenItem::class => false];
    }
}