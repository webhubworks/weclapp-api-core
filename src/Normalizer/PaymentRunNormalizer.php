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

class PaymentRunNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentRun;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('paymentRunDate', $data) && $data['paymentRunDate'] !== null) {
            $object->setPaymentRunDate($data['paymentRunDate']);
            unset($data['paymentRunDate']);
        } elseif (\array_key_exists('paymentRunDate', $data) && $data['paymentRunDate'] === null) {
            $object->setPaymentRunDate(null);
        }
        if (\array_key_exists('paymentRunItems', $data) && $data['paymentRunItems'] !== null) {
            $values = [];
            foreach ($data['paymentRunItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class, 'json', $context);
            }
            $object->setPaymentRunItems($values);
            unset($data['paymentRunItems']);
        } elseif (\array_key_exists('paymentRunItems', $data) && $data['paymentRunItems'] === null) {
            $object->setPaymentRunItems(null);
        }
        if (\array_key_exists('paymentRunNumber', $data) && $data['paymentRunNumber'] !== null) {
            $object->setPaymentRunNumber($data['paymentRunNumber']);
            unset($data['paymentRunNumber']);
        } elseif (\array_key_exists('paymentRunNumber', $data) && $data['paymentRunNumber'] === null) {
            $object->setPaymentRunNumber(null);
        }
        if (\array_key_exists('runByUserId', $data) && $data['runByUserId'] !== null) {
            $object->setRunByUserId($data['runByUserId']);
            unset($data['runByUserId']);
        } elseif (\array_key_exists('runByUserId', $data) && $data['runByUserId'] === null) {
            $object->setRunByUserId(null);
        }
        if (\array_key_exists('totalAmount', $data) && $data['totalAmount'] !== null) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
        } elseif (\array_key_exists('totalAmount', $data) && $data['totalAmount'] === null) {
            $object->setTotalAmount(null);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('paymentRunDate') && $data->getPaymentRunDate() !== null) {
            $dataArray['paymentRunDate'] = $data->getPaymentRunDate();
        }
        if ($data->isInitialized('paymentRunItems') && $data->getPaymentRunItems() !== null) {
            $values = [];
            foreach ($data->getPaymentRunItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentRunItems'] = $values;
        }
        if ($data->isInitialized('paymentRunNumber') && $data->getPaymentRunNumber() !== null) {
            $dataArray['paymentRunNumber'] = $data->getPaymentRunNumber();
        }
        if ($data->isInitialized('runByUserId') && $data->getRunByUserId() !== null) {
            $dataArray['runByUserId'] = $data->getRunByUserId();
        }
        if ($data->isInitialized('totalAmount') && $data->getTotalAmount() !== null) {
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
