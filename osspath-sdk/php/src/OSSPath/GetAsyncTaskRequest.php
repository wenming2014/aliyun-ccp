<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\CCP\SDK\OSSPath;

use AlibabaCloud\Tea\Model;

/**
 * 获取异步人去信息.
 */
class GetAsyncTaskRequest extends Model
{
    /**
     * @description async_task_id
     * type:string
     * @example 000e89fb-cf8f-11e9-8ab4-b6e980803a3b
     *
     * @var string
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'async_task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                  = [];
        $res['async_task_id'] = $this->asyncTaskId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }

        return $model;
    }
}
