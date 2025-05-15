<?php

namespace Webhub\Weclapp;

class Client extends \Webhub\Weclapp\Runtime\Client\Client
{
    /**
     * query article
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     *     @var string $additionalProperties 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticle($queryParameters), $fetch);
    }
    /**
     * create a article
     *
     * @param \Webhub\Weclapp\Model\Article $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function postArticle(\Webhub\Weclapp\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticle($requestBody, $queryParameters), $fetch);
    }
    /**
     * count article
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCount($queryParameters), $fetch);
    }
    /**
     * delete a article
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific article
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleIdById($id), $fetch);
    }
    /**
     * update article
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\Article $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\Article|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleIdById(string $id, \Webhub\Weclapp\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdChangeUnit(string $id, \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleIdByIdChangeUnit($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleIdIdCreateDatasheetPdfPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateDatasheetPdf(string $id, \Webhub\Weclapp\Model\ArticleIdIdCreateDatasheetPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleIdByIdCreateDatasheetPdf($id, $requestBody, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateLabelPdf(string $id, \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleIdByIdCreateLabelPdf($id, $requestBody, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var string $articleImageId 
     *     @var bool $preview 
     *     @var int $scaleWidth 
     *     @var int $scaleHeight 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleIdByIdDownloadArticleImage($id, $queryParameters, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $preview 
     *     @var int $scaleWidth 
     *     @var int $scaleHeight 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadMainArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleIdByIdDownloadMainArticleImage($id, $queryParameters, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleIdIdPackagingUnitStructureGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdPackagingUnitStructure(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleIdByIdPackagingUnitStructure($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param array $queryParameters {
     *     @var string $name 
     *     @var bool $mainImage 
     *     @var string $articleImageId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleIdIdUploadArticleImagePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdUploadArticleImage(string $id, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleIdByIdUploadArticleImage($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articleAccountingCode
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleAccountingCodeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCode(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleAccountingCode($queryParameters), $fetch);
    }
    /**
     * create a articleAccountingCode
     *
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleAccountingCode(\Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleAccountingCode($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleAccountingCode
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleAccountingCodeCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleAccountingCodeCount($queryParameters), $fetch);
    }
    /**
     * delete a articleAccountingCode
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleAccountingCodeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleAccountingCodeIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleAccountingCode
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleAccountingCodeIdById($id), $fetch);
    }
    /**
     * update articleAccountingCode
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleAccountingCodeIdById(string $id, \Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleAccountingCodeIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articleCategory
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategoryGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategory($queryParameters), $fetch);
    }
    /**
     * create a articleCategory
     *
     * @param \Webhub\Weclapp\Model\ArticleCategory $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategory(\Webhub\Weclapp\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleCategory($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleCategory
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategoryCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryCount($queryParameters), $fetch);
    }
    /**
     * delete a articleCategory
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleCategoryIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleCategory
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryIdById($id), $fetch);
    }
    /**
     * update articleCategory
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleCategory $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategory|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryIdById(string $id, \Webhub\Weclapp\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleCategoryIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var int $scaleWidth 
     *     @var int $scaleHeight 
     *     @var string $imageId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategoryIdIdUploadImagePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleCategoryIdByIdUploadImage($id, $requestBody), $fetch);
    }
    /**
     * query articleCategoryClassification
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategoryClassificationGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassification(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryClassification($queryParameters), $fetch);
    }
    /**
     * create a articleCategoryClassification
     *
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryClassification(\Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleCategoryClassification($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleCategoryClassification
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleCategoryClassificationCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryClassificationCount($queryParameters), $fetch);
    }
    /**
     * delete a articleCategoryClassification
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryClassificationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleCategoryClassificationIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleCategoryClassification
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleCategoryClassificationIdById($id), $fetch);
    }
    /**
     * update articleCategoryClassification
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryClassificationIdById(string $id, \Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleCategoryClassificationIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articleItemGroup
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroupGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleItemGroup($queryParameters), $fetch);
    }
    /**
     * create a articleItemGroup
     *
     * @param \Webhub\Weclapp\Model\ArticleItemGroup $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleItemGroup(\Webhub\Weclapp\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleItemGroup($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleItemGroup
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroupCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleItemGroupCount($queryParameters), $fetch);
    }
    /**
     * delete a articleItemGroup
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleItemGroupIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleItemGroupIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleItemGroup
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleItemGroupIdById($id), $fetch);
    }
    /**
     * update articleItemGroup
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleItemGroup $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroup|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleItemGroupIdById(string $id, \Webhub\Weclapp\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleItemGroupIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articlePrice
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticlePriceGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePrice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticlePrice($queryParameters), $fetch);
    }
    /**
     * count articlePrice
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticlePriceCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticlePriceCount($queryParameters), $fetch);
    }
    /**
     * query a specific articlePrice
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticlePrice|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticlePriceIdById($id), $fetch);
    }
    /**
     * query articleRating
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleRatingGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRating(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleRating($queryParameters), $fetch);
    }
    /**
     * create a articleRating
     *
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleRating(\Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleRating($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleRating
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleRatingCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleRatingCount($queryParameters), $fetch);
    }
    /**
     * delete a articleRating
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleRatingIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleRatingIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleRating
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleRatingIdById($id), $fetch);
    }
    /**
     * update articleRating
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleRatingIdById(string $id, \Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleRatingIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articleStatus
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleStatusGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleStatus($queryParameters), $fetch);
    }
    /**
     * create a articleStatus
     *
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleStatus(\Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleStatus($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleStatus
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleStatusCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleStatusCount($queryParameters), $fetch);
    }
    /**
     * delete a articleStatus
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleStatusIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleStatusIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleStatus
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleStatusIdById($id), $fetch);
    }
    /**
     * update articleStatus
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\CustomValue $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\CustomValue|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleStatusIdById(string $id, \Webhub\Weclapp\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleStatusIdById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * query articleSupplySource
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $pageSize 
     *     @var bool $serializeNulls 
     *     @var string $sort 
     *     @var string $filter 
     *     @var string $properties 
     *     @var string $includeReferencedEntities 
     *     @var string $additionalProperties 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleSupplySourceGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySource(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleSupplySource($queryParameters), $fetch);
    }
    /**
     * create a articleSupplySource
     *
     * @param \Webhub\Weclapp\Model\ArticleSupplySource $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleSupplySource(\Webhub\Weclapp\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PostArticleSupplySource($requestBody, $queryParameters), $fetch);
    }
    /**
     * count articleSupplySource
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleSupplySourceCountGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleSupplySourceCount($queryParameters), $fetch);
    }
    /**
     * delete a articleSupplySource
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleSupplySourceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\DeleteArticleSupplySourceIdById($id, $queryParameters), $fetch);
    }
    /**
     * query a specific articleSupplySource
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\GetArticleSupplySourceIdById($id), $fetch);
    }
    /**
     * update articleSupplySource
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleSupplySource $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Webhub\Weclapp\Model\ArticleSupplySource|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleSupplySourceIdById(string $id, \Webhub\Weclapp\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhub\Weclapp\Endpoint\PutArticleSupplySourceIdById($id, $requestBody, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Webhub\Weclapp\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}