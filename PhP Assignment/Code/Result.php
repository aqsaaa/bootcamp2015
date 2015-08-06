<?php
class Result{

    $rollNum;
    $Name;
    $fatherName;
    $TotalMarks;
}

class StdResult{
public $users=array(array());
 #internee with userType=11
public function __construct()
{
 $users[0][0]=1;
 $users[0][1]="aqsa";
 $users[0][2]=11;
 $users[0][3]="aqsa123";

 $users[1][0]=2;
 $users[1][1]="Sidra";
 $users[1][2]=11;
 $users[1][3]="sidra123";


#Db admin with userType 31
 $users[2][0]=3;
 $users[2][1]="Muhammad Ali";
 $users[2][2]=31;
 $users[2][3]="ali123";


 #dataEntry Operator wityh Id 21

 $users[3][0]=4;
 $users[3][1]="rabia";
 $users[3][2]=21;
 $users[3][3]="rabia123";


 $users[4][0]=5;
 $users[4][1]="waqas Javaid";
 $users[4][2]=21;
 $users[4][3]="waqas123";

}
}













?>
