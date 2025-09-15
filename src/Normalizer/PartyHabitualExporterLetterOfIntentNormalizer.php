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
class PartyHabitualExporterLetterOfIntentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent();
        if (\array_key_exists('automaticallySuggestInInvoice', $data) && \is_int($data['automaticallySuggestInInvoice'])) {
            $data['automaticallySuggestInInvoice'] = (bool) $data['automaticallySuggestInInvoice'];
        }
        if (\array_key_exists('fromSupplier', $data) && \is_int($data['fromSupplier'])) {
            $data['fromSupplier'] = (bool) $data['fromSupplier'];
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
        if (\array_key_exists('automaticallySuggestInInvoice', $data) && $data['automaticallySuggestInInvoice'] !== null) {
            $object->setAutomaticallySuggestInInvoice($data['automaticallySuggestInInvoice']);
            unset($data['automaticallySuggestInInvoice']);
        }
        elseif (\array_key_exists('automaticallySuggestInInvoice', $data) && $data['automaticallySuggestInInvoice'] === null) {
            $object->setAutomaticallySuggestInInvoice(null);
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('fromSupplier', $data) && $data['fromSupplier'] !== null) {
            $object->setFromSupplier($data['fromSupplier']);
            unset($data['fromSupplier']);
        }
        elseif (\array_key_exists('fromSupplier', $data) && $data['fromSupplier'] === null) {
            $object->setFromSupplier(null);
        }
        if (\array_key_exists('invoices', $data) && $data['invoices'] !== null) {
            $values = [];
            foreach ($data['invoices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setInvoices($values);
            unset($data['invoices']);
        }
        elseif (\array_key_exists('invoices', $data) && $data['invoices'] === null) {
            $object->setInvoices(null);
        }
        if (\array_key_exists('numberDeclarer', $data) && $data['numberDeclarer'] !== null) {
            $object->setNumberDeclarer($data['numberDeclarer']);
            unset($data['numberDeclarer']);
        }
        elseif (\array_key_exists('numberDeclarer', $data) && $data['numberDeclarer'] === null) {
            $object->setNumberDeclarer(null);
        }
        if (\array_key_exists('numberSupplier', $data) && $data['numberSupplier'] !== null) {
            $object->setNumberSupplier($data['numberSupplier']);
            unset($data['numberSupplier']);
        }
        elseif (\array_key_exists('numberSupplier', $data) && $data['numberSupplier'] === null) {
            $object->setNumberSupplier(null);
        }
        if (\array_key_exists('totalAmount', $data) && $data['totalAmount'] !== null) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
        }
        elseif (\array_key_exists('totalAmount', $data) && $data['totalAmount'] === null) {
            $object->setTotalAmount(null);
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
        if ($data->isInitialized('automaticallySuggestInInvoice') && null !== $data->getAutomaticallySuggestInInvoice()) {
            $dataArray['automaticallySuggestInInvoice'] = $data->getAutomaticallySuggestInInvoice();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('fromSupplier') && null !== $data->getFromSupplier()) {
            $dataArray['fromSupplier'] = $data->getFromSupplier();
        }
        if ($data->isInitialized('numberDeclarer') && null !== $data->getNumberDeclarer()) {
            $dataArray['numberDeclarer'] = $data->getNumberDeclarer();
        }
        if ($data->isInitialized('numberSupplier') && null !== $data->getNumberSupplier()) {
            $dataArray['numberSupplier'] = $data->getNumberSupplier();
        }
        if ($data->isInitialized('totalAmount') && null !== $data->getTotalAmount()) {
            $dataArray['totalAmount'] = $data->getTotalAmount();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
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
        return [\Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class => false];
    }
}