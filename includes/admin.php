<?PHP
class Admin extends DB_Connect {
    
    public function userCreate($username, $password){
        $hash_password = password_hash($password, CRYPT_STD_DES);
        
        $sql = $this->link->prepare("INSERT INTO `users` (username, password) VALUES (?,?)");
        $sql->bindParam(1, $username);
        $sql->bindParam(2, $hash_password);
        
        $sql->execute();
    }
    
    public function userLogin($username, $password){
        $sql = $this->link->prepare("SELECT * FROM `users` WHERE `username` = :username");
        $sql->execute(array('username'=>$username));
        $row = $sql->fetch();
        if(password_verify($password, $row['password']) == true){
            return true;
        }else{
            return false;
        }
    }
} 
?>