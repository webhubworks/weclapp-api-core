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
class PaymentApplicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentApplication();
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
        if (\array_key_exists('amountApplied', $data) && $data['amountApplied'] !== null) {
            $object->setAmountApplied($data['amountApplied']);
            unset($data['amountApplied']);
        }
        elseif (\array_key_exists('amountApplied', $data) && $data['amountApplied'] === null) {
            $object->setAmountApplied(null);
        }
        if (\array_key_exists('amountAppliedOriginCurrency', $data) && $data['amountAppliedOriginCurrency'] !== null) {
            $object->setAmountAppliedOriginCurrency($data['amountAppliedOriginCurrency']);
            unset($data['amountAppliedOriginCurrency']);
        }
        elseif (\array_key_exists('amountAppliedOriginCurrency', $data) && $data['amountAppliedOriginCurrency'] === null) {
            $object->setAmountAppliedOriginCurrency(null);
        }
        if (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] !== null) {
            $object->setAmountCostsOfMonetaryTraffic($data['amountCostsOfMonetaryTraffic']);
            unset($data['amountCostsOfMonetaryTraffic']);
        }
        elseif (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] === null) {
            $object->setAmountCostsOfMonetaryTraffic(null);
        }
        if (\array_key_exists('amountDiscountApplied', $data) && $data['amountDiscountApplied'] !== null) {
            $object->setAmountDiscountApplied($data['amountDiscountApplied']);
            unset($data['amountDiscountApplied']);
        }
        elseif (\array_key_exists('amountDiscountApplied', $data) && $data['amountDiscountApplied'] === null) {
            $object->setAmountDiscountApplied(null);
        }
        if (\array_key_exists('bankTransactionId', $data) && $data['bankTransactionId'] !== null) {
            $object->setBankTransactionId($data['bankTransactionId']);
            unset($data['bankTransactionId']);
        }
        elseif (\array_key_exists('bankTransactionId', $data) && $data['bankTransactionId'] === null) {
            $object->setBankTransactionId(null);
        }
        if (\array_key_exists('cashTransactionId', $data) && $data['cashTransactionId'] !== null) {
            $object->setCashTransactionId($data['cashTransactionId']);
            unset($data['cashTransactionId']);
        }
        elseif (\array_key_exists('cashTransactionId', $data) && $data['cashTransactionId'] === null) {
            $object->setCashTransactionId(null);
        }
        if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        }
        elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
            $object->setCreatedById(null);
        }
        if (\array_key_exists('openItemClearingId', $data) && $data['openItemClearingId'] !== null) {
            $object->setOpenItemClearingId($data['openItemClearingId']);
            unset($data['openItemClearingId']);
        }
        elseif (\array_key_exists('openItemClearingId', $data) && $data['openItemClearingId'] === null) {
            $object->setOpenItemClearingId(null);
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
        if ($data->isInitialized('amountApplied') && null !== $data->getAmountApplied()) {
            $dataArray['amountApplied'] = $data->getAmountApplied();
        }
        if ($data->isInitialized('amountAppliedOriginCurrency') && null !== $data->getAmountAppliedOriginCurrency()) {
            $dataArray['amountAppliedOriginCurrency'] = $data->getAmountAppliedOriginCurrency();
        }
        if ($data->isInitialized('amountCostsOfMonetaryTraffic') && null !== $data->getAmountCostsOfMonetaryTraffic()) {
            $dataArray['amountCostsOfMonetaryTraffic'] = $data->getAmountCostsOfMonetaryTraffic();
        }
        if ($data->isInitialized('amountDiscountApplied') && null !== $data->getAmountDiscountApplied()) {
            $dataArray['amountDiscountApplied'] = $data->getAmountDiscountApplied();
        }
        if ($data->isInitialized('bankTransactionId') && null !== $data->getBankTransactionId()) {
            $dataArray['bankTransactionId'] = $data->getBankTransactionId();
        }
        if ($data->isInitialized('cashTransactionId') && null !== $data->getCashTransactionId()) {
            $dataArray['cashTransactionId'] = $data->getCashTransactionId();
        }
        if ($data->isInitialized('createdById') && null !== $data->getCreatedById()) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('openItemClearingId') && null !== $data->getOpenItemClearingId()) {
            $dataArray['openItemClearingId'] = $data->getOpenItemClearingId();
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
        return [\Webhubworks\WeclappApiCore\Model\PaymentApplication::class => false];
    }
}