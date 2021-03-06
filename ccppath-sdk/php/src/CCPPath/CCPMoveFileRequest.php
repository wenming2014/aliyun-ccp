<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\CCP\SDK\CCPPath;

use AlibabaCloud\Tea\Model;

/**
 * 文件移动请求
 */
class CCPMoveFileRequest extends Model
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
     * @description new_name
     *
     * @example ccp.jpg
     *
     * @var string
     */
    public $newName;
    /**
     * @description overwrite
     * type: boolean
     * @example false
     *
     * @var bool
     */
    public $overwrite;
    /**
     * @description file_id
     *
     * @example 5d5b846942cf94fa72324c14a4bda34e81da635d
     *
     * @var string
     */
    public $fileId;
    /**
     * @description to_parent_file_id
     *
     * @example root
     *
     * @var string
     */
    public $toParentFileId;
    protected $_name = [
        'driveId'        => 'drive_id',
        'newName'        => 'new_name',
        'overwrite'      => 'overwrite',
        'fileId'         => 'file_id',
        'toParentFileId' => 'to_parent_file_id',
    ];
    protected $_default = [
        'overwrite' => 'false',
    ];

    public function validate()
    {
        Model::validatePattern('driveId', $this->driveId, '[0-9]+');
        Model::validatePattern('newName', $this->newName, '.{1,1000}');
        Model::validatePattern('fileId', $this->fileId, '[a-z0-9.-_]{1,50}');
        Model::validateMaxLength('fileId', $this->fileId, 50);
        Model::validateMaxLength('toParentFileId', $this->toParentFileId, 50);
        Model::validateMinLength('fileId', $this->fileId, 40);
        Model::validateMinLength('toParentFileId', $this->toParentFileId, 40);
    }

    public function toMap()
    {
        $res                      = [];
        $res['drive_id']          = $this->driveId;
        $res['new_name']          = $this->newName;
        $res['overwrite']         = $this->overwrite;
        $res['file_id']           = $this->fileId;
        $res['to_parent_file_id'] = $this->toParentFileId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CCPMoveFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['new_name'])) {
            $model->newName = $map['new_name'];
        }
        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['to_parent_file_id'])) {
            $model->toParentFileId = $map['to_parent_file_id'];
        }

        return $model;
    }
}
