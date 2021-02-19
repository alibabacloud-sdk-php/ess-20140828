<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class AttachLoadBalancersRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var bool
     */
    public $forceAttach;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $loadBalancer;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
        'forceAttach'          => 'ForceAttach',
        'clientToken'          => 'ClientToken',
        'loadBalancer'         => 'LoadBalancer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->forceAttach) {
            $res['ForceAttach'] = $this->forceAttach;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->loadBalancer) {
            $res['LoadBalancer'] = $this->loadBalancer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachLoadBalancersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ForceAttach'])) {
            $model->forceAttach = $map['ForceAttach'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LoadBalancer'])) {
            if (!empty($map['LoadBalancer'])) {
                $model->loadBalancer = $map['LoadBalancer'];
            }
        }

        return $model;
    }
}