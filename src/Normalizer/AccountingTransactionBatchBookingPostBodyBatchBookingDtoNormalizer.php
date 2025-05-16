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

class AccountingTransactionBatchBookingPostBodyBatchBookingDtoNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('batchBookingRecords', $data)) {
            $values = [];
            foreach ($data['batchBookingRecords'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\BatchBookingRecord::class, 'json', $context);
            }
            $object->setBatchBookingRecords($values);
            unset($data['batchBookingRecords']);
        }
        if (\array_key_exists('bookingText', $data)) {
            $object->setBookingText($data['bookingText']);
            unset($data['bookingText']);
        }
        if (\array_key_exists('costCenterId', $data)) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('externalRecordNumber', $data)) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        if (\array_key_exists('transactionDate', $data)) {
            $object->setTransactionDate($data['transactionDate']);
            unset($data['transactionDate']);
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
        if ($data->isInitialized('batchBookingRecords') && $data->getBatchBookingRecords() !== null) {
            $values = [];
            foreach ($data->getBatchBookingRecords() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['batchBookingRecords'] = $values;
        }
        if ($data->isInitialized('bookingText') && $data->getBookingText() !== null) {
            $dataArray['bookingText'] = $data->getBookingText();
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('externalRecordNumber') && $data->getExternalRecordNumber() !== null) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('transactionDate') && $data->getTransactionDate() !== null) {
            $dataArray['transactionDate'] = $data->getTransactionDate();
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
        return [\Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto::class => false];
    }
}
