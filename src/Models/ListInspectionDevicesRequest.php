<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListInspectionDevicesRequest extends Model
{
    /**
     * @example online/offline
     *
     * @var string
     */
    public $appState;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $model;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example 阿里巴巴西溪园区
     *
     * @var string
     */
    public $space;

    /**
     * @example Huawei
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'appState'   => 'AppState',
        'instanceId' => 'InstanceId',
        'model'      => 'Model',
        'role'       => 'Role',
        'space'      => 'Space',
        'vendor'     => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appState) {
            $res['AppState'] = $this->appState;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInspectionDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppState'])) {
            $model->appState = $map['AppState'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = $map['Model'];
            }
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
