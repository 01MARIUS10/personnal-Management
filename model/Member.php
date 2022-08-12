<?php 
class Member extends Database{
    private $id_user;
    private $user_firstname;
    private $user_lastname;
    private $user_pseudo;
    private $user_age;
    private $user_sex;
    private $user_tel;
    private $user_mail;
    private $user_password;


    public function getAllUserOrder($order){
        $sql='SELECT * FROM user '.$order;
        $request= $this->PDO->prepare($sql);
        $request->execute();
        return $request->fetchall(PDO::FETCH_ASSOC);
    }

    public function registerUser($fName,$lName,$pseudo,$age,$tel,$mail,$pass):bool{
        $table = " user(user_firstname,user_lastname,user_pseudo,user_age,user_tel,user_mail,user_password) ";
        $val="(?,?,?,?,?,?,?) ;";
        $sql="INSERT INTO".$table." VALUES ".$val;
        try{
            $request= $this->PDO->prepare($sql);
            $request->execute([$fName,$lName,$pseudo,$age,$tel,$mail,$pass]);
            $booleen=true;
        }catch (PDOException $e){
            $booleen= false;
        }
        return $booleen;
    }
    public function updateUser($id,$fName,$lName,$pseudo,$age,$tel){
        $table= 'user';
        $set= "user_firstname =' ".$fName."' , user_lastname = '".$lName."' , user_pseudo = '".$pseudo."' , user_age = '".$age."' , user_tel = '".$tel."'" ;
        $sql= "UPDATE ".$table." SET ".$set." WHERE id_user=".$id ;
        echo "<br>".$sql;
        try{
            $request= $this->PDO->prepare($sql);
            $request->execute();
            $booleen=true;
        }catch (PDOException $e){
            echo "erreur = ".$e->getMessage();
            $booleen= false;
        }
        return $booleen;
    }
    public function deleteUser($id){
        $table= 'user';
        $sql= "DELETE FROM ".$table." WHERE id_user= ".$id ;
        try{
            $request= $this->PDO->prepare($sql);
            $request->execute();
            $booleen=true;
        }catch (PDOException $e){
            echo "erreur = ".$e->getMessage();
            $booleen= false;
        }
        return $booleen;
    }

}
?>