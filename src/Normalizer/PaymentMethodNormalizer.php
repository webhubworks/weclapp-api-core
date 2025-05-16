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

class PaymentMethodNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentMethod;
        if (\array_key_exists('autoClearingAccountTransaction', $data) && \is_int($data['autoClearingAccountTransaction'])) {
            $data['autoClearingAccountTransaction'] = (bool) $data['autoClearingAccountTransaction'];
        }
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
        if (\array_key_exists('autoClearingAccountTransaction', $data)) {
            $object->setAutoClearingAccountTransaction($data['autoClearingAccountTransaction']);
            unset($data['autoClearingAccountTransaction']);
        }
        if (\array_key_exists('clearingAccountId', $data)) {
            $object->setClearingAccountId($data['clearingAccountId']);
            unset($data['clearingAccountId']);
        }
        if (\array_key_exists('discountPercentage', $data)) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        if (\array_key_exists('discountValue', $data)) {
            $object->setDiscountValue($data['discountValue']);
            unset($data['discountValue']);
        }
        if (\array_key_exists('documentText', $data)) {
            $object->setDocumentText($data['documentText']);
            unset($data['documentText']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if ($data->isInitialized('autoClearingAccountTransaction') && $data->getAutoClearingAccountTransaction() !== null) {
            $dataArray['autoClearingAccountTransaction'] = $data->getAutoClearingAccountTransaction();
        }
        if ($data->isInitialized('clearingAccountId') && $data->getClearingAccountId() !== null) {
            $dataArray['clearingAccountId'] = $data->getClearingAccountId();
        }
        if ($data->isInitialized('discountPercentage') && $data->getDiscountPercentage() !== null) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('discountValue') && $data->getDiscountValue() !== null) {
            $dataArray['discountValue'] = $data->getDiscountValue();
        }
        if ($data->isInitialized('documentText') && $data->getDocumentText() !== null) {
            $dataArray['documentText'] = $data->getDocumentText();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('reference') && $data->getReference() !== null) {
            $dataArray['reference'] = $data->getReference();
        }
        if ($data->isInitialized('type') && $data->getType() !== null) {
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
