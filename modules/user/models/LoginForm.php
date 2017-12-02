<?php

namespace app\modules\user\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username = 'admin';
    public $imageFile;
    public $rememberMe = false;

    private $_user = false;


    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ['rememberMe', 'boolean'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()
            && hash_file('sha512', $this->imageFile->tempName) === "ed10cf76864796f59fcc73b0506dd40e390f464347637c7d27947bd037d39bbbc9e083cbb7691c8571610b5dbd146b7092d2eec0f25ddfbe7f92f44b7a35924c"
            ) {
            $this->imageFile->reset();
            return Yii::$app->user->login($this->getUser()); //, $this->rememberMe ? 3600*24*30 : 0
        } else {
            return false;
        }
    }


    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
