<?php
return [
    'display' => [
        'title' => '是否显示:',
        'type' => 'radio',
        'options' => [
            '1' => '显示',
            '0' => '不显示'
        ],
        'value' => '1'
    ],
    //自定义配置
    'template'=>[
        'title'=>'模板配置',
        'value'=>[
            'create_order'=>[
                'title'=>'下单成功',
                'data'=>[
                    [
                        'title'=>'模板ID',
                        'code'=>'template_id',
                    ],
                    [
                        'title'=>'商户名',
                        'code'=>'seller_name',
                    ],
                    [
                        'title'=>'订单编号',
                        'code'=>'order_id',
                    ],
                    [
                        'title'=>'下单时间',
                        'code'=>'ctime',
                    ],
                    [
                        'title'=>'订单状态',
                        'code'=>'status',
                    ],
                    [
                        'title'=>'订单金额',
                        'code'=>'order_amount',
                    ],
                ],
            ],
            'order_payed'=>[
                'title'=>'支付成功',
                'data'=>[
                    [
                        'title'=>'模板ID',
                        'code'=>'template_id',
                    ],
                    [
                        'title'=>'商户名',
                        'code'=>'seller_name',
                    ],
                    [
                        'title'=>'订单编号',
                        'code'=>'order_id',
                    ],
                    [
                        'title'=>'下单时间',
                        'code'=>'ctime',
                    ],
                    [
                        'title'=>'订单状态',
                        'code'=>'status',
                    ],

                    [
                        'title'=>'订单金额',
                        'code'=>'order_amount',
                    ],
                ],
            ],
            'delivery_notice'=>[
                'title'=>'订单发货',
                'data'=>[
                    [
                        'title'=>'模板ID',
                        'code'=>'template_id',
                    ],
                    [
                        'title'=>'会员名称',
                        'code'=>'user_name',
                    ],
                    [
                        'title'=>'订单编号',
                        'code'=>'order_id',
                    ],
                    [
                        'title'=>'下单时间',
                        'code'=>'ctime',
                    ],
                    [
                        'title'=>'物流公司',
                        'code'=>'logi_name',
                    ],
                    [
                        'title'=>'物流单号',
                        'code'=>'logi_no',
                    ],
                    [
                        'title'=>'收货地址',
                        'code'=>'rec_address',
                    ],
                    [
                        'title'=>'备注',
                        'code'=>'memo',
                    ],
                ],
            ],
            'refund_success'=>[
                'title'=>'订单退款',
                'data'=>[
                    [
                        'title'=>'模板ID',
                        'code'=>'template_id',
                    ],
                    [
                        'title'=>'订单编号',
                        'code'=>'order_id',
                    ],
                    [
                        'title'=>'退款金额',
                        'code'=>'refund_money',
                    ],
                    [
                        'title'=>'退款时间',
                        'code'=>'refund_time',
                    ],
                    [
                        'title'=>'退款原因',
                        'code'=>'refund_reason',
                    ],
                    [
                        'title'=>'退款状态',
                        'code'=>'refund_status',
                    ]
                ],
            ],
        ],
    ],
];