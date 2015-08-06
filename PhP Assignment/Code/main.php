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
	 
                  
#here login code for internee
	break;
    case 21:
	echo "\nWellcome to Data Entry Panel :)  ";
	echo " please enter your name & password to continue \n ";
	echo "Username : \n";
	$userName=readline();
	echo" pasword \n ";
	$password=readline(); 
	break;
	
    default:
      echo "Wrong Choice";
      break;

}                           










?>
