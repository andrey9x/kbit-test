<?php

namespace app\controllers;

use app\models\QueueStatus;
use yii\rest\ActiveController;

class QueueStatusController extends ActiveController
{
    public $modelClass = QueueStatus::class;
}