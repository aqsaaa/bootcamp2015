<?php
class Result{

   public $rollNum;
   public $Name;
   public $fatherName;
   public $Total;
   public $totalMarks=array();
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
     $temp->marks[0]=90;
     $temp->marks[1]=96;
     $temp->marks[2]=70;
     $temp->marks[3]=87;
     $temp->marks[4]=79;

     $this->result[0]=$temp;

     $temp=new Result();
     $temp->Name="ramsha";
     $temp->rollNum=2; 
     $temp->fatherName="jahangir";
     $temp->TotalMarks=892;
     $temp->marks[0]=76;
     $temp->marks[1]=56;
     $temp->marks[2]=80;
     $temp->marks[3]=87;
     $temp->marks[4]=95;
    $this->result[1]=$temp;

     $temp=new Result();
     $temp->Name="mustaeen";
     $temp->rollNum=3; 
     $temp->fatherName="basit zaki";
     $temp->TotalMarks=802;
      $temp->marks[0]=87;
     $temp->marks[1]=76;
     $temp->marks[2]=77;
     $temp->marks[3]=67;
     $temp->marks[4]=89;
     $this->result[2]=$temp;
 
    $temp=new Result();
    $temp->Name="ayesha";
     $temp->rollNum=4; 
     $temp->fatherName="akhtar";
     $temp->TotalMarks=782;
      $temp->marks[0]=64;
     $temp->marks[1]=76;
     $temp->marks[2]=87;
     $temp->marks[3]=57;
     $temp->marks[4]=79;

    $this->result[3]=$temp;

}
 public function DisplayResult($id)
{
    $temp=new Result();
 for($i=0;$i<count($this->result);$i++)
{   
     $temp=$this->result[$i];
    if($temp->rollNum==$id)
    {

        echo "Student RollNumber:\t ".$temp->rollNum."\n";
        echo "Student Name:\t ".$temp->Name."\n";
        echo "Father Name:\t ".$temp->fatherName."\n";

        echo "Subject\t"."Total Marks\t"."Obtained\n";
     
                  echo "Science    \t"."100\t".$temp->marks[0]."\t\n";
                  echo "Mathmatics \t"."100\t".$temp->marks[1]."\t\n";
                  echo "English    \t"."100\t".$temp->marks[2]."\t\n";
                  echo "Islamyat   \t"."100\t".$temp->marks[3]."\t\n";
                  echo "PakStudy   \t"."100\t".$temp->marks[4]."\t\n";
       echo $temp->Name."  obtained ".$temp->TotalMarks." marks out of 500";
        break;

    }


}


}
 public function ChangeName($id,$name)
{
   $s=false;
    $temp=new Result();
 for($i=0;$i<count($this->result);$i++)
{   
     $temp=$this->result[$i];
    if($temp->rollNum==$id)
    {
        $s=true;
       $temp->Name=$name;
      $this->result[$i]=$temp;
        break;

    }


}
 return $s;

}
public function DisplayAllResults()
{
$temp=new Result();
for($i=0;$i<count($this->result);$i++)
{   
     $temp=$this->result[$i];
     
    
        echo "Student RollNumber:\t ".$temp->rollNum."\n";
        echo "Student Name:\t ".$temp->Name."\n";
        echo "Father Name:\t ".$temp->fatherName."\n";
        echo "Subject\t"."Total Marks\t"."Obtained\n";   
                  echo "Science   \t"."100\t".$temp->marks[0]."\t\n";
                  echo "Mathmatics\t"."100\t".$temp->marks[1]."\t\n";
                  echo "English   \t"."100\t".$temp->marks[2]."\t\n";
                  echo "Islamyat  \t"."100\t".$temp->marks[3]."\t\n";
                  echo "PakStudy  \t"."100\t".$temp->marks[4]."\t\n"; 
        echo $temp->Name."  obtained ".$temp->TotalMarks." marks  out of 500";
        echo "\n\n\n";
   $temp=new Result();

}


}


public function AddResult($temp)
{
   $st=false;
    $this->result[]=$temp;
     $st=true;
  return $st;
    
}


}













?>
