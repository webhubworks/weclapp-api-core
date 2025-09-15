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
class PurchaseOpenItemIdIdCreatePaymentApplicationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bankTransactionId', $data) && $data['bankTransactionId'] !== null) {
            $object->setBankTransactionId($data['bankTransactionId']);
            unset($data['bankTransactionId']);
        }
        elseif (\array_key_exists('bankTransactionId', $data) && $data['bankTransactionId'] === null) {
            $object->setBankTransactionId(null);
        }
        if (\array_key_exists('cashAccountTransactionId', $data) && $data['cashAccountTransactionId'] !== null) {
            $object->setCashAccountTransactionId($data['cashAccountTransactionId']);
            unset($data['cashAccountTransactionId']);
        }
        elseif (\array_key_exists('cashAccountTransactionId', $data) && $data['cashAccountTransactionId'] === null) {
            $object->setCashAccountTransactionId(null);
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
        if ($data->isInitialized('bankTransactionId') && null !== $data->getBankTransactionId()) {
            $dataArray['bankTransactionId'] = $data->getBankTransactionId();
        }
        if ($data->isInitialized('cashAccountTransactionId') && null !== $data->getCashAccountTransactionId()) {
            $dataArray['cashAccountTransactionId'] = $data->getCashAccountTransactionId();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody::class => false];
    }
}