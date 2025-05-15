<?php

namespace Webhub\Weclapp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webhub\Weclapp\Runtime\Normalizer\CheckArray;
use Webhub\Weclapp\Runtime\Normalizer\ValidatorTrait;

class ArticleIdIdCreateLabelPdfPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('printCount', $data)) {
            $object->setPrintCount($data['printCount']);
            unset($data['printCount']);
        }
        if (\array_key_exists('startPosition', $data)) {
            $object->setStartPosition($data['startPosition']);
            unset($data['startPosition']);
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
        $dataArray['printCount'] = $data->getPrintCount();
        $dataArray['startPosition'] = $data->getStartPosition();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody::class => false];
    }
}
