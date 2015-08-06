<?php
class Result{

   public $rollNum;
   public $Name;
   public $fatherName;
   public $TotalMarks;
   public $subjectmarks=array();
   public $marks=array();

    
}

class StdResult{
public $result=array();
 #internee with userType=11
public function __construct()
{
     $temp=new Result();

     $temp->Name="sidra";
     $temp->rollNum=1; 
     $temp->fatherName="waqar";
     $temp->TotalMarks=901;
     $temp->marks[]=90;
     $temp->marks[]=96;
     $temp->marks[]=70;
     $temp->marks[]=87;
     $temp->marks[]=79;

     $result[0]=$temp;
     
     $temp->Name="ramsha";
     $temp->rollNum=2; 
     $temp->fatherName="jahangir";
     $temp->TotalMarks=892;
     $temp->marks[]=76;
     $temp->marks[]=56;
     $temp->marks[]=80;
     $temp->marks[]=87;
     $temp->marks[]=95;
     $result[1]=$temp;

     $temp->Name="mustaeen";
     $temp->rollNum=3; 
     $temp->fatherName="basit zaki";
     $temp->TotalMarks=802;
      $temp->marks[]=87;
     $temp->marks[]=76;
     $temp->marks[]=77;
     $temp->marks[]=67;
     $temp->marks[]=89;
     $result[2]=$temp;
 
    $temp->Name="ayesha";
     $temp->rollNum=4; 
     $temp->fatherName="akhtar";
     $temp->TotalMarks=782;
      $temp->marks[]=64;
     $temp->marks[]=76;
     $temp->marks[]=87;
     $temp->marks[]=57;
     $temp->marks[]=79;
    $result[3]=$temp;

}


}













?>
