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

class PartyBankAccountNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PartyBankAccount;
        if (\array_key_exists('primary', $data) && \is_int($data['primary'])) {
            $data['primary'] = (bool) $data['primary'];
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
        if (\array_key_exists('accountHolder', $data)) {
            $object->setAccountHolder($data['accountHolder']);
            unset($data['accountHolder']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('bankCode', $data)) {
            $object->setBankCode($data['bankCode']);
            unset($data['bankCode']);
        }
        if (\array_key_exists('creditInstitute', $data)) {
            $object->setCreditInstitute($data['creditInstitute']);
            unset($data['creditInstitute']);
        }
        if (\array_key_exists('partyId', $data)) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        if (\array_key_exists('primary', $data)) {
            $object->setPrimary($data['primary']);
            unset($data['primary']);
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
        if ($data->isInitialized('accountHolder') && $data->getAccountHolder() !== null) {
            $dataArray['accountHolder'] = $data->getAccountHolder();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('bankCode') && $data->getBankCode() !== null) {
            $dataArray['bankCode'] = $data->getBankCode();
        }
        if ($data->isInitialized('creditInstitute') && $data->getCreditInstitute() !== null) {
            $dataArray['creditInstitute'] = $data->getCreditInstitute();
        }
        if ($data->isInitialized('partyId') && $data->getPartyId() !== null) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('primary') && $data->getPrimary() !== null) {
            $dataArray['primary'] = $data->getPrimary();
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
        return [\Webhubworks\WeclappApiCore\Model\PartyBankAccount::class => false];
    }
}
