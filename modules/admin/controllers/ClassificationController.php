<?php

namespace app\modules\admin\controllers;

use jinxing\admin\controllers\Controller;

class ClassificationController extends Controller
{
    public $modelClass = 'app\models\CarType';

    public $uploadFromClass = 'app\models\UploadForm';

    /**
     * where() 查询处理
     *
     * @return array 返回数组
     */
    public function where()
    {
        return [
            ['id', '='],
            ['name', 'like'],
        ];
    }

    /**
     * 数据导出格式化
     *
     * @return array
     */
    public function getExportHandleParams()
    {
        return [
            'created_at' => function ($value) {
                return date('Y-m-d H:i:s', $value);
            },
        ];
    }
}
