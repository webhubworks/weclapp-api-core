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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('atCreate', $data) && $data['atCreate'] !== null) {
            $object->setAtCreate($data['atCreate']);
            unset($data['atCreate']);
        }
        elseif (\array_key_exists('atCreate', $data) && $data['atCreate'] === null) {
            $object->setAtCreate(null);
        }
        if (\array_key_exists('atDelete', $data) && $data['atDelete'] !== null) {
            $object->setAtDelete($data['atDelete']);
            unset($data['atDelete']);
        }
        elseif (\array_key_exists('atDelete', $data) && $data['atDelete'] === null) {
            $object->setAtDelete(null);
        }
        if (\array_key_exists('atUpdate', $data) && $data['atUpdate'] !== null) {
            $object->setAtUpdate($data['atUpdate']);
            unset($data['atUpdate']);
        }
        elseif (\array_key_exists('atUpdate', $data) && $data['atUpdate'] === null) {
            $object->setAtUpdate(null);
        }
        if (\array_key_exists('deactivatedDate', $data) && $data['deactivatedDate'] !== null) {
            $object->setDeactivatedDate($data['deactivatedDate']);
            unset($data['deactivatedDate']);
        }
        elseif (\array_key_exists('deactivatedDate', $data) && $data['deactivatedDate'] === null) {
            $object->setDeactivatedDate(null);
        }
        if (\array_key_exists('entityName', $data) && $data['entityName'] !== null) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        elseif (\array_key_exists('entityName', $data) && $data['entityName'] === null) {
            $object->setEntityName(null);
        }
        if (\array_key_exists('errorMessage', $data) && $data['errorMessage'] !== null) {
            $object->setErrorMessage($data['errorMessage']);
            unset($data['errorMessage']);
        }
        elseif (\array_key_exists('errorMessage', $data) && $data['errorMessage'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('requestMethod', $data) && $data['requestMethod'] !== null) {
            $object->setRequestMethod($data['requestMethod']);
            unset($data['requestMethod']);
        }
        elseif (\array_key_exists('requestMethod', $data) && $data['requestMethod'] === null) {
            $object->setRequestMethod(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
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