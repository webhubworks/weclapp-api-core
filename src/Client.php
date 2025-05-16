<?php

namespace Webhubworks\WeclappApiCore;

class Client extends \Webhubworks\WeclappApiCore\Runtime\Client\Client
{
    /**
     * query accountingTransaction
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
     * @return null|\Webhubworks\WeclappApiCore\Model\AccountingTransactionGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAccountingTransaction(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAccountingTransaction($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postAccountingTransactionBatchBooking(\Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostAccountingTransactionBatchBooking($requestBody), $fetch);
    }

    /**
     * count accountingTransaction
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AccountingTransactionCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAccountingTransactionCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAccountingTransactionCount($queryParameters), $fetch);
    }

    /**
     * query a specific accountingTransaction
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AccountingTransaction|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAccountingTransactionIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAccountingTransactionIdById($id), $fetch);
    }

    /**
     * query archivedEmail
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
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArchivedEmailGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArchivedEmail(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArchivedEmail($queryParameters), $fetch);
    }

    /**
     * count archivedEmail
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArchivedEmailCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArchivedEmailCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArchivedEmailCount($queryParameters), $fetch);
    }

    /**
     * query a specific archivedEmail
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArchivedEmail|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArchivedEmailIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArchivedEmailIdById($id), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArchivedEmailIdByIdRemoveReference(string $id, \Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArchivedEmailIdByIdRemoveReference($id, $requestBody), $fetch);
    }

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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticle($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\Article|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticle(\Webhubworks\WeclappApiCore\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticle($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific article
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Article|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\Article|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleIdById(string $id, \Webhubworks\WeclappApiCore\Model\Article $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdChangeUnit(string $id, \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleIdByIdChangeUnit($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateDatasheetPdf(string $id, \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateDatasheetPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleIdByIdCreateDatasheetPdf($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdCreateLabelPdf(string $id, \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateLabelPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleIdByIdCreateLabelPdf($id, $requestBody, $accept), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleIdByIdDownloadArticleImage($id, $queryParameters, $accept), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdDownloadMainArticleImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleIdByIdDownloadMainArticleImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleIdIdPackagingUnitStructureGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleIdByIdPackagingUnitStructure(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleIdByIdPackagingUnitStructure($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleIdIdUploadArticleImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleIdByIdUploadArticleImage(string $id, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleIdByIdUploadArticleImage($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCode(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleAccountingCode($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleAccountingCode(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleAccountingCode($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleAccountingCodeCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleAccountingCodeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleAccountingCodeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleAccountingCode
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleAccountingCodeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleAccountingCodeIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleAccountingCodeIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleAccountingCodeIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategory($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategory(\Webhubworks\WeclappApiCore\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleCategory($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleCategoryIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryIdById(string $id, \Webhubworks\WeclappApiCore\Model\ArticleCategory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleCategoryIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategoryIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleCategoryIdByIdUploadImage($id, $requestBody), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassification(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryClassification($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleCategoryClassification(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleCategoryClassification($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryClassificationCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleCategoryClassificationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleCategoryClassificationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleCategoryClassification
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleCategoryClassificationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleCategoryClassificationIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleCategoryClassificationIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleCategoryClassificationIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleItemGroupGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleItemGroup($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleItemGroup|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleItemGroup(\Webhubworks\WeclappApiCore\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleItemGroup($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleItemGroupCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleItemGroupCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleItemGroupIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleItemGroupIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleItemGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleItemGroup|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleItemGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleItemGroupIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleItemGroup|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleItemGroupIdById(string $id, \Webhubworks\WeclappApiCore\Model\ArticleItemGroup $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleItemGroupIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticlePriceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePrice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticlePrice($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticlePriceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticlePriceCount($queryParameters), $fetch);
    }

    /**
     * query a specific articlePrice
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticlePrice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticlePriceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticlePriceIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleRatingGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRating(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleRating($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleRating(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleRating($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleRatingCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleRatingCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleRatingIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleRatingIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleRating
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleRatingIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleRatingIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleRatingIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleRatingIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleStatusGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleStatus($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleStatus(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleStatus($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleStatusCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleStatusCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleStatusIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleStatusIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleStatus
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleStatusIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleStatusIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleStatusIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleStatusIdById($id, $requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySource(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleSupplySource($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleSupplySource|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postArticleSupplySource(\Webhubworks\WeclappApiCore\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostArticleSupplySource($requestBody, $queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleSupplySourceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleSupplySourceCount($queryParameters), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArticleSupplySourceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteArticleSupplySourceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific articleSupplySource
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleSupplySource|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getArticleSupplySourceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetArticleSupplySourceIdById($id), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ArticleSupplySource|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putArticleSupplySourceIdById(string $id, \Webhubworks\WeclappApiCore\Model\ArticleSupplySource $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutArticleSupplySourceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query attendance
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
     * @return null|\Webhubworks\WeclappApiCore\Model\AttendanceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAttendance(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAttendance($queryParameters), $fetch);
    }

    /**
     * create a attendance
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Attendance|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postAttendance(\Webhubworks\WeclappApiCore\Model\Attendance $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostAttendance($requestBody, $queryParameters), $fetch);
    }

    /**
     * count attendance
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AttendanceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAttendanceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAttendanceCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AttendanceCurrentAttendanceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAttendanceCurrentAttendance(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAttendanceCurrentAttendance, $fetch);
    }

    /**
     * delete a attendance
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAttendanceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteAttendanceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific attendance
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Attendance|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getAttendanceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetAttendanceIdById($id), $fetch);
    }

    /**
     * update attendance
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Attendance|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putAttendanceIdById(string $id, \Webhubworks\WeclappApiCore\Model\Attendance $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutAttendanceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postAttendanceLogOff(\Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostAttendanceLogOff($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postAttendanceLogOn(\Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostAttendanceLogOn($requestBody), $fetch);
    }

    /**
     * query bankAccount
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
     * @return null|\Webhubworks\WeclappApiCore\Model\BankAccountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBankAccount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBankAccount($queryParameters), $fetch);
    }

    /**
     * create a bankAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BankAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postBankAccount(\Webhubworks\WeclappApiCore\Model\BankAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostBankAccount($requestBody, $queryParameters), $fetch);
    }

    /**
     * count bankAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BankAccountCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBankAccountCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBankAccountCount($queryParameters), $fetch);
    }

    /**
     * delete a bankAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteBankAccountIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteBankAccountIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific bankAccount
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BankAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBankAccountIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBankAccountIdById($id), $fetch);
    }

    /**
     * update bankAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BankAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putBankAccountIdById(string $id, \Webhubworks\WeclappApiCore\Model\BankAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutBankAccountIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query batchNumber
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
     * @return null|\Webhubworks\WeclappApiCore\Model\BatchNumberGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBatchNumber(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBatchNumber($queryParameters), $fetch);
    }

    /**
     * count batchNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BatchNumberCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBatchNumberCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBatchNumberCount($queryParameters), $fetch);
    }

    /**
     * query a specific batchNumber
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BatchNumber|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBatchNumberIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBatchNumberIdById($id), $fetch);
    }

    /**
     * query blanketPurchaseOrder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBlanketPurchaseOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBlanketPurchaseOrder($queryParameters), $fetch);
    }

    /**
     * create a blanketPurchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postBlanketPurchaseOrder(\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostBlanketPurchaseOrder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count blanketPurchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBlanketPurchaseOrderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBlanketPurchaseOrderCount($queryParameters), $fetch);
    }

    /**
     * delete a blanketPurchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteBlanketPurchaseOrderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteBlanketPurchaseOrderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific blanketPurchaseOrder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBlanketPurchaseOrderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBlanketPurchaseOrderIdById($id), $fetch);
    }

    /**
     * update blanketPurchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putBlanketPurchaseOrderIdById(string $id, \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutBlanketPurchaseOrderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getBlanketPurchaseOrderIdByIdDownloadLatestBlanketPurchaseOrderPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetBlanketPurchaseOrderIdByIdDownloadLatestBlanketPurchaseOrderPdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postBlanketPurchaseOrderIdByIdGenerateRelease(string $id, \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostBlanketPurchaseOrderIdByIdGenerateRelease($id, $requestBody), $fetch);
    }

    /**
     * query calendar
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendar(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendar($queryParameters), $fetch);
    }

    /**
     * create a calendar
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Calendar|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCalendar(\Webhubworks\WeclappApiCore\Model\Calendar $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCalendar($requestBody, $queryParameters), $fetch);
    }

    /**
     * count calendar
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendarCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendarCount($queryParameters), $fetch);
    }

    /**
     * delete a calendar
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCalendarIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCalendarIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific calendar
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Calendar|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendarIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendarIdById($id), $fetch);
    }

    /**
     * update calendar
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Calendar|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCalendarIdById(string $id, \Webhubworks\WeclappApiCore\Model\Calendar $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCalendarIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCalendarIdByIdDeleteCalendarAndMoveEvent(string $id, \Webhubworks\WeclappApiCore\Model\CalendarIdIdDeleteCalendarAndMoveEventsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCalendarIdByIdDeleteCalendarAndMoveEvent($id, $requestBody), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarIdIdImportiCalPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCalendarIdByIdImportiCal(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCalendarIdByIdImportiCal($id, $requestBody), $fetch);
    }

    /**
     * query calendarEvent
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarEventGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendarEvent(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendarEvent($queryParameters), $fetch);
    }

    /**
     * create a calendarEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCalendarEvent(\Webhubworks\WeclappApiCore\Model\CalendarEvent $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCalendarEvent($requestBody, $queryParameters), $fetch);
    }

    /**
     * count calendarEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarEventCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendarEventCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendarEventCount($queryParameters), $fetch);
    }

    /**
     * delete a calendarEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCalendarEventIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCalendarEventIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific calendarEvent
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCalendarEventIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCalendarEventIdById($id), $fetch);
    }

    /**
     * update calendarEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CalendarEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCalendarEventIdById(string $id, \Webhubworks\WeclappApiCore\Model\CalendarEvent $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCalendarEventIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query campaign
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaign(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaign($queryParameters), $fetch);
    }

    /**
     * create a campaign
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Campaign|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCampaign(\Webhubworks\WeclappApiCore\Model\Campaign $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCampaign($requestBody, $queryParameters), $fetch);
    }

    /**
     * count campaign
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaignCount($queryParameters), $fetch);
    }

    /**
     * delete a campaign
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCampaignIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCampaignIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific campaign
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Campaign|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaignIdById($id), $fetch);
    }

    /**
     * update campaign
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Campaign|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCampaignIdById(string $id, \Webhubworks\WeclappApiCore\Model\Campaign $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCampaignIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query campaignParticipant
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignParticipantGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignParticipant(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaignParticipant($queryParameters), $fetch);
    }

    /**
     * create a campaignParticipant
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignParticipant|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCampaignParticipant(\Webhubworks\WeclappApiCore\Model\CampaignParticipant $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCampaignParticipant($requestBody, $queryParameters), $fetch);
    }

    /**
     * count campaignParticipant
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignParticipantCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignParticipantCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaignParticipantCount($queryParameters), $fetch);
    }

    /**
     * delete a campaignParticipant
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCampaignParticipantIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCampaignParticipantIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific campaignParticipant
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignParticipant|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignParticipantIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCampaignParticipantIdById($id), $fetch);
    }

    /**
     * update campaignParticipant
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CampaignParticipant|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCampaignParticipantIdById(string $id, \Webhubworks\WeclappApiCore\Model\CampaignParticipant $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCampaignParticipantIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query cashAccount
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CashAccountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCashAccount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCashAccount($queryParameters), $fetch);
    }

    /**
     * create a cashAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CashAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCashAccount(\Webhubworks\WeclappApiCore\Model\CashAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCashAccount($requestBody, $queryParameters), $fetch);
    }

    /**
     * count cashAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CashAccountCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCashAccountCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCashAccountCount($queryParameters), $fetch);
    }

    /**
     * query a specific cashAccount
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CashAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCashAccountIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCashAccountIdById($id), $fetch);
    }

    /**
     * update cashAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CashAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCashAccountIdById(string $id, \Webhubworks\WeclappApiCore\Model\CashAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCashAccountIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query comment
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
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CommentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getComment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetComment($queryParameters), $fetch);
    }

    /**
     * create a comment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Comment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postComment(\Webhubworks\WeclappApiCore\Model\Comment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostComment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count comment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CommentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCommentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCommentCount($queryParameters), $fetch);
    }

    /**
     * delete a comment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCommentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCommentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific comment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Comment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCommentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCommentIdById($id), $fetch);
    }

    /**
     * update comment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Comment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCommentIdById(string $id, \Webhubworks\WeclappApiCore\Model\Comment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCommentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query commercialLanguage
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CommercialLanguageGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCommercialLanguage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCommercialLanguage($queryParameters), $fetch);
    }

    /**
     * count commercialLanguage
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CommercialLanguageCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCommercialLanguageCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCommercialLanguageCount($queryParameters), $fetch);
    }

    /**
     * query a specific commercialLanguage
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CommercialLanguage|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCommercialLanguageIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCommercialLanguageIdById($id), $fetch);
    }

    /**
     * query companySize
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CompanySizeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySize(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCompanySize($queryParameters), $fetch);
    }

    /**
     * create a companySize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCompanySize(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCompanySize($requestBody, $queryParameters), $fetch);
    }

    /**
     * count companySize
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CompanySizeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySizeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCompanySizeCount($queryParameters), $fetch);
    }

    /**
     * delete a companySize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCompanySizeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCompanySizeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific companySize
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanySizeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCompanySizeIdById($id), $fetch);
    }

    /**
     * update companySize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCompanySizeIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCompanySizeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query contact
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ContactGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContact(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContact($queryParameters), $fetch);
    }

    /**
     * create a contact
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contact|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContact(\Webhubworks\WeclappApiCore\Model\Contact $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContact($requestBody, $queryParameters), $fetch);
    }

    /**
     * count contact
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContactCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContactCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContactCount($queryParameters), $fetch);
    }

    /**
     * delete a contact
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContactIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteContactIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific contact
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contact|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContactIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContactIdById($id), $fetch);
    }

    /**
     * update contact
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contact|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putContactIdById(string $id, \Webhubworks\WeclappApiCore\Model\Contact $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutContactIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContactIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContactIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContactIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContactIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContactIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * query contract
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContract(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContract($queryParameters), $fetch);
    }

    /**
     * create a contract
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contract|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContract(\Webhubworks\WeclappApiCore\Model\Contract $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContract($requestBody, $queryParameters), $fetch);
    }

    /**
     * count contract
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractCount($queryParameters), $fetch);
    }

    /**
     * delete a contract
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContractIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteContractIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific contract
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contract|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractIdById($id), $fetch);
    }

    /**
     * update contract
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Contract|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putContractIdById(string $id, \Webhubworks\WeclappApiCore\Model\Contract $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutContractIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContractIdByIdCreateContractDocument(string $id, \Webhubworks\WeclappApiCore\Model\ContractIdIdCreateContractDocumentPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContractIdByIdCreateContractDocument($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractIdByIdDownloadLatestContractDocumentPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractIdByIdDownloadLatestContractDocumentPdf($id, $accept), $fetch);
    }

    /**
     * query contractAuthorizationUnit
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractAuthorizationUnit(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractAuthorizationUnit($queryParameters), $fetch);
    }

    /**
     * count contractAuthorizationUnit
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractAuthorizationUnitCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractAuthorizationUnitCount($queryParameters), $fetch);
    }

    /**
     * query a specific contractAuthorizationUnit
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnit|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractAuthorizationUnitIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractAuthorizationUnitIdById($id), $fetch);
    }

    /**
     * query contractBillingGroup
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractBillingGroupGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractBillingGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractBillingGroup($queryParameters), $fetch);
    }

    /**
     * create a contractBillingGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContractBillingGroup(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContractBillingGroup($requestBody, $queryParameters), $fetch);
    }

    /**
     * count contractBillingGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractBillingGroupCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractBillingGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractBillingGroupCount($queryParameters), $fetch);
    }

    /**
     * delete a contractBillingGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContractBillingGroupIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteContractBillingGroupIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific contractBillingGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractBillingGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractBillingGroupIdById($id), $fetch);
    }

    /**
     * update contractBillingGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putContractBillingGroupIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutContractBillingGroupIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query contractTerminationReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractTerminationReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractTerminationReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractTerminationReason($queryParameters), $fetch);
    }

    /**
     * create a contractTerminationReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postContractTerminationReason(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostContractTerminationReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count contractTerminationReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ContractTerminationReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractTerminationReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractTerminationReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a contractTerminationReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContractTerminationReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteContractTerminationReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific contractTerminationReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getContractTerminationReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetContractTerminationReasonIdById($id), $fetch);
    }

    /**
     * update contractTerminationReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putContractTerminationReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutContractTerminationReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query costCenter
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenterGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenter($queryParameters), $fetch);
    }

    /**
     * create a costCenter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCostCenter(\Webhubworks\WeclappApiCore\Model\CostCenter $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCostCenter($requestBody, $queryParameters), $fetch);
    }

    /**
     * count costCenter
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenterCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenterCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenterCount($queryParameters), $fetch);
    }

    /**
     * delete a costCenter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCostCenterIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCostCenterIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific costCenter
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenterIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenterIdById($id), $fetch);
    }

    /**
     * update costCenter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCostCenterIdById(string $id, \Webhubworks\WeclappApiCore\Model\CostCenter $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCostCenterIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query costCenterGroup
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenterGroupGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenterGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenterGroup($queryParameters), $fetch);
    }

    /**
     * create a costCenterGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCostCenterGroup(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCostCenterGroup($requestBody, $queryParameters), $fetch);
    }

    /**
     * count costCenterGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostCenterGroupCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenterGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenterGroupCount($queryParameters), $fetch);
    }

    /**
     * delete a costCenterGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCostCenterGroupIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCostCenterGroupIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific costCenterGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostCenterGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostCenterGroupIdById($id), $fetch);
    }

    /**
     * update costCenterGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCostCenterGroupIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCostCenterGroupIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query costType
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CostTypeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostType(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostType($queryParameters), $fetch);
    }

    /**
     * create a costType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCostType(\Webhubworks\WeclappApiCore\Model\CostType $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCostType($requestBody, $queryParameters), $fetch);
    }

    /**
     * count costType
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostTypeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostTypeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostTypeCount($queryParameters), $fetch);
    }

    /**
     * delete a costType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCostTypeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCostTypeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific costType
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCostTypeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCostTypeIdById($id), $fetch);
    }

    /**
     * update costType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CostType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCostTypeIdById(string $id, \Webhubworks\WeclappApiCore\Model\CostType $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCostTypeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query crmCallCategory
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmCallCategoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCallCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmCallCategory($queryParameters), $fetch);
    }

    /**
     * create a crmCallCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmCallCategory(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCrmCallCategory($requestBody, $queryParameters), $fetch);
    }

    /**
     * count crmCallCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmCallCategoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCallCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmCallCategoryCount($queryParameters), $fetch);
    }

    /**
     * delete a crmCallCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmCallCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCrmCallCategoryIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific crmCallCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmCallCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmCallCategoryIdById($id), $fetch);
    }

    /**
     * update crmCallCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmCallCategoryIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCrmCallCategoryIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query crmEvent
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEventGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEvent(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEvent($queryParameters), $fetch);
    }

    /**
     * create a crmEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmEvent(\Webhubworks\WeclappApiCore\Model\CrmEvent $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCrmEvent($requestBody, $queryParameters), $fetch);
    }

    /**
     * count crmEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEventCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEventCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEventCount($queryParameters), $fetch);
    }

    /**
     * delete a crmEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmEventIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCrmEventIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific crmEvent
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEventIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEventIdById($id), $fetch);
    }

    /**
     * update crmEvent
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEvent|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmEventIdById(string $id, \Webhubworks\WeclappApiCore\Model\CrmEvent $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCrmEventIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query crmEventCategory
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEventCategoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEventCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEventCategory($queryParameters), $fetch);
    }

    /**
     * create a crmEventCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCrmEventCategory(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCrmEventCategory($requestBody, $queryParameters), $fetch);
    }

    /**
     * count crmEventCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CrmEventCategoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEventCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEventCategoryCount($queryParameters), $fetch);
    }

    /**
     * delete a crmEventCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCrmEventCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCrmEventCategoryIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific crmEventCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCrmEventCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCrmEventCategoryIdById($id), $fetch);
    }

    /**
     * update crmEventCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCrmEventCategoryIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCrmEventCategoryIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query currency
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CurrencyGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrency(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCurrency($queryParameters), $fetch);
    }

    /**
     * create a currency
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Currency|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCurrency(\Webhubworks\WeclappApiCore\Model\Currency $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCurrency($requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CurrencyCompanyCurrencyGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencyCompanyCurrency(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCurrencyCompanyCurrency, $fetch);
    }

    /**
     * count currency
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CurrencyCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencyCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCurrencyCount($queryParameters), $fetch);
    }

    /**
     * delete a currency
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCurrencyIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCurrencyIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific currency
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Currency|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencyIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCurrencyIdById($id), $fetch);
    }

    /**
     * update currency
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Currency|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCurrencyIdById(string $id, \Webhubworks\WeclappApiCore\Model\Currency $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCurrencyIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query customAttributeDefinition
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomAttributeDefinition(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomAttributeDefinition($queryParameters), $fetch);
    }

    /**
     * create a customAttributeDefinition
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomAttributeDefinition(\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomAttributeDefinition($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customAttributeDefinition
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomAttributeDefinitionCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomAttributeDefinitionCount($queryParameters), $fetch);
    }

    /**
     * delete a customAttributeDefinition
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomAttributeDefinitionIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomAttributeDefinitionIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customAttributeDefinition
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomAttributeDefinitionIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomAttributeDefinitionIdById($id), $fetch);
    }

    /**
     * update customAttributeDefinition
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomAttributeDefinitionIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomAttributeDefinitionIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $entityType
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionReadOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomAttributeDefinitionReadOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomAttributeDefinitionReadOrder($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomAttributeDefinitionUpdateOrder(\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomAttributeDefinitionUpdateOrder($requestBody), $fetch);
    }

    /**
     * query customer
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomer($queryParameters), $fetch);
    }

    /**
     * create a customer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Customer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomer(\Webhubworks\WeclappApiCore\Model\Customer $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomer($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customer
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerCount($queryParameters), $fetch);
    }

    /**
     * delete a customer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomerIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customer
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Customer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerIdById($id), $fetch);
    }

    /**
     * update customer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Customer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerIdById(string $id, \Webhubworks\WeclappApiCore\Model\Customer $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomerIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomerIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * query customerCategory
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerCategoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerCategory($queryParameters), $fetch);
    }

    /**
     * create a customerCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerCategory(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomerCategory($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customerCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerCategoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerCategoryCount($queryParameters), $fetch);
    }

    /**
     * delete a customerCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerCategoryIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomerCategoryIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customerCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerCategoryIdById($id), $fetch);
    }

    /**
     * update customerCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerCategoryIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomerCategoryIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query customerLeadLossReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerLeadLossReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerLeadLossReason($queryParameters), $fetch);
    }

    /**
     * create a customerLeadLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerLeadLossReason(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomerLeadLossReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customerLeadLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerLeadLossReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerLeadLossReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a customerLeadLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerLeadLossReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomerLeadLossReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customerLeadLossReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerLeadLossReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerLeadLossReasonIdById($id), $fetch);
    }

    /**
     * update customerLeadLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerLeadLossReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomerLeadLossReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query customerTopic
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerTopicGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTopic(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerTopic($queryParameters), $fetch);
    }

    /**
     * create a customerTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerTopic(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomerTopic($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customerTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomerTopicCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTopicCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerTopicCount($queryParameters), $fetch);
    }

    /**
     * delete a customerTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerTopicIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomerTopicIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customerTopic
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerTopicIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomerTopicIdById($id), $fetch);
    }

    /**
     * update customerTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomerTopicIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomerTopicIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query customsTariffNumber
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomsTariffNumberGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomsTariffNumber(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomsTariffNumber($queryParameters), $fetch);
    }

    /**
     * create a customsTariffNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomsTariffNumber(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostCustomsTariffNumber($requestBody, $queryParameters), $fetch);
    }

    /**
     * count customsTariffNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomsTariffNumberCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomsTariffNumberCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomsTariffNumberCount($queryParameters), $fetch);
    }

    /**
     * delete a customsTariffNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomsTariffNumberIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteCustomsTariffNumberIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific customsTariffNumber
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomsTariffNumberIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetCustomsTariffNumberIdById($id), $fetch);
    }

    /**
     * update customsTariffNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putCustomsTariffNumberIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutCustomsTariffNumberIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query document
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
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocument(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocument($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentCopyPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentCopy(\Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostDocumentCopy($requestBody), $fetch);
    }

    /**
     * count document
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     * @var string $entityId
     * @var string $entityName
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocumentCount($queryParameters), $fetch);
    }

    /**
     * delete a document
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDocumentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteDocumentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific document
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Document|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocumentIdById($id), $fetch);
    }

    /**
     * update document
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Document|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putDocumentIdById(string $id, \Webhubworks\WeclappApiCore\Model\Document $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutDocumentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentIdByIdCopy(string $id, \Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostDocumentIdByIdCopy($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentIdByIdDownload(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocumentIdByIdDownload($id, $accept), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $versionId
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentIdByIdDownloadDocumentVersion(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocumentIdByIdDownloadDocumentVersion($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $filename
     * @var array $ids
     *            }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getDocumentIdByIdDownloadDocumentVersionsZipped(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetDocumentIdByIdDownloadDocumentVersionsZipped($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $comment
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentIdIdUploadPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentIdByIdUpload(string $id, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostDocumentIdByIdUpload($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $entityName
     * @var string $entityId
     * @var string $name
     * @var string $description
     * @var string $documentType
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentUploadPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postDocumentUpload($requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostDocumentUpload($requestBody, $queryParameters), $fetch);
    }

    /**
     * query externalConnection
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ExternalConnectionGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getExternalConnection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetExternalConnection($queryParameters), $fetch);
    }

    /**
     * count externalConnection
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ExternalConnectionCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getExternalConnectionCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetExternalConnectionCount($queryParameters), $fetch);
    }

    /**
     * query a specific externalConnection
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ExternalConnection|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getExternalConnectionIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetExternalConnectionIdById($id), $fetch);
    }

    /**
     * query financialYear
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
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYearGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFinancialYear(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFinancialYear($queryParameters), $fetch);
    }

    /**
     * create a financialYear
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYear|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postFinancialYear(\Webhubworks\WeclappApiCore\Model\FinancialYear $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostFinancialYear($requestBody, $queryParameters), $fetch);
    }

    /**
     * count financialYear
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYearCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFinancialYearCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFinancialYearCount($queryParameters), $fetch);
    }

    /**
     * delete a financialYear
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFinancialYearIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteFinancialYearIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific financialYear
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYear|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFinancialYearIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFinancialYearIdById($id), $fetch);
    }

    /**
     * update financialYear
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYear|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putFinancialYearIdById(string $id, \Webhubworks\WeclappApiCore\Model\FinancialYear $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutFinancialYearIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postFinancialYearIdByIdGeneratePeriod(string $id, \Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostFinancialYearIdByIdGeneratePeriod($id, $requestBody), $fetch);
    }

    /**
     * query fulfillmentProvider
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
     * @return null|\Webhubworks\WeclappApiCore\Model\FulfillmentProviderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentProvider(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFulfillmentProvider($queryParameters), $fetch);
    }

    /**
     * count fulfillmentProvider
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FulfillmentProviderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentProviderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFulfillmentProviderCount($queryParameters), $fetch);
    }

    /**
     * query a specific fulfillmentProvider
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\FulfillmentProvider|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentProviderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetFulfillmentProviderIdById($id), $fetch);
    }

    /**
     * query incomingGoods
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
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getIncomingGood(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetIncomingGood($queryParameters), $fetch);
    }

    /**
     * create a incomingGoods
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoods|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGood(\Webhubworks\WeclappApiCore\Model\IncomingGoods $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGood($requestBody, $queryParameters), $fetch);
    }

    /**
     * count incomingGoods
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getIncomingGoodsCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetIncomingGoodsCount($queryParameters), $fetch);
    }

    /**
     * delete a incomingGoods
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteIncomingGoodsIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteIncomingGoodsIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific incomingGoods
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoods|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getIncomingGoodsIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetIncomingGoodsIdById($id), $fetch);
    }

    /**
     * update incomingGoods
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoods|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putIncomingGoodsIdById(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoods $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutIncomingGoodsIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdAddPurchaseOrder(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdAddPurchaseOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdCreateCompensationShipment(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdCreateCompensationShipment($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdCreateCreditNote(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdCreateCreditNote($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdCreatePurchaseInvoice(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdCreatePurchaseInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdCreateReturnLabel(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdCreateReturnLabel($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdCreateSupplierReturn(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdCreateSupplierReturn($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdIncomingBookingsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getIncomingGoodsIdByIdIncomingBooking(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetIncomingGoodsIdByIdIncomingBooking($id), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postIncomingGoodsIdByIdUpdateIncomingBooking(string $id, \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostIncomingGoodsIdByIdUpdateIncomingBooking($id, $requestBody), $fetch);
    }

    /**
     * query internalTransportReference
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
     * @return null|\Webhubworks\WeclappApiCore\Model\InternalTransportReferenceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalTransportReference(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInternalTransportReference($queryParameters), $fetch);
    }

    /**
     * create a internalTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InternalTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInternalTransportReference(\Webhubworks\WeclappApiCore\Model\InternalTransportReference $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInternalTransportReference($requestBody, $queryParameters), $fetch);
    }

    /**
     * count internalTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InternalTransportReferenceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalTransportReferenceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInternalTransportReferenceCount($queryParameters), $fetch);
    }

    /**
     * delete a internalTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInternalTransportReferenceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteInternalTransportReferenceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific internalTransportReference
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InternalTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalTransportReferenceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInternalTransportReferenceIdById($id), $fetch);
    }

    /**
     * update internalTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InternalTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putInternalTransportReferenceIdById(string $id, \Webhubworks\WeclappApiCore\Model\InternalTransportReference $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutInternalTransportReferenceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInternalTransportReferenceIdByIdCreateLabel(string $id, \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceIdIdCreateLabelPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInternalTransportReferenceIdByIdCreateLabel($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalTransportReferenceIdByIdDownloadLatestLabel(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInternalTransportReferenceIdByIdDownloadLatestLabel($id, $accept), $fetch);
    }

    /**
     * query inventory
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
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventory($queryParameters), $fetch);
    }

    /**
     * create a inventory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Inventory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInventory(\Webhubworks\WeclappApiCore\Model\Inventory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInventory($requestBody, $queryParameters), $fetch);
    }

    /**
     * count inventory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryCreatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryCreate(\Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInventoryCreate($requestBody), $fetch);
    }

    /**
     * query a specific inventory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Inventory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryIdById($id), $fetch);
    }

    /**
     * update inventory
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Inventory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putInventoryIdById(string $id, \Webhubworks\WeclappApiCore\Model\Inventory $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutInventoryIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query inventoryGroup
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
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryGroupGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryGroup($queryParameters), $fetch);
    }

    /**
     * count inventoryGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryGroupCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryGroupCount($queryParameters), $fetch);
    }

    /**
     * query a specific inventoryGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryGroup|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryGroupIdById($id), $fetch);
    }

    /**
     * query inventoryItem
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
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryItemGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryItem($queryParameters), $fetch);
    }

    /**
     * create a inventoryItem
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItem(\Webhubworks\WeclappApiCore\Model\InventoryItem $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInventoryItem($requestBody, $queryParameters), $fetch);
    }

    /**
     * count inventoryItem
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryItemCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItemCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryItemCount($queryParameters), $fetch);
    }

    /**
     * delete a inventoryItem
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInventoryItemIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteInventoryItemIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific inventoryItem
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItemIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryItemIdById($id), $fetch);
    }

    /**
     * update inventoryItem
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putInventoryItemIdById(string $id, \Webhubworks\WeclappApiCore\Model\InventoryItem $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutInventoryItemIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query inventoryTransportReference
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
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryTransportReference(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryTransportReference($queryParameters), $fetch);
    }

    /**
     * create a inventoryTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryTransportReference(\Webhubworks\WeclappApiCore\Model\InventoryTransportReference $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostInventoryTransportReference($requestBody, $queryParameters), $fetch);
    }

    /**
     * count inventoryTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryTransportReferenceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryTransportReferenceCount($queryParameters), $fetch);
    }

    /**
     * query a specific inventoryTransportReference
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryTransportReferenceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetInventoryTransportReferenceIdById($id), $fetch);
    }

    /**
     * update inventoryTransportReference
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\InventoryTransportReference|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putInventoryTransportReferenceIdById(string $id, \Webhubworks\WeclappApiCore\Model\InventoryTransportReference $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutInventoryTransportReferenceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $type
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\JobAbortGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getJobAbort(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetJobAbort($queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $type
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\JobStatusGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getJobStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetJobStatus($queryParameters), $fetch);
    }

    /**
     * query lead
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLead(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLead($queryParameters), $fetch);
    }

    /**
     * create a lead
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Lead|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLead(\Webhubworks\WeclappApiCore\Model\Lead $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLead($requestBody, $queryParameters), $fetch);
    }

    /**
     * count lead
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadCount($queryParameters), $fetch);
    }

    /**
     * delete a lead
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLeadIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLeadIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific lead
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Lead|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadIdById($id), $fetch);
    }

    /**
     * update lead
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Lead|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLeadIdById(string $id, \Webhubworks\WeclappApiCore\Model\Lead $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLeadIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadIdIdConvertLeadToCustomerGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadIdByIdConvertLeadToCustomer(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadIdByIdConvertLeadToCustomer($id), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLeadIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLeadIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * query leadRating
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadRatingGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadRating(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadRating($queryParameters), $fetch);
    }

    /**
     * create a leadRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLeadRating(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLeadRating($requestBody, $queryParameters), $fetch);
    }

    /**
     * count leadRating
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadRatingCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadRatingCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadRatingCount($queryParameters), $fetch);
    }

    /**
     * delete a leadRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLeadRatingIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLeadRatingIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific leadRating
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadRatingIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadRatingIdById($id), $fetch);
    }

    /**
     * update leadRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLeadRatingIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLeadRatingIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query leadSource
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadSourceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadSource(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadSource($queryParameters), $fetch);
    }

    /**
     * create a leadSource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLeadSource(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLeadSource($requestBody, $queryParameters), $fetch);
    }

    /**
     * count leadSource
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LeadSourceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadSourceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadSourceCount($queryParameters), $fetch);
    }

    /**
     * delete a leadSource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLeadSourceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLeadSourceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific leadSource
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLeadSourceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLeadSourceIdById($id), $fetch);
    }

    /**
     * update leadSource
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLeadSourceIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLeadSourceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ledgerAccount
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LedgerAccountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLedgerAccount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLedgerAccount($queryParameters), $fetch);
    }

    /**
     * create a ledgerAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LedgerAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLedgerAccount(\Webhubworks\WeclappApiCore\Model\LedgerAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLedgerAccount($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ledgerAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LedgerAccountCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLedgerAccountCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLedgerAccountCount($queryParameters), $fetch);
    }

    /**
     * delete a ledgerAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLedgerAccountIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLedgerAccountIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ledgerAccount
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LedgerAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLedgerAccountIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLedgerAccountIdById($id), $fetch);
    }

    /**
     * update ledgerAccount
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LedgerAccount|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLedgerAccountIdById(string $id, \Webhubworks\WeclappApiCore\Model\LedgerAccount $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLedgerAccountIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query legalForm
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LegalFormGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLegalForm(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLegalForm($queryParameters), $fetch);
    }

    /**
     * create a legalForm
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLegalForm(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLegalForm($requestBody, $queryParameters), $fetch);
    }

    /**
     * count legalForm
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LegalFormCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLegalFormCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLegalFormCount($queryParameters), $fetch);
    }

    /**
     * delete a legalForm
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLegalFormIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLegalFormIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific legalForm
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLegalFormIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLegalFormIdById($id), $fetch);
    }

    /**
     * update legalForm
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLegalFormIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLegalFormIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query loadingEquipmentIdentifier
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
     * @return null|\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLoadingEquipmentIdentifier(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLoadingEquipmentIdentifier($queryParameters), $fetch);
    }

    /**
     * create a loadingEquipmentIdentifier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postLoadingEquipmentIdentifier(\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostLoadingEquipmentIdentifier($requestBody, $queryParameters), $fetch);
    }

    /**
     * count loadingEquipmentIdentifier
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLoadingEquipmentIdentifierCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLoadingEquipmentIdentifierCount($queryParameters), $fetch);
    }

    /**
     * delete a loadingEquipmentIdentifier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLoadingEquipmentIdentifierIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteLoadingEquipmentIdentifierIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific loadingEquipmentIdentifier
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getLoadingEquipmentIdentifierIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetLoadingEquipmentIdentifierIdById($id), $fetch);
    }

    /**
     * update loadingEquipmentIdentifier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putLoadingEquipmentIdentifierIdById(string $id, \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutLoadingEquipmentIdentifierIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query mailTemplate
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
     * @return null|\Webhubworks\WeclappApiCore\Model\MailTemplateGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMailTemplate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMailTemplate($queryParameters), $fetch);
    }

    /**
     * create a mailTemplate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MailTemplate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postMailTemplate(\Webhubworks\WeclappApiCore\Model\MailTemplate $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostMailTemplate($requestBody, $queryParameters), $fetch);
    }

    /**
     * count mailTemplate
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MailTemplateCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMailTemplateCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMailTemplateCount($queryParameters), $fetch);
    }

    /**
     * delete a mailTemplate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMailTemplateIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteMailTemplateIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific mailTemplate
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MailTemplate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMailTemplateIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMailTemplateIdById($id), $fetch);
    }

    /**
     * update mailTemplate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MailTemplate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putMailTemplateIdById(string $id, \Webhubworks\WeclappApiCore\Model\MailTemplate $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutMailTemplateIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query manufacturer
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ManufacturerGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getManufacturer(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetManufacturer($queryParameters), $fetch);
    }

    /**
     * create a manufacturer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Manufacturer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postManufacturer(\Webhubworks\WeclappApiCore\Model\Manufacturer $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostManufacturer($requestBody, $queryParameters), $fetch);
    }

    /**
     * count manufacturer
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ManufacturerCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getManufacturerCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetManufacturerCount($queryParameters), $fetch);
    }

    /**
     * delete a manufacturer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteManufacturerIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteManufacturerIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific manufacturer
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Manufacturer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getManufacturerIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetManufacturerIdById($id), $fetch);
    }

    /**
     * update manufacturer
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Manufacturer|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putManufacturerIdById(string $id, \Webhubworks\WeclappApiCore\Model\Manufacturer $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutManufacturerIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $resource
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MetaQueryFilterPropertiesGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMetaQueryFilterProperty(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMetaQueryFilterProperty($queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $resource
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MetaQuerySortPropertiesGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMetaQuerySortProperty(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMetaQuerySortProperty($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\MetaResourcesGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getMetaResource(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetMetaResource, $fetch);
    }

    /**
     * query notification
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
     * @return null|\Webhubworks\WeclappApiCore\Model\NotificationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getNotification(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetNotification($queryParameters), $fetch);
    }

    /**
     * count notification
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\NotificationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getNotificationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetNotificationCount($queryParameters), $fetch);
    }

    /**
     * query a specific notification
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Notification|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getNotificationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetNotificationIdById($id), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postNotificationIdByIdMarkRead(string $id, \Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostNotificationIdByIdMarkRead($id, $requestBody), $fetch);
    }

    /**
     * query opportunity
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
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunity(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunity($queryParameters), $fetch);
    }

    /**
     * create a opportunity
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Opportunity|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postOpportunity(\Webhubworks\WeclappApiCore\Model\Opportunity $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostOpportunity($requestBody, $queryParameters), $fetch);
    }

    /**
     * count opportunity
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityCount($queryParameters), $fetch);
    }

    /**
     * delete a opportunity
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpportunityIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteOpportunityIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific opportunity
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Opportunity|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityIdById($id), $fetch);
    }

    /**
     * update opportunity
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Opportunity|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putOpportunityIdById(string $id, \Webhubworks\WeclappApiCore\Model\Opportunity $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutOpportunityIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postOpportunityIdByIdLinkQuotation(string $id, \Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostOpportunityIdByIdLinkQuotation($id, $requestBody), $fetch);
    }

    /**
     * query opportunityTopic
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
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityTopicGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityTopic(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityTopic($queryParameters), $fetch);
    }

    /**
     * create a opportunityTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postOpportunityTopic(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostOpportunityTopic($requestBody, $queryParameters), $fetch);
    }

    /**
     * count opportunityTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityTopicCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityTopicCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityTopicCount($queryParameters), $fetch);
    }

    /**
     * delete a opportunityTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpportunityTopicIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteOpportunityTopicIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific opportunityTopic
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityTopicIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityTopicIdById($id), $fetch);
    }

    /**
     * update opportunityTopic
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putOpportunityTopicIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutOpportunityTopicIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query opportunityWinLossReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityWinLossReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityWinLossReason($queryParameters), $fetch);
    }

    /**
     * create a opportunityWinLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postOpportunityWinLossReason(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostOpportunityWinLossReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count opportunityWinLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityWinLossReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityWinLossReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a opportunityWinLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOpportunityWinLossReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteOpportunityWinLossReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific opportunityWinLossReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getOpportunityWinLossReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetOpportunityWinLossReasonIdById($id), $fetch);
    }

    /**
     * update opportunityWinLossReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putOpportunityWinLossReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutOpportunityWinLossReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query party
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getParty(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetParty($queryParameters), $fetch);
    }

    /**
     * create a party
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Party|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postParty(\Webhubworks\WeclappApiCore\Model\Party $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostParty($requestBody, $queryParameters), $fetch);
    }

    /**
     * count party
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyCount($queryParameters), $fetch);
    }

    /**
     * delete a party
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePartyIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePartyIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific party
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Party|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyIdById($id), $fetch);
    }

    /**
     * update party
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Party|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPartyIdById(string $id, \Webhubworks\WeclappApiCore\Model\Party $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPartyIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPartyIdByIdCreatePublicPage(string $id, \Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPartyIdByIdCreatePublicPage($id, $requestBody), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPartyIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPartyIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * query partyRating
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyRatingGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyRating(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyRating($queryParameters), $fetch);
    }

    /**
     * create a partyRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPartyRating(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPartyRating($requestBody, $queryParameters), $fetch);
    }

    /**
     * count partyRating
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PartyRatingCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyRatingCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyRatingCount($queryParameters), $fetch);
    }

    /**
     * delete a partyRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePartyRatingIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePartyRatingIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific partyRating
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPartyRatingIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPartyRatingIdById($id), $fetch);
    }

    /**
     * update partyRating
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPartyRatingIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPartyRatingIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query paymentMethod
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentMethodGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethod(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentMethod($queryParameters), $fetch);
    }

    /**
     * create a paymentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPaymentMethod(\Webhubworks\WeclappApiCore\Model\PaymentMethod $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPaymentMethod($requestBody, $queryParameters), $fetch);
    }

    /**
     * count paymentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentMethodCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethodCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentMethodCount($queryParameters), $fetch);
    }

    /**
     * delete a paymentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePaymentMethodIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePaymentMethodIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific paymentMethod
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentMethodIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentMethodIdById($id), $fetch);
    }

    /**
     * update paymentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPaymentMethodIdById(string $id, \Webhubworks\WeclappApiCore\Model\PaymentMethod $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPaymentMethodIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query paymentRun
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRunGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRun(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRun($queryParameters), $fetch);
    }

    /**
     * count paymentRun
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRunCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRunCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRunCount($queryParameters), $fetch);
    }

    /**
     * delete a paymentRun
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePaymentRunIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePaymentRunIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific paymentRun
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRun|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRunIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRunIdById($id), $fetch);
    }

    /**
     * update paymentRun
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRun|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPaymentRunIdById(string $id, \Webhubworks\WeclappApiCore\Model\PaymentRun $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPaymentRunIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query paymentRunItem
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRunItemGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRunItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRunItem($queryParameters), $fetch);
    }

    /**
     * count paymentRunItem
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRunItemCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRunItemCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRunItemCount($queryParameters), $fetch);
    }

    /**
     * query a specific paymentRunItem
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PaymentRunItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentRunItemIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPaymentRunItemIdById($id), $fetch);
    }

    /**
     * query personDepartment
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonDepartmentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonDepartment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonDepartment($queryParameters), $fetch);
    }

    /**
     * create a personDepartment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPersonDepartment(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPersonDepartment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count personDepartment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonDepartmentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonDepartmentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonDepartmentCount($queryParameters), $fetch);
    }

    /**
     * delete a personDepartment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePersonDepartmentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePersonDepartmentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific personDepartment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonDepartmentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonDepartmentIdById($id), $fetch);
    }

    /**
     * update personDepartment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPersonDepartmentIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPersonDepartmentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query personRole
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonRoleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonRole(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonRole($queryParameters), $fetch);
    }

    /**
     * create a personRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPersonRole(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPersonRole($requestBody, $queryParameters), $fetch);
    }

    /**
     * count personRole
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonRoleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonRoleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonRoleCount($queryParameters), $fetch);
    }

    /**
     * delete a personRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePersonRoleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePersonRoleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific personRole
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonRoleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonRoleIdById($id), $fetch);
    }

    /**
     * update personRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPersonRoleIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPersonRoleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query personalAccountingCode
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonalAccountingCode(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonalAccountingCode($queryParameters), $fetch);
    }

    /**
     * create a personalAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPersonalAccountingCode(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPersonalAccountingCode($requestBody, $queryParameters), $fetch);
    }

    /**
     * count personalAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonalAccountingCodeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonalAccountingCodeCount($queryParameters), $fetch);
    }

    /**
     * delete a personalAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePersonalAccountingCodeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePersonalAccountingCodeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific personalAccountingCode
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonalAccountingCodeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPersonalAccountingCodeIdById($id), $fetch);
    }

    /**
     * update personalAccountingCode
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPersonalAccountingCodeIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPersonalAccountingCodeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query pick
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PickGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPick(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPick($queryParameters), $fetch);
    }

    /**
     * count pick
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PickCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPickCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPickCount($queryParameters), $fetch);
    }

    /**
     * query a specific pick
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Pick|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPickIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPickIdById($id), $fetch);
    }

    /**
     * query pickCheckReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PickCheckReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPickCheckReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPickCheckReason($queryParameters), $fetch);
    }

    /**
     * create a pickCheckReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPickCheckReason(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPickCheckReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count pickCheckReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PickCheckReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPickCheckReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPickCheckReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a pickCheckReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePickCheckReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePickCheckReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific pickCheckReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPickCheckReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPickCheckReasonIdById($id), $fetch);
    }

    /**
     * update pickCheckReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPickCheckReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPickCheckReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query placeOfService
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PlaceOfServiceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPlaceOfService(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPlaceOfService($queryParameters), $fetch);
    }

    /**
     * create a placeOfService
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPlaceOfService(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPlaceOfService($requestBody, $queryParameters), $fetch);
    }

    /**
     * count placeOfService
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PlaceOfServiceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPlaceOfServiceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPlaceOfServiceCount($queryParameters), $fetch);
    }

    /**
     * delete a placeOfService
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePlaceOfServiceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePlaceOfServiceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific placeOfService
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPlaceOfServiceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPlaceOfServiceIdById($id), $fetch);
    }

    /**
     * update placeOfService
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPlaceOfServiceIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPlaceOfServiceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query priceCalculationParameter
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PriceCalculationParameterGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceCalculationParameter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPriceCalculationParameter($queryParameters), $fetch);
    }

    /**
     * create a priceCalculationParameter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PriceCalculationParameter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPriceCalculationParameter(\Webhubworks\WeclappApiCore\Model\PriceCalculationParameter $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPriceCalculationParameter($requestBody, $queryParameters), $fetch);
    }

    /**
     * count priceCalculationParameter
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PriceCalculationParameterCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceCalculationParameterCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPriceCalculationParameterCount($queryParameters), $fetch);
    }

    /**
     * delete a priceCalculationParameter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePriceCalculationParameterIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePriceCalculationParameterIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific priceCalculationParameter
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PriceCalculationParameter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceCalculationParameterIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPriceCalculationParameterIdById($id), $fetch);
    }

    /**
     * update priceCalculationParameter
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PriceCalculationParameter|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPriceCalculationParameterIdById(string $id, \Webhubworks\WeclappApiCore\Model\PriceCalculationParameter $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPriceCalculationParameterIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query productionOrder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionOrder($queryParameters), $fetch);
    }

    /**
     * create a productionOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postProductionOrder(\Webhubworks\WeclappApiCore\Model\ProductionOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostProductionOrder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count productionOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionOrderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionOrderCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postProductionOrderFastProductionBooking(\Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostProductionOrderFastProductionBooking($requestBody), $fetch);
    }

    /**
     * delete a productionOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductionOrderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteProductionOrderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific productionOrder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionOrderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionOrderIdById($id), $fetch);
    }

    /**
     * update productionOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductionOrderIdById(string $id, \Webhubworks\WeclappApiCore\Model\ProductionOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutProductionOrderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postProductionOrderIdByIdCreatePickingList(string $id, \Webhubworks\WeclappApiCore\Model\ProductionOrderIdIdCreatePickingListPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostProductionOrderIdByIdCreatePickingList($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionOrderIdByIdDownloadLatestProductionOrderPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionOrderIdByIdDownloadLatestProductionOrderPdf($id, $accept), $fetch);
    }

    /**
     * query productionWorkSchedule
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkSchedule(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkSchedule($queryParameters), $fetch);
    }

    /**
     * create a productionWorkSchedule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postProductionWorkSchedule(\Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostProductionWorkSchedule($requestBody, $queryParameters), $fetch);
    }

    /**
     * count productionWorkSchedule
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkScheduleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkScheduleCount($queryParameters), $fetch);
    }

    /**
     * delete a productionWorkSchedule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductionWorkScheduleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteProductionWorkScheduleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific productionWorkSchedule
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkScheduleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkScheduleIdById($id), $fetch);
    }

    /**
     * update productionWorkSchedule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductionWorkScheduleIdById(string $id, \Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutProductionWorkScheduleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query productionWorkScheduleAssignment
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkScheduleAssignment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkScheduleAssignment($queryParameters), $fetch);
    }

    /**
     * create a productionWorkScheduleAssignment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postProductionWorkScheduleAssignment(\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostProductionWorkScheduleAssignment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count productionWorkScheduleAssignment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkScheduleAssignmentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkScheduleAssignmentCount($queryParameters), $fetch);
    }

    /**
     * delete a productionWorkScheduleAssignment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductionWorkScheduleAssignmentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteProductionWorkScheduleAssignmentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific productionWorkScheduleAssignment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getProductionWorkScheduleAssignmentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetProductionWorkScheduleAssignmentIdById($id), $fetch);
    }

    /**
     * update productionWorkScheduleAssignment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putProductionWorkScheduleAssignmentIdById(string $id, \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutProductionWorkScheduleAssignmentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $entityName
     * @var string $entityId
     * @var string $locale
     * @var array $propertyNames
     *            }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PropertyTranslationReadPropertyTranslationsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPropertyTranslationReadPropertyTranslation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPropertyTranslationReadPropertyTranslation($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPropertyTranslationUpdatePropertyTranslation(\Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPropertyTranslationUpdatePropertyTranslation($requestBody), $fetch);
    }

    /**
     * query purchaseInvoice
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseInvoice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseInvoice($queryParameters), $fetch);
    }

    /**
     * create a purchaseInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoice(\Webhubworks\WeclappApiCore\Model\PurchaseInvoice $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoice($requestBody, $queryParameters), $fetch);
    }

    /**
     * count purchaseInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseInvoiceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseInvoiceCount($queryParameters), $fetch);
    }

    /**
     * delete a purchaseInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePurchaseInvoiceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePurchaseInvoiceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific purchaseInvoice
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseInvoiceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseInvoiceIdById($id), $fetch);
    }

    /**
     * update purchaseInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPurchaseInvoiceIdById(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseInvoice $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPurchaseInvoiceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoiceIdByIdCreateContract(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoiceIdByIdCreateContract($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoiceIdByIdCreateCreditNote(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoiceIdByIdCreateCreditNote($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseInvoiceIdByIdDownloadLatestPurchaseInvoiceDocument(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseInvoiceIdByIdDownloadLatestPurchaseInvoiceDocument($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoiceIdByIdResetTax(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoiceIdByIdResetTax($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoiceIdByIdSaveDuplicateInvoiceAsOriginal(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoiceIdByIdSaveDuplicateInvoiceAsOriginal($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseInvoiceStartInvoiceDocumentProcessingMultipartUpload(\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseInvoiceStartInvoiceDocumentProcessingMultipartUpload($requestBody), $fetch);
    }

    /**
     * query purchaseOpenItem
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOpenItemGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOpenItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOpenItem($queryParameters), $fetch);
    }

    /**
     * count purchaseOpenItem
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOpenItemCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOpenItemCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOpenItemCount($queryParameters), $fetch);
    }

    /**
     * query a specific purchaseOpenItem
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOpenItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOpenItemIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOpenItemIdById($id), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOpenItemIdByIdCreatePaymentApplication(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOpenItemIdByIdCreatePaymentApplication($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOpenItemIdByIdUpdatePaymentState(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOpenItemIdByIdUpdatePaymentState($id, $requestBody), $fetch);
    }

    /**
     * query purchaseOrder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrder($queryParameters), $fetch);
    }

    /**
     * create a purchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrder(\Webhubworks\WeclappApiCore\Model\PurchaseOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count purchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderCount($queryParameters), $fetch);
    }

    /**
     * delete a purchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePurchaseOrderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePurchaseOrderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific purchaseOrder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderIdById($id), $fetch);
    }

    /**
     * update purchaseOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPurchaseOrderIdById(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPurchaseOrderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCancelDropshippingShipment(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCancelDropshippingShipment($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCreateContract(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCreateContract($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCreateDropshippingDeliveryNotePdf(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateDropshippingDeliveryNotePdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCreateDropshippingDeliveryNotePdf($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCreateIncomingGood(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCreateIncomingGood($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCreatePurchaseInvoice(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCreatePurchaseInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdCreateSupplierReturn(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdCreateSupplierReturn($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderIdByIdDownloadLatestDropshippingDeliveryNotePdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderIdByIdDownloadLatestDropshippingDeliveryNotePdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderIdByIdDownloadLatestPurchaseOrderPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderIdByIdDownloadLatestPurchaseOrderPdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderIdByIdProcessDropshipping(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderIdByIdProcessDropshipping($id, $requestBody), $fetch);
    }

    /**
     * query purchaseOrderRequest
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderRequest(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderRequest($queryParameters), $fetch);
    }

    /**
     * create a purchaseOrderRequest
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderRequest(\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderRequest($requestBody, $queryParameters), $fetch);
    }

    /**
     * count purchaseOrderRequest
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderRequestCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderRequestCount($queryParameters), $fetch);
    }

    /**
     * delete a purchaseOrderRequest
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deletePurchaseOrderRequestIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeletePurchaseOrderRequestIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific purchaseOrderRequest
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseOrderRequestIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseOrderRequestIdById($id), $fetch);
    }

    /**
     * update purchaseOrderRequest
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPurchaseOrderRequestIdById(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPurchaseOrderRequestIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderRequestIdByIdCreateBlanketPurchaseOrder(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderRequestIdByIdCreateBlanketPurchaseOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderRequestIdByIdCreatePurchaseOrder(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderRequestIdByIdCreatePurchaseOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderRequestIdByIdExportItemsAsCsv(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderRequestIdByIdExportItemsAsCsv($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseOrderRequestIdByIdPushPurchasePrice(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseOrderRequestIdByIdPushPurchasePrice($id, $requestBody), $fetch);
    }

    /**
     * query purchaseRequisition
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
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseRequisitionGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseRequisition(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseRequisition($queryParameters), $fetch);
    }

    /**
     * count purchaseRequisition
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseRequisitionCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseRequisitionCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseRequisitionCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseRequisitionDeleteAllRequisition(\Webhubworks\WeclappApiCore\Model\PurchaseRequisitionDeleteAllRequisitionsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseRequisitionDeleteAllRequisition($requestBody), $fetch);
    }

    /**
     * query a specific purchaseRequisition
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseRequisition|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getPurchaseRequisitionIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetPurchaseRequisitionIdById($id), $fetch);
    }

    /**
     * update purchaseRequisition
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseRequisition|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putPurchaseRequisitionIdById(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseRequisition $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutPurchaseRequisitionIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postPurchaseRequisitionStartMaterialPlanningRun(\Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostPurchaseRequisitionStartMaterialPlanningRun($requestBody), $fetch);
    }

    /**
     * query quotation
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
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetQuotation($queryParameters), $fetch);
    }

    /**
     * create a quotation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Quotation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotation(\Webhubworks\WeclappApiCore\Model\Quotation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotation($requestBody, $queryParameters), $fetch);
    }

    /**
     * count quotation
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetQuotationCount($queryParameters), $fetch);
    }

    /**
     * delete a quotation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteQuotationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteQuotationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific quotation
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Quotation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetQuotationIdById($id), $fetch);
    }

    /**
     * update quotation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Quotation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putQuotationIdById(string $id, \Webhubworks\WeclappApiCore\Model\Quotation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutQuotationIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdAccept(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdAccept($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdAddDefaultScalePricesToItem(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdAddDefaultScalePricesToItem($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdCalculateSalesPrice(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdCalculateSalesPrice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdCreateNewVersion(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdCreateNewVersion($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdCreatePublicPageLink(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePublicPageLinkPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdCreatePublicPageLink($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdCreatePurchaseOrderRequest(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdCreatePurchaseOrderRequest($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdCreateQuotationPdf(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateQuotationPdfPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdCreateQuotationPdf($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdDisablePublicPageLink(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdDisablePublicPageLinkPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdDisablePublicPageLink($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotationIdByIdDownloadLatestQuotationPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetQuotationIdByIdDownloadLatestQuotationPdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdInquire(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdInquire($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotationIdByIdPrintQuotationDatum(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetQuotationIdByIdPrintQuotationDatum($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdRecalculateCost(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdRecalculateCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdResetTax(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdResetTax($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdSetCostsForItemsWithoutCost(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdSetCostsForItemsWithoutCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postQuotationIdByIdUpdatePrice(string $id, \Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostQuotationIdByIdUpdatePrice($id, $requestBody), $fetch);
    }

    /**
     * query recordEmailingRule
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
     * @return null|\Webhubworks\WeclappApiCore\Model\RecordEmailingRuleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRecordEmailingRule(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRecordEmailingRule($queryParameters), $fetch);
    }

    /**
     * create a recordEmailingRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RecordEmailingRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postRecordEmailingRule(\Webhubworks\WeclappApiCore\Model\RecordEmailingRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostRecordEmailingRule($requestBody, $queryParameters), $fetch);
    }

    /**
     * count recordEmailingRule
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RecordEmailingRuleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRecordEmailingRuleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRecordEmailingRuleCount($queryParameters), $fetch);
    }

    /**
     * delete a recordEmailingRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRecordEmailingRuleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteRecordEmailingRuleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific recordEmailingRule
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RecordEmailingRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRecordEmailingRuleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRecordEmailingRuleIdById($id), $fetch);
    }

    /**
     * update recordEmailingRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RecordEmailingRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putRecordEmailingRuleIdById(string $id, \Webhubworks\WeclappApiCore\Model\RecordEmailingRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutRecordEmailingRuleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query region
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
     * @return null|\Webhubworks\WeclappApiCore\Model\RegionGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRegion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRegion($queryParameters), $fetch);
    }

    /**
     * create a region
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Region|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postRegion(\Webhubworks\WeclappApiCore\Model\Region $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostRegion($requestBody, $queryParameters), $fetch);
    }

    /**
     * count region
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RegionCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRegionCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRegionCount($queryParameters), $fetch);
    }

    /**
     * delete a region
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRegionIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteRegionIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific region
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Region|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRegionIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRegionIdById($id), $fetch);
    }

    /**
     * update region
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Region|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putRegionIdById(string $id, \Webhubworks\WeclappApiCore\Model\Region $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutRegionIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query reminder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ReminderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getReminder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetReminder($queryParameters), $fetch);
    }

    /**
     * create a reminder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Reminder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postReminder(\Webhubworks\WeclappApiCore\Model\Reminder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostReminder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count reminder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ReminderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getReminderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetReminderCount($queryParameters), $fetch);
    }

    /**
     * delete a reminder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReminderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteReminderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific reminder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Reminder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getReminderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetReminderIdById($id), $fetch);
    }

    /**
     * update reminder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Reminder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putReminderIdById(string $id, \Webhubworks\WeclappApiCore\Model\Reminder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutReminderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query remotePrintJob
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
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJobGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRemotePrintJob(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRemotePrintJob($queryParameters), $fetch);
    }

    /**
     * create a remotePrintJob
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJob|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postRemotePrintJob(\Webhubworks\WeclappApiCore\Model\RemotePrintJob $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostRemotePrintJob($requestBody, $queryParameters), $fetch);
    }

    /**
     * count remotePrintJob
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJobCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRemotePrintJobCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRemotePrintJobCount($queryParameters), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $weclappOsId
     * @var string $printerName
     * @var int $quantity
     * @var string $documentName
     * @var string $documentDescription
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJobCreatePrintJobWithDocumentPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postRemotePrintJobCreatePrintJobWithDocument($requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostRemotePrintJobCreatePrintJobWithDocument($requestBody, $queryParameters), $fetch);
    }

    /**
     * delete a remotePrintJob
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRemotePrintJobIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteRemotePrintJobIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific remotePrintJob
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJob|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getRemotePrintJobIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetRemotePrintJobIdById($id), $fetch);
    }

    /**
     * update remotePrintJob
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJob|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putRemotePrintJobIdById(string $id, \Webhubworks\WeclappApiCore\Model\RemotePrintJob $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutRemotePrintJobIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesChannelActiveSalesChannelsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesChannelActiveSalesChannel(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesChannelActiveSalesChannel, $fetch);
    }

    /**
     * query salesInvoice
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesInvoice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesInvoice($queryParameters), $fetch);
    }

    /**
     * create a salesInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoice(\Webhubworks\WeclappApiCore\Model\SalesInvoice $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoice($requestBody, $queryParameters), $fetch);
    }

    /**
     * count salesInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesInvoiceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesInvoiceCount($queryParameters), $fetch);
    }

    /**
     * delete a salesInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesInvoiceIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSalesInvoiceIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific salesInvoice
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesInvoiceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesInvoiceIdById($id), $fetch);
    }

    /**
     * update salesInvoice
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoice|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesInvoiceIdById(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoice $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSalesInvoiceIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdAddSalesOrder(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdAddSalesOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdCalculateSalesPrice(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdCalculateSalesPrice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdCreateContract(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdCreateContract($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdCreateCreditNote(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdCreateCreditNote($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesInvoiceIdByIdDownloadLatestSalesInvoicePdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesInvoiceIdByIdDownloadLatestSalesInvoicePdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdRecalculateCost(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdRecalculateCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdResetTax(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdResetTax($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdSetCostsForItemsWithoutCost(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdSetCostsForItemsWithoutCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesInvoiceIdByIdUpdatePrice(string $id, \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesInvoiceIdByIdUpdatePrice($id, $requestBody), $fetch);
    }

    /**
     * query salesOpenItem
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOpenItemGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOpenItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOpenItem($queryParameters), $fetch);
    }

    /**
     * count salesOpenItem
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOpenItemCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOpenItemCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOpenItemCount($queryParameters), $fetch);
    }

    /**
     * query a specific salesOpenItem
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOpenItem|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOpenItemIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOpenItemIdById($id), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOpenItemIdByIdCreatePaymentApplication(string $id, \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOpenItemIdByIdCreatePaymentApplication($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOpenItemIdByIdUpdatePaymentState(string $id, \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOpenItemIdByIdUpdatePaymentState($id, $requestBody), $fetch);
    }

    /**
     * query salesOrder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrder($queryParameters), $fetch);
    }

    /**
     * create a salesOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrder(\Webhubworks\WeclappApiCore\Model\SalesOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count salesOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrderCount($queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $customerId
     * @var string $responsibleUserId
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderDefaultValuesForCreateGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrderDefaultValuesForCreate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrderDefaultValuesForCreate($queryParameters), $fetch);
    }

    /**
     * delete a salesOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesOrderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSalesOrderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific salesOrder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrderIdById($id), $fetch);
    }

    /**
     * update salesOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesOrderIdById(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSalesOrderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdActivateProjectView(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdActivateProjectView($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCalculateSalesPrice(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCalculateSalesPrice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCancelOrManuallyClose(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCancelOrManuallyClose($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateAdvancePaymentRequest(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateAdvancePaymentRequest($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateContract(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateContract($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateCustomerReturn(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateCustomerReturn($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateDropshipping(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateDropshipping($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreatePartPaymentInvoice(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreatePartPaymentInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreatePrepaymentFinalInvoice(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreatePrepaymentFinalInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateProductionOrder(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateProductionOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreatePurchaseOrder(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreatePurchaseOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreatePurchaseOrderRequest(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreatePurchaseOrderRequest($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateReturnLabel(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateReturnLabel($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateSalesInvoice(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateSalesInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateShipment(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateShipment($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdCreateShippingLabel(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdCreateShippingLabel($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrderIdByIdDownloadLatestOrderConfirmationPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrderIdByIdDownloadLatestOrderConfirmationPdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdManuallyClose(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdManuallyClose($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesOrderIdByIdPrintOrderDatum(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesOrderIdByIdPrintOrderDatum($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdRecalculateCost(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdRecalculateCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdResetTax(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdResetTax($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdSetCostsForItemsWithoutCost(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdSetCostsForItemsWithoutCost($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdShipOrderForExternalFulfillment(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdShipOrderForExternalFulfillment($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdToggleProjectTeam(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdToggleProjectTeam($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdToggleServicesFinished(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdToggleServicesFinished($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesOrderIdByIdUpdatePrice(string $id, \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesOrderIdByIdUpdatePrice($id, $requestBody), $fetch);
    }

    /**
     * query salesStage
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesStageGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesStage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesStage($queryParameters), $fetch);
    }

    /**
     * create a salesStage
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesStage|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesStage(\Webhubworks\WeclappApiCore\Model\SalesStage $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSalesStage($requestBody, $queryParameters), $fetch);
    }

    /**
     * count salesStage
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesStageCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesStageCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesStageCount($queryParameters), $fetch);
    }

    /**
     * delete a salesStage
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesStageIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSalesStageIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific salesStage
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesStage|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesStageIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSalesStageIdById($id), $fetch);
    }

    /**
     * update salesStage
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SalesStage|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSalesStageIdById(string $id, \Webhubworks\WeclappApiCore\Model\SalesStage $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSalesStageIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query sector
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SectorGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSector(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSector($queryParameters), $fetch);
    }

    /**
     * create a sector
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSector(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSector($requestBody, $queryParameters), $fetch);
    }

    /**
     * count sector
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SectorCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSectorCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSectorCount($queryParameters), $fetch);
    }

    /**
     * delete a sector
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSectorIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSectorIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific sector
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSectorIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSectorIdById($id), $fetch);
    }

    /**
     * update sector
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSectorIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSectorIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query sepaDirectDebitMandate
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSepaDirectDebitMandate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSepaDirectDebitMandate($queryParameters), $fetch);
    }

    /**
     * create a sepaDirectDebitMandate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSepaDirectDebitMandate(\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSepaDirectDebitMandate($requestBody, $queryParameters), $fetch);
    }

    /**
     * count sepaDirectDebitMandate
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSepaDirectDebitMandateCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSepaDirectDebitMandateCount($queryParameters), $fetch);
    }

    /**
     * delete a sepaDirectDebitMandate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSepaDirectDebitMandateIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSepaDirectDebitMandateIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific sepaDirectDebitMandate
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSepaDirectDebitMandateIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSepaDirectDebitMandateIdById($id), $fetch);
    }

    /**
     * update sepaDirectDebitMandate
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSepaDirectDebitMandateIdById(string $id, \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSepaDirectDebitMandateIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query serialNumber
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SerialNumberGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSerialNumber(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSerialNumber($queryParameters), $fetch);
    }

    /**
     * count serialNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SerialNumberCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSerialNumberCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSerialNumberCount($queryParameters), $fetch);
    }

    /**
     * query a specific serialNumber
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SerialNumber|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSerialNumberIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSerialNumberIdById($id), $fetch);
    }

    /**
     * update serialNumber
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SerialNumber|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSerialNumberIdById(string $id, \Webhubworks\WeclappApiCore\Model\SerialNumber $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSerialNumberIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shelf
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShelfGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShelf(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShelf($queryParameters), $fetch);
    }

    /**
     * create a shelf
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shelf|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShelf(\Webhubworks\WeclappApiCore\Model\Shelf $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShelf($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shelf
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShelfCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShelfCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShelfCount($queryParameters), $fetch);
    }

    /**
     * delete a shelf
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShelfIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShelfIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shelf
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shelf|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShelfIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShelfIdById($id), $fetch);
    }

    /**
     * update shelf
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shelf|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShelfIdById(string $id, \Webhubworks\WeclappApiCore\Model\Shelf $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShelfIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShelfIdByIdActivate(string $id, \Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShelfIdByIdActivate($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShelfIdByIdDeactivate(string $id, \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShelfIdByIdDeactivate($id, $requestBody), $fetch);
    }

    /**
     * query shipment
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipment($queryParameters), $fetch);
    }

    /**
     * create a shipment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shipment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipment(\Webhubworks\WeclappApiCore\Model\Shipment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentCount($queryParameters), $fetch);
    }

    /**
     * delete a shipment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shipment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentIdById($id), $fetch);
    }

    /**
     * update shipment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Shipment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentIdById(string $id, \Webhubworks\WeclappApiCore\Model\Shipment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentIdByIdCreatePickingList(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreatePickingListPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentIdByIdCreatePickingList($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentIdByIdCreateReturnLabel(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentIdByIdCreateReturnLabel($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentIdByIdCreateSalesInvoice(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentIdByIdCreateSalesInvoice($id, $requestBody), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $name
     * @var string $description
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelPdfPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentIdByIdCreateShippingLabelPdf(string $id, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentIdByIdCreateShippingLabelPdf($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentIdByIdCreateShippingLabel(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentIdByIdCreateShippingLabel($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentIdByIdDownloadLatestDeliveryNotePdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentIdByIdDownloadLatestDeliveryNotePdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentIdByIdDownloadLatestPickingListPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentIdByIdDownloadLatestPickingListPdf($id, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentIdByIdDownloadLatestShippingLabelPdf(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentIdByIdDownloadLatestShippingLabelPdf($id, $accept), $fetch);
    }

    /**
     * query shipmentMethod
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentMethodGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentMethod(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentMethod($queryParameters), $fetch);
    }

    /**
     * create a shipmentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentMethod(\Webhubworks\WeclappApiCore\Model\ShipmentMethod $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentMethod($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipmentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentMethodCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentMethodCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentMethodCount($queryParameters), $fetch);
    }

    /**
     * delete a shipmentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentMethodIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentMethodIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipmentMethod
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentMethodIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentMethodIdById($id), $fetch);
    }

    /**
     * update shipmentMethod
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentMethod|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentMethodIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentMethod $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentMethodIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shipmentReturnAssessment
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnAssessment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnAssessment($queryParameters), $fetch);
    }

    /**
     * create a shipmentReturnAssessment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentReturnAssessment(\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentReturnAssessment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipmentReturnAssessment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnAssessmentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnAssessmentCount($queryParameters), $fetch);
    }

    /**
     * delete a shipmentReturnAssessment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentReturnAssessmentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentReturnAssessmentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipmentReturnAssessment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnAssessmentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnAssessmentIdById($id), $fetch);
    }

    /**
     * update shipmentReturnAssessment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentReturnAssessmentIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentReturnAssessmentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shipmentReturnError
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnError(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnError($queryParameters), $fetch);
    }

    /**
     * create a shipmentReturnError
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentReturnError(\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentReturnError($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipmentReturnError
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnErrorCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnErrorCount($queryParameters), $fetch);
    }

    /**
     * delete a shipmentReturnError
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentReturnErrorIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentReturnErrorIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipmentReturnError
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnErrorIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnErrorIdById($id), $fetch);
    }

    /**
     * update shipmentReturnError
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentReturnErrorIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentReturnErrorIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shipmentReturnReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnReason($queryParameters), $fetch);
    }

    /**
     * create a shipmentReturnReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentReturnReason(\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentReturnReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipmentReturnReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a shipmentReturnReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentReturnReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentReturnReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipmentReturnReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnReasonIdById($id), $fetch);
    }

    /**
     * update shipmentReturnReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentReturnReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentReturnReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shipmentReturnRectification
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnRectification(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnRectification($queryParameters), $fetch);
    }

    /**
     * create a shipmentReturnRectification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShipmentReturnRectification(\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShipmentReturnRectification($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shipmentReturnRectification
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnRectificationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnRectificationCount($queryParameters), $fetch);
    }

    /**
     * delete a shipmentReturnRectification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShipmentReturnRectificationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShipmentReturnRectificationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shipmentReturnRectification
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShipmentReturnRectificationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShipmentReturnRectificationIdById($id), $fetch);
    }

    /**
     * update shipmentReturnRectification
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShipmentReturnRectificationIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShipmentReturnRectificationIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query shippingCarrier
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShippingCarrierGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingCarrier(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShippingCarrier($queryParameters), $fetch);
    }

    /**
     * create a shippingCarrier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShippingCarrier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingCarrier(\Webhubworks\WeclappApiCore\Model\ShippingCarrier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostShippingCarrier($requestBody, $queryParameters), $fetch);
    }

    /**
     * count shippingCarrier
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShippingCarrierCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingCarrierCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShippingCarrierCount($queryParameters), $fetch);
    }

    /**
     * delete a shippingCarrier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShippingCarrierIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteShippingCarrierIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific shippingCarrier
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShippingCarrier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingCarrierIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetShippingCarrierIdById($id), $fetch);
    }

    /**
     * update shippingCarrier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ShippingCarrier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putShippingCarrierIdById(string $id, \Webhubworks\WeclappApiCore\Model\ShippingCarrier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutShippingCarrierIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query storageLocation
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
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStorageLocation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStorageLocation($queryParameters), $fetch);
    }

    /**
     * create a storageLocation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postStorageLocation(\Webhubworks\WeclappApiCore\Model\StorageLocation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostStorageLocation($requestBody, $queryParameters), $fetch);
    }

    /**
     * count storageLocation
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStorageLocationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStorageLocationCount($queryParameters), $fetch);
    }

    /**
     * delete a storageLocation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStorageLocationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteStorageLocationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific storageLocation
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStorageLocationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStorageLocationIdById($id), $fetch);
    }

    /**
     * update storageLocation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putStorageLocationIdById(string $id, \Webhubworks\WeclappApiCore\Model\StorageLocation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutStorageLocationIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postStorageLocationIdByIdActivate(string $id, \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostStorageLocationIdByIdActivate($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postStorageLocationIdByIdDeactivate(string $id, \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostStorageLocationIdByIdDeactivate($id, $requestBody), $fetch);
    }

    /**
     * query storagePlace
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
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlace(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlace($queryParameters), $fetch);
    }

    /**
     * count storagePlace
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceCount($queryParameters), $fetch);
    }

    /**
     * query a specific storagePlace
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlace|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceIdById($id), $fetch);
    }

    /**
     * query storagePlaceBlockingReason
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
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceBlockingReason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceBlockingReason($queryParameters), $fetch);
    }

    /**
     * create a storagePlaceBlockingReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postStoragePlaceBlockingReason(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostStoragePlaceBlockingReason($requestBody, $queryParameters), $fetch);
    }

    /**
     * count storagePlaceBlockingReason
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceBlockingReasonCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceBlockingReasonCount($queryParameters), $fetch);
    }

    /**
     * delete a storagePlaceBlockingReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStoragePlaceBlockingReasonIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteStoragePlaceBlockingReasonIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific storagePlaceBlockingReason
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceBlockingReasonIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceBlockingReasonIdById($id), $fetch);
    }

    /**
     * update storagePlaceBlockingReason
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putStoragePlaceBlockingReasonIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutStoragePlaceBlockingReasonIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query storagePlaceSize
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
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceSizeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceSize(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceSize($queryParameters), $fetch);
    }

    /**
     * create a storagePlaceSize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceSize|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postStoragePlaceSize(\Webhubworks\WeclappApiCore\Model\StoragePlaceSize $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostStoragePlaceSize($requestBody, $queryParameters), $fetch);
    }

    /**
     * count storagePlaceSize
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceSizeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceSizeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceSizeCount($queryParameters), $fetch);
    }

    /**
     * delete a storagePlaceSize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStoragePlaceSizeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteStoragePlaceSizeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific storagePlaceSize
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceSize|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getStoragePlaceSizeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetStoragePlaceSizeIdById($id), $fetch);
    }

    /**
     * update storagePlaceSize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\StoragePlaceSize|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putStoragePlaceSizeIdById(string $id, \Webhubworks\WeclappApiCore\Model\StoragePlaceSize $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutStoragePlaceSizeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query supplier
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
     * @return null|\Webhubworks\WeclappApiCore\Model\SupplierGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplier(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSupplier($queryParameters), $fetch);
    }

    /**
     * create a supplier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Supplier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSupplier(\Webhubworks\WeclappApiCore\Model\Supplier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSupplier($requestBody, $queryParameters), $fetch);
    }

    /**
     * count supplier
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SupplierCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSupplierCount($queryParameters), $fetch);
    }

    /**
     * delete a supplier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSupplierIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteSupplierIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific supplier
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Supplier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSupplierIdById($id), $fetch);
    }

    /**
     * update supplier
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Supplier|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putSupplierIdById(string $id, \Webhubworks\WeclappApiCore\Model\Supplier $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutSupplierIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierIdByIdDownloadImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSupplierIdByIdDownloadImage($id, $queryParameters, $accept), $fetch);
    }

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SupplierIdIdUploadImagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSupplierIdByIdUploadImage(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSupplierIdByIdUploadImage($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemCreateDemoTestSystem(\Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostSystemCreateDemoTestSystem($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SystemDemoTestSystemInfoGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemDemoTestSystemInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSystemDemoTestSystemInfo, $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SystemLicensesGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemLicense(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSystemLicense, $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\SystemPermissionsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemPermission(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetSystemPermission, $fetch);
    }

    /**
     * query tag
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TagGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTag(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTag($queryParameters), $fetch);
    }

    /**
     * create a tag
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tag|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTag(\Webhubworks\WeclappApiCore\Model\Tag $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTag($requestBody, $queryParameters), $fetch);
    }

    /**
     * count tag
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TagCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTagCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTagCount($queryParameters), $fetch);
    }

    /**
     * delete a tag
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTagIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTagIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific tag
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tag|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTagIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTagIdById($id), $fetch);
    }

    /**
     * update tag
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tag|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTagIdById(string $id, \Webhubworks\WeclappApiCore\Model\Tag $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTagIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query tax
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTax(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTax($queryParameters), $fetch);
    }

    /**
     * create a tax
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tax|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTax(\Webhubworks\WeclappApiCore\Model\Tax $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTax($requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxConfigurePurchaseTax(\Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTaxConfigurePurchaseTax($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxConfigureSalesTax(\Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTaxConfigureSalesTax($requestBody), $fetch);
    }

    /**
     * count tax
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxCount($queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $recipientCountryCode
     * @var string $dispatchCountryCode
     * @var string $taxRateType
     * @var string $partyType
     * @var string $debtorCreditorCodeId
     * @var string $productCodeId
     * @var int $date
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxFindPurchaseTaxGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxFindPurchaseTax(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxFindPurchaseTax($queryParameters), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var string $dispatchCountryCode
     * @var string $recipientCountryCode
     * @var string $taxRateType
     * @var string $partyType
     * @var string $debtorCreditorCodeId
     * @var string $productCodeId
     * @var bool $validVatId
     * @var int $date
     *          }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxFindSalesTaxGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxFindSalesTax(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxFindSalesTax($queryParameters), $fetch);
    }

    /**
     * delete a tax
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaxIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTaxIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific tax
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tax|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxIdById($id), $fetch);
    }

    /**
     * update tax
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Tax|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTaxIdById(string $id, \Webhubworks\WeclappApiCore\Model\Tax $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTaxIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxResetSystemTax(\Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTaxResetSystemTax($requestBody), $fetch);
    }

    /**
     * query taxDeterminationRule
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxDeterminationRule(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxDeterminationRule($queryParameters), $fetch);
    }

    /**
     * create a taxDeterminationRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxDeterminationRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxDeterminationRule(\Webhubworks\WeclappApiCore\Model\TaxDeterminationRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTaxDeterminationRule($requestBody, $queryParameters), $fetch);
    }

    /**
     * count taxDeterminationRule
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxDeterminationRuleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxDeterminationRuleCount($queryParameters), $fetch);
    }

    /**
     * delete a taxDeterminationRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaxDeterminationRuleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTaxDeterminationRuleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific taxDeterminationRule
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxDeterminationRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxDeterminationRuleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTaxDeterminationRuleIdById($id), $fetch);
    }

    /**
     * update taxDeterminationRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxDeterminationRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTaxDeterminationRuleIdById(string $id, \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTaxDeterminationRuleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query termOfPayment
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TermOfPaymentGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTermOfPayment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTermOfPayment($queryParameters), $fetch);
    }

    /**
     * create a termOfPayment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TermOfPayment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTermOfPayment(\Webhubworks\WeclappApiCore\Model\TermOfPayment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTermOfPayment($requestBody, $queryParameters), $fetch);
    }

    /**
     * count termOfPayment
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TermOfPaymentCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTermOfPaymentCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTermOfPaymentCount($queryParameters), $fetch);
    }

    /**
     * delete a termOfPayment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTermOfPaymentIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTermOfPaymentIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific termOfPayment
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TermOfPayment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTermOfPaymentIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTermOfPaymentIdById($id), $fetch);
    }

    /**
     * update termOfPayment
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TermOfPayment|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTermOfPaymentIdById(string $id, \Webhubworks\WeclappApiCore\Model\TermOfPayment $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTermOfPaymentIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticket
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicket(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicket($queryParameters), $fetch);
    }

    /**
     * create a ticket
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Ticket|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicket(\Webhubworks\WeclappApiCore\Model\Ticket $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicket($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticket
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketCount($queryParameters), $fetch);
    }

    /**
     * delete a ticket
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticket
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Ticket|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketIdById($id), $fetch);
    }

    /**
     * update ticket
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Ticket|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketIdById(string $id, \Webhubworks\WeclappApiCore\Model\Ticket $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketIdByIdCreatePublicPage(string $id, \Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketIdByIdCreatePublicPage($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketIdByIdDisablePublicPage(string $id, \Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketIdByIdDisablePublicPage($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketIdByIdLinkSalesOrder(string $id, \Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketIdByIdLinkSalesOrder($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketIdByIdUnlinkSalesOrder(string $id, \Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketIdByIdUnlinkSalesOrder($id, $requestBody), $fetch);
    }

    /**
     * query ticketAssignmentRule
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketAssignmentRule(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketAssignmentRule($queryParameters), $fetch);
    }

    /**
     * create a ticketAssignmentRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketAssignmentRule(\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketAssignmentRule($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketAssignmentRule
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketAssignmentRuleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketAssignmentRuleCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketAssignmentRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketAssignmentRuleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketAssignmentRuleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketAssignmentRule
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketAssignmentRuleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketAssignmentRuleIdById($id), $fetch);
    }

    /**
     * update ticketAssignmentRule
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketAssignmentRuleIdById(string $id, \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketAssignmentRuleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticketCategory
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketCategoryGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketCategory($queryParameters), $fetch);
    }

    /**
     * count ticketCategory
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketCategoryCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketCategoryCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketCategoryCount($queryParameters), $fetch);
    }

    /**
     * query a specific ticketCategory
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketCategory|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketCategoryIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketCategoryIdById($id), $fetch);
    }

    /**
     * query ticketChannel
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketChannelGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketChannel(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketChannel($queryParameters), $fetch);
    }

    /**
     * create a ticketChannel
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketChannel(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketChannel($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketChannel
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketChannelCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketChannelCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketChannelCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketChannel
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketChannelIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketChannelIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketChannel
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketChannelIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketChannelIdById($id), $fetch);
    }

    /**
     * update ticketChannel
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketChannelIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketChannelIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticketFaq
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketFaqGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketFaq(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketFaq($queryParameters), $fetch);
    }

    /**
     * create a ticketFaq
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketFaq|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketFaq(\Webhubworks\WeclappApiCore\Model\TicketFaq $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketFaq($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketFaq
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketFaqCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketFaqCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketFaqCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketFaq
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketFaqIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketFaqIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketFaq
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketFaq|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketFaqIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketFaqIdById($id), $fetch);
    }

    /**
     * update ticketFaq
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketFaq|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketFaqIdById(string $id, \Webhubworks\WeclappApiCore\Model\TicketFaq $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketFaqIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticketPoolingGroup
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketPoolingGroupGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketPoolingGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketPoolingGroup($queryParameters), $fetch);
    }

    /**
     * count ticketPoolingGroup
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketPoolingGroupCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketPoolingGroupCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketPoolingGroupCount($queryParameters), $fetch);
    }

    /**
     * query a specific ticketPoolingGroup
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketPoolingGroup|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketPoolingGroupIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketPoolingGroupIdById($id), $fetch);
    }

    /**
     * query ticketServiceLevelAgreement
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketServiceLevelAgreement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketServiceLevelAgreement($queryParameters), $fetch);
    }

    /**
     * create a ticketServiceLevelAgreement
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketServiceLevelAgreement(\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketServiceLevelAgreement($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketServiceLevelAgreement
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketServiceLevelAgreementCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketServiceLevelAgreementCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketServiceLevelAgreement
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketServiceLevelAgreementIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketServiceLevelAgreementIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketServiceLevelAgreement
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketServiceLevelAgreementIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketServiceLevelAgreementIdById($id), $fetch);
    }

    /**
     * update ticketServiceLevelAgreement
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketServiceLevelAgreementIdById(string $id, \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketServiceLevelAgreementIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticketStatus
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketStatusGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketStatus(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketStatus($queryParameters), $fetch);
    }

    /**
     * create a ticketStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketStatus|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketStatus(\Webhubworks\WeclappApiCore\Model\TicketStatus $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketStatus($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketStatusCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketStatusCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketStatusCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketStatusIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketStatusIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketStatus
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketStatus|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketStatusIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketStatusIdById($id), $fetch);
    }

    /**
     * update ticketStatus
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketStatus|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketStatusIdById(string $id, \Webhubworks\WeclappApiCore\Model\TicketStatus $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketStatusIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query ticketType
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketTypeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketType(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketType($queryParameters), $fetch);
    }

    /**
     * create a ticketType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTicketType(\Webhubworks\WeclappApiCore\Model\TicketType $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTicketType($requestBody, $queryParameters), $fetch);
    }

    /**
     * count ticketType
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketTypeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketTypeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketTypeCount($queryParameters), $fetch);
    }

    /**
     * delete a ticketType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTicketTypeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTicketTypeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific ticketType
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTicketTypeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTicketTypeIdById($id), $fetch);
    }

    /**
     * update ticketType
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TicketType|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketTypeIdById(string $id, \Webhubworks\WeclappApiCore\Model\TicketType $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTicketTypeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query title
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TitleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTitle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTitle($queryParameters), $fetch);
    }

    /**
     * create a title
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTitle(\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTitle($requestBody, $queryParameters), $fetch);
    }

    /**
     * count title
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TitleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTitleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTitleCount($queryParameters), $fetch);
    }

    /**
     * delete a title
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTitleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTitleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific title
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTitleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTitleIdById($id), $fetch);
    }

    /**
     * update title
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTitleIdById(string $id, \Webhubworks\WeclappApiCore\Model\CustomValue $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTitleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query translation
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TranslationGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTranslation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTranslation($queryParameters), $fetch);
    }

    /**
     * create a translation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Translation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTranslation(\Webhubworks\WeclappApiCore\Model\Translation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTranslation($requestBody, $queryParameters), $fetch);
    }

    /**
     * count translation
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TranslationCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTranslationCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTranslationCount($queryParameters), $fetch);
    }

    /**
     * delete a translation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTranslationIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTranslationIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific translation
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Translation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTranslationIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTranslationIdById($id), $fetch);
    }

    /**
     * update translation
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Translation|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTranslationIdById(string $id, \Webhubworks\WeclappApiCore\Model\Translation $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTranslationIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query transportationOrder
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
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTransportationOrder(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTransportationOrder($queryParameters), $fetch);
    }

    /**
     * create a transportationOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrder(\Webhubworks\WeclappApiCore\Model\TransportationOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrder($requestBody, $queryParameters), $fetch);
    }

    /**
     * count transportationOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTransportationOrderCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTransportationOrderCount($queryParameters), $fetch);
    }

    /**
     * delete a transportationOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTransportationOrderIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteTransportationOrderIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific transportationOrder
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTransportationOrderIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTransportationOrderIdById($id), $fetch);
    }

    /**
     * update transportationOrder
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrder|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putTransportationOrderIdById(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrder $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutTransportationOrderIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrderIdByIdCreatePick(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrderIdByIdCreatePick($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrderIdByIdCreatePickingList(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickingListPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrderIdByIdCreatePickingList($id, $requestBody, $accept), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrderIdByIdCreateTransportationOrderFromUnpickedRecord(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrderIdByIdCreateTransportationOrderFromUnpickedRecord($id, $requestBody), $fetch);
    }

    /**
     * @param  array  $queryParameters  {
     *
     * @var bool $ignoreCurrentLoadingEquipment
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdInternalTransportReferencesForPickUpGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getTransportationOrderIdByIdInternalTransportReferencesForPickUp(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetTransportationOrderIdByIdInternalTransportReferencesForPickUp($id, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrderIdByIdPickPick(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrderIdByIdPickPick($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postTransportationOrderIdByIdPutDownInternalTransportReference(string $id, \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostTransportationOrderIdByIdPutDownInternalTransportReference($id, $requestBody), $fetch);
    }

    /**
     * query unit
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
     * @return null|\Webhubworks\WeclappApiCore\Model\UnitGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUnit(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUnit($queryParameters), $fetch);
    }

    /**
     * create a unit
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Unit|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUnit(\Webhubworks\WeclappApiCore\Model\Unit $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUnit($requestBody, $queryParameters), $fetch);
    }

    /**
     * count unit
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UnitCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUnitCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUnitCount($queryParameters), $fetch);
    }

    /**
     * delete a unit
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUnitIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteUnitIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific unit
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Unit|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUnitIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUnitIdById($id), $fetch);
    }

    /**
     * update unit
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Unit|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putUnitIdById(string $id, \Webhubworks\WeclappApiCore\Model\Unit $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutUnitIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query user
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
     * @return null|\Webhubworks\WeclappApiCore\Model\UserGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUser($queryParameters), $fetch);
    }

    /**
     * create a user
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\User|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUser(\Webhubworks\WeclappApiCore\Model\User $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUser($requestBody, $queryParameters), $fetch);
    }

    /**
     * count user
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserCurrentUserGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserCurrentUser(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserCurrentUser, $fetch);
    }

    /**
     * delete a user
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteUserIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific user
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\User|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserIdById($id), $fetch);
    }

    /**
     * update user
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\User|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putUserIdById(string $id, \Webhubworks\WeclappApiCore\Model\User $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutUserIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUserIdByIdInvite(string $id, \Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUserIdByIdInvite($id, $requestBody), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserIdByIdUserImage(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserIdByIdUserImage($id, $queryParameters, $accept), $fetch);
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserIdByIdUserImageThumbnail(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserIdByIdUserImageThumbnail($id, $queryParameters, $accept), $fetch);
    }

    /**
     * query userRole
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
     * @return null|\Webhubworks\WeclappApiCore\Model\UserRoleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRole(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserRole($queryParameters), $fetch);
    }

    /**
     * create a userRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserRole|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUserRole(\Webhubworks\WeclappApiCore\Model\UserRole $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUserRole($requestBody, $queryParameters), $fetch);
    }

    /**
     * count userRole
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserRoleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRoleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserRoleCount($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUserRoleDisableUserRolesDuringTrial(\Webhubworks\WeclappApiCore\Model\UserRoleDisableUserRolesDuringTrialPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUserRoleDisableUserRolesDuringTrial($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postUserRoleEnableUserRolesDuringTrial(\Webhubworks\WeclappApiCore\Model\UserRoleEnableUserRolesDuringTrialPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostUserRoleEnableUserRolesDuringTrial($requestBody), $fetch);
    }

    /**
     * delete a userRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserRoleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteUserRoleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific userRole
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserRole|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRoleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetUserRoleIdById($id), $fetch);
    }

    /**
     * update userRole
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\UserRole|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putUserRoleIdById(string $id, \Webhubworks\WeclappApiCore\Model\UserRole $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutUserRoleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query variantArticle
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
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticle($queryParameters), $fetch);
    }

    /**
     * create a variantArticle
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticle|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postVariantArticle(\Webhubworks\WeclappApiCore\Model\VariantArticle $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostVariantArticle($requestBody, $queryParameters), $fetch);
    }

    /**
     * count variantArticle
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleCount($queryParameters), $fetch);
    }

    /**
     * delete a variantArticle
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantArticleIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteVariantArticleIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific variantArticle
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticle|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleIdById($id), $fetch);
    }

    /**
     * update variantArticle
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticle|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putVariantArticleIdById(string $id, \Webhubworks\WeclappApiCore\Model\VariantArticle $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutVariantArticleIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query variantArticleAttribute
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
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleAttributeGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleAttribute(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleAttribute($queryParameters), $fetch);
    }

    /**
     * create a variantArticleAttribute
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleAttribute|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postVariantArticleAttribute(\Webhubworks\WeclappApiCore\Model\VariantArticleAttribute $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostVariantArticleAttribute($requestBody, $queryParameters), $fetch);
    }

    /**
     * count variantArticleAttribute
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleAttributeCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleAttributeCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleAttributeCount($queryParameters), $fetch);
    }

    /**
     * delete a variantArticleAttribute
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVariantArticleAttributeIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteVariantArticleAttributeIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific variantArticleAttribute
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleAttribute|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleAttributeIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleAttributeIdById($id), $fetch);
    }

    /**
     * update variantArticleAttribute
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleAttribute|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putVariantArticleAttributeIdById(string $id, \Webhubworks\WeclappApiCore\Model\VariantArticleAttribute $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutVariantArticleAttributeIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query variantArticleVariant
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
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleVariantGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleVariant(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleVariant($queryParameters), $fetch);
    }

    /**
     * count variantArticleVariant
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleVariantCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleVariantCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleVariantCount($queryParameters), $fetch);
    }

    /**
     * query a specific variantArticleVariant
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\VariantArticleVariant|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getVariantArticleVariantIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetVariantArticleVariantIdById($id), $fetch);
    }

    /**
     * query warehouse
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
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouse(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouse($queryParameters), $fetch);
    }

    /**
     * create a warehouse
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Warehouse|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouse(\Webhubworks\WeclappApiCore\Model\Warehouse $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouse($requestBody, $queryParameters), $fetch);
    }

    /**
     * count warehouse
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseCount($queryParameters), $fetch);
    }

    /**
     * delete a warehouse
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWarehouseIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteWarehouseIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific warehouse
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Warehouse|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseIdById($id), $fetch);
    }

    /**
     * update warehouse
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Warehouse|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putWarehouseIdById(string $id, \Webhubworks\WeclappApiCore\Model\Warehouse $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutWarehouseIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseIdByIdActivate(string $id, \Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseIdByIdActivate($id, $requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseIdByIdDeactivate(string $id, \Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseIdByIdDeactivate($id, $requestBody), $fetch);
    }

    /**
     * query warehouseStock
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
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStock(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStock($queryParameters), $fetch);
    }

    /**
     * count warehouseStock
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStockCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStockCount($queryParameters), $fetch);
    }

    /**
     * query a specific warehouseStock
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStock|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStockIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStockIdById($id), $fetch);
    }

    /**
     * query warehouseStockMovement
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
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStockMovement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStockMovement($queryParameters), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookDirectStockTransfer(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookDirectStockTransfer($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookFromLoadingEquipmentPlace(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookFromLoadingEquipmentPlace($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookIncomingMovement(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookIncomingMovement($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookOntoInternalTransportReference(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookOntoInternalTransportReference($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookOutgoingMovement(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookOutgoingMovement($requestBody), $fetch);
    }

    /**
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWarehouseStockMovementBookToLoadingEquipmentPlace(\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWarehouseStockMovementBookToLoadingEquipmentPlace($requestBody), $fetch);
    }

    /**
     * count warehouseStockMovement
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStockMovementCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStockMovementCount($queryParameters), $fetch);
    }

    /**
     * query a specific warehouseStockMovement
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WarehouseStockMovement|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWarehouseStockMovementIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWarehouseStockMovementIdById($id), $fetch);
    }

    /**
     * query webhook
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
     * @return null|\Webhubworks\WeclappApiCore\Model\WebhookGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhook(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWebhook($queryParameters), $fetch);
    }

    /**
     * create a webhook
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Webhook|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWebhook(\Webhubworks\WeclappApiCore\Model\Webhook $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWebhook($requestBody, $queryParameters), $fetch);
    }

    /**
     * count webhook
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WebhookCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhookCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWebhookCount($queryParameters), $fetch);
    }

    /**
     * delete a webhook
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebhookIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteWebhookIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific webhook
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Webhook|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhookIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWebhookIdById($id), $fetch);
    }

    /**
     * update webhook
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\Webhook|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putWebhookIdById(string $id, \Webhubworks\WeclappApiCore\Model\Webhook $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutWebhookIdById($id, $requestBody, $queryParameters), $fetch);
    }

    /**
     * query weclappOs
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
     * @return null|\Webhubworks\WeclappApiCore\Model\WeclappOsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWeclappO(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWeclappO($queryParameters), $fetch);
    }

    /**
     * create a weclappOs
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WeclappOs|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function postWeclappO(\Webhubworks\WeclappApiCore\Model\WeclappOs $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PostWeclappO($requestBody, $queryParameters), $fetch);
    }

    /**
     * count weclappOs
     *
     * @param  array  $queryParameters  {
     *
     * @var string $filter
     *             }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WeclappOsCountGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWeclappOsCount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWeclappOsCount($queryParameters), $fetch);
    }

    /**
     * delete a weclappOs
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWeclappOsIdById(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\DeleteWeclappOsIdById($id, $queryParameters), $fetch);
    }

    /**
     * query a specific weclappOs
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WeclappOs|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function getWeclappOsIdById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\GetWeclappOsIdById($id), $fetch);
    }

    /**
     * update weclappOs
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     *
     * @param  string  $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|\Webhubworks\WeclappApiCore\Model\WeclappOs|\Webhubworks\WeclappApiCore\Model\ApiProblem|\Psr\Http\Message\ResponseInterface
     */
    public function putWeclappOsIdById(string $id, \Webhubworks\WeclappApiCore\Model\WeclappOs $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Webhubworks\WeclappApiCore\Endpoint\PutWeclappOsIdById($id, $requestBody, $queryParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer, new \Webhubworks\WeclappApiCore\Normalizer\JaneObjectNormalizer];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode, new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
