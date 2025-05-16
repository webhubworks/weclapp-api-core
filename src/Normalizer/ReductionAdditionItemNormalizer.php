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

class ReductionAdditionItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem;
        if (\array_key_exists('specialPriceReduction', $data) && \is_int($data['specialPriceReduction'])) {
            $data['specialPriceReduction'] = (bool) $data['specialPriceReduction'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
            unset($data['position']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('specialPriceReduction', $data)) {
            $object->setSpecialPriceReduction($data['specialPriceReduction']);
            unset($data['specialPriceReduction']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
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
        if ($data->isInitialized('position') && $data->getPosition() !== null) {
            $dataArray['position'] = $data->getPosition();
        }
        if ($data->isInitialized('source') && $data->getSource() !== null) {
            $dataArray['source'] = $data->getSource();
        }
        if ($data->isInitialized('specialPriceReduction') && $data->getSpecialPriceReduction() !== null) {
            $dataArray['specialPriceReduction'] = $data->getSpecialPriceReduction();
        }
        if ($data->isInitialized('title') && $data->getTitle() !== null) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('type') && $data->getType() !== null) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('value') && $data->getValue() !== null) {
            $dataArray['value'] = $data->getValue();
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
        return [\Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class => false];
    }
}
