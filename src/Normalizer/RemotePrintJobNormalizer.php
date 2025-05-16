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

class RemotePrintJobNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\RemotePrintJob::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\RemotePrintJob::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\RemotePrintJob;
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
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->setDocumentId($data['documentId']);
            unset($data['documentId']);
        } elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->setDocumentId(null);
        }
        if (\array_key_exists('printStatus', $data) && $data['printStatus'] !== null) {
            $object->setPrintStatus($data['printStatus']);
            unset($data['printStatus']);
        } elseif (\array_key_exists('printStatus', $data) && $data['printStatus'] === null) {
            $object->setPrintStatus(null);
        }
        if (\array_key_exists('printerName', $data) && $data['printerName'] !== null) {
            $object->setPrinterName($data['printerName']);
            unset($data['printerName']);
        } elseif (\array_key_exists('printerName', $data) && $data['printerName'] === null) {
            $object->setPrinterName(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        } elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('weclappOsHardwareId', $data) && $data['weclappOsHardwareId'] !== null) {
            $object->setWeclappOsHardwareId($data['weclappOsHardwareId']);
            unset($data['weclappOsHardwareId']);
        } elseif (\array_key_exists('weclappOsHardwareId', $data) && $data['weclappOsHardwareId'] === null) {
            $object->setWeclappOsHardwareId(null);
        }
        if (\array_key_exists('weclappOsId', $data) && $data['weclappOsId'] !== null) {
            $object->setWeclappOsId($data['weclappOsId']);
            unset($data['weclappOsId']);
        } elseif (\array_key_exists('weclappOsId', $data) && $data['weclappOsId'] === null) {
            $object->setWeclappOsId(null);
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
        if ($data->isInitialized('documentId') && $data->getDocumentId() !== null) {
            $dataArray['documentId'] = $data->getDocumentId();
        }
        if ($data->isInitialized('printStatus') && $data->getPrintStatus() !== null) {
            $dataArray['printStatus'] = $data->getPrintStatus();
        }
        if ($data->isInitialized('printerName') && $data->getPrinterName() !== null) {
            $dataArray['printerName'] = $data->getPrinterName();
        }
        if ($data->isInitialized('quantity') && $data->getQuantity() !== null) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('userId') && $data->getUserId() !== null) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('weclappOsHardwareId') && $data->getWeclappOsHardwareId() !== null) {
            $dataArray['weclappOsHardwareId'] = $data->getWeclappOsHardwareId();
        }
        if ($data->isInitialized('weclappOsId') && $data->getWeclappOsId() !== null) {
            $dataArray['weclappOsId'] = $data->getWeclappOsId();
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
        return [\Webhubworks\WeclappApiCore\Model\RemotePrintJob::class => false];
    }
}
