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
class PaymentMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentMethod::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentMethod::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentMethod();
        if (\array_key_exists('autoClearingAccountTransaction', $data) && \is_int($data['autoClearingAccountTransaction'])) {
            $data['autoClearingAccountTransaction'] = (bool) $data['autoClearingAccountTransaction'];
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
        if (\array_key_exists('autoClearingAccountTransaction', $data) && $data['autoClearingAccountTransaction'] !== null) {
            $object->setAutoClearingAccountTransaction($data['autoClearingAccountTransaction']);
            unset($data['autoClearingAccountTransaction']);
        }
        elseif (\array_key_exists('autoClearingAccountTransaction', $data) && $data['autoClearingAccountTransaction'] === null) {
            $object->setAutoClearingAccountTransaction(null);
        }
        if (\array_key_exists('clearingAccountId', $data) && $data['clearingAccountId'] !== null) {
            $object->setClearingAccountId($data['clearingAccountId']);
            unset($data['clearingAccountId']);
        }
        elseif (\array_key_exists('clearingAccountId', $data) && $data['clearingAccountId'] === null) {
            $object->setClearingAccountId(null);
        }
        if (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] !== null) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        elseif (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] === null) {
            $object->setDiscountPercentage(null);
        }
        if (\array_key_exists('discountValue', $data) && $data['discountValue'] !== null) {
            $object->setDiscountValue($data['discountValue']);
            unset($data['discountValue']);
        }
        elseif (\array_key_exists('discountValue', $data) && $data['discountValue'] === null) {
            $object->setDiscountValue(null);
        }
        if (\array_key_exists('documentText', $data) && $data['documentText'] !== null) {
            $object->setDocumentText($data['documentText']);
            unset($data['documentText']);
        }
        elseif (\array_key_exists('documentText', $data) && $data['documentText'] === null) {
            $object->setDocumentText(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('reference', $data) && $data['reference'] !== null) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        elseif (\array_key_exists('reference', $data) && $data['reference'] === null) {
            $object->setReference(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
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
        if ($data->isInitialized('autoClearingAccountTransaction') && null !== $data->getAutoClearingAccountTransaction()) {
            $dataArray['autoClearingAccountTransaction'] = $data->getAutoClearingAccountTransaction();
        }
        if ($data->isInitialized('clearingAccountId') && null !== $data->getClearingAccountId()) {
            $dataArray['clearingAccountId'] = $data->getClearingAccountId();
        }
        if ($data->isInitialized('discountPercentage') && null !== $data->getDiscountPercentage()) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('discountValue') && null !== $data->getDiscountValue()) {
            $dataArray['discountValue'] = $data->getDiscountValue();
        }
        if ($data->isInitialized('documentText') && null !== $data->getDocumentText()) {
            $dataArray['documentText'] = $data->getDocumentText();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $data->getReference();
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
        return [\Webhubworks\WeclappApiCore\Model\PaymentMethod::class => false];
    }
}