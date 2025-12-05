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
class NumberRangeValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\NumberRangeValue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\NumberRangeValue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\NumberRangeValue();
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
        if (\array_key_exists('articleCategories', $data) && $data['articleCategories'] !== null) {
            $values = [];
            foreach ($data['articleCategories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setArticleCategories($values);
            unset($data['articleCategories']);
        }
        elseif (\array_key_exists('articleCategories', $data) && $data['articleCategories'] === null) {
            $object->setArticleCategories(null);
        }
        if (\array_key_exists('creditNoteInvoiceTypes', $data) && $data['creditNoteInvoiceTypes'] !== null) {
            $values_1 = [];
            foreach ($data['creditNoteInvoiceTypes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCreditNoteInvoiceTypes($values_1);
            unset($data['creditNoteInvoiceTypes']);
        }
        elseif (\array_key_exists('creditNoteInvoiceTypes', $data) && $data['creditNoteInvoiceTypes'] === null) {
            $object->setCreditNoteInvoiceTypes(null);
        }
        if (\array_key_exists('interval', $data) && $data['interval'] !== null) {
            $object->setInterval($data['interval']);
            unset($data['interval']);
        }
        elseif (\array_key_exists('interval', $data) && $data['interval'] === null) {
            $object->setInterval(null);
        }
        if (\array_key_exists('lastValue', $data) && $data['lastValue'] !== null) {
            $object->setLastValue($data['lastValue']);
            unset($data['lastValue']);
        }
        elseif (\array_key_exists('lastValue', $data) && $data['lastValue'] === null) {
            $object->setLastValue(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('numberRangeId', $data) && $data['numberRangeId'] !== null) {
            $object->setNumberRangeId($data['numberRangeId']);
            unset($data['numberRangeId']);
        }
        elseif (\array_key_exists('numberRangeId', $data) && $data['numberRangeId'] === null) {
            $object->setNumberRangeId(null);
        }
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
            unset($data['prefix']);
        }
        elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('salesChannels', $data) && $data['salesChannels'] !== null) {
            $values_2 = [];
            foreach ($data['salesChannels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSalesChannels($values_2);
            unset($data['salesChannels']);
        }
        elseif (\array_key_exists('salesChannels', $data) && $data['salesChannels'] === null) {
            $object->setSalesChannels(null);
        }
        if (\array_key_exists('salesInvoiceTypes', $data) && $data['salesInvoiceTypes'] !== null) {
            $values_3 = [];
            foreach ($data['salesInvoiceTypes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSalesInvoiceTypes($values_3);
            unset($data['salesInvoiceTypes']);
        }
        elseif (\array_key_exists('salesInvoiceTypes', $data) && $data['salesInvoiceTypes'] === null) {
            $object->setSalesInvoiceTypes(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
            unset($data['suffix']);
        }
        elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('validFromDate', $data) && $data['validFromDate'] !== null) {
            $object->setValidFromDate($data['validFromDate']);
            unset($data['validFromDate']);
        }
        elseif (\array_key_exists('validFromDate', $data) && $data['validFromDate'] === null) {
            $object->setValidFromDate(null);
        }
        if (\array_key_exists('validToDate', $data) && $data['validToDate'] !== null) {
            $object->setValidToDate($data['validToDate']);
            unset($data['validToDate']);
        }
        elseif (\array_key_exists('validToDate', $data) && $data['validToDate'] === null) {
            $object->setValidToDate(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('articleCategories') && null !== $data->getArticleCategories()) {
            $values = [];
            foreach ($data->getArticleCategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['articleCategories'] = $values;
        }
        if ($data->isInitialized('creditNoteInvoiceTypes') && null !== $data->getCreditNoteInvoiceTypes()) {
            $values_1 = [];
            foreach ($data->getCreditNoteInvoiceTypes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['creditNoteInvoiceTypes'] = $values_1;
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['interval'] = $data->getInterval();
        }
        if ($data->isInitialized('lastValue') && null !== $data->getLastValue()) {
            $dataArray['lastValue'] = $data->getLastValue();
        }
        if ($data->isInitialized('length') && null !== $data->getLength()) {
            $dataArray['length'] = $data->getLength();
        }
        if ($data->isInitialized('numberRangeId') && null !== $data->getNumberRangeId()) {
            $dataArray['numberRangeId'] = $data->getNumberRangeId();
        }
        if ($data->isInitialized('prefix') && null !== $data->getPrefix()) {
            $dataArray['prefix'] = $data->getPrefix();
        }
        if ($data->isInitialized('salesChannels') && null !== $data->getSalesChannels()) {
            $values_2 = [];
            foreach ($data->getSalesChannels() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['salesChannels'] = $values_2;
        }
        if ($data->isInitialized('salesInvoiceTypes') && null !== $data->getSalesInvoiceTypes()) {
            $values_3 = [];
            foreach ($data->getSalesInvoiceTypes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['salesInvoiceTypes'] = $values_3;
        }
        if ($data->isInitialized('suffix') && null !== $data->getSuffix()) {
            $dataArray['suffix'] = $data->getSuffix();
        }
        if ($data->isInitialized('validFromDate') && null !== $data->getValidFromDate()) {
            $dataArray['validFromDate'] = $data->getValidFromDate();
        }
        if ($data->isInitialized('validToDate') && null !== $data->getValidToDate()) {
            $dataArray['validToDate'] = $data->getValidToDate();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\NumberRangeValue::class => false];
    }
}