<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results for a product search request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ProductSearchResults</code>
 */
class ProductSearchResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp of the index which provided these results. Products added to the
     * product set and products removed from the product set after this time are
     * not reflected in the current results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 2;</code>
     */
    private $index_time = null;
    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 5;</code>
     */
    private $results;
    /**
     * List of results grouped by products detected in the query image. Each entry
     * corresponds to one bounding polygon in the query image, and contains the
     * matching products specific to that region. There may be duplicate product
     * matches in the union of all the per-product results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.GroupedResult product_grouped_results = 6;</code>
     */
    private $product_grouped_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $index_time
     *           Timestamp of the index which provided these results. Products added to the
     *           product set and products removed from the product set after this time are
     *           not reflected in the current results.
     *     @type \Google\Cloud\Vision\V1\ProductSearchResults\Result[]|\Google\Protobuf\Internal\RepeatedField $results
     *           List of results, one for each product match.
     *     @type \Google\Cloud\Vision\V1\ProductSearchResults\GroupedResult[]|\Google\Protobuf\Internal\RepeatedField $product_grouped_results
     *           List of results grouped by products detected in the query image. Each entry
     *           corresponds to one bounding polygon in the query image, and contains the
     *           matching products specific to that region. There may be duplicate product
     *           matches in the union of all the per-product results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearch::initOnce();
        parent::__construct($data);
    }

    /**
     * Timestamp of the index which provided these results. Products added to the
     * product set and products removed from the product set after this time are
     * not reflected in the current results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getIndexTime()
    {
        return $this->index_time;
    }

    /**
     * Timestamp of the index which provided these results. Products added to the
     * product set and products removed from the product set after this time are
     * not reflected in the current results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIndexTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->index_time = $var;

        return $this;
    }

    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 5;</code>
     * @param \Google\Cloud\Vision\V1\ProductSearchResults\Result[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ProductSearchResults\Result::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * List of results grouped by products detected in the query image. Each entry
     * corresponds to one bounding polygon in the query image, and contains the
     * matching products specific to that region. There may be duplicate product
     * matches in the union of all the per-product results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.GroupedResult product_grouped_results = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProductGroupedResults()
    {
        return $this->product_grouped_results;
    }

    /**
     * List of results grouped by products detected in the query image. Each entry
     * corresponds to one bounding polygon in the query image, and contains the
     * matching products specific to that region. There may be duplicate product
     * matches in the union of all the per-product results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.GroupedResult product_grouped_results = 6;</code>
     * @param \Google\Cloud\Vision\V1\ProductSearchResults\GroupedResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProductGroupedResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ProductSearchResults\GroupedResult::class);
        $this->product_grouped_results = $arr;

        return $this;
    }

}

