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
class InventoryCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody();
        if (\array_key_exists('createEmptyPositionsForEmptyLevels', $data) && \is_int($data['createEmptyPositionsForEmptyLevels'])) {
            $data['createEmptyPositionsForEmptyLevels'] = (bool) $data['createEmptyPositionsForEmptyLevels'];
        }
        if (\array_key_exists('dryRun', $data) && \is_int($data['dryRun'])) {
            $data['dryRun'] = (bool) $data['dryRun'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('createEmptyPositionsForEmptyLevels', $data) && $data['createEmptyPositionsForEmptyLevels'] !== null) {
            $object->setCreateEmptyPositionsForEmptyLevels($data['createEmptyPositionsForEmptyLevels']);
            unset($data['createEmptyPositionsForEmptyLevels']);
        }
        elseif (\array_key_exists('createEmptyPositionsForEmptyLevels', $data) && $data['createEmptyPositionsForEmptyLevels'] === null) {
            $object->setCreateEmptyPositionsForEmptyLevels(null);
        }
        if (\array_key_exists('dryRun', $data) && $data['dryRun'] !== null) {
            $object->setDryRun($data['dryRun']);
            unset($data['dryRun']);
        }
        elseif (\array_key_exists('dryRun', $data) && $data['dryRun'] === null) {
            $object->setDryRun(null);
        }
        if (\array_key_exists('inventory', $data) && $data['inventory'] !== null) {
            $object->setInventory($this->denormalizer->denormalize($data['inventory'], \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class, 'json', $context));
            unset($data['inventory']);
        }
        elseif (\array_key_exists('inventory', $data) && $data['inventory'] === null) {
            $object->setInventory(null);
        }
        if (\array_key_exists('placeForArticlePositionsId', $data) && $data['placeForArticlePositionsId'] !== null) {
            $object->setPlaceForArticlePositionsId($data['placeForArticlePositionsId']);
            unset($data['placeForArticlePositionsId']);
        }
        elseif (\array_key_exists('placeForArticlePositionsId', $data) && $data['placeForArticlePositionsId'] === null) {
            $object->setPlaceForArticlePositionsId(null);
        }
        if (\array_key_exists('storagePlaceIds', $data) && $data['storagePlaceIds'] !== null) {
            $values = [];
            foreach ($data['storagePlaceIds'] as $value) {
                $values[] = $value;
            }
            $object->setStoragePlaceIds($values);
            unset($data['storagePlaceIds']);
        }
        elseif (\array_key_exists('storagePlaceIds', $data) && $data['storagePlaceIds'] === null) {
            $object->setStoragePlaceIds(null);
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
        if ($data->isInitialized('createEmptyPositionsForEmptyLevels') && null !== $data->getCreateEmptyPositionsForEmptyLevels()) {
            $dataArray['createEmptyPositionsForEmptyLevels'] = $data->getCreateEmptyPositionsForEmptyLevels();
        }
        if ($data->isInitialized('dryRun') && null !== $data->getDryRun()) {
            $dataArray['dryRun'] = $data->getDryRun();
        }
        $dataArray['inventory'] = $this->normalizer->normalize($data->getInventory(), 'json', $context);
        if ($data->isInitialized('placeForArticlePositionsId') && null !== $data->getPlaceForArticlePositionsId()) {
            $dataArray['placeForArticlePositionsId'] = $data->getPlaceForArticlePositionsId();
        }
        if ($data->isInitialized('storagePlaceIds') && null !== $data->getStoragePlaceIds()) {
            $values = [];
            foreach ($data->getStoragePlaceIds() as $value) {
                $values[] = $value;
            }
            $dataArray['storagePlaceIds'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody::class => false];
    }
}