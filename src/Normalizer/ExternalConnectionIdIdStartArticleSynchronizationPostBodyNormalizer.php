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
class ExternalConnectionIdIdStartArticleSynchronizationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartArticleSynchronizationPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartArticleSynchronizationPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartArticleSynchronizationPostBody();
        if (\array_key_exists('syncToWeclapp', $data) && \is_int($data['syncToWeclapp'])) {
            $data['syncToWeclapp'] = (bool) $data['syncToWeclapp'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('articleIds', $data) && $data['articleIds'] !== null) {
            $values = [];
            foreach ($data['articleIds'] as $value) {
                $values[] = $value;
            }
            $object->setArticleIds($values);
            unset($data['articleIds']);
        }
        elseif (\array_key_exists('articleIds', $data) && $data['articleIds'] === null) {
            $object->setArticleIds(null);
        }
        if (\array_key_exists('syncArticlesSince', $data) && $data['syncArticlesSince'] !== null) {
            $object->setSyncArticlesSince($data['syncArticlesSince']);
            unset($data['syncArticlesSince']);
        }
        elseif (\array_key_exists('syncArticlesSince', $data) && $data['syncArticlesSince'] === null) {
            $object->setSyncArticlesSince(null);
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
        if ($data->isInitialized('articleIds') && null !== $data->getArticleIds()) {
            $values = [];
            foreach ($data->getArticleIds() as $value) {
                $values[] = $value;
            }
            $dataArray['articleIds'] = $values;
        }
        if ($data->isInitialized('syncArticlesSince') && null !== $data->getSyncArticlesSince()) {
            $dataArray['syncArticlesSince'] = $data->getSyncArticlesSince();
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
        return [\Webhubworks\WeclappApiCore\Model\ExternalConnectionIdIdStartArticleSynchronizationPostBody::class => false];
    }
}