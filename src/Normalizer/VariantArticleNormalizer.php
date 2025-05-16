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

class VariantArticleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\VariantArticle;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('primaryArticleId', $data) && $data['primaryArticleId'] !== null) {
            $object->setPrimaryArticleId($data['primaryArticleId']);
            unset($data['primaryArticleId']);
        } elseif (\array_key_exists('primaryArticleId', $data) && $data['primaryArticleId'] === null) {
            $object->setPrimaryArticleId(null);
        }
        if (\array_key_exists('primaryArticleNumber', $data) && $data['primaryArticleNumber'] !== null) {
            $object->setPrimaryArticleNumber($data['primaryArticleNumber']);
            unset($data['primaryArticleNumber']);
        } elseif (\array_key_exists('primaryArticleNumber', $data) && $data['primaryArticleNumber'] === null) {
            $object->setPrimaryArticleNumber(null);
        }
        if (\array_key_exists('variantArticleName', $data) && $data['variantArticleName'] !== null) {
            $object->setVariantArticleName($data['variantArticleName']);
            unset($data['variantArticleName']);
        } elseif (\array_key_exists('variantArticleName', $data) && $data['variantArticleName'] === null) {
            $object->setVariantArticleName(null);
        }
        if (\array_key_exists('variantArticleNumber', $data) && $data['variantArticleNumber'] !== null) {
            $object->setVariantArticleNumber($data['variantArticleNumber']);
            unset($data['variantArticleNumber']);
        } elseif (\array_key_exists('variantArticleNumber', $data) && $data['variantArticleNumber'] === null) {
            $object->setVariantArticleNumber(null);
        }
        if (\array_key_exists('variants', $data) && $data['variants'] !== null) {
            $values = [];
            foreach ($data['variants'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\VariantArticleVariantWithoutReference::class, 'json', $context);
            }
            $object->setVariants($values);
            unset($data['variants']);
        } elseif (\array_key_exists('variants', $data) && $data['variants'] === null) {
            $object->setVariants(null);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('primaryArticleId') && $data->getPrimaryArticleId() !== null) {
            $dataArray['primaryArticleId'] = $data->getPrimaryArticleId();
        }
        if ($data->isInitialized('primaryArticleNumber') && $data->getPrimaryArticleNumber() !== null) {
            $dataArray['primaryArticleNumber'] = $data->getPrimaryArticleNumber();
        }
        if ($data->isInitialized('variantArticleName') && $data->getVariantArticleName() !== null) {
            $dataArray['variantArticleName'] = $data->getVariantArticleName();
        }
        if ($data->isInitialized('variantArticleNumber') && $data->getVariantArticleNumber() !== null) {
            $dataArray['variantArticleNumber'] = $data->getVariantArticleNumber();
        }
        if ($data->isInitialized('variants') && $data->getVariants() !== null) {
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
