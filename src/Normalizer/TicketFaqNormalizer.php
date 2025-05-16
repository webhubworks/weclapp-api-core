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

class TicketFaqNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketFaq::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketFaq::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketFaq;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
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
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('answer', $data) && $data['answer'] !== null) {
            $object->setAnswer($data['answer']);
            unset($data['answer']);
        } elseif (\array_key_exists('answer', $data) && $data['answer'] === null) {
            $object->setAnswer(null);
        }
        if (\array_key_exists('createdById', $data) && $data['createdById'] !== null) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        } elseif (\array_key_exists('createdById', $data) && $data['createdById'] === null) {
            $object->setCreatedById(null);
        }
        if (\array_key_exists('customers', $data) && $data['customers'] !== null) {
            $values = [];
            foreach ($data['customers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setCustomers($values);
            unset($data['customers']);
        } elseif (\array_key_exists('customers', $data) && $data['customers'] === null) {
            $object->setCustomers(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        } elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('question', $data) && $data['question'] !== null) {
            $object->setQuestion($data['question']);
            unset($data['question']);
        } elseif (\array_key_exists('question', $data) && $data['question'] === null) {
            $object->setQuestion(null);
        }
        if (\array_key_exists('ticketCategories', $data) && $data['ticketCategories'] !== null) {
            $values_1 = [];
            foreach ($data['ticketCategories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTicketCategories($values_1);
            unset($data['ticketCategories']);
        } elseif (\array_key_exists('ticketCategories', $data) && $data['ticketCategories'] === null) {
            $object->setTicketCategories(null);
        }
        if (\array_key_exists('visibility', $data) && $data['visibility'] !== null) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        } elseif (\array_key_exists('visibility', $data) && $data['visibility'] === null) {
            $object->setVisibility(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('answer') && $data->getAnswer() !== null) {
            $dataArray['answer'] = $data->getAnswer();
        }
        if ($data->isInitialized('createdById') && $data->getCreatedById() !== null) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('customers') && $data->getCustomers() !== null) {
            $values = [];
            foreach ($data->getCustomers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customers'] = $values;
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('question') && $data->getQuestion() !== null) {
            $dataArray['question'] = $data->getQuestion();
        }
        if ($data->isInitialized('ticketCategories') && $data->getTicketCategories() !== null) {
            $values_1 = [];
            foreach ($data->getTicketCategories() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ticketCategories'] = $values_1;
        }
        if ($data->isInitialized('visibility') && $data->getVisibility() !== null) {
            $dataArray['visibility'] = $data->getVisibility();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TicketFaq::class => false];
    }
}
