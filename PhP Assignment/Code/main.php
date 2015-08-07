<?php
include("Users.php");
include("Result.php");
$obj=new User();
$std= new StdResult();   
    
while(true)
{
$status=false;
$attempts=3;
    echo "*****Board Of Intermediate & Secondary Education, Lahore*****\n \n";

    echo "press 01 for Student \n";
    echo "press 11 for internee\n";
    echo "press 21 for data entry operator\n";
    echo "press 31 for data Base admin\n";
    echo "press 41 to exit\n";
    $input=readline();

#object for all login
   
    switch($input)
    {
	case 01:
	      $rollnumber;
	    do
	    {
		echo "Enter student Roll Number \n";
		$rollnumber=readline();
	    }while($rollnumber>4);

	       $std->DisplayResult($rollnumber);

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
	    echo "\nWellcome to Data Entry Panel :) \n ";
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
	    echo "\nWellcome to DB Admin Panel :)  \n";
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
		echo "press 3 to show Db Records \n";
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
			    echo "User Added :) \n";
			    echo "Updated Data Base\n";
			    $obj->DisplayUsers();   
			}
			break;
		    case 2:

# editing database 

			echo "press 1 for editing User Records \n";
			echo "press 2 for editing Student Records\n";
			$input=readline();
			switch($input)
			{
			    case 1:

				do{
				    echo "enter Username for Reseting its password \n";
				    $userName=readline();
#check username availability
				}while($userName==null);
				do{
				    echo "Set Password :\n ";     
				    $password=readline();
				}while($password==null);

				$st1=$obj->ChangePassword($userName,$password);  
				if($st1)
				{
				    echo "Password changed :) \n";
				    echo "Updated Data Base\n";
				    $obj->DisplayUsers();   
				}

				break;
			    case 2:
				break;
			    default:
				break;

			}



			break;
		    case 3 :

                        echo "press 1 for viewing User Records \n";
			echo "press 2 for viewing Student Result Records\n";
			$input=readline();
			switch($input)
			{
			    case 1:
                                   $obj->DisplayUsers();
                                   break;
                           case 2:
                                   $std->DisplayAllResults();
                                   break;
                             default:
                                   echo "wrong choice";
                                   break;
                        }
			break;
		    default:
			break;


		}

	    }
	    break;
         case 41:
                  $wrong->funct();
                   break;
	default:
	    echo "Wrong Choice";
	    break;

    }                           







}


?>
