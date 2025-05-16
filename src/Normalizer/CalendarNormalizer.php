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

class CalendarNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Calendar::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Calendar::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Calendar;
        if (\array_key_exists('sharePrivateEvents', $data) && \is_int($data['sharePrivateEvents'])) {
            $data['sharePrivateEvents'] = (bool) $data['sharePrivateEvents'];
        }
        if (\array_key_exists('synchronize', $data) && \is_int($data['synchronize'])) {
            $data['synchronize'] = (bool) $data['synchronize'];
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
        if (\array_key_exists('caldavAccountId', $data) && $data['caldavAccountId'] !== null) {
            $object->setCaldavAccountId($data['caldavAccountId']);
            unset($data['caldavAccountId']);
        } elseif (\array_key_exists('caldavAccountId', $data) && $data['caldavAccountId'] === null) {
            $object->setCaldavAccountId(null);
        }
        if (\array_key_exists('calendarColor', $data) && $data['calendarColor'] !== null) {
            $object->setCalendarColor($data['calendarColor']);
            unset($data['calendarColor']);
        } elseif (\array_key_exists('calendarColor', $data) && $data['calendarColor'] === null) {
            $object->setCalendarColor(null);
        }
        if (\array_key_exists('calendarKey', $data) && $data['calendarKey'] !== null) {
            $object->setCalendarKey($data['calendarKey']);
            unset($data['calendarKey']);
        } elseif (\array_key_exists('calendarKey', $data) && $data['calendarKey'] === null) {
            $object->setCalendarKey(null);
        }
        if (\array_key_exists('calendarSharingPermissions', $data) && $data['calendarSharingPermissions'] !== null) {
            $values = [];
            foreach ($data['calendarSharingPermissions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CalendarSharingPermissions::class, 'json', $context);
            }
            $object->setCalendarSharingPermissions($values);
            unset($data['calendarSharingPermissions']);
        } elseif (\array_key_exists('calendarSharingPermissions', $data) && $data['calendarSharingPermissions'] === null) {
            $object->setCalendarSharingPermissions(null);
        }
        if (\array_key_exists('lastEventsSyncToken', $data) && $data['lastEventsSyncToken'] !== null) {
            $object->setLastEventsSyncToken($data['lastEventsSyncToken']);
            unset($data['lastEventsSyncToken']);
        } elseif (\array_key_exists('lastEventsSyncToken', $data) && $data['lastEventsSyncToken'] === null) {
            $object->setLastEventsSyncToken(null);
        }
        if (\array_key_exists('mailAccountId', $data) && $data['mailAccountId'] !== null) {
            $object->setMailAccountId($data['mailAccountId']);
            unset($data['mailAccountId']);
        } elseif (\array_key_exists('mailAccountId', $data) && $data['mailAccountId'] === null) {
            $object->setMailAccountId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ownerId', $data) && $data['ownerId'] !== null) {
            $object->setOwnerId($data['ownerId']);
            unset($data['ownerId']);
        } elseif (\array_key_exists('ownerId', $data) && $data['ownerId'] === null) {
            $object->setOwnerId(null);
        }
        if (\array_key_exists('sharePrivateEvents', $data) && $data['sharePrivateEvents'] !== null) {
            $object->setSharePrivateEvents($data['sharePrivateEvents']);
            unset($data['sharePrivateEvents']);
        } elseif (\array_key_exists('sharePrivateEvents', $data) && $data['sharePrivateEvents'] === null) {
            $object->setSharePrivateEvents(null);
        }
        if (\array_key_exists('synchronize', $data) && $data['synchronize'] !== null) {
            $object->setSynchronize($data['synchronize']);
            unset($data['synchronize']);
        } elseif (\array_key_exists('synchronize', $data) && $data['synchronize'] === null) {
            $object->setSynchronize(null);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('caldavAccountId') && $data->getCaldavAccountId() !== null) {
            $dataArray['caldavAccountId'] = $data->getCaldavAccountId();
        }
        if ($data->isInitialized('calendarColor') && $data->getCalendarColor() !== null) {
            $dataArray['calendarColor'] = $data->getCalendarColor();
        }
        if ($data->isInitialized('calendarKey') && $data->getCalendarKey() !== null) {
            $dataArray['calendarKey'] = $data->getCalendarKey();
        }
        if ($data->isInitialized('calendarSharingPermissions') && $data->getCalendarSharingPermissions() !== null) {
            $values = [];
            foreach ($data->getCalendarSharingPermissions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['calendarSharingPermissions'] = $values;
        }
        if ($data->isInitialized('lastEventsSyncToken') && $data->getLastEventsSyncToken() !== null) {
            $dataArray['lastEventsSyncToken'] = $data->getLastEventsSyncToken();
        }
        if ($data->isInitialized('mailAccountId') && $data->getMailAccountId() !== null) {
            $dataArray['mailAccountId'] = $data->getMailAccountId();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('ownerId') && $data->getOwnerId() !== null) {
            $dataArray['ownerId'] = $data->getOwnerId();
        }
        if ($data->isInitialized('sharePrivateEvents') && $data->getSharePrivateEvents() !== null) {
            $dataArray['sharePrivateEvents'] = $data->getSharePrivateEvents();
        }
        if ($data->isInitialized('synchronize') && $data->getSynchronize() !== null) {
            $dataArray['synchronize'] = $data->getSynchronize();
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
        return [\Webhubworks\WeclappApiCore\Model\Calendar::class => false];
    }
}
