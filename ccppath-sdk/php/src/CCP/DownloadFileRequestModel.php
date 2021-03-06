<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\CCP\SDK\CCP;

use AlibabaCloud\Tea\Model;

class DownloadFileRequestModel extends Model
{
    /**
     * @description headers
     *
     * @var array
     */
    public $headers;
    /**
     * @description query
     *
     * @var DownloadFileQuery
     */
    public $query;
    protected $_name = [
        'headers' => 'headers',
        'query'   => 'query',
    ];

    public function validate()
    {
        Model::validateRequired('query', $this->query, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['headers'] = $this->headers;
        $res['query']   = null !== $this->query ? $this->query->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadFileRequestModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['query'])) {
            $model->query = DownloadFileQuery::fromMap($map['query']);
        }

        return $model;
    }
}
