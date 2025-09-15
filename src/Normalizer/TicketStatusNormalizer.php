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
class TicketStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketStatus();
        if (\array_key_exists('defaultForInternal', $data) && \is_int($data['defaultForInternal'])) {
            $data['defaultForInternal'] = (bool) $data['defaultForInternal'];
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
        if (\array_key_exists('autoChangeDays', $data) && $data['autoChangeDays'] !== null) {
            $object->setAutoChangeDays($data['autoChangeDays']);
            unset($data['autoChangeDays']);
        }
        elseif (\array_key_exists('autoChangeDays', $data) && $data['autoChangeDays'] === null) {
            $object->setAutoChangeDays(null);
        }
        if (\array_key_exists('autoChangeTicketStatusId', $data) && $data['autoChangeTicketStatusId'] !== null) {
            $object->setAutoChangeTicketStatusId($data['autoChangeTicketStatusId']);
            unset($data['autoChangeTicketStatusId']);
        }
        elseif (\array_key_exists('autoChangeTicketStatusId', $data) && $data['autoChangeTicketStatusId'] === null) {
            $object->setAutoChangeTicketStatusId(null);
        }
        if (\array_key_exists('color', $data) && $data['color'] !== null) {
            $object->setColor($data['color']);
            unset($data['color']);
        }
        elseif (\array_key_exists('color', $data) && $data['color'] === null) {
            $object->setColor(null);
        }
        if (\array_key_exists('defaultForInternal', $data) && $data['defaultForInternal'] !== null) {
            $object->setDefaultForInternal($data['defaultForInternal']);
            unset($data['defaultForInternal']);
        }
        elseif (\array_key_exists('defaultForInternal', $data) && $data['defaultForInternal'] === null) {
            $object->setDefaultForInternal(null);
        }
        if (\array_key_exists('internalTicketStatus', $data) && $data['internalTicketStatus'] !== null) {
            $object->setInternalTicketStatus($data['internalTicketStatus']);
            unset($data['internalTicketStatus']);
        }
        elseif (\array_key_exists('internalTicketStatus', $data) && $data['internalTicketStatus'] === null) {
            $object->setInternalTicketStatus(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('targetStatusId', $data) && $data['targetStatusId'] !== null) {
            $object->setTargetStatusId($data['targetStatusId']);
            unset($data['targetStatusId']);
        }
        elseif (\array_key_exists('targetStatusId', $data) && $data['targetStatusId'] === null) {
            $object->setTargetStatusId(null);
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
        if ($data->isInitialized('autoChangeDays') && null !== $data->getAutoChangeDays()) {
            $dataArray['autoChangeDays'] = $data->getAutoChangeDays();
        }
        if ($data->isInitialized('autoChangeTicketStatusId') && null !== $data->getAutoChangeTicketStatusId()) {
            $dataArray['autoChangeTicketStatusId'] = $data->getAutoChangeTicketStatusId();
        }
        if ($data->isInitialized('color') && null !== $data->getColor()) {
            $dataArray['color'] = $data->getColor();
        }
        if ($data->isInitialized('defaultForInternal') && null !== $data->getDefaultForInternal()) {
            $dataArray['defaultForInternal'] = $data->getDefaultForInternal();
        }
        if ($data->isInitialized('internalTicketStatus') && null !== $data->getInternalTicketStatus()) {
            $dataArray['internalTicketStatus'] = $data->getInternalTicketStatus();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('targetStatusId') && null !== $data->getTargetStatusId()) {
            $dataArray['targetStatusId'] = $data->getTargetStatusId();
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
        return [\Webhubworks\WeclappApiCore\Model\TicketStatus::class => false];
    }
}