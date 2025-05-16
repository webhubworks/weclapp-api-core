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

class TransportationOrderIdIdPutDownInternalTransportReferencePostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('targetLoadingEquipmentIdentifierId', $data) && $data['targetLoadingEquipmentIdentifierId'] !== null) {
            $object->setTargetLoadingEquipmentIdentifierId($data['targetLoadingEquipmentIdentifierId']);
            unset($data['targetLoadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('targetLoadingEquipmentIdentifierId', $data) && $data['targetLoadingEquipmentIdentifierId'] === null) {
            $object->setTargetLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] !== null) {
            $object->setTargetStoragePlaceId($data['targetStoragePlaceId']);
            unset($data['targetStoragePlaceId']);
        } elseif (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] === null) {
            $object->setTargetStoragePlaceId(null);
        }
        if (\array_key_exists('targetTransportReferenceId', $data) && $data['targetTransportReferenceId'] !== null) {
            $object->setTargetTransportReferenceId($data['targetTransportReferenceId']);
            unset($data['targetTransportReferenceId']);
        } elseif (\array_key_exists('targetTransportReferenceId', $data) && $data['targetTransportReferenceId'] === null) {
            $object->setTargetTransportReferenceId(null);
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
        if ($data->isInitialized('targetLoadingEquipmentIdentifierId') && $data->getTargetLoadingEquipmentIdentifierId() !== null) {
            $dataArray['targetLoadingEquipmentIdentifierId'] = $data->getTargetLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('targetStoragePlaceId') && $data->getTargetStoragePlaceId() !== null) {
            $dataArray['targetStoragePlaceId'] = $data->getTargetStoragePlaceId();
        }
        if ($data->isInitialized('targetTransportReferenceId') && $data->getTargetTransportReferenceId() !== null) {
            $dataArray['targetTransportReferenceId'] = $data->getTargetTransportReferenceId();
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
        return [\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody::class => false];
    }
}
