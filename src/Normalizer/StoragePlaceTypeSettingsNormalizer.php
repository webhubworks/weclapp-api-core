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
class StoragePlaceTypeSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowMixedStoring', $data) && $data['allowMixedStoring'] !== null) {
            $object->setAllowMixedStoring($data['allowMixedStoring']);
            unset($data['allowMixedStoring']);
        }
        elseif (\array_key_exists('allowMixedStoring', $data) && $data['allowMixedStoring'] === null) {
            $object->setAllowMixedStoring(null);
        }
        if (\array_key_exists('automaticPlaceAssignment', $data) && $data['automaticPlaceAssignment'] !== null) {
            $object->setAutomaticPlaceAssignment($data['automaticPlaceAssignment']);
            unset($data['automaticPlaceAssignment']);
        }
        elseif (\array_key_exists('automaticPlaceAssignment', $data) && $data['automaticPlaceAssignment'] === null) {
            $object->setAutomaticPlaceAssignment(null);
        }
        if (\array_key_exists('multiplePlacesPerBaseArticle', $data) && $data['multiplePlacesPerBaseArticle'] !== null) {
            $object->setMultiplePlacesPerBaseArticle($data['multiplePlacesPerBaseArticle']);
            unset($data['multiplePlacesPerBaseArticle']);
        }
        elseif (\array_key_exists('multiplePlacesPerBaseArticle', $data) && $data['multiplePlacesPerBaseArticle'] === null) {
            $object->setMultiplePlacesPerBaseArticle(null);
        }
        if (\array_key_exists('transportationOrderRequiresFreeSegment', $data) && $data['transportationOrderRequiresFreeSegment'] !== null) {
            $object->setTransportationOrderRequiresFreeSegment($data['transportationOrderRequiresFreeSegment']);
            unset($data['transportationOrderRequiresFreeSegment']);
        }
        elseif (\array_key_exists('transportationOrderRequiresFreeSegment', $data) && $data['transportationOrderRequiresFreeSegment'] === null) {
            $object->setTransportationOrderRequiresFreeSegment(null);
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
        if ($data->isInitialized('allowMixedStoring') && null !== $data->getAllowMixedStoring()) {
            $dataArray['allowMixedStoring'] = $data->getAllowMixedStoring();
        }
        if ($data->isInitialized('automaticPlaceAssignment') && null !== $data->getAutomaticPlaceAssignment()) {
            $dataArray['automaticPlaceAssignment'] = $data->getAutomaticPlaceAssignment();
        }
        if ($data->isInitialized('multiplePlacesPerBaseArticle') && null !== $data->getMultiplePlacesPerBaseArticle()) {
            $dataArray['multiplePlacesPerBaseArticle'] = $data->getMultiplePlacesPerBaseArticle();
        }
        if ($data->isInitialized('transportationOrderRequiresFreeSegment') && null !== $data->getTransportationOrderRequiresFreeSegment()) {
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