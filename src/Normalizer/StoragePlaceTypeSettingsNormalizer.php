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

class StoragePlaceTypeSettingsNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings;
        if (\array_key_exists('allowMixedStoring', $data) && \is_int($data['allowMixedStoring'])) {
            $data['allowMixedStoring'] = (bool) $data['allowMixedStoring'];
        }
        if (\array_key_exists('automaticPlaceAssignment', $data) && \is_int($data['automaticPlaceAssignment'])) {
            $data['automaticPlaceAssignment'] = (bool) $data['automaticPlaceAssignment'];
        }
        if (\array_key_exists('multiplePlacesPerBaseArticle', $data) && \is_int($data['multiplePlacesPerBaseArticle'])) {
            $data['multiplePlacesPerBaseArticle'] = (bool) $data['multiplePlacesPerBaseArticle'];
        }
        if (\array_key_exists('transportationOrderRequiresFreeSegment', $data) && \is_int($data['transportationOrderRequiresFreeSegment'])) {
            $data['transportationOrderRequiresFreeSegment'] = (bool) $data['transportationOrderRequiresFreeSegment'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('allowMixedStoring', $data)) {
            $object->setAllowMixedStoring($data['allowMixedStoring']);
            unset($data['allowMixedStoring']);
        }
        if (\array_key_exists('automaticPlaceAssignment', $data)) {
            $object->setAutomaticPlaceAssignment($data['automaticPlaceAssignment']);
            unset($data['automaticPlaceAssignment']);
        }
        if (\array_key_exists('multiplePlacesPerBaseArticle', $data)) {
            $object->setMultiplePlacesPerBaseArticle($data['multiplePlacesPerBaseArticle']);
            unset($data['multiplePlacesPerBaseArticle']);
        }
        if (\array_key_exists('transportationOrderRequiresFreeSegment', $data)) {
            $object->setTransportationOrderRequiresFreeSegment($data['transportationOrderRequiresFreeSegment']);
            unset($data['transportationOrderRequiresFreeSegment']);
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
        if ($data->isInitialized('allowMixedStoring') && $data->getAllowMixedStoring() !== null) {
            $dataArray['allowMixedStoring'] = $data->getAllowMixedStoring();
        }
        if ($data->isInitialized('automaticPlaceAssignment') && $data->getAutomaticPlaceAssignment() !== null) {
            $dataArray['automaticPlaceAssignment'] = $data->getAutomaticPlaceAssignment();
        }
        if ($data->isInitialized('multiplePlacesPerBaseArticle') && $data->getMultiplePlacesPerBaseArticle() !== null) {
            $dataArray['multiplePlacesPerBaseArticle'] = $data->getMultiplePlacesPerBaseArticle();
        }
        if ($data->isInitialized('transportationOrderRequiresFreeSegment') && $data->getTransportationOrderRequiresFreeSegment() !== null) {
            $dataArray['transportationOrderRequiresFreeSegment'] = $data->getTransportationOrderRequiresFreeSegment();
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
        return [\Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class => false];
    }
}
