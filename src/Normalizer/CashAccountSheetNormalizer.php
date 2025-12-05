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
class CashAccountSheetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CashAccountSheet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CashAccountSheet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CashAccountSheet();
        if (\array_key_exists('closed', $data) && \is_int($data['closed'])) {
            $data['closed'] = (bool) $data['closed'];
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
        if (\array_key_exists('cashAccountId', $data) && $data['cashAccountId'] !== null) {
            $object->setCashAccountId($data['cashAccountId']);
            unset($data['cashAccountId']);
        }
        elseif (\array_key_exists('cashAccountId', $data) && $data['cashAccountId'] === null) {
            $object->setCashAccountId(null);
        }
        if (\array_key_exists('cashCountItems', $data) && $data['cashCountItems'] !== null) {
            $values = [];
            foreach ($data['cashCountItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CashAccountCashCountItem::class, 'json', $context);
            }
            $object->setCashCountItems($values);
            unset($data['cashCountItems']);
        }
        elseif (\array_key_exists('cashCountItems', $data) && $data['cashCountItems'] === null) {
            $object->setCashCountItems(null);
        }
        if (\array_key_exists('closed', $data) && $data['closed'] !== null) {
            $object->setClosed($data['closed']);
            unset($data['closed']);
        }
        elseif (\array_key_exists('closed', $data) && $data['closed'] === null) {
            $object->setClosed(null);
        }
        if (\array_key_exists('closingBalance', $data) && $data['closingBalance'] !== null) {
            $object->setClosingBalance($data['closingBalance']);
            unset($data['closingBalance']);
        }
        elseif (\array_key_exists('closingBalance', $data) && $data['closingBalance'] === null) {
            $object->setClosingBalance(null);
        }
        if (\array_key_exists('closingExplanation', $data) && $data['closingExplanation'] !== null) {
            $object->setClosingExplanation($data['closingExplanation']);
            unset($data['closingExplanation']);
        }
        elseif (\array_key_exists('closingExplanation', $data) && $data['closingExplanation'] === null) {
            $object->setClosingExplanation(null);
        }
        if (\array_key_exists('openingBalance', $data) && $data['openingBalance'] !== null) {
            $object->setOpeningBalance($data['openingBalance']);
            unset($data['openingBalance']);
        }
        elseif (\array_key_exists('openingBalance', $data) && $data['openingBalance'] === null) {
            $object->setOpeningBalance(null);
        }
        if (\array_key_exists('openingDate', $data) && $data['openingDate'] !== null) {
            $object->setOpeningDate($data['openingDate']);
            unset($data['openingDate']);
        }
        elseif (\array_key_exists('openingDate', $data) && $data['openingDate'] === null) {
            $object->setOpeningDate(null);
        }
        if (\array_key_exists('sheetNumber', $data) && $data['sheetNumber'] !== null) {
            $object->setSheetNumber($data['sheetNumber']);
            unset($data['sheetNumber']);
        }
        elseif (\array_key_exists('sheetNumber', $data) && $data['sheetNumber'] === null) {
            $object->setSheetNumber(null);
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
        if ($data->isInitialized('cashAccountId') && null !== $data->getCashAccountId()) {
            $dataArray['cashAccountId'] = $data->getCashAccountId();
        }
        if ($data->isInitialized('cashCountItems') && null !== $data->getCashCountItems()) {
            $values = [];
            foreach ($data->getCashCountItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['cashCountItems'] = $values;
        }
        if ($data->isInitialized('closed') && null !== $data->getClosed()) {
            $dataArray['closed'] = $data->getClosed();
        }
        if ($data->isInitialized('closingExplanation') && null !== $data->getClosingExplanation()) {
            $dataArray['closingExplanation'] = $data->getClosingExplanation();
        }
        if ($data->isInitialized('sheetNumber') && null !== $data->getSheetNumber()) {
            $dataArray['sheetNumber'] = $data->getSheetNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\CashAccountSheet::class => false];
    }
}