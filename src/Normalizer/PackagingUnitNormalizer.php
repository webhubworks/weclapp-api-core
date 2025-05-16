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

class PackagingUnitNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PackagingUnit::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PackagingUnit::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PackagingUnit;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] !== null) {
            $object->setBaseArticleQuantity($data['baseArticleQuantity']);
            unset($data['baseArticleQuantity']);
        } elseif (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] === null) {
            $object->setBaseArticleQuantity(null);
        }
        if (\array_key_exists('packagingUnitQuantity', $data) && $data['packagingUnitQuantity'] !== null) {
            $object->setPackagingUnitQuantity($data['packagingUnitQuantity']);
            unset($data['packagingUnitQuantity']);
        } elseif (\array_key_exists('packagingUnitQuantity', $data) && $data['packagingUnitQuantity'] === null) {
            $object->setPackagingUnitQuantity(null);
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('baseArticleQuantity') && $data->getBaseArticleQuantity() !== null) {
            $dataArray['baseArticleQuantity'] = $data->getBaseArticleQuantity();
        }
        if ($data->isInitialized('packagingUnitQuantity') && $data->getPackagingUnitQuantity() !== null) {
            $dataArray['packagingUnitQuantity'] = $data->getPackagingUnitQuantity();
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
        return [\Webhubworks\WeclappApiCore\Model\PackagingUnit::class => false];
    }
}
