<?php
include("Users.php");
echo "*****Board Of Intermediate & Secondary Education, Lahore*****\n \n";

echo "press 01 for Student \n";
echo "press 11 for internee\n";
echo "press 21 for data entry operator\n";
echo "press 31 for data Base admin\n";
$input=readline();

#object for all login
$obj=new User();
$status=false;
$attempts=3;
switch($input)
{
    case 01:
	do
	{
	    echo "Enter student Roll Number \n";
	    $rollnumber=readline();
	}while($rollnumbe>=5);
	$stdResult=new  StudentResult();
	$stdResult->getResult($rollnumber);
# here we will get the result
	break;
    case 11:
	echo "\n Hello Internee :)\n ";
        echo " please enter your name & passowrd to continue\n";
	while($attempts!=0 && $status==false)
	{
	   echo "UserName :\n ";
	   $userName=readline();

	  echo "Password :\n ";     
	  $password=readline();
	
        $status=$obj->SignIn($userName,$password);
        
          if($status)
           {
            $attempts=0;
            break;
           }
         $attempts--;

	}

	if($status==true)
	{
	   echo "here show remaining tasks of internee";
	}
	break;
    case 21:
	echo "\nWellcome to Data Entry Panel :)  ";
	echo " please enter your name & password to continue \n ";
	while($attempts!=0 && $status==false)
	{
           
           do
           {
	   echo "UserName :\n ";
	   $userName=readline();
           }while($userName==" ");
           do
            {
	  echo "Password :\n ";     
	  $password=readline();
	   }while($password==" ");
        $status=$obj->SignIn($userName,$password);
        
          if($status)
           {
            $attempts=0;
            break;
           }
         $attempts--;

	}
          if($status==true)
	{
	   echo "here show remaining tasks of internee";
	}
	
	 break;
    case 31:
	echo "\nWellcome to DB Admin Panel :)  ";
	echo " please enter your name & password to continue \n ";
	while($attempts!=0 && $status==false)
	{
	   echo "UserName :\n ";
	   $userName=readline();

	  echo "Password :\n ";     
	  $password=readline();
	
        $status=$obj->SignIn($userName,$password);
        
          if($status)
           {
            $attempts=0;
            break;
           }
         $attempts--;

	}

	if($status==true)
	{
	  echo "press 1 to Add user \n";
          echo "press 2 to Edit Database\n";
          echo "press 3 to show User Record \n";
          $input=readline();
           switch($input)
          {
               case 1:
                       do{
                        echo "Set UserName :\n ";
	                $userName=readline();
                       #check username availability
                      }while($userName==null);
                        
                       do{
	               echo "Set Password :\n ";     
	               $password=readline();
                       }while($password==null);
                    

                       do{
	               echo "Set userType 11 or 21 :\n ";     
	              $userType=readline();
                       }while($userType==null &&($userType==11 || $userType==21 ) );
                
                       $st=$obj->addUser($userName,$password,$userType);
                        if($st)
                          {
                             echo "User Added :) ";
                          }
                     break;
              case 2:
                     break;
              case 3 :
                     break;
              default:
                  break;


          }

	}
	 break;
	
    default:
      echo "Wrong Choice";
      break;

}                           










?>
