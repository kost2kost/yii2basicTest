<?php
namespace app\controllers;

use Yii;
use app\models\Posttag;
use app\models\PosttagSearch;
//use app\services\PosttagHelperService;
use app\services\PostHelperService;
use app\services\TagHelperService;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * PostTagController implements the CRUD actions for PostTag model.
 */
class PosttagController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PostTag models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PosttagSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PostTag model.
     * @param integer $post_id
     * @param integer $tag_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($post_id, $tag_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($post_id, $tag_id),
        ]);
    }

    /**
     * Creates a new PostTag model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Posttag();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id, 'tag_id' => $model->tag_id]);
        }
/*
        $paramsPost = yii\helpers\ArrayHelper::map(Post::find()->all(), 'id', 'title');
        $params1 = ['prompt' => 'Выберите наименование статьи'];           
        $paramsTags = yii\helpers\ArrayHelper::map(Tag::find()->all(), 'id', 'title');
        $params2 = ['prompt' => 'Выберите тег' ];        
*/
/*
        $paramsPost = PosttagHelperService::getPostMap();
        $params1 = PosttagHelperService::getPostDropDownListPrompt();
        $paramsTags = PosttagHelperService::getTagMap();
        $params2 = PosttagHelperService::getTagDropDownListPrompt();
        $paramPostLabel = PosttagHelperService::getPostDropDownListLabel();
        $paramTagLabel = PosttagHelperService::getTagDropDownListLabel();
*/
/*
        return $this->render('create', [
            'model' => $model,

            'params1' =>    $paramsPost,
            'params3' =>    $paramsTags,
            'params2' =>    $params1,
            'params4' =>   $params2,
            'params5' =>   $paramPostLabel,
            'params6' =>   $paramTagLabel,

        ]);
*/
/*
        $paramsView = array(
            'params1' =>  $paramsPost,
            'params3' =>    $paramsTags,
            'params2' =>    $params1,
            'params4' =>   $params2,
            'params5' =>   $paramPostLabel,
            'params6' =>   $paramTagLabel,
        );
        return $this->render('create', [
            'model' => $model,
            'paramsView' =>  $paramsView,
        ]);
*/
        $model['paramsView'] =
            [
                'mapPost' => PostHelperService::getPostMap(),
                'mapTag' =>  TagHelperService::getTagMap(),
                'viewPostTagPromptPost' => PostHelperService::getPostDropDownListPrompt(),
                'viewPostTagPromptTag' =>  TagHelperService::getTagDropDownListPrompt(),
                'viewPostTagLabelPost' =>  PostHelperService::getPostDropDownListLabel(),
                'viewPostTagLabelTag' =>  TagHelperService::getTagDropDownListLabel(),
            ];
/*
        return $this->render('create', [
            'model' => $model,
            'mapPost' => PostHelperService::getPostMap(),
            'mapTag' =>  TagHelperService::getTagMap(),
            'viewPostTagPromptPost' => PostHelperService::getPostDropDownListPrompt(),
            'viewPostTagPromptTag' =>  TagHelperService::getTagDropDownListPrompt(),
            'viewPostTagLabelPost' =>  PostHelperService::getPostDropDownListLabel(),
            'viewPostTagLabelTag' =>  TagHelperService::getTagDropDownListLabel(),
        ]);
*/
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PostTag model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $post_id
     * @param integer $tag_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($post_id, $tag_id)
    {
        $model = $this->findModel($post_id, $tag_id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id, 'tag_id' => $model->tag_id]);
        }
        /*
        $paramsPost = yii\helpers\ArrayHelper::map(Post::find()->all(), 'id', 'title');
        $params1 = ['prompt' => 'Выберите наименование статьи'];           
        $paramsTags = yii\helpers\ArrayHelper::map(Tag::find()->all(), 'id', 'title');
        $params2 = ['prompt' => 'Выберите тег' ];
        */
/*
        $paramsPost = CommonService::PostMap();
        $params1 = CommonService::PostDropDownListPrompt();
        $paramsTags = CommonService::TagMap();
        $params2 = CommonService::TagDropDownListPrompt();
        $paramPostLabel = CommonService::PostDropDownListLabel();
        $paramTagLabel = CommonService::TagDropDownListLabel();
*/
/*
        return $this->render('update', [
            'model' => $model,
            'params1' =>    $paramsPost,
            'params3' =>    $paramsTags,
            'params2' =>    $params1,
            'params4' =>   $params2,
            'params5' =>   $paramPostLabel,
            'params6' =>   $paramTagLabel,

        ]);
*/
/*
        $paramsView = array(
            'params1' =>  $paramsPost,
            'params3' =>    $paramsTags,
            'params2' =>    $params1,
            'params4' =>   $params2,
            'params5' =>   $paramPostLabel,
            'params6' =>   $paramTagLabel,
        );
        return $this->render('update', [
            'model' => $model,
            'paramsView' =>  $paramsView,
          ]);
*/

        $model['paramsView'] =
            [
                'mapPost' => PostHelperService::getPostMap(),
                'mapTag' =>  TagHelperService::getTagMap(),
                'viewPostTagPromptPost' => PostHelperService::getPostDropDownListPrompt(),
                'viewPostTagPromptTag' =>  TagHelperService::getTagDropDownListPrompt(),
                'viewPostTagLabelPost' =>  PostHelperService::getPostDropDownListLabel(),
                'viewPostTagLabelTag' =>  TagHelperService::getTagDropDownListLabel(),
            ];
        /*
        return $this->render('update', [
            'model' => $model,
            'mapPost' => PostHelperService::getPostMap(),
            'mapTag' =>  TagHelperService::getTagMap(),
            'viewPostTagPromptPost' => PostHelperService::getPostDropDownListPrompt(),
            'viewPostTagPromptTag' =>  TagHelperService::getTagDropDownListPrompt(),
            'viewPostTagLabelPost' =>  PostHelperService::getPostDropDownListLabel(),
            'viewPostTagLabelTag' =>  TagHelperService::getTagDropDownListLabel(),
        ]);
        */
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PostTag model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $post_id
     * @param integer $tag_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($post_id, $tag_id)
    {
        $this->findModel($post_id, $tag_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PostTag model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $post_id
     * @param integer $tag_id
     * @return PostTag the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($post_id, $tag_id)
    {
        if (($model = Posttag::findOne(['post_id' => $post_id, 'tag_id' => $tag_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
