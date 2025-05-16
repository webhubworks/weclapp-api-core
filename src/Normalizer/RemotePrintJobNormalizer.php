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
        if (\array_key_exists('documentId', $data)) {
            $object->setDocumentId($data['documentId']);
            unset($data['documentId']);
        }
        if (\array_key_exists('printStatus', $data)) {
            $object->setPrintStatus($data['printStatus']);
            unset($data['printStatus']);
        }
        if (\array_key_exists('printerName', $data)) {
            $object->setPrinterName($data['printerName']);
            unset($data['printerName']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        if (\array_key_exists('weclappOsHardwareId', $data)) {
            $object->setWeclappOsHardwareId($data['weclappOsHardwareId']);
            unset($data['weclappOsHardwareId']);
        }
        if (\array_key_exists('weclappOsId', $data)) {
            $object->setWeclappOsId($data['weclappOsId']);
            unset($data['weclappOsId']);
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
