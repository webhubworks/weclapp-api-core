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
class TicketCategoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\TicketCategory();
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
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('parentTicketCategoryId', $data) && $data['parentTicketCategoryId'] !== null) {
            $object->setParentTicketCategoryId($data['parentTicketCategoryId']);
            unset($data['parentTicketCategoryId']);
        }
        elseif (\array_key_exists('parentTicketCategoryId', $data) && $data['parentTicketCategoryId'] === null) {
            $object->setParentTicketCategoryId(null);
        }
        if (\array_key_exists('pseudoCategory', $data) && $data['pseudoCategory'] !== null) {
            $object->setPseudoCategory($data['pseudoCategory']);
            unset($data['pseudoCategory']);
        }
        elseif (\array_key_exists('pseudoCategory', $data) && $data['pseudoCategory'] === null) {
            $object->setPseudoCategory(null);
        }
        if (\array_key_exists('published', $data) && $data['published'] !== null) {
            $object->setPublished($data['published']);
            unset($data['published']);
        }
        elseif (\array_key_exists('published', $data) && $data['published'] === null) {
            $object->setPublished(null);
        }
        if (\array_key_exists('visibleInCustomerPortal', $data) && $data['visibleInCustomerPortal'] !== null) {
            $object->setVisibleInCustomerPortal($data['visibleInCustomerPortal']);
            unset($data['visibleInCustomerPortal']);
        }
        elseif (\array_key_exists('visibleInCustomerPortal', $data) && $data['visibleInCustomerPortal'] === null) {
            $object->setVisibleInCustomerPortal(null);
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
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentTicketCategoryId') && null !== $data->getParentTicketCategoryId()) {
            $dataArray['parentTicketCategoryId'] = $data->getParentTicketCategoryId();
        }
        if ($data->isInitialized('pseudoCategory') && null !== $data->getPseudoCategory()) {
            $dataArray['pseudoCategory'] = $data->getPseudoCategory();
        }
        if ($data->isInitialized('published') && null !== $data->getPublished()) {
            $dataArray['published'] = $data->getPublished();
        }
        if ($data->isInitialized('visibleInCustomerPortal') && null !== $data->getVisibleInCustomerPortal()) {
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