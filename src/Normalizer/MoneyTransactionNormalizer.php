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
        if (\array_key_exists('accountForCostsOfMonetaryTrafficNumber', $data) && $data['accountForCostsOfMonetaryTrafficNumber'] !== null) {
            $object->setAccountForCostsOfMonetaryTrafficNumber($data['accountForCostsOfMonetaryTrafficNumber']);
            unset($data['accountForCostsOfMonetaryTrafficNumber']);
        }
        elseif (\array_key_exists('accountForCostsOfMonetaryTrafficNumber', $data) && $data['accountForCostsOfMonetaryTrafficNumber'] === null) {
            $object->setAccountForCostsOfMonetaryTrafficNumber(null);
        }
        if (\array_key_exists('accountForDunningFeeId', $data) && $data['accountForDunningFeeId'] !== null) {
            $object->setAccountForDunningFeeId($data['accountForDunningFeeId']);
            unset($data['accountForDunningFeeId']);
        }
        elseif (\array_key_exists('accountForDunningFeeId', $data) && $data['accountForDunningFeeId'] === null) {
            $object->setAccountForDunningFeeId(null);
        }
        if (\array_key_exists('accountForDunningFeeNumber', $data) && $data['accountForDunningFeeNumber'] !== null) {
            $object->setAccountForDunningFeeNumber($data['accountForDunningFeeNumber']);
            unset($data['accountForDunningFeeNumber']);
        }
        elseif (\array_key_exists('accountForDunningFeeNumber', $data) && $data['accountForDunningFeeNumber'] === null) {
            $object->setAccountForDunningFeeNumber(null);
        }
        if (\array_key_exists('accountId', $data) && $data['accountId'] !== null) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        elseif (\array_key_exists('accountId', $data) && $data['accountId'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
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
        if (\array_key_exists('cashAccountSheetId', $data) && $data['cashAccountSheetId'] !== null) {
            $object->setCashAccountSheetId($data['cashAccountSheetId']);
            unset($data['cashAccountSheetId']);
        }
        elseif (\array_key_exists('cashAccountSheetId', $data) && $data['cashAccountSheetId'] === null) {
            $object->setCashAccountSheetId(null);
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
        if (\array_key_exists('currencyName', $data) && $data['currencyName'] !== null) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        elseif (\array_key_exists('currencyName', $data) && $data['currencyName'] === null) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('effectiveDate', $data) && $data['effectiveDate'] !== null) {
            $object->setEffectiveDate($data['effectiveDate']);
            unset($data['effectiveDate']);
        }
        elseif (\array_key_exists('effectiveDate', $data) && $data['effectiveDate'] === null) {
            $object->setEffectiveDate(null);
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
        if (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] !== null) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        elseif (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] === null) {
            $object->setPaymentMethodName(null);
        }
        if (\array_key_exists('paymentToleranceAccountId', $data) && $data['paymentToleranceAccountId'] !== null) {
            $object->setPaymentToleranceAccountId($data['paymentToleranceAccountId']);
            unset($data['paymentToleranceAccountId']);
        }
        elseif (\array_key_exists('paymentToleranceAccountId', $data) && $data['paymentToleranceAccountId'] === null) {
            $object->setPaymentToleranceAccountId(null);
        }
        if (\array_key_exists('paymentToleranceAccountNumber', $data) && $data['paymentToleranceAccountNumber'] !== null) {
            $object->setPaymentToleranceAccountNumber($data['paymentToleranceAccountNumber']);
            unset($data['paymentToleranceAccountNumber']);
        }
        elseif (\array_key_exists('paymentToleranceAccountNumber', $data) && $data['paymentToleranceAccountNumber'] === null) {
            $object->setPaymentToleranceAccountNumber(null);
        }
        if (\array_key_exists('paymentType', $data) && $data['paymentType'] !== null) {
            $object->setPaymentType($data['paymentType']);
            unset($data['paymentType']);
        }
        elseif (\array_key_exists('paymentType', $data) && $data['paymentType'] === null) {
            $object->setPaymentType(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('taxName', $data) && $data['taxName'] !== null) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
        }
        elseif (\array_key_exists('taxName', $data) && $data['taxName'] === null) {
            $object->setTaxName(null);
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