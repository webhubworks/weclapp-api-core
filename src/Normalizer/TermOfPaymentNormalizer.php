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
class TermOfPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TermOfPayment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TermOfPayment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TermOfPayment();
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
        if (\array_key_exists('conditions', $data)) {
            $values = [];
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\TermOfPaymentCondition::class, 'json', $context);
            }
            $object->setConditions($values);
            unset($data['conditions']);
        }
        if (\array_key_exists('datevTermOfPaymentNumber', $data)) {
            $object->setDatevTermOfPaymentNumber($data['datevTermOfPaymentNumber']);
            unset($data['datevTermOfPaymentNumber']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('dueDateOption', $data)) {
            $object->setDueDateOption($data['dueDateOption']);
            unset($data['dueDateOption']);
        }
        if (\array_key_exists('fixedDay', $data)) {
            $object->setFixedDay($data['fixedDay']);
            unset($data['fixedDay']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('numberOfDays', $data)) {
            $object->setNumberOfDays($data['numberOfDays']);
            unset($data['numberOfDays']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        if (\array_key_exists('validFrom', $data)) {
            $object->setValidFrom($data['validFrom']);
            unset($data['validFrom']);
        }
        if (\array_key_exists('validTo', $data)) {
            $object->setValidTo($data['validTo']);
            unset($data['validTo']);
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
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $values = [];
            foreach ($data->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conditions'] = $values;
        }
        if ($data->isInitialized('datevTermOfPaymentNumber') && null !== $data->getDatevTermOfPaymentNumber()) {
            $dataArray['datevTermOfPaymentNumber'] = $data->getDatevTermOfPaymentNumber();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('dueDateOption') && null !== $data->getDueDateOption()) {
            $dataArray['dueDateOption'] = $data->getDueDateOption();
        }
        if ($data->isInitialized('fixedDay') && null !== $data->getFixedDay()) {
            $dataArray['fixedDay'] = $data->getFixedDay();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('numberOfDays') && null !== $data->getNumberOfDays()) {
            $dataArray['numberOfDays'] = $data->getNumberOfDays();
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $data->getReference();
        }
        if ($data->isInitialized('validFrom') && null !== $data->getValidFrom()) {
            $dataArray['validFrom'] = $data->getValidFrom();
        }
        if ($data->isInitialized('validTo') && null !== $data->getValidTo()) {
            $dataArray['validTo'] = $data->getValidTo();
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
        return [\Webhubworks\WeclappApiCore\Model\TermOfPayment::class => false];
    }
}