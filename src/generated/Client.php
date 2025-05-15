<?php

namespace Weclapp\Generated;

class Client extends \Weclapp\Generated\Runtime\Client\Client
{
    /**
     * query article
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     * @var string $additionalProperties
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticle($queryParameters), $fetch);
    }

    /**
     * create a article
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function postArticle(\Weclapp\Generated\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticle($requestBody, $queryParameters), $fetch);
    }

    /**
     * count article
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCount($queryParameters), $fetch);
    }

    /**
     * delete a article
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific article
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleIdById($id), $fetch);
    }

    /**
     * update article
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleIdById(string $id, \Weclapp\Generated\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleIdIdChangeUnitPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdChangeUnit(string $id, \Weclapp\Generated\Model\ArticleIdIdChangeUnitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleIdByIdChangeUnit($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateDatasheetPdf(string $id, \Weclapp\Generated\Model\ArticleIdIdCreateDatasheetPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleIdByIdCreateDatasheetPdf($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateLabelPdf(string $id, \Weclapp\Generated\Model\ArticleIdIdCreateLabelPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleIdByIdCreateLabelPdf($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $articleImageId
     * @var bool $preview
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleIdByIdDownloadArticleImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var bool $preview
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadMainArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleIdByIdDownloadMainArticleImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleIdIdPackagingUnitStructureGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdPackagingUnitStructure(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleIdByIdPackagingUnitStructure($id), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $name
     * @var bool $mainImage
     * @var string $articleImageId
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleIdIdUploadArticleImagePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdUploadArticleImage(string $id, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleIdByIdUploadArticleImage($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articleAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleAccountingCodeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCode(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleAccountingCode($queryParameters), $fetch);
    }

    /**
     * create a articleAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleAccountingCode(\Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleAccountingCode($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleAccountingCodeCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleAccountingCodeCount($queryParameters), $fetch);
    }

    /**
     * delete a articleAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleAccountingCodeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleAccountingCodeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleAccountingCode
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleAccountingCodeIdById($id), $fetch);
    }

    /**
     * update articleAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleAccountingCodeIdById(string $id, \Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleAccountingCodeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articleCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategoryGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategory($queryParameters), $fetch);
    }

    /**
     * create a articleCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategory(\Weclapp\Generated\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleCategory($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategoryCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryCount($queryParameters), $fetch);
    }

    /**
     * delete a articleCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleCategoryIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryIdById($id), $fetch);
    }

    /**
     * update articleCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryIdById(string $id, \Weclapp\Generated\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleCategoryIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     * @var string $imageId
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategoryIdIdUploadImagePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleCategoryIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * query articleCategoryClassification
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategoryClassificationGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassification(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryClassification($queryParameters), $fetch);
    }

    /**
     * create a articleCategoryClassification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryClassification(\Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleCategoryClassification($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleCategoryClassification
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleCategoryClassificationCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryClassificationCount($queryParameters), $fetch);
    }

    /**
     * delete a articleCategoryClassification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryClassificationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleCategoryClassificationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleCategoryClassification
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleCategoryClassificationIdById($id), $fetch);
    }

    /**
     * update articleCategoryClassification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryClassificationIdById(string $id, \Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleCategoryClassificationIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articleItemGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleItemGroupGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleItemGroup($queryParameters), $fetch);
    }

    /**
     * create a articleItemGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleItemGroup(\Weclapp\Generated\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleItemGroup($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleItemGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleItemGroupCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleItemGroupCount($queryParameters), $fetch);
    }

    /**
     * delete a articleItemGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleItemGroupIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleItemGroupIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleItemGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleItemGroupIdById($id), $fetch);
    }

    /**
     * update articleItemGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleItemGroupIdById(string $id, \Weclapp\Generated\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleItemGroupIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articlePrice
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticlePriceGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePrice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticlePrice($queryParameters), $fetch);
    }

    /**
     * count articlePrice
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticlePriceCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticlePriceCount($queryParameters), $fetch);
    }

    /**
     * query a specific articlePrice
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticlePrice|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticlePriceIdById($id), $fetch);
    }

    /**
     * query articleRating
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleRatingGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRating(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleRating($queryParameters), $fetch);
    }

    /**
     * create a articleRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleRating(\Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleRating($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleRating
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleRatingCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleRatingCount($queryParameters), $fetch);
    }

    /**
     * delete a articleRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleRatingIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleRatingIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleRating
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleRatingIdById($id), $fetch);
    }

    /**
     * update articleRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleRatingIdById(string $id, \Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleRatingIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articleStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleStatusGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleStatus($queryParameters), $fetch);
    }

    /**
     * create a articleStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleStatus(\Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleStatus($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleStatusCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleStatusCount($queryParameters), $fetch);
    }

    /**
     * delete a articleStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleStatusIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleStatusIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleStatus
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleStatusIdById($id), $fetch);
    }

    /**
     * update articleStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleStatusIdById(string $id, \Weclapp\Generated\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleStatusIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     * @var string $additionalProperties
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleSupplySourceGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySource(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleSupplySource($queryParameters), $fetch);
    }

    /**
     * create a articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleSupplySource(\Weclapp\Generated\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PostArticleSupplySource($requestBody, $queryParameters), $fetch);
    }

    /**
     * count articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleSupplySourceCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleSupplySourceCount($queryParameters), $fetch);
    }

    /**
     * delete a articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleSupplySourceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\DeleteArticleSupplySourceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleSupplySource
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\GetArticleSupplySourceIdById($id), $fetch);
    }

    /**
     * update articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Weclapp\Generated\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleSupplySourceIdById(string $id, \Weclapp\Generated\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Weclapp\Generated\Endpoint\PutArticleSupplySourceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if ($httpClient === null) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri(':80/{protocol}://{host}:{port}/webapp/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer, new \Weclapp\Generated\Normalizer\JaneObjectNormalizer];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode, new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
