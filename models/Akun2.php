<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akun2".
 *
 * @property int $kd_akun1
 * @property int|null $kd_akun2
 * @property string|null $akun2
 */
class Akun2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_akun2'], 'integer'],
            [['akun2'], 'string', 'max' => 32],
            [['kd_akun2'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_akun1' => 'Kd Akun1',
            'kd_akun2' => 'Kd Akun2',
            'akun2' => 'Akun2',
        ];
    }
}
