<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Bank;
//use app\models\User;

class SiteController extends Controller
{   public $newmoney;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
	    
	
	   public function NewSchet($newmoney){ 
	   
	   $bankid = Bank::find()->where(['user' => Yii::$app->user->id])->one();
	   
    $bankid->money=$newmoney;
	$bankid->save();
	return $this->NewSchet();
	 
    } 
	  
    public function actionIndex()
    {
       
	   if($c1){$c1=$_GET['c1'];}else{$c1=0;}
	   // return $this->render('index');
		 //$schet = Bank::find()->where('user' => $app->user->getId())->all();​
		 // $schet = Bank::find()->where(['user' => $id])->all(); 
		  $bankid = Bank::find()->where(['user' => Yii::$app->user->id])->one();
	   //$c1=$bankid->money;
		    $schet = Bank::find()->where(['user' => Yii::$app->user->id])->all();
	     //$schet = Bank::find()->all();
		
		//$schet = Bank::find()->all();
		
	      
	  
  // $bankid->money=$c1;
	  // $schet1->save();
	   
	   $request = Yii::$app->request;
	   $c2 = $request->get('c1');   
	   
	   
	   $c3=0;
	   
	   if($c2>0){$bankid->money=$bankid->money+$c2; 
	    $bankid->save(); 
		 header('Location: http://localhost/redirect2.php',true, 301);
		 $c3=$c2+1;
		}
		
		 
		
	   if( $schet->money!=$bankid->money){   $bankid->save();}
       return $this->render('index', compact('schet','c3'));
	   
	   
	   
    }

	
	
	  
	  
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
