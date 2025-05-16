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
        if (\array_key_exists('automaticallySuggestInInvoice', $data)) {
            $object->setAutomaticallySuggestInInvoice($data['automaticallySuggestInInvoice']);
            unset($data['automaticallySuggestInInvoice']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('fromSupplier', $data)) {
            $object->setFromSupplier($data['fromSupplier']);
            unset($data['fromSupplier']);
        }
        if (\array_key_exists('invoices', $data)) {
            $values = [];
            foreach ($data['invoices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setInvoices($values);
            unset($data['invoices']);
        }
        if (\array_key_exists('numberDeclarer', $data)) {
            $object->setNumberDeclarer($data['numberDeclarer']);
            unset($data['numberDeclarer']);
        }
        if (\array_key_exists('numberSupplier', $data)) {
            $object->setNumberSupplier($data['numberSupplier']);
            unset($data['numberSupplier']);
        }
        if (\array_key_exists('totalAmount', $data)) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('automaticallySuggestInInvoice') && null !== $data->getAutomaticallySuggestInInvoice()) {
            $dataArray['automaticallySuggestInInvoice'] = $data->getAutomaticallySuggestInInvoice();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('fromSupplier') && null !== $data->getFromSupplier()) {
            $dataArray['fromSupplier'] = $data->getFromSupplier();
        }
        if ($data->isInitialized('invoices') && null !== $data->getInvoices()) {
            $values = [];
            foreach ($data->getInvoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['invoices'] = $values;
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class => false];
    }
}