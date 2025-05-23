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

class LedgerAccountNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\LedgerAccount::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\LedgerAccount::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\LedgerAccount;
        if (\array_key_exists('automatic', $data) && \is_int($data['automatic'])) {
            $data['automatic'] = (bool) $data['automatic'];
        }
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
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        } elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('automatic', $data) && $data['automatic'] !== null) {
            $object->setAutomatic($data['automatic']);
            unset($data['automatic']);
        } elseif (\array_key_exists('automatic', $data) && $data['automatic'] === null) {
            $object->setAutomatic(null);
        }
        if (\array_key_exists('balanceSheetItem', $data) && $data['balanceSheetItem'] !== null) {
            $object->setBalanceSheetItem($data['balanceSheetItem']);
            unset($data['balanceSheetItem']);
        } elseif (\array_key_exists('balanceSheetItem', $data) && $data['balanceSheetItem'] === null) {
            $object->setBalanceSheetItem(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('parentAccountId', $data) && $data['parentAccountId'] !== null) {
            $object->setParentAccountId($data['parentAccountId']);
            unset($data['parentAccountId']);
        } elseif (\array_key_exists('parentAccountId', $data) && $data['parentAccountId'] === null) {
            $object->setParentAccountId(null);
        }
        if (\array_key_exists('parentAccountNumber', $data) && $data['parentAccountNumber'] !== null) {
            $object->setParentAccountNumber($data['parentAccountNumber']);
            unset($data['parentAccountNumber']);
        } elseif (\array_key_exists('parentAccountNumber', $data) && $data['parentAccountNumber'] === null) {
            $object->setParentAccountNumber(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('automatic') && $data->getAutomatic() !== null) {
            $dataArray['automatic'] = $data->getAutomatic();
        }
        if ($data->isInitialized('balanceSheetItem') && $data->getBalanceSheetItem() !== null) {
            $dataArray['balanceSheetItem'] = $data->getBalanceSheetItem();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('parentAccountId') && $data->getParentAccountId() !== null) {
            $dataArray['parentAccountId'] = $data->getParentAccountId();
        }
        if ($data->isInitialized('parentAccountNumber') && $data->getParentAccountNumber() !== null) {
            $dataArray['parentAccountNumber'] = $data->getParentAccountNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\LedgerAccount::class => false];
    }
}
