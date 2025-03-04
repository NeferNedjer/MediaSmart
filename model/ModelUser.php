<?php

class ModelUser extends Model {

    public function getUserById(int $id_user) {

        $user = $this->getDb()->prepare('SELECT `id_user`, `name`, `first_name`, `email`, `password`, `adress`, `phone`, `statut`, `email_verified`, `token`, `inscription_date` FROM `user` WHERE `id_user` = :id_user');
        $user->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $user->execute();
        return new User($user->fetch(PDO::FETCH_ASSOC));
    }

    public function getUserByEmail(string $email) {

        $user = $this->getDb()->prepare('SELECT `id_user`, `name`, `first_name`, `email`, `password`, `adress`, `phone`, `statut`, `email_verified`, `token`, `inscription_date` FROM user WHERE `email` = :email');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();
        return new User($user->fetch(PDO::FETCH_ASSOC));
    }

    public function isLoggedIn() {

        if(isset($_SESSION['id_user'])) {
            header('Location: /mediasmart');
            exit();
        }
    }

    public function createUser(string $name, string $first_name, string $email, string $password, string $adress, int $phone, string $token) {

        $user  = $this->getDb()->prepare('INSERT INTO `user` (`name`, `first_name`, `email`, `password`, `adress`, `phone`, token, inscription_date) VALUES (:name, :first_name, :email, :password, :adress, :phone, :token, NOW())');
        $password = password_hash($password, PASSWORD_BCRYPT);
        $user->bindParam(':name', $name, PDO::PARAM_STR);
        $user->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->bindParam(':password', $password, PDO::PARAM_STR);
        $user->bindParam(':adress', $adress, PDO::PARAM_STR);
        $user->bindParam(':phone', $phone, PDO::PARAM_INT);
        $user->bindParam(':token', $token, PDO::PARAM_STR);
        $user->execute();
    }

    public function checkUserMail(string $email) {

        $user = $this->getDb()->prepare('SELECT `email` FROM user WHERE `email` = :email');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();
        $data = $user->fetch(PDO::FETCH_ASSOC);
        $isChecked = false;

        if($data){
            $isChecked = false;
        }else {
            $isChecked = true;
        }
        return $isChecked;
    }
    
    public function getUserByToken(string $token) {

        $user = $this->getDb()->prepare('SELECT id_user, email, inscription_date, NOW() as now_date FROM `user` WHERE token = :token');
        $user->bindParam(':token', $token, PDO::PARAM_STR);
        $user->execute();

        if($user->rowCount() == 0) {
            return null;
        } else {
            $userData = $user->fetch(PDO::FETCH_ASSOC);
            return ['user' => new User($userData), 'now_date' => $userData['now_date']];
        }
    }

    public function updateEmail(string $email) {

        $updateReq = $this->getDb()->prepare("UPDATE user SET email_verified = 1 WHERE email = :email");
        $updateReq->bindParam(':email', $email, PDO::PARAM_STR);
        $updateReq->execute();
    }

    public function updatetoken(int $id_user, string $token) {

        $updateReq = $this->getDb()->prepare("UPDATE user SET token=:token, inscription_date=NOW() WHERE id_user = :id_user");
        $updateReq->bindParam(':token', $token, PDO::PARAM_STR);
        $updateReq->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $updateReq->execute();
    }



}