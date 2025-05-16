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
class PaymentRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentRun::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentRun::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentRun();
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
        if (\array_key_exists('paymentRunDate', $data)) {
            $object->setPaymentRunDate($data['paymentRunDate']);
            unset($data['paymentRunDate']);
        }
        if (\array_key_exists('paymentRunItems', $data)) {
            $values = [];
            foreach ($data['paymentRunItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class, 'json', $context);
            }
            $object->setPaymentRunItems($values);
            unset($data['paymentRunItems']);
        }
        if (\array_key_exists('paymentRunNumber', $data)) {
            $object->setPaymentRunNumber($data['paymentRunNumber']);
            unset($data['paymentRunNumber']);
        }
        if (\array_key_exists('runByUserId', $data)) {
            $object->setRunByUserId($data['runByUserId']);
            unset($data['runByUserId']);
        }
        if (\array_key_exists('totalAmount', $data)) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
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
        if ($data->isInitialized('paymentRunDate') && null !== $data->getPaymentRunDate()) {
            $dataArray['paymentRunDate'] = $data->getPaymentRunDate();
        }
        if ($data->isInitialized('paymentRunItems') && null !== $data->getPaymentRunItems()) {
            $values = [];
            foreach ($data->getPaymentRunItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentRunItems'] = $values;
        }
        if ($data->isInitialized('paymentRunNumber') && null !== $data->getPaymentRunNumber()) {
            $dataArray['paymentRunNumber'] = $data->getPaymentRunNumber();
        }
        if ($data->isInitialized('runByUserId') && null !== $data->getRunByUserId()) {
            $dataArray['runByUserId'] = $data->getRunByUserId();
        }
        if ($data->isInitialized('totalAmount') && null !== $data->getTotalAmount()) {
            $dataArray['totalAmount'] = $data->getTotalAmount();
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
        return [\Webhubworks\WeclappApiCore\Model\PaymentRun::class => false];
    }
}