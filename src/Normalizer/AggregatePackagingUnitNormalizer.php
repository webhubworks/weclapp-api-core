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
class AggregatePackagingUnitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleName', $data) && $data['articleName'] !== null) {
            $object->setArticleName($data['articleName']);
            unset($data['articleName']);
        }
        elseif (\array_key_exists('articleName', $data) && $data['articleName'] === null) {
            $object->setArticleName(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] !== null) {
            $object->setBaseArticleQuantity($data['baseArticleQuantity']);
            unset($data['baseArticleQuantity']);
        }
        elseif (\array_key_exists('baseArticleQuantity', $data) && $data['baseArticleQuantity'] === null) {
            $object->setBaseArticleQuantity(null);
        }
        if (\array_key_exists('packagingUnitQuantity', $data) && $data['packagingUnitQuantity'] !== null) {
            $object->setPackagingUnitQuantity($data['packagingUnitQuantity']);
            unset($data['packagingUnitQuantity']);
        }
        elseif (\array_key_exists('packagingUnitQuantity', $data) && $data['packagingUnitQuantity'] === null) {
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
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleName') && null !== $data->getArticleName()) {
            $dataArray['articleName'] = $data->getArticleName();
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('baseArticleQuantity') && null !== $data->getBaseArticleQuantity()) {
            $dataArray['baseArticleQuantity'] = $data->getBaseArticleQuantity();
        }
        if ($data->isInitialized('packagingUnitQuantity') && null !== $data->getPackagingUnitQuantity()) {
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
        return [\Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit::class => false];
    }
}