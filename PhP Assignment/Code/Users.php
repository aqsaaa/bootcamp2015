<?php
class User{
public $users=array(array());
 #internee with userType=11
public function __construct()
{
#echo "function Load Data";
 $this->users[0][0]=1;
 $this->users[0][1]="aqsa";
 $this->users[0][2]=11;
 $this->users[0][3]="aqsa123";

 $this->users[1][0]=2;
 $this->users[1][1]="Sidra";
 $this->users[1][2]=11;
 $this->users[1][3]="sidra123";


#Db admin with userType 31
 $this->users[2][0]=3;
 $this->users[2][1]="ali";
 $this->users[2][2]=31;
 $this->users[2][3]="ali123";


 #dataEntry Operator wityh Id 21

 $this->users[3][0]=4;
 $this->users[3][1]="rabia";
 $this->users[3][2]=21;
 $this->users[3][3]="rabia123";


 $this->users[4][0]=5;
 $this->users[4][1]="waqas";
 $this->users[4][2]=21;
 $this->users[4][3]="waqas123";

}

 public function getCount()
 {
   #echo "count is ".count($this->users); 
  return count($this->users);
 }
 
 public function SignIn($userName,$password)
 {
    $status=false;
   for($i=0;$i<count($this->users);$i++)
   {
      if($userName==$this->users[$i][1] && $password==$this->users[$i][3])
	     {
	       $status=true;
                break;
              }     
     

   }
    return $status;
 } 


    public function addUser($userName,$password,$userType)
   {
         $status=false;
         $count=count($this->users);
         $this->users[$count][0]=$count+1;
         $this->users[$count][1]=$userName;
         $this->users[$count][2]=$userType;
         $this->users[$count][3]=$password;
        $status=true;
     return $status;

   } 

   public function DisplayUsers()
   {

             echo "Id\t"."Name\t"."Password\t"."UserType\t\n";  
            for($i=0;$i<count($this->users);$i++)
              {

                echo $this->users[$i][0]."\t".$this->users[$i][1]."\t".$this->users[$i][3]."\t".$this->users[$i][2]."\t\n";     
              }

   } 
    public function ChangePassword($userName,$password)
   {

          $status=false;    
            for($i=0;$i<count($this->users);$i++)
              {

                if($this->users[$i][1]==$userName)
                {
                   $this->users[$i][3]=$password;
                   $status=true;
                   break;
                }  
  

              }
        return $status;

   } 

   



}













?>
