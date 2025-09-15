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
class AccountingTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\AccountingTransaction();
        if (\array_key_exists('draft', $data) && \is_int($data['draft'])) {
            $data['draft'] = (bool) $data['draft'];
        }
        if (\array_key_exists('reverseTransaction', $data) && \is_int($data['reverseTransaction'])) {
            $data['reverseTransaction'] = (bool) $data['reverseTransaction'];
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
        if (\array_key_exists('accountingImportDate', $data) && $data['accountingImportDate'] !== null) {
            $object->setAccountingImportDate($data['accountingImportDate']);
            unset($data['accountingImportDate']);
        }
        elseif (\array_key_exists('accountingImportDate', $data) && $data['accountingImportDate'] === null) {
            $object->setAccountingImportDate(null);
        }
        if (\array_key_exists('conversionRate', $data) && $data['conversionRate'] !== null) {
            $object->setConversionRate($data['conversionRate']);
            unset($data['conversionRate']);
        }
        elseif (\array_key_exists('conversionRate', $data) && $data['conversionRate'] === null) {
            $object->setConversionRate(null);
        }
        if (\array_key_exists('conversionRateDate', $data) && $data['conversionRateDate'] !== null) {
            $object->setConversionRateDate($data['conversionRateDate']);
            unset($data['conversionRateDate']);
        }
        elseif (\array_key_exists('conversionRateDate', $data) && $data['conversionRateDate'] === null) {
            $object->setConversionRateDate(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('draft', $data) && $data['draft'] !== null) {
            $object->setDraft($data['draft']);
            unset($data['draft']);
        }
        elseif (\array_key_exists('draft', $data) && $data['draft'] === null) {
            $object->setDraft(null);
        }
        if (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] !== null) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        elseif (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] === null) {
            $object->setExternalRecordNumber(null);
        }
        if (\array_key_exists('internalRecordNumber', $data) && $data['internalRecordNumber'] !== null) {
            $object->setInternalRecordNumber($data['internalRecordNumber']);
            unset($data['internalRecordNumber']);
        }
        elseif (\array_key_exists('internalRecordNumber', $data) && $data['internalRecordNumber'] === null) {
            $object->setInternalRecordNumber(null);
        }
        if (\array_key_exists('reverseTransaction', $data) && $data['reverseTransaction'] !== null) {
            $object->setReverseTransaction($data['reverseTransaction']);
            unset($data['reverseTransaction']);
        }
        elseif (\array_key_exists('reverseTransaction', $data) && $data['reverseTransaction'] === null) {
            $object->setReverseTransaction(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('transactionDate', $data) && $data['transactionDate'] !== null) {
            $object->setTransactionDate($data['transactionDate']);
            unset($data['transactionDate']);
        }
        elseif (\array_key_exists('transactionDate', $data) && $data['transactionDate'] === null) {
            $object->setTransactionDate(null);
        }
        if (\array_key_exists('transactionDetails', $data) && $data['transactionDetails'] !== null) {
            $values = [];
            foreach ($data['transactionDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\AccountingTransactionDetail::class, 'json', $context);
            }
            $object->setTransactionDetails($values);
            unset($data['transactionDetails']);
        }
        elseif (\array_key_exists('transactionDetails', $data) && $data['transactionDetails'] === null) {
            $object->setTransactionDetails(null);
        }
        if (\array_key_exists('transactionEstablishDate', $data) && $data['transactionEstablishDate'] !== null) {
            $object->setTransactionEstablishDate($data['transactionEstablishDate']);
            unset($data['transactionEstablishDate']);
        }
        elseif (\array_key_exists('transactionEstablishDate', $data) && $data['transactionEstablishDate'] === null) {
            $object->setTransactionEstablishDate(null);
        }
        if (\array_key_exists('transactionNumber', $data) && $data['transactionNumber'] !== null) {
            $object->setTransactionNumber($data['transactionNumber']);
            unset($data['transactionNumber']);
        }
        elseif (\array_key_exists('transactionNumber', $data) && $data['transactionNumber'] === null) {
            $object->setTransactionNumber(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
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
        if ($data->isInitialized('accountingImportDate') && null !== $data->getAccountingImportDate()) {
            $dataArray['accountingImportDate'] = $data->getAccountingImportDate();
        }
        if ($data->isInitialized('conversionRate') && null !== $data->getConversionRate()) {
            $dataArray['conversionRate'] = $data->getConversionRate();
        }
        if ($data->isInitialized('conversionRateDate') && null !== $data->getConversionRateDate()) {
            $dataArray['conversionRateDate'] = $data->getConversionRateDate();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('draft') && null !== $data->getDraft()) {
            $dataArray['draft'] = $data->getDraft();
        }
        if ($data->isInitialized('externalRecordNumber') && null !== $data->getExternalRecordNumber()) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('internalRecordNumber') && null !== $data->getInternalRecordNumber()) {
            $dataArray['internalRecordNumber'] = $data->getInternalRecordNumber();
        }
        if ($data->isInitialized('reverseTransaction') && null !== $data->getReverseTransaction()) {
            $dataArray['reverseTransaction'] = $data->getReverseTransaction();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('transactionDate') && null !== $data->getTransactionDate()) {
            $dataArray['transactionDate'] = $data->getTransactionDate();
        }
        if ($data->isInitialized('transactionDetails') && null !== $data->getTransactionDetails()) {
            $values = [];
            foreach ($data->getTransactionDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['transactionDetails'] = $values;
        }
        if ($data->isInitialized('transactionEstablishDate') && null !== $data->getTransactionEstablishDate()) {
            $dataArray['transactionEstablishDate'] = $data->getTransactionEstablishDate();
        }
        if ($data->isInitialized('transactionNumber') && null !== $data->getTransactionNumber()) {
            $dataArray['transactionNumber'] = $data->getTransactionNumber();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
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
        return [\Webhubworks\WeclappApiCore\Model\AccountingTransaction::class => false];
    }
}