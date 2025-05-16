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

class TicketCategoryNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketCategory::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketCategory::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketCategory;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('pseudoCategory', $data) && \is_int($data['pseudoCategory'])) {
            $data['pseudoCategory'] = (bool) $data['pseudoCategory'];
        }
        if (\array_key_exists('published', $data) && \is_int($data['published'])) {
            $data['published'] = (bool) $data['published'];
        }
        if (\array_key_exists('visibleInCustomerPortal', $data) && \is_int($data['visibleInCustomerPortal'])) {
            $data['visibleInCustomerPortal'] = (bool) $data['visibleInCustomerPortal'];
        }
        if ($data === null || \is_array($data) === false) {
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
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('parentTicketCategoryId', $data)) {
            $object->setParentTicketCategoryId($data['parentTicketCategoryId']);
            unset($data['parentTicketCategoryId']);
        }
        if (\array_key_exists('pseudoCategory', $data)) {
            $object->setPseudoCategory($data['pseudoCategory']);
            unset($data['pseudoCategory']);
        }
        if (\array_key_exists('published', $data)) {
            $object->setPublished($data['published']);
            unset($data['published']);
        }
        if (\array_key_exists('visibleInCustomerPortal', $data)) {
            $object->setVisibleInCustomerPortal($data['visibleInCustomerPortal']);
            unset($data['visibleInCustomerPortal']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentTicketCategoryId') && $data->getParentTicketCategoryId() !== null) {
            $dataArray['parentTicketCategoryId'] = $data->getParentTicketCategoryId();
        }
        if ($data->isInitialized('pseudoCategory') && $data->getPseudoCategory() !== null) {
            $dataArray['pseudoCategory'] = $data->getPseudoCategory();
        }
        if ($data->isInitialized('published') && $data->getPublished() !== null) {
            $dataArray['published'] = $data->getPublished();
        }
        if ($data->isInitialized('visibleInCustomerPortal') && $data->getVisibleInCustomerPortal() !== null) {
            $dataArray['visibleInCustomerPortal'] = $data->getVisibleInCustomerPortal();
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
        return [\Webhubworks\WeclappApiCore\Model\TicketCategory::class => false];
    }
}
