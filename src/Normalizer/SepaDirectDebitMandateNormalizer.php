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
class SepaDirectDebitMandateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate();
        if (\array_key_exists('firstDebit', $data) && \is_int($data['firstDebit'])) {
            $data['firstDebit'] = (bool) $data['firstDebit'];
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
        if (\array_key_exists('bankAccountId', $data) && $data['bankAccountId'] !== null) {
            $object->setBankAccountId($data['bankAccountId']);
            unset($data['bankAccountId']);
        }
        elseif (\array_key_exists('bankAccountId', $data) && $data['bankAccountId'] === null) {
            $object->setBankAccountId(null);
        }
        if (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] !== null) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        }
        elseif (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] === null) {
            $object->setCancellationDate(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('firstDebit', $data) && $data['firstDebit'] !== null) {
            $object->setFirstDebit($data['firstDebit']);
            unset($data['firstDebit']);
        }
        elseif (\array_key_exists('firstDebit', $data) && $data['firstDebit'] === null) {
            $object->setFirstDebit(null);
        }
        if (\array_key_exists('mandateReference', $data) && $data['mandateReference'] !== null) {
            $object->setMandateReference($data['mandateReference']);
            unset($data['mandateReference']);
        }
        elseif (\array_key_exists('mandateReference', $data) && $data['mandateReference'] === null) {
            $object->setMandateReference(null);
        }
        if (\array_key_exists('partyBankAccountId', $data) && $data['partyBankAccountId'] !== null) {
            $object->setPartyBankAccountId($data['partyBankAccountId']);
            unset($data['partyBankAccountId']);
        }
        elseif (\array_key_exists('partyBankAccountId', $data) && $data['partyBankAccountId'] === null) {
            $object->setPartyBankAccountId(null);
        }
        if (\array_key_exists('runtime', $data) && $data['runtime'] !== null) {
            $object->setRuntime($data['runtime']);
            unset($data['runtime']);
        }
        elseif (\array_key_exists('runtime', $data) && $data['runtime'] === null) {
            $object->setRuntime(null);
        }
        if (\array_key_exists('signatureDate', $data) && $data['signatureDate'] !== null) {
            $object->setSignatureDate($data['signatureDate']);
            unset($data['signatureDate']);
        }
        elseif (\array_key_exists('signatureDate', $data) && $data['signatureDate'] === null) {
            $object->setSignatureDate(null);
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
        if ($data->isInitialized('bankAccountId') && null !== $data->getBankAccountId()) {
            $dataArray['bankAccountId'] = $data->getBankAccountId();
        }
        if ($data->isInitialized('cancellationDate') && null !== $data->getCancellationDate()) {
            $dataArray['cancellationDate'] = $data->getCancellationDate();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('firstDebit') && null !== $data->getFirstDebit()) {
            $dataArray['firstDebit'] = $data->getFirstDebit();
        }
        if ($data->isInitialized('mandateReference') && null !== $data->getMandateReference()) {
            $dataArray['mandateReference'] = $data->getMandateReference();
        }
        if ($data->isInitialized('partyBankAccountId') && null !== $data->getPartyBankAccountId()) {
            $dataArray['partyBankAccountId'] = $data->getPartyBankAccountId();
        }
        if ($data->isInitialized('runtime') && null !== $data->getRuntime()) {
            $dataArray['runtime'] = $data->getRuntime();
        }
        if ($data->isInitialized('signatureDate') && null !== $data->getSignatureDate()) {
            $dataArray['signatureDate'] = $data->getSignatureDate();
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
        return [\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate::class => false];
    }
}