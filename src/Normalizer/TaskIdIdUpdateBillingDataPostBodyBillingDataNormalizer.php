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
class TaskIdIdUpdateBillingDataPostBodyBillingDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaskIdIdUpdateBillingDataPostBodyBillingData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaskIdIdUpdateBillingDataPostBodyBillingData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaskIdIdUpdateBillingDataPostBodyBillingData();
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
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('parentTaskId', $data) && $data['parentTaskId'] !== null) {
            $object->setParentTaskId($data['parentTaskId']);
            unset($data['parentTaskId']);
        }
        elseif (\array_key_exists('parentTaskId', $data) && $data['parentTaskId'] === null) {
            $object->setParentTaskId(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('serviceQuotaTreatmentType', $data) && $data['serviceQuotaTreatmentType'] !== null) {
            $object->setServiceQuotaTreatmentType($data['serviceQuotaTreatmentType']);
            unset($data['serviceQuotaTreatmentType']);
        }
        elseif (\array_key_exists('serviceQuotaTreatmentType', $data) && $data['serviceQuotaTreatmentType'] === null) {
            $object->setServiceQuotaTreatmentType(null);
        }
        if (\array_key_exists('taskOwner', $data) && $data['taskOwner'] !== null) {
            $object->setTaskOwner($this->denormalizer->denormalize($data['taskOwner'], \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context));
            unset($data['taskOwner']);
        }
        elseif (\array_key_exists('taskOwner', $data) && $data['taskOwner'] === null) {
            $object->setTaskOwner(null);
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
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('parentTaskId') && null !== $data->getParentTaskId()) {
            $dataArray['parentTaskId'] = $data->getParentTaskId();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('serviceQuotaTreatmentType') && null !== $data->getServiceQuotaTreatmentType()) {
            $dataArray['serviceQuotaTreatmentType'] = $data->getServiceQuotaTreatmentType();
        }
        if ($data->isInitialized('taskOwner') && null !== $data->getTaskOwner()) {
            $dataArray['taskOwner'] = $this->normalizer->normalize($data->getTaskOwner(), 'json', $context);
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
        return [\Webhubworks\WeclappApiCore\Model\TaskIdIdUpdateBillingDataPostBodyBillingData::class => false];
    }
}