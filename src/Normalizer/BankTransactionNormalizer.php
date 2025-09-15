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
class BankTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BankTransaction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BankTransaction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BankTransaction();
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
        if (\array_key_exists('accountForCostsOfMonetaryTrafficId', $data) && $data['accountForCostsOfMonetaryTrafficId'] !== null) {
            $object->setAccountForCostsOfMonetaryTrafficId($data['accountForCostsOfMonetaryTrafficId']);
            unset($data['accountForCostsOfMonetaryTrafficId']);
        }
        elseif (\array_key_exists('accountForCostsOfMonetaryTrafficId', $data) && $data['accountForCostsOfMonetaryTrafficId'] === null) {
            $object->setAccountForCostsOfMonetaryTrafficId(null);
        }
        if (\array_key_exists('accountForDunningFeeId', $data) && $data['accountForDunningFeeId'] !== null) {
            $object->setAccountForDunningFeeId($data['accountForDunningFeeId']);
            unset($data['accountForDunningFeeId']);
        }
        elseif (\array_key_exists('accountForDunningFeeId', $data) && $data['accountForDunningFeeId'] === null) {
            $object->setAccountForDunningFeeId(null);
        }
        if (\array_key_exists('additionalEcommerceId', $data) && $data['additionalEcommerceId'] !== null) {
            $object->setAdditionalEcommerceId($data['additionalEcommerceId']);
            unset($data['additionalEcommerceId']);
        }
        elseif (\array_key_exists('additionalEcommerceId', $data) && $data['additionalEcommerceId'] === null) {
            $object->setAdditionalEcommerceId(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] !== null) {
            $object->setAmountCostsOfMonetaryTraffic($data['amountCostsOfMonetaryTraffic']);
            unset($data['amountCostsOfMonetaryTraffic']);
        }
        elseif (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] === null) {
            $object->setAmountCostsOfMonetaryTraffic(null);
        }
        if (\array_key_exists('cleared', $data) && $data['cleared'] !== null) {
            $object->setCleared($data['cleared']);
            unset($data['cleared']);
        }
        elseif (\array_key_exists('cleared', $data) && $data['cleared'] === null) {
            $object->setCleared(null);
        }
        if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        }
        elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
            $object->setCreatedById(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('ecommerceId', $data) && $data['ecommerceId'] !== null) {
            $object->setEcommerceId($data['ecommerceId']);
            unset($data['ecommerceId']);
        }
        elseif (\array_key_exists('ecommerceId', $data) && $data['ecommerceId'] === null) {
            $object->setEcommerceId(null);
        }
        if (\array_key_exists('effectiveDate', $data) && $data['effectiveDate'] !== null) {
            $object->setEffectiveDate($data['effectiveDate']);
            unset($data['effectiveDate']);
        }
        elseif (\array_key_exists('effectiveDate', $data) && $data['effectiveDate'] === null) {
            $object->setEffectiveDate(null);
        }
        if (\array_key_exists('externalConnectionId', $data) && $data['externalConnectionId'] !== null) {
            $object->setExternalConnectionId($data['externalConnectionId']);
            unset($data['externalConnectionId']);
        }
        elseif (\array_key_exists('externalConnectionId', $data) && $data['externalConnectionId'] === null) {
            $object->setExternalConnectionId(null);
        }
        if (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] !== null) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        elseif (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] === null) {
            $object->setExternalRecordNumber(null);
        }
        if (\array_key_exists('origin', $data) && $data['origin'] !== null) {
            $object->setOrigin($data['origin']);
            unset($data['origin']);
        }
        elseif (\array_key_exists('origin', $data) && $data['origin'] === null) {
            $object->setOrigin(null);
        }
        if (\array_key_exists('partyId', $data) && $data['partyId'] !== null) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        elseif (\array_key_exists('partyId', $data) && $data['partyId'] === null) {
            $object->setPartyId(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('paymentToleranceAccountId', $data) && $data['paymentToleranceAccountId'] !== null) {
            $object->setPaymentToleranceAccountId($data['paymentToleranceAccountId']);
            unset($data['paymentToleranceAccountId']);
        }
        elseif (\array_key_exists('paymentToleranceAccountId', $data) && $data['paymentToleranceAccountId'] === null) {
            $object->setPaymentToleranceAccountId(null);
        }
        if (\array_key_exists('paymentType', $data) && $data['paymentType'] !== null) {
            $object->setPaymentType($data['paymentType']);
            unset($data['paymentType']);
        }
        elseif (\array_key_exists('paymentType', $data) && $data['paymentType'] === null) {
            $object->setPaymentType(null);
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
        if ($data->isInitialized('accountForCostsOfMonetaryTrafficId') && null !== $data->getAccountForCostsOfMonetaryTrafficId()) {
            $dataArray['accountForCostsOfMonetaryTrafficId'] = $data->getAccountForCostsOfMonetaryTrafficId();
        }
        if ($data->isInitialized('accountForDunningFeeId') && null !== $data->getAccountForDunningFeeId()) {
            $dataArray['accountForDunningFeeId'] = $data->getAccountForDunningFeeId();
        }
        if ($data->isInitialized('additionalEcommerceId') && null !== $data->getAdditionalEcommerceId()) {
            $dataArray['additionalEcommerceId'] = $data->getAdditionalEcommerceId();
        }
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('amountCostsOfMonetaryTraffic') && null !== $data->getAmountCostsOfMonetaryTraffic()) {
            $dataArray['amountCostsOfMonetaryTraffic'] = $data->getAmountCostsOfMonetaryTraffic();
        }
        if ($data->isInitialized('cleared') && null !== $data->getCleared()) {
            $dataArray['cleared'] = $data->getCleared();
        }
        if ($data->isInitialized('createdById') && null !== $data->getCreatedById()) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ecommerceId') && null !== $data->getEcommerceId()) {
            $dataArray['ecommerceId'] = $data->getEcommerceId();
        }
        if ($data->isInitialized('effectiveDate') && null !== $data->getEffectiveDate()) {
            $dataArray['effectiveDate'] = $data->getEffectiveDate();
        }
        if ($data->isInitialized('externalConnectionId') && null !== $data->getExternalConnectionId()) {
            $dataArray['externalConnectionId'] = $data->getExternalConnectionId();
        }
        if ($data->isInitialized('externalRecordNumber') && null !== $data->getExternalRecordNumber()) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('origin') && null !== $data->getOrigin()) {
            $dataArray['origin'] = $data->getOrigin();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentToleranceAccountId') && null !== $data->getPaymentToleranceAccountId()) {
            $dataArray['paymentToleranceAccountId'] = $data->getPaymentToleranceAccountId();
        }
        if ($data->isInitialized('paymentType') && null !== $data->getPaymentType()) {
            $dataArray['paymentType'] = $data->getPaymentType();
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
        return [\Webhubworks\WeclappApiCore\Model\BankTransaction::class => false];
    }
}