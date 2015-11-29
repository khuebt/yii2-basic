<?php
namespace app\models;
use Yii;
 
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    public function getId()
    {
        return $this->getPrimaryKey();
    }
    public function getAuthKey()
    {
       
    }
    public function validateAuthKey($authKey)
    {
        
    }
   // public function validatePassword($password)
    //{
     //   return Yii::$app->security->validatePassword($password, $this->password);
    //}
  //  public function setPassword($password)
  //  {
  //      $this->password_hash = Yii::$app->security->generatePasswordHash($password);
  //  }
  //  public function generateAuthKey()
   // {
       // $this->auth_key = Yii::$app->security->generateRandomString();
   // }
    public function getEmail()
    {
        return $this->email;
    }
    public function validatePassword($pass)
    {
        /* @var $tam type */
        $thucte= $this->password;
        return Yii::$app->security->compareString($pass, $thucte);
    }

}