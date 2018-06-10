<?php
class Semester{

    private $semesterID;

    private $startDate;

    private $endDate;

    private $semesterName;

    public function __construct( $semId,$stID,$enID,$seName){
        $semesterID = $semId;
        $startDate = $stID;
        $endDate =$enID;
        $semesterID=$seName;
    }

    public function returnSemesterID(){
        return $semesterID;
    }
    public function returnStartDate(){
        return $startDate;
    }
    public function returnEndDate(){
        return $endDate;
    }
    public function returnSemesterName(){
        return $semesterName;
    }

}
?>