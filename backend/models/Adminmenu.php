<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "admin_menu".
 *
 * @property integer $id
 * @property string $title
 * @property integer $rank
 * @property integer $properties_new
 * @property string $category
 * @property string $type
 * @property string $description
 * @property string $content
 * @property string $image
 * @property string $link_url
 * @property integer $left_right
 * @property integer $status
 * @property string $created
 * @property string $updated
 */
class Adminmenu extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['rank', 'properties_new', 'left_right', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['title', 'category', 'type', 'link_url'], 'string', 'max' => 64],
            [['description', 'content', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'rank' => 'Rank',
            'properties_new' => 'Properties New',
            'category' => 'Category',
            'type' => 'Type',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
            'link_url' => 'Link Url',
            'left_right' => 'Left Right',
            'status' => 'Status',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }

    public function getAllmenu(){
        $arrReturn = [];
        //menu parent
        $arrayMenuParent = $this->getAllMenuParent();
        //menu children
        $arrayMenuChildren = $this->getAllMenuChildren();//var_dump($arrayMenuChildren);exit();

        foreach ($arrayMenuParent as $val){
            $arrReturn [] = array(
                'id'=>$val->id,
                'title'=>$val->title,
                'image'=>$val->image,
                'children'=>$this->fillterArray($arrayMenuChildren,'type', $val->id),
            );
        }
        return $arrReturn;
    }

    /**
     * @return static[]
     */
    public function getAllMenuParent(){
        return $this->findAll([
            'status' => 1,
            'rank' => 2,
        ]);
    }

    /**
     * @return static[]
     */
    public function getAllMenuChildren(){
        return $this->findAll([
            'status'=>1,
            'rank'=>3
        ]);
    }

    /**
     * filter children of group
     * @param $inputArray
     * @param $column
     * @param $fillterValue
     * @return array
     */
    function fillterArray($inputArray, $column, $fillterValue)
    {
        $arrayResult = array();
        foreach ($inputArray as $val) {
            if ($val->$column == $fillterValue) {
                $arrayResult[] = $val;
            }
        }
        return $arrayResult;
    }
}
