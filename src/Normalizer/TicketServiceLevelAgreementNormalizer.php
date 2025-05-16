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
class TicketServiceLevelAgreementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('includeNoTicketType', $data) && \is_int($data['includeNoTicketType'])) {
            $data['includeNoTicketType'] = (bool) $data['includeNoTicketType'];
        }
        if (\array_key_exists('visible', $data) && \is_int($data['visible'])) {
            $data['visible'] = (bool) $data['visible'];
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
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('categories', $data)) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setCategories($values);
            unset($data['categories']);
        }
        if (\array_key_exists('customers', $data)) {
            $values_1 = [];
            foreach ($data['customers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setCustomers($values_1);
            unset($data['customers']);
        }
        if (\array_key_exists('degreeOfPerformance', $data)) {
            $object->setDegreeOfPerformance($data['degreeOfPerformance']);
            unset($data['degreeOfPerformance']);
        }
        if (\array_key_exists('includeNoTicketType', $data)) {
            $object->setIncludeNoTicketType($data['includeNoTicketType']);
            unset($data['includeNoTicketType']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('ratingId', $data)) {
            $object->setRatingId($data['ratingId']);
            unset($data['ratingId']);
        }
        if (\array_key_exists('targets', $data)) {
            $values_2 = [];
            foreach ($data['targets'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class, 'json', $context);
            }
            $object->setTargets($values_2);
            unset($data['targets']);
        }
        if (\array_key_exists('types', $data)) {
            $values_3 = [];
            foreach ($data['types'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTypes($values_3);
            unset($data['types']);
        }
        if (\array_key_exists('visible', $data)) {
            $object->setVisible($data['visible']);
            unset($data['visible']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $values = [];
            foreach ($data->getCategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['categories'] = $values;
        }
        if ($data->isInitialized('customers') && null !== $data->getCustomers()) {
            $values_1 = [];
            foreach ($data->getCustomers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['customers'] = $values_1;
        }
        if ($data->isInitialized('degreeOfPerformance') && null !== $data->getDegreeOfPerformance()) {
            $dataArray['degreeOfPerformance'] = $data->getDegreeOfPerformance();
        }
        if ($data->isInitialized('includeNoTicketType') && null !== $data->getIncludeNoTicketType()) {
            $dataArray['includeNoTicketType'] = $data->getIncludeNoTicketType();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('ratingId') && null !== $data->getRatingId()) {
            $dataArray['ratingId'] = $data->getRatingId();
        }
        if ($data->isInitialized('targets') && null !== $data->getTargets()) {
            $values_2 = [];
            foreach ($data->getTargets() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['targets'] = $values_2;
        }
        if ($data->isInitialized('types') && null !== $data->getTypes()) {
            $values_3 = [];
            foreach ($data->getTypes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['types'] = $values_3;
        }
        if ($data->isInitialized('visible') && null !== $data->getVisible()) {
            $dataArray['visible'] = $data->getVisible();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement::class => false];
    }
}