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
class VariantArticleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\VariantArticle::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\VariantArticle::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\VariantArticle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('primaryArticleId', $data)) {
            $object->setPrimaryArticleId($data['primaryArticleId']);
            unset($data['primaryArticleId']);
        }
        if (\array_key_exists('primaryArticleNumber', $data)) {
            $object->setPrimaryArticleNumber($data['primaryArticleNumber']);
            unset($data['primaryArticleNumber']);
        }
        if (\array_key_exists('variantArticleName', $data)) {
            $object->setVariantArticleName($data['variantArticleName']);
            unset($data['variantArticleName']);
        }
        if (\array_key_exists('variantArticleNumber', $data)) {
            $object->setVariantArticleNumber($data['variantArticleNumber']);
            unset($data['variantArticleNumber']);
        }
        if (\array_key_exists('variants', $data)) {
            $values = [];
            foreach ($data['variants'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\VariantArticleVariantWithoutReference::class, 'json', $context);
            }
            $object->setVariants($values);
            unset($data['variants']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('primaryArticleId') && null !== $data->getPrimaryArticleId()) {
            $dataArray['primaryArticleId'] = $data->getPrimaryArticleId();
        }
        if ($data->isInitialized('primaryArticleNumber') && null !== $data->getPrimaryArticleNumber()) {
            $dataArray['primaryArticleNumber'] = $data->getPrimaryArticleNumber();
        }
        if ($data->isInitialized('variantArticleName') && null !== $data->getVariantArticleName()) {
            $dataArray['variantArticleName'] = $data->getVariantArticleName();
        }
        if ($data->isInitialized('variantArticleNumber') && null !== $data->getVariantArticleNumber()) {
            $dataArray['variantArticleNumber'] = $data->getVariantArticleNumber();
        }
        if ($data->isInitialized('variants') && null !== $data->getVariants()) {
            $values = [];
            foreach ($data->getVariants() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['variants'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\VariantArticle::class => false];
    }
}