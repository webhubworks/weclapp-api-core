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
        if (\array_key_exists('bankAccountId', $data)) {
            $object->setBankAccountId($data['bankAccountId']);
            unset($data['bankAccountId']);
        }
        if (\array_key_exists('cancellationDate', $data)) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('firstDebit', $data)) {
            $object->setFirstDebit($data['firstDebit']);
            unset($data['firstDebit']);
        }
        if (\array_key_exists('mandateReference', $data)) {
            $object->setMandateReference($data['mandateReference']);
            unset($data['mandateReference']);
        }
        if (\array_key_exists('partyBankAccountId', $data)) {
            $object->setPartyBankAccountId($data['partyBankAccountId']);
            unset($data['partyBankAccountId']);
        }
        if (\array_key_exists('runtime', $data)) {
            $object->setRuntime($data['runtime']);
            unset($data['runtime']);
        }
        if (\array_key_exists('signatureDate', $data)) {
            $object->setSignatureDate($data['signatureDate']);
            unset($data['signatureDate']);
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