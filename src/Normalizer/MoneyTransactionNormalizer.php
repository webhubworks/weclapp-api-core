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

class MoneyTransactionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\MoneyTransaction;
        if ($data === null || \is_array($data) === false) {
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('accountForCostsOfMonetaryTrafficId') && $data->getAccountForCostsOfMonetaryTrafficId() !== null) {
            $dataArray['accountForCostsOfMonetaryTrafficId'] = $data->getAccountForCostsOfMonetaryTrafficId();
        }
        if ($data->isInitialized('accountForCostsOfMonetaryTrafficNumber') && $data->getAccountForCostsOfMonetaryTrafficNumber() !== null) {
            $dataArray['accountForCostsOfMonetaryTrafficNumber'] = $data->getAccountForCostsOfMonetaryTrafficNumber();
        }
        if ($data->isInitialized('accountForDunningFeeId') && $data->getAccountForDunningFeeId() !== null) {
            $dataArray['accountForDunningFeeId'] = $data->getAccountForDunningFeeId();
        }
        if ($data->isInitialized('accountForDunningFeeNumber') && $data->getAccountForDunningFeeNumber() !== null) {
            $dataArray['accountForDunningFeeNumber'] = $data->getAccountForDunningFeeNumber();
        }
        if ($data->isInitialized('accountId') && $data->getAccountId() !== null) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('amount') && $data->getAmount() !== null) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('amountDiscount') && $data->getAmountDiscount() !== null) {
            $dataArray['amountDiscount'] = $data->getAmountDiscount();
        }
        if ($data->isInitialized('cashAccountSheetId') && $data->getCashAccountSheetId() !== null) {
            $dataArray['cashAccountSheetId'] = $data->getCashAccountSheetId();
        }
        if ($data->isInitialized('createdById') && $data->getCreatedById() !== null) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && $data->getCurrencyName() !== null) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('effectiveDate') && $data->getEffectiveDate() !== null) {
            $dataArray['effectiveDate'] = $data->getEffectiveDate();
        }
        if ($data->isInitialized('externalRecordNumber') && $data->getExternalRecordNumber() !== null) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('origin') && $data->getOrigin() !== null) {
            $dataArray['origin'] = $data->getOrigin();
        }
        if ($data->isInitialized('partyId') && $data->getPartyId() !== null) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && $data->getPaymentMethodName() !== null) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('paymentToleranceAccountId') && $data->getPaymentToleranceAccountId() !== null) {
            $dataArray['paymentToleranceAccountId'] = $data->getPaymentToleranceAccountId();
        }
        if ($data->isInitialized('paymentToleranceAccountNumber') && $data->getPaymentToleranceAccountNumber() !== null) {
            $dataArray['paymentToleranceAccountNumber'] = $data->getPaymentToleranceAccountNumber();
        }
        if ($data->isInitialized('paymentType') && $data->getPaymentType() !== null) {
            $dataArray['paymentType'] = $data->getPaymentType();
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxName') && $data->getTaxName() !== null) {
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
