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
class ExternalConnectionIdIdStartEbayListingSynchronizationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostBody();
        if (\array_key_exists('syncToWeclapp', $data) && \is_int($data['syncToWeclapp'])) {
            $data['syncToWeclapp'] = (bool) $data['syncToWeclapp'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ebayListingIds', $data) && $data['ebayListingIds'] !== null) {
            $values = [];
            foreach ($data['ebayListingIds'] as $value) {
                $values[] = $value;
            }
            $object->setEbayListingIds($values);
            unset($data['ebayListingIds']);
        }
        elseif (\array_key_exists('ebayListingIds', $data) && $data['ebayListingIds'] === null) {
            $object->setEbayListingIds(null);
        }
        if (\array_key_exists('syncListingsSince', $data) && $data['syncListingsSince'] !== null) {
            $object->setSyncListingsSince($data['syncListingsSince']);
            unset($data['syncListingsSince']);
        }
        elseif (\array_key_exists('syncListingsSince', $data) && $data['syncListingsSince'] === null) {
            $object->setSyncListingsSince(null);
        }
        if (\array_key_exists('syncToWeclapp', $data) && $data['syncToWeclapp'] !== null) {
            $object->setSyncToWeclapp($data['syncToWeclapp']);
            unset($data['syncToWeclapp']);
        }
        elseif (\array_key_exists('syncToWeclapp', $data) && $data['syncToWeclapp'] === null) {
            $object->setSyncToWeclapp(null);
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
        if ($data->isInitialized('ebayListingIds') && null !== $data->getEbayListingIds()) {
            $values = [];
            foreach ($data->getEbayListingIds() as $value) {
                $values[] = $value;
            }
            $dataArray['ebayListingIds'] = $values;
        }
        if ($data->isInitialized('syncListingsSince') && null !== $data->getSyncListingsSince()) {
            $dataArray['syncListingsSince'] = $data->getSyncListingsSince();
        }
        if ($data->isInitialized('syncToWeclapp') && null !== $data->getSyncToWeclapp()) {
            $dataArray['syncToWeclapp'] = $data->getSyncToWeclapp();
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
        return [\Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostBody::class => false];
    }
}