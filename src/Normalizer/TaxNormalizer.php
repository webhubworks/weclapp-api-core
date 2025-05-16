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

class TaxNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Tax;
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
        if (\array_key_exists('accountId', $data) && $data['accountId'] !== null) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        } elseif (\array_key_exists('accountId', $data) && $data['accountId'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        } elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('contraAccountId', $data) && $data['contraAccountId'] !== null) {
            $object->setContraAccountId($data['contraAccountId']);
            unset($data['contraAccountId']);
        } elseif (\array_key_exists('contraAccountId', $data) && $data['contraAccountId'] === null) {
            $object->setContraAccountId(null);
        }
        if (\array_key_exists('contraAccountNumber', $data) && $data['contraAccountNumber'] !== null) {
            $object->setContraAccountNumber($data['contraAccountNumber']);
            unset($data['contraAccountNumber']);
        } elseif (\array_key_exists('contraAccountNumber', $data) && $data['contraAccountNumber'] === null) {
            $object->setContraAccountNumber(null);
        }
        if (\array_key_exists('defaultDiscountAccountId', $data) && $data['defaultDiscountAccountId'] !== null) {
            $object->setDefaultDiscountAccountId($data['defaultDiscountAccountId']);
            unset($data['defaultDiscountAccountId']);
        } elseif (\array_key_exists('defaultDiscountAccountId', $data) && $data['defaultDiscountAccountId'] === null) {
            $object->setDefaultDiscountAccountId(null);
        }
        if (\array_key_exists('defaultDiscountAccountNumber', $data) && $data['defaultDiscountAccountNumber'] !== null) {
            $object->setDefaultDiscountAccountNumber($data['defaultDiscountAccountNumber']);
            unset($data['defaultDiscountAccountNumber']);
        } elseif (\array_key_exists('defaultDiscountAccountNumber', $data) && $data['defaultDiscountAccountNumber'] === null) {
            $object->setDefaultDiscountAccountNumber(null);
        }
        if (\array_key_exists('defaultNominalAccountId', $data) && $data['defaultNominalAccountId'] !== null) {
            $object->setDefaultNominalAccountId($data['defaultNominalAccountId']);
            unset($data['defaultNominalAccountId']);
        } elseif (\array_key_exists('defaultNominalAccountId', $data) && $data['defaultNominalAccountId'] === null) {
            $object->setDefaultNominalAccountId(null);
        }
        if (\array_key_exists('defaultNominalAccountNumber', $data) && $data['defaultNominalAccountNumber'] !== null) {
            $object->setDefaultNominalAccountNumber($data['defaultNominalAccountNumber']);
            unset($data['defaultNominalAccountNumber']);
        } elseif (\array_key_exists('defaultNominalAccountNumber', $data) && $data['defaultNominalAccountNumber'] === null) {
            $object->setDefaultNominalAccountNumber(null);
        }
        if (\array_key_exists('depositAccountId', $data) && $data['depositAccountId'] !== null) {
            $object->setDepositAccountId($data['depositAccountId']);
            unset($data['depositAccountId']);
        } elseif (\array_key_exists('depositAccountId', $data) && $data['depositAccountId'] === null) {
            $object->setDepositAccountId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('taxKey', $data) && $data['taxKey'] !== null) {
            $object->setTaxKey($data['taxKey']);
            unset($data['taxKey']);
        } elseif (\array_key_exists('taxKey', $data) && $data['taxKey'] === null) {
            $object->setTaxKey(null);
        }
        if (\array_key_exists('taxType', $data) && $data['taxType'] !== null) {
            $object->setTaxType($data['taxType']);
            unset($data['taxType']);
        } elseif (\array_key_exists('taxType', $data) && $data['taxType'] === null) {
            $object->setTaxType(null);
        }
        if (\array_key_exists('taxValue', $data) && $data['taxValue'] !== null) {
            $object->setTaxValue($data['taxValue']);
            unset($data['taxValue']);
        } elseif (\array_key_exists('taxValue', $data) && $data['taxValue'] === null) {
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('accountId') && $data->getAccountId() !== null) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('contraAccountId') && $data->getContraAccountId() !== null) {
            $dataArray['contraAccountId'] = $data->getContraAccountId();
        }
        if ($data->isInitialized('contraAccountNumber') && $data->getContraAccountNumber() !== null) {
            $dataArray['contraAccountNumber'] = $data->getContraAccountNumber();
        }
        if ($data->isInitialized('defaultDiscountAccountId') && $data->getDefaultDiscountAccountId() !== null) {
            $dataArray['defaultDiscountAccountId'] = $data->getDefaultDiscountAccountId();
        }
        if ($data->isInitialized('defaultDiscountAccountNumber') && $data->getDefaultDiscountAccountNumber() !== null) {
            $dataArray['defaultDiscountAccountNumber'] = $data->getDefaultDiscountAccountNumber();
        }
        if ($data->isInitialized('defaultNominalAccountId') && $data->getDefaultNominalAccountId() !== null) {
            $dataArray['defaultNominalAccountId'] = $data->getDefaultNominalAccountId();
        }
        if ($data->isInitialized('defaultNominalAccountNumber') && $data->getDefaultNominalAccountNumber() !== null) {
            $dataArray['defaultNominalAccountNumber'] = $data->getDefaultNominalAccountNumber();
        }
        if ($data->isInitialized('depositAccountId') && $data->getDepositAccountId() !== null) {
            $dataArray['depositAccountId'] = $data->getDepositAccountId();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('taxKey') && $data->getTaxKey() !== null) {
            $dataArray['taxKey'] = $data->getTaxKey();
        }
        if ($data->isInitialized('taxType') && $data->getTaxType() !== null) {
            $dataArray['taxType'] = $data->getTaxType();
        }
        if ($data->isInitialized('taxValue') && $data->getTaxValue() !== null) {
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
