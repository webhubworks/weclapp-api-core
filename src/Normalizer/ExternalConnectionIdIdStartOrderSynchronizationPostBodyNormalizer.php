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
class ExternalConnectionIdIdStartOrderSynchronizationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartOrderSynchronizationPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartOrderSynchronizationPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartOrderSynchronizationPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('itScopeOrderType', $data) && $data['itScopeOrderType'] !== null) {
            $object->setItScopeOrderType($data['itScopeOrderType']);
            unset($data['itScopeOrderType']);
        }
        elseif (\array_key_exists('itScopeOrderType', $data) && $data['itScopeOrderType'] === null) {
            $object->setItScopeOrderType(null);
        }
        if (\array_key_exists('syncSalesOrdersSince', $data) && $data['syncSalesOrdersSince'] !== null) {
            $object->setSyncSalesOrdersSince($data['syncSalesOrdersSince']);
            unset($data['syncSalesOrdersSince']);
        }
        elseif (\array_key_exists('syncSalesOrdersSince', $data) && $data['syncSalesOrdersSince'] === null) {
            $object->setSyncSalesOrdersSince(null);
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
        if ($data->isInitialized('itScopeOrderType') && null !== $data->getItScopeOrderType()) {
            $dataArray['itScopeOrderType'] = $data->getItScopeOrderType();
        }
        if ($data->isInitialized('syncSalesOrdersSince') && null !== $data->getSyncSalesOrdersSince()) {
            $dataArray['syncSalesOrdersSince'] = $data->getSyncSalesOrdersSince();
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
        return [\Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartOrderSynchronizationPostBody::class => false];
    }
}