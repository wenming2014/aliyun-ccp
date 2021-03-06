<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\CCP\SDK\CCP;

use AlibabaCloud\Tea\Model;

/**
 * 列举uploadID对应的已上传分片.
 */
class CCPListUploadedPartRequest extends Model
{
    /**
     * @description drive_id
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;
    /**
     * @description file_id
     *
     * @example 5d5b846942cf94fa72324c14a4bda34e81da635d
     *
     * @var string
     */
    public $fileId;
    /**
     * @description limit
     *
     * @example 1
     *
     * @var int
     */
    public $limit;
    /**
     * @description part_number_marker
     *
     * @example 1
     *
     * @var int
     */
    public $partNumberMarker;
    /**
     * @description upload_id
     *
     * @example 00668396C0814D818D90F0A92B04B355
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'driveId'          => 'drive_id',
        'fileId'           => 'file_id',
        'limit'            => 'limit',
        'partNumberMarker' => 'part_number_marker',
        'uploadId'         => 'upload_id',
    ];
    protected $_default = [
        'limit' => 1000,
    ];

    public function validate()
    {
        Model::validateRequired('driveId', $this->driveId, true);
        Model::validateRequired('fileId', $this->fileId, true);
        Model::validateRequired('limit', $this->limit, true);
        Model::validatePattern('driveId', $this->driveId, '[0-9]+');
        Model::validatePattern('fileId', $this->fileId, '[a-z0-9.-_]{1,50}');
        Model::validatePattern('limit', $this->limit, '[0-9]+');
        Model::validatePattern('partNumberMarker', $this->partNumberMarker, '[0-9]+');
        Model::validateMaxLength('fileId', $this->fileId, 50);
        Model::validateMinLength('fileId', $this->fileId, 40);
    }

    public function toMap()
    {
        $res                       = [];
        $res['drive_id']           = $this->driveId;
        $res['file_id']            = $this->fileId;
        $res['limit']              = $this->limit;
        $res['part_number_marker'] = $this->partNumberMarker;
        $res['upload_id']          = $this->uploadId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CCPListUploadedPartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['part_number_marker'])) {
            $model->partNumberMarker = $map['part_number_marker'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
