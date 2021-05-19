<?php
namespace src\handlers;
use \src\models\User;

class LoginHandler {

 	public static function checkLogin(){
//se a sessão token existir e não estiver vazia
		if(!empty($_SESSION['token'])) {
//vamos pegar o token
			$token = $_SESSION['token'];

 //vamos verificar se tem algum usuário com esse token
			$data = User::select()->where('token',$token)->one();

 //se ele achou alguma coisa:
				if(count($data) > 0) {

 					$loggedUser = new User();
					$loggedUser->id = $data['id'];
					$loggedUser->email = $data['email'];
					$loggedUser->name = $data['name'];

 					return $loggedUser;

 					}

 					}//se nao tem a sessão token, já era! então vc nao ta logado
				return false;
			}

			public static function verifyLogin($email,$password){

				$user = User::select()->where('email',$email)->one();

				if($user){
					if(password_verify($password,$user['passaword'])){

						$token = md5(time().rand(0,9999).time());

						User::update()->set('token',$token)
						->where('email',$email)->execute();

						return $token;
					}
				}

				return false;

			}
		}