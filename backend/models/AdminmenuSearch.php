<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Adminmenu;

/**
 * AdminmenuSearch represents the model behind the search form about `backend\models\Adminmenu`.
 */
class AdminmenuSearch extends Adminmenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rank', 'properties_new', 'left_right', 'status'], 'integer'],
            [['title', 'category', 'type', 'description', 'content', 'image', 'link_url', 'created', 'updated'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Adminmenu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'rank' => $this->rank,
            'properties_new' => $this->properties_new,
            'left_right' => $this->left_right,
            'status' => $this->status,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'link_url', $this->link_url]);

        return $dataProvider;
    }
}
