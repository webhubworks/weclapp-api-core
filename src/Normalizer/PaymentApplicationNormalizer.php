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

class PaymentApplicationNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentApplication;
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
        if (\array_key_exists('amountApplied', $data) && $data['amountApplied'] !== null) {
            $object->setAmountApplied($data['amountApplied']);
            unset($data['amountApplied']);
        } elseif (\array_key_exists('amountApplied', $data) && $data['amountApplied'] === null) {
            $object->setAmountApplied(null);
        }
        if (\array_key_exists('amountAppliedOriginCurrency', $data) && $data['amountAppliedOriginCurrency'] !== null) {
            $object->setAmountAppliedOriginCurrency($data['amountAppliedOriginCurrency']);
            unset($data['amountAppliedOriginCurrency']);
        } elseif (\array_key_exists('amountAppliedOriginCurrency', $data) && $data['amountAppliedOriginCurrency'] === null) {
            $object->setAmountAppliedOriginCurrency(null);
        }
        if (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] !== null) {
            $object->setAmountCostsOfMonetaryTraffic($data['amountCostsOfMonetaryTraffic']);
            unset($data['amountCostsOfMonetaryTraffic']);
        } elseif (\array_key_exists('amountCostsOfMonetaryTraffic', $data) && $data['amountCostsOfMonetaryTraffic'] === null) {
            $object->setAmountCostsOfMonetaryTraffic(null);
        }
        if (\array_key_exists('amountDiscountApplied', $data) && $data['amountDiscountApplied'] !== null) {
            $object->setAmountDiscountApplied($data['amountDiscountApplied']);
            unset($data['amountDiscountApplied']);
        } elseif (\array_key_exists('amountDiscountApplied', $data) && $data['amountDiscountApplied'] === null) {
            $object->setAmountDiscountApplied(null);
        }
        if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        } elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
            $object->setCreatedById(null);
        }
        if (\array_key_exists('moneyTransactionId', $data) && $data['moneyTransactionId'] !== null) {
            $object->setMoneyTransactionId($data['moneyTransactionId']);
            unset($data['moneyTransactionId']);
        } elseif (\array_key_exists('moneyTransactionId', $data) && $data['moneyTransactionId'] === null) {
            $object->setMoneyTransactionId(null);
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
        if ($data->isInitialized('amountApplied') && $data->getAmountApplied() !== null) {
            $dataArray['amountApplied'] = $data->getAmountApplied();
        }
        if ($data->isInitialized('amountAppliedOriginCurrency') && $data->getAmountAppliedOriginCurrency() !== null) {
            $dataArray['amountAppliedOriginCurrency'] = $data->getAmountAppliedOriginCurrency();
        }
        if ($data->isInitialized('amountCostsOfMonetaryTraffic') && $data->getAmountCostsOfMonetaryTraffic() !== null) {
            $dataArray['amountCostsOfMonetaryTraffic'] = $data->getAmountCostsOfMonetaryTraffic();
        }
        if ($data->isInitialized('amountDiscountApplied') && $data->getAmountDiscountApplied() !== null) {
            $dataArray['amountDiscountApplied'] = $data->getAmountDiscountApplied();
        }
        if ($data->isInitialized('createdById') && $data->getCreatedById() !== null) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('moneyTransactionId') && $data->getMoneyTransactionId() !== null) {
            $dataArray['moneyTransactionId'] = $data->getMoneyTransactionId();
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
        return [\Webhubworks\WeclappApiCore\Model\PaymentApplication::class => false];
    }
}
