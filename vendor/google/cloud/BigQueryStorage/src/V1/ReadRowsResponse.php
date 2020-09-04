<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response from calling `ReadRows` may include row data, progress and
 * throttling information.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadRowsResponse</code>
 */
class ReadRowsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of serialized rows in the rows block.
     *
     * Generated from protobuf field <code>int64 row_count = 6;</code>
     */
    private $row_count = 0;
    /**
     * Statistics for the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats stats = 2;</code>
     */
    private $stats = null;
    /**
     * Throttling state. If unset, the latest response still describes
     * the current throttling status.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ThrottleState throttle_state = 5;</code>
     */
    private $throttle_state = null;
    protected $rows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Storage\V1\AvroRows $avro_rows
     *           Serialized row data in AVRO format.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ArrowRecordBatch $arrow_record_batch
     *           Serialized row data in Arrow RecordBatch format.
     *     @type int|string $row_count
     *           Number of serialized rows in the rows block.
     *     @type \Google\Cloud\BigQuery\Storage\V1\StreamStats $stats
     *           Statistics for the stream.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ThrottleState $throttle_state
     *           Throttling state. If unset, the latest response still describes
     *           the current throttling status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Serialized row data in AVRO format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroRows avro_rows = 3;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AvroRows
     */
    public function getAvroRows()
    {
        return $this->readOneof(3);
    }

    /**
     * Serialized row data in AVRO format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroRows avro_rows = 3;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AvroRows $var
     * @return $this
     */
    public function setAvroRows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AvroRows::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Serialized row data in Arrow RecordBatch format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowRecordBatch arrow_record_batch = 4;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ArrowRecordBatch
     */
    public function getArrowRecordBatch()
    {
        return $this->readOneof(4);
    }

    /**
     * Serialized row data in Arrow RecordBatch format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowRecordBatch arrow_record_batch = 4;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ArrowRecordBatch $var
     * @return $this
     */
    public function setArrowRecordBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ArrowRecordBatch::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Number of serialized rows in the rows block.
     *
     * Generated from protobuf field <code>int64 row_count = 6;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * Number of serialized rows in the rows block.
     *
     * Generated from protobuf field <code>int64 row_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * Statistics for the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats stats = 2;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\StreamStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Statistics for the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats stats = 2;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\StreamStats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\StreamStats::class);
        $this->stats = $var;

        return $this;
    }

    /**
     * Throttling state. If unset, the latest response still describes
     * the current throttling status.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ThrottleState throttle_state = 5;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ThrottleState
     */
    public function getThrottleState()
    {
        return $this->throttle_state;
    }

    /**
     * Throttling state. If unset, the latest response still describes
     * the current throttling status.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ThrottleState throttle_state = 5;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ThrottleState $var
     * @return $this
     */
    public function setThrottleState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ThrottleState::class);
        $this->throttle_state = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRows()
    {
        return $this->whichOneof("rows");
    }

}

