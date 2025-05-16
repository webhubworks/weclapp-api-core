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
class WebhookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Webhook::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Webhook::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Webhook();
        if (\array_key_exists('atCreate', $data) && \is_int($data['atCreate'])) {
            $data['atCreate'] = (bool) $data['atCreate'];
        }
        if (\array_key_exists('atDelete', $data) && \is_int($data['atDelete'])) {
            $data['atDelete'] = (bool) $data['atDelete'];
        }
        if (\array_key_exists('atUpdate', $data) && \is_int($data['atUpdate'])) {
            $data['atUpdate'] = (bool) $data['atUpdate'];
        }
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
        if (\array_key_exists('atCreate', $data)) {
            $object->setAtCreate($data['atCreate']);
            unset($data['atCreate']);
        }
        if (\array_key_exists('atDelete', $data)) {
            $object->setAtDelete($data['atDelete']);
            unset($data['atDelete']);
        }
        if (\array_key_exists('atUpdate', $data)) {
            $object->setAtUpdate($data['atUpdate']);
            unset($data['atUpdate']);
        }
        if (\array_key_exists('deactivatedDate', $data)) {
            $object->setDeactivatedDate($data['deactivatedDate']);
            unset($data['deactivatedDate']);
        }
        if (\array_key_exists('entityName', $data)) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        if (\array_key_exists('errorMessage', $data)) {
            $object->setErrorMessage($data['errorMessage']);
            unset($data['errorMessage']);
        }
        if (\array_key_exists('requestMethod', $data)) {
            $object->setRequestMethod($data['requestMethod']);
            unset($data['requestMethod']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('atCreate') && null !== $data->getAtCreate()) {
            $dataArray['atCreate'] = $data->getAtCreate();
        }
        if ($data->isInitialized('atDelete') && null !== $data->getAtDelete()) {
            $dataArray['atDelete'] = $data->getAtDelete();
        }
        if ($data->isInitialized('atUpdate') && null !== $data->getAtUpdate()) {
            $dataArray['atUpdate'] = $data->getAtUpdate();
        }
        if ($data->isInitialized('deactivatedDate') && null !== $data->getDeactivatedDate()) {
            $dataArray['deactivatedDate'] = $data->getDeactivatedDate();
        }
        if ($data->isInitialized('entityName') && null !== $data->getEntityName()) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('errorMessage') && null !== $data->getErrorMessage()) {
            $dataArray['errorMessage'] = $data->getErrorMessage();
        }
        if ($data->isInitialized('requestMethod') && null !== $data->getRequestMethod()) {
            $dataArray['requestMethod'] = $data->getRequestMethod();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
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
        return [\Webhubworks\WeclappApiCore\Model\Webhook::class => false];
    }
}