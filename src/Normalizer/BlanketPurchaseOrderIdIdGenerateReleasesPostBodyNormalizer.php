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

class BlanketPurchaseOrderIdIdGenerateReleasesPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody;
        if (\array_key_exists('fixReleasedQuantity', $data) && \is_int($data['fixReleasedQuantity'])) {
            $data['fixReleasedQuantity'] = (bool) $data['fixReleasedQuantity'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('firstScheduledDeliveryDate', $data)) {
            $object->setFirstScheduledDeliveryDate($data['firstScheduledDeliveryDate']);
            unset($data['firstScheduledDeliveryDate']);
        }
        if (\array_key_exists('fixReleasedQuantity', $data)) {
            $object->setFixReleasedQuantity($data['fixReleasedQuantity']);
            unset($data['fixReleasedQuantity']);
        }
        if (\array_key_exists('releasedQuantity', $data)) {
            $object->setReleasedQuantity($data['releasedQuantity']);
            unset($data['releasedQuantity']);
        }
        if (\array_key_exists('repeatInterval', $data)) {
            $object->setRepeatInterval($data['repeatInterval']);
            unset($data['repeatInterval']);
        }
        if (\array_key_exists('repeatType', $data)) {
            $object->setRepeatType($data['repeatType']);
            unset($data['repeatType']);
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
        $dataArray['firstScheduledDeliveryDate'] = $data->getFirstScheduledDeliveryDate();
        $dataArray['fixReleasedQuantity'] = $data->getFixReleasedQuantity();
        if ($data->isInitialized('releasedQuantity') && $data->getReleasedQuantity() !== null) {
            $dataArray['releasedQuantity'] = $data->getReleasedQuantity();
        }
        $dataArray['repeatInterval'] = $data->getRepeatInterval();
        $dataArray['repeatType'] = $data->getRepeatType();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody::class => false];
    }
}
