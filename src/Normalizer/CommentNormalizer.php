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
class CommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Comment();
        if (\array_key_exists('privateComment', $data) && \is_int($data['privateComment'])) {
            $data['privateComment'] = (bool) $data['privateComment'];
        }
        if (\array_key_exists('publicComment', $data) && \is_int($data['publicComment'])) {
            $data['publicComment'] = (bool) $data['publicComment'];
        }
        if (\array_key_exists('solution', $data) && \is_int($data['solution'])) {
            $data['solution'] = (bool) $data['solution'];
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
        if (\array_key_exists('authorName', $data) && $data['authorName'] !== null) {
            $object->setAuthorName($data['authorName']);
            unset($data['authorName']);
        }
        elseif (\array_key_exists('authorName', $data) && $data['authorName'] === null) {
            $object->setAuthorName(null);
        }
        if (\array_key_exists('authorUserId', $data) && $data['authorUserId'] !== null) {
            $object->setAuthorUserId($data['authorUserId']);
            unset($data['authorUserId']);
        }
        elseif (\array_key_exists('authorUserId', $data) && $data['authorUserId'] === null) {
            $object->setAuthorUserId(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('entityId', $data) && $data['entityId'] !== null) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        elseif (\array_key_exists('entityId', $data) && $data['entityId'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entityName', $data) && $data['entityName'] !== null) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        elseif (\array_key_exists('entityName', $data) && $data['entityName'] === null) {
            $object->setEntityName(null);
        }
        if (\array_key_exists('htmlComment', $data) && $data['htmlComment'] !== null) {
            $object->setHtmlComment($data['htmlComment']);
            unset($data['htmlComment']);
        }
        elseif (\array_key_exists('htmlComment', $data) && $data['htmlComment'] === null) {
            $object->setHtmlComment(null);
        }
        if (\array_key_exists('lastEditDate', $data) && $data['lastEditDate'] !== null) {
            $object->setLastEditDate($data['lastEditDate']);
            unset($data['lastEditDate']);
        }
        elseif (\array_key_exists('lastEditDate', $data) && $data['lastEditDate'] === null) {
            $object->setLastEditDate(null);
        }
        if (\array_key_exists('parentCommentId', $data) && $data['parentCommentId'] !== null) {
            $object->setParentCommentId($data['parentCommentId']);
            unset($data['parentCommentId']);
        }
        elseif (\array_key_exists('parentCommentId', $data) && $data['parentCommentId'] === null) {
            $object->setParentCommentId(null);
        }
        if (\array_key_exists('privateComment', $data) && $data['privateComment'] !== null) {
            $object->setPrivateComment($data['privateComment']);
            unset($data['privateComment']);
        }
        elseif (\array_key_exists('privateComment', $data) && $data['privateComment'] === null) {
            $object->setPrivateComment(null);
        }
        if (\array_key_exists('publicComment', $data) && $data['publicComment'] !== null) {
            $object->setPublicComment($data['publicComment']);
            unset($data['publicComment']);
        }
        elseif (\array_key_exists('publicComment', $data) && $data['publicComment'] === null) {
            $object->setPublicComment(null);
        }
        if (\array_key_exists('recipientUsers', $data) && $data['recipientUsers'] !== null) {
            $values = [];
            foreach ($data['recipientUsers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setRecipientUsers($values);
            unset($data['recipientUsers']);
        }
        elseif (\array_key_exists('recipientUsers', $data) && $data['recipientUsers'] === null) {
            $object->setRecipientUsers(null);
        }
        if (\array_key_exists('solution', $data) && $data['solution'] !== null) {
            $object->setSolution($data['solution']);
            unset($data['solution']);
        }
        elseif (\array_key_exists('solution', $data) && $data['solution'] === null) {
            $object->setSolution(null);
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
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('entityId') && null !== $data->getEntityId()) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityName') && null !== $data->getEntityName()) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('htmlComment') && null !== $data->getHtmlComment()) {
            $dataArray['htmlComment'] = $data->getHtmlComment();
        }
        if ($data->isInitialized('parentCommentId') && null !== $data->getParentCommentId()) {
            $dataArray['parentCommentId'] = $data->getParentCommentId();
        }
        if ($data->isInitialized('privateComment') && null !== $data->getPrivateComment()) {
            $dataArray['privateComment'] = $data->getPrivateComment();
        }
        if ($data->isInitialized('publicComment') && null !== $data->getPublicComment()) {
            $dataArray['publicComment'] = $data->getPublicComment();
        }
        if ($data->isInitialized('recipientUsers') && null !== $data->getRecipientUsers()) {
            $values = [];
            foreach ($data->getRecipientUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['recipientUsers'] = $values;
        }
        if ($data->isInitialized('solution') && null !== $data->getSolution()) {
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