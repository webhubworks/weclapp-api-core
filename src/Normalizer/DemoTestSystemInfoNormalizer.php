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

class DemoTestSystemInfoNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo;
        if (\array_key_exists('createPossible', $data) && \is_int($data['createPossible'])) {
            $data['createPossible'] = (bool) $data['createPossible'];
        }
        if (\array_key_exists('creationInProgress', $data) && \is_int($data['creationInProgress'])) {
            $data['creationInProgress'] = (bool) $data['creationInProgress'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('createPossible', $data)) {
            $object->setCreatePossible($data['createPossible']);
            unset($data['createPossible']);
        }
        if (\array_key_exists('creationInProgress', $data)) {
            $object->setCreationInProgress($data['creationInProgress']);
            unset($data['creationInProgress']);
        }
        if (\array_key_exists('demoInstanceUrl', $data)) {
            $object->setDemoInstanceUrl($data['demoInstanceUrl']);
            unset($data['demoInstanceUrl']);
        }
        if (\array_key_exists('mainInstanceUrl', $data)) {
            $object->setMainInstanceUrl($data['mainInstanceUrl']);
            unset($data['mainInstanceUrl']);
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
        if ($data->isInitialized('createPossible') && $data->getCreatePossible() !== null) {
            $dataArray['createPossible'] = $data->getCreatePossible();
        }
        if ($data->isInitialized('creationInProgress') && $data->getCreationInProgress() !== null) {
            $dataArray['creationInProgress'] = $data->getCreationInProgress();
        }
        if ($data->isInitialized('demoInstanceUrl') && $data->getDemoInstanceUrl() !== null) {
            $dataArray['demoInstanceUrl'] = $data->getDemoInstanceUrl();
        }
        if ($data->isInitialized('mainInstanceUrl') && $data->getMainInstanceUrl() !== null) {
            $dataArray['mainInstanceUrl'] = $data->getMainInstanceUrl();
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
        return [\Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo::class => false];
    }
}
