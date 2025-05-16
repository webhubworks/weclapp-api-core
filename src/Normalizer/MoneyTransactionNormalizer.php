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
class MoneyTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\MoneyTransaction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('accountForCostsOfMonetaryTrafficId', $data)) {
            $object->setAccountForCostsOfMonetaryTrafficId($data['accountForCostsOfMonetaryTrafficId']);
            unset($data['accountForCostsOfMonetaryTrafficId']);
        }
        if (\array_key_exists('accountForCostsOfMonetaryTrafficNumber', $data)) {
            $object->setAccountForCostsOfMonetaryTrafficNumber($data['accountForCostsOfMonetaryTrafficNumber']);
            unset($data['accountForCostsOfMonetaryTrafficNumber']);
        }
        if (\array_key_exists('accountForDunningFeeId', $data)) {
            $object->setAccountForDunningFeeId($data['accountForDunningFeeId']);
            unset($data['accountForDunningFeeId']);
        }
        if (\array_key_exists('accountForDunningFeeNumber', $data)) {
            $object->setAccountForDunningFeeNumber($data['accountForDunningFeeNumber']);
            unset($data['accountForDunningFeeNumber']);
        }
        if (\array_key_exists('accountId', $data)) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('amountDiscount', $data)) {
            $object->setAmountDiscount($data['amountDiscount']);
            unset($data['amountDiscount']);
        }
        if (\array_key_exists('cashAccountSheetId', $data)) {
            $object->setCashAccountSheetId($data['cashAccountSheetId']);
            unset($data['cashAccountSheetId']);
        }
        if (\array_key_exists('createdById', $data)) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        }
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('currencyName', $data)) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('effectiveDate', $data)) {
            $object->setEffectiveDate($data['effectiveDate']);
            unset($data['effectiveDate']);
        }
        if (\array_key_exists('externalRecordNumber', $data)) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        if (\array_key_exists('origin', $data)) {
            $object->setOrigin($data['origin']);
            unset($data['origin']);
        }
        if (\array_key_exists('partyId', $data)) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('paymentMethodName', $data)) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        if (\array_key_exists('paymentToleranceAccountId', $data)) {
            $object->setPaymentToleranceAccountId($data['paymentToleranceAccountId']);
            unset($data['paymentToleranceAccountId']);
        }
        if (\array_key_exists('paymentToleranceAccountNumber', $data)) {
            $object->setPaymentToleranceAccountNumber($data['paymentToleranceAccountNumber']);
            unset($data['paymentToleranceAccountNumber']);
        }
        if (\array_key_exists('paymentType', $data)) {
            $object->setPaymentType($data['paymentType']);
            unset($data['paymentType']);
        }
        if (\array_key_exists('taxId', $data)) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        if (\array_key_exists('taxName', $data)) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
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
        if ($data->isInitialized('accountForCostsOfMonetaryTrafficId') && null !== $data->getAccountForCostsOfMonetaryTrafficId()) {
            $dataArray['accountForCostsOfMonetaryTrafficId'] = $data->getAccountForCostsOfMonetaryTrafficId();
        }
        if ($data->isInitialized('accountForCostsOfMonetaryTrafficNumber') && null !== $data->getAccountForCostsOfMonetaryTrafficNumber()) {
            $dataArray['accountForCostsOfMonetaryTrafficNumber'] = $data->getAccountForCostsOfMonetaryTrafficNumber();
        }
        if ($data->isInitialized('accountForDunningFeeId') && null !== $data->getAccountForDunningFeeId()) {
            $dataArray['accountForDunningFeeId'] = $data->getAccountForDunningFeeId();
        }
        if ($data->isInitialized('accountForDunningFeeNumber') && null !== $data->getAccountForDunningFeeNumber()) {
            $dataArray['accountForDunningFeeNumber'] = $data->getAccountForDunningFeeNumber();
        }
        if ($data->isInitialized('accountId') && null !== $data->getAccountId()) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('amountDiscount') && null !== $data->getAmountDiscount()) {
            $dataArray['amountDiscount'] = $data->getAmountDiscount();
        }
        if ($data->isInitialized('cashAccountSheetId') && null !== $data->getCashAccountSheetId()) {
            $dataArray['cashAccountSheetId'] = $data->getCashAccountSheetId();
        }
        if ($data->isInitialized('createdById') && null !== $data->getCreatedById()) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && null !== $data->getCurrencyName()) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('effectiveDate') && null !== $data->getEffectiveDate()) {
            $dataArray['effectiveDate'] = $data->getEffectiveDate();
        }
        if ($data->isInitialized('externalRecordNumber') && null !== $data->getExternalRecordNumber()) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('origin') && null !== $data->getOrigin()) {
            $dataArray['origin'] = $data->getOrigin();
        }
        if ($data->isInitialized('partyId') && null !== $data->getPartyId()) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && null !== $data->getPaymentMethodName()) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('paymentToleranceAccountId') && null !== $data->getPaymentToleranceAccountId()) {
            $dataArray['paymentToleranceAccountId'] = $data->getPaymentToleranceAccountId();
        }
        if ($data->isInitialized('paymentToleranceAccountNumber') && null !== $data->getPaymentToleranceAccountNumber()) {
            $dataArray['paymentToleranceAccountNumber'] = $data->getPaymentToleranceAccountNumber();
        }
        if ($data->isInitialized('paymentType') && null !== $data->getPaymentType()) {
            $dataArray['paymentType'] = $data->getPaymentType();
        }
        if ($data->isInitialized('taxId') && null !== $data->getTaxId()) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxName') && null !== $data->getTaxName()) {
            $dataArray['taxName'] = $data->getTaxName();
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
        return [\Webhubworks\WeclappApiCore\Model\MoneyTransaction::class => false];
    }
}