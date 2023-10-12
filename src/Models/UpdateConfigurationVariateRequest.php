<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigurationVariateRequest extends Model
{
    /**
     * @example 项目变量
     *
     * @var string
     */
    public $comment;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example configurationVariateIdxxxyyy
     *
     * @var string
     */
    public $configurationVariateId;

    /**
     * @example def main():
     *
     * @var string
     */
    public $formatFunction;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example project
     *
     * @var string
     */
    public $variateName;
    protected $_name = [
        'comment'                => 'Comment',
        'configurationVariateId' => 'ConfigurationVariateId',
        'formatFunction'         => 'FormatFunction',
        'instanceId'             => 'InstanceId',
        'variateName'            => 'VariateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configurationVariateId) {
            $res['ConfigurationVariateId'] = $this->configurationVariateId;
        }
        if (null !== $this->formatFunction) {
            $res['FormatFunction'] = $this->formatFunction;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->variateName) {
            $res['VariateName'] = $this->variateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigurationVariateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigurationVariateId'])) {
            $model->configurationVariateId = $map['ConfigurationVariateId'];
        }
        if (isset($map['FormatFunction'])) {
            $model->formatFunction = $map['FormatFunction'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VariateName'])) {
            $model->variateName = $map['VariateName'];
        }

        return $model;
    }
}
