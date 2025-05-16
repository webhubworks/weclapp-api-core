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

class CommentNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Comment::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Comment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Comment;
        if (\array_key_exists('privateComment', $data) && \is_int($data['privateComment'])) {
            $data['privateComment'] = (bool) $data['privateComment'];
        }
        if (\array_key_exists('publicComment', $data) && \is_int($data['publicComment'])) {
            $data['publicComment'] = (bool) $data['publicComment'];
        }
        if (\array_key_exists('solution', $data) && \is_int($data['solution'])) {
            $data['solution'] = (bool) $data['solution'];
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
        if (\array_key_exists('authorName', $data)) {
            $object->setAuthorName($data['authorName']);
            unset($data['authorName']);
        }
        if (\array_key_exists('authorUserId', $data)) {
            $object->setAuthorUserId($data['authorUserId']);
            unset($data['authorUserId']);
        }
        if (\array_key_exists('authorUserUsername', $data)) {
            $object->setAuthorUserUsername($data['authorUserUsername']);
            unset($data['authorUserUsername']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('entityId', $data)) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        if (\array_key_exists('entityName', $data)) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        if (\array_key_exists('htmlComment', $data)) {
            $object->setHtmlComment($data['htmlComment']);
            unset($data['htmlComment']);
        }
        if (\array_key_exists('lastEditDate', $data)) {
            $object->setLastEditDate($data['lastEditDate']);
            unset($data['lastEditDate']);
        }
        if (\array_key_exists('parentCommentId', $data)) {
            $object->setParentCommentId($data['parentCommentId']);
            unset($data['parentCommentId']);
        }
        if (\array_key_exists('privateComment', $data)) {
            $object->setPrivateComment($data['privateComment']);
            unset($data['privateComment']);
        }
        if (\array_key_exists('publicComment', $data)) {
            $object->setPublicComment($data['publicComment']);
            unset($data['publicComment']);
        }
        if (\array_key_exists('recipientUsers', $data)) {
            $values = [];
            foreach ($data['recipientUsers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setRecipientUsers($values);
            unset($data['recipientUsers']);
        }
        if (\array_key_exists('solution', $data)) {
            $object->setSolution($data['solution']);
            unset($data['solution']);
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
        if ($data->isInitialized('authorName') && $data->getAuthorName() !== null) {
            $dataArray['authorName'] = $data->getAuthorName();
        }
        if ($data->isInitialized('authorUserId') && $data->getAuthorUserId() !== null) {
            $dataArray['authorUserId'] = $data->getAuthorUserId();
        }
        if ($data->isInitialized('authorUserUsername') && $data->getAuthorUserUsername() !== null) {
            $dataArray['authorUserUsername'] = $data->getAuthorUserUsername();
        }
        if ($data->isInitialized('comment') && $data->getComment() !== null) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('entityId') && $data->getEntityId() !== null) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityName') && $data->getEntityName() !== null) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('htmlComment') && $data->getHtmlComment() !== null) {
            $dataArray['htmlComment'] = $data->getHtmlComment();
        }
        if ($data->isInitialized('lastEditDate') && $data->getLastEditDate() !== null) {
            $dataArray['lastEditDate'] = $data->getLastEditDate();
        }
        if ($data->isInitialized('parentCommentId') && $data->getParentCommentId() !== null) {
            $dataArray['parentCommentId'] = $data->getParentCommentId();
        }
        if ($data->isInitialized('privateComment') && $data->getPrivateComment() !== null) {
            $dataArray['privateComment'] = $data->getPrivateComment();
        }
        if ($data->isInitialized('publicComment') && $data->getPublicComment() !== null) {
            $dataArray['publicComment'] = $data->getPublicComment();
        }
        if ($data->isInitialized('recipientUsers') && $data->getRecipientUsers() !== null) {
            $values = [];
            foreach ($data->getRecipientUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['recipientUsers'] = $values;
        }
        if ($data->isInitialized('solution') && $data->getSolution() !== null) {
            $dataArray['solution'] = $data->getSolution();
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
        return [\Webhubworks\WeclappApiCore\Model\Comment::class => false];
    }
}
