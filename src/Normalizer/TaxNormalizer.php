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
class TaxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Tax::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Tax::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Tax();
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
        if (\array_key_exists('contraAccountId', $data) && $data['contraAccountId'] !== null) {
            $object->setContraAccountId($data['contraAccountId']);
            unset($data['contraAccountId']);
        }
        elseif (\array_key_exists('contraAccountId', $data) && $data['contraAccountId'] === null) {
            $object->setContraAccountId(null);
        }
        if (\array_key_exists('contraAccountNumber', $data) && $data['contraAccountNumber'] !== null) {
            $object->setContraAccountNumber($data['contraAccountNumber']);
            unset($data['contraAccountNumber']);
        }
        elseif (\array_key_exists('contraAccountNumber', $data) && $data['contraAccountNumber'] === null) {
            $object->setContraAccountNumber(null);
        }
        if (\array_key_exists('defaultDiscountAccountId', $data) && $data['defaultDiscountAccountId'] !== null) {
            $object->setDefaultDiscountAccountId($data['defaultDiscountAccountId']);
            unset($data['defaultDiscountAccountId']);
        }
        elseif (\array_key_exists('defaultDiscountAccountId', $data) && $data['defaultDiscountAccountId'] === null) {
            $object->setDefaultDiscountAccountId(null);
        }
        if (\array_key_exists('defaultDiscountAccountNumber', $data) && $data['defaultDiscountAccountNumber'] !== null) {
            $object->setDefaultDiscountAccountNumber($data['defaultDiscountAccountNumber']);
            unset($data['defaultDiscountAccountNumber']);
        }
        elseif (\array_key_exists('defaultDiscountAccountNumber', $data) && $data['defaultDiscountAccountNumber'] === null) {
            $object->setDefaultDiscountAccountNumber(null);
        }
        if (\array_key_exists('defaultNominalAccountId', $data) && $data['defaultNominalAccountId'] !== null) {
            $object->setDefaultNominalAccountId($data['defaultNominalAccountId']);
            unset($data['defaultNominalAccountId']);
        }
        elseif (\array_key_exists('defaultNominalAccountId', $data) && $data['defaultNominalAccountId'] === null) {
            $object->setDefaultNominalAccountId(null);
        }
        if (\array_key_exists('defaultNominalAccountNumber', $data) && $data['defaultNominalAccountNumber'] !== null) {
            $object->setDefaultNominalAccountNumber($data['defaultNominalAccountNumber']);
            unset($data['defaultNominalAccountNumber']);
        }
        elseif (\array_key_exists('defaultNominalAccountNumber', $data) && $data['defaultNominalAccountNumber'] === null) {
            $object->setDefaultNominalAccountNumber(null);
        }
        if (\array_key_exists('depositAccountId', $data) && $data['depositAccountId'] !== null) {
            $object->setDepositAccountId($data['depositAccountId']);
            unset($data['depositAccountId']);
        }
        elseif (\array_key_exists('depositAccountId', $data) && $data['depositAccountId'] === null) {
            $object->setDepositAccountId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('taxKey', $data) && $data['taxKey'] !== null) {
            $object->setTaxKey($data['taxKey']);
            unset($data['taxKey']);
        }
        elseif (\array_key_exists('taxKey', $data) && $data['taxKey'] === null) {
            $object->setTaxKey(null);
        }
        if (\array_key_exists('taxType', $data) && $data['taxType'] !== null) {
            $object->setTaxType($data['taxType']);
            unset($data['taxType']);
        }
        elseif (\array_key_exists('taxType', $data) && $data['taxType'] === null) {
            $object->setTaxType(null);
        }
        if (\array_key_exists('taxValue', $data) && $data['taxValue'] !== null) {
            $object->setTaxValue($data['taxValue']);
            unset($data['taxValue']);
        }
        elseif (\array_key_exists('taxValue', $data) && $data['taxValue'] === null) {
            $object->setTaxValue(null);
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
        if ($data->isInitialized('accountId') && null !== $data->getAccountId()) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('contraAccountId') && null !== $data->getContraAccountId()) {
            $dataArray['contraAccountId'] = $data->getContraAccountId();
        }
        if ($data->isInitialized('contraAccountNumber') && null !== $data->getContraAccountNumber()) {
            $dataArray['contraAccountNumber'] = $data->getContraAccountNumber();
        }
        if ($data->isInitialized('defaultDiscountAccountId') && null !== $data->getDefaultDiscountAccountId()) {
            $dataArray['defaultDiscountAccountId'] = $data->getDefaultDiscountAccountId();
        }
        if ($data->isInitialized('defaultDiscountAccountNumber') && null !== $data->getDefaultDiscountAccountNumber()) {
            $dataArray['defaultDiscountAccountNumber'] = $data->getDefaultDiscountAccountNumber();
        }
        if ($data->isInitialized('defaultNominalAccountId') && null !== $data->getDefaultNominalAccountId()) {
            $dataArray['defaultNominalAccountId'] = $data->getDefaultNominalAccountId();
        }
        if ($data->isInitialized('defaultNominalAccountNumber') && null !== $data->getDefaultNominalAccountNumber()) {
            $dataArray['defaultNominalAccountNumber'] = $data->getDefaultNominalAccountNumber();
        }
        if ($data->isInitialized('depositAccountId') && null !== $data->getDepositAccountId()) {
            $dataArray['depositAccountId'] = $data->getDepositAccountId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('taxKey') && null !== $data->getTaxKey()) {
            $dataArray['taxKey'] = $data->getTaxKey();
        }
        if ($data->isInitialized('taxType') && null !== $data->getTaxType()) {
            $dataArray['taxType'] = $data->getTaxType();
        }
        if ($data->isInitialized('taxValue') && null !== $data->getTaxValue()) {
            $dataArray['taxValue'] = $data->getTaxValue();
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
        return [\Webhubworks\WeclappApiCore\Model\Tax::class => false];
    }
}