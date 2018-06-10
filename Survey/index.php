<?php
//var_dump($_POST);
//db connection

require_once('model/connect_db.php');
//useful utilities
include("model/Utilities.php");
$action =(isset($_POST['action'])) ? $_POST['action']:"";
switch(true){
    //case to Catch if customer is accessing Survey.
    case strpos($action,"custSatisfaction")===0:
        include("views/Header.html");
        include("views/CustomerSatisfactionSurvey.php");
        include("views/Footer.html");
        break;
    //case to submit customer survey
    case strpos($action,"sendCustomerSurvey")===0:
        if(validateCustomerInputs()){

            include_once('model/customersurvey.php');
            $result=AddCustomerSurvey();
            include("views/Header.html");
            include("views/sendCustomerSurvey.php");
            include("views/Footer.html");  
            session_destroy();
        }else{
            include("views/Header.html");
            include("views/CustomerSatisfactionSurvey.php");
            include("views/Footer.html");
        }
        break;
    //case to Catch if student is accessing the survey.
    case strpos($action,"StudentEvaluation")===0:
        include("model/Students.php");
        include("model/Teams.php");
        include("model/Choices.php");
        include("model/Questions.php");
        include ("model/Category.php");
        $results = GetListStudents();
        $teams= GetListTeams();
        $choices=GetListChoices();
        $questions=GetListQuestions();
        $categories=GetListCategories();
        $time_start = microtime_float();

        include("views/StudentHeader.html");
        include("views/StudentEvaluation.php");
        include("views/Footer.html");
        break;
    //case to submit student survey.
    case strpos($action,"sendStudentSurvey")===0:
        include('model/Questions.php');
        include("model/Students.php");
        include("model/Teams.php");
        include("model/Choices.php");
        include("model/Category.php");
        include("model/Survey.php");
        include("model/Feedback.php");
        $questions = GetListQuestions();
        $categories= GetListCategories();
        $time_end = microtime_float();
        if(validateInputs($questions,$categories)){
            $time=0;
            $time = $time_end - (float)$_POST['time'];
            $id=AddSurvey(number_format($time,0));
            foreach($_POST as $key => $value) {
                if (strpos($key,'Q') === 0) {
                    AddQuestions($key,$value,$id);
                }
                if(strpos($key,'F')===0){
                    AddFeedback($key,$value,$id);
                }
            }
            include("views/StudentHeader.html");
            include("views/sendStudentSurvey.php");
            include("views/Footer.html");
        }else{

            $results = GetListStudents();
            $teams= GetListTeams();
            $choices=GetListChoices();
            $categories=GetListCategories();
            $time_start = microtime_float();
            include("views/StudentHeader.html");
            include("views/StudentEvaluation.php");
            include("views/Footer.html");
            break;
        } 
        break;
    case strpos($action, "studentReport")===0:
        include("model/Students.php");
        $students=GetListStudents();
        include("views/StudentHeader.html");
        include("views/ReportSelection.php");
        include("views/footer.html");
        break;
    case strpos($action, "evalFromStudent")===0:
        //Use key value student => student_id , action => evalForStudent
        //fetch all evaluations for this student and load into multi selection box.
        include("model/Survey.php");
        include("model/Students.php");
        $surveys=FetchSurveysBy();
        $students=GetListStudents();
        //
        include("views/StudentHeader.html");
        include("views/reports/EvaluationFromStudent.php");
        include("views/Footer.html");
        break;
    case strpos($action,"evalForStudent")===0:
        //Use key value student => student_id , action => evalForStudent
        //Fetch all evaluations for this student and load into multi selection box.
        include("model/Survey.php");
        include("model/Students.php");
        $surveys=FetchSurveys();
        $students=GetListStudents();
        //grab the reviewer and reviewee of each report and the time that it was taken.
        //use form submit to submit the selections to next page where they will be assembled into legible content.
        include("views/StudentHeader.html");
        include("views/reports/EvaluationForStudent.php");
        include("views/footer.html");
        break;
    case strpos($action,"anonEvalForStudent")===0:
        //Use key value student => student_id , action => anonEvalForStudent
        //Fetch all evaluations for this student and load into multi selection box.
        include("model/Survey.php");
        include("model/Students.php");
        $surveys=FetchSurveys();
        $students=GetListStudents();
        //grab the reviewer and reviewee of each report and the time that it was taken.
        //use form submit to submit the selections to next page where they will be assembled into legible content.
        include("views/StudentHeader.html");
        include("views/reports/AnonEvaluationForStudent.php");
        include("views/footer.html");
        break;
    case strpos($action,"loadSurveys")===0:
        include("model/Students.php");
        include("model/Survey.php");
        include("model/SurveyQuestion.php");
        include("model/Feedback.php");
        //Key values posted action => loadSurveys , selected_surveys => array(0,survey,1,survey) loop and grab each survey  id.
        $students = GetListStudents();

        include("views/StudentHeader.html");
        include("views/reports/LoadForSurveys.php");
        include("views/footer.html");
        break;
    case strpos($action,"loadAnonSurveys")===0:
        include("model/Questions.php");
        include("model/Students.php");
        include("model/Survey.php");
        include("model/SurveyQuestion.php");
        include("model/Feedback.php");
        //Key values posted action => loadSurveys , selected_surveys => array(0,survey,1,survey) loop and grab each survey  id.
        $students = GetListStudents();
        $questions = GetListQuestions();

        include("views/StudentHeader.html");
        include("views/reports/LoadAnonForSurveys.php");
        include("views/footer.html");
        break;
    case strpos($action,"loadBySurveys")===0:
        include("model/Students.php");
        include("model/Survey.php");
        include("model/SurveyQuestion.php");
        include("model/Feedback.php");
        //Key values posted action => loadSurveys , selected_surveys => array(0,survey,1,survey) loop and grab each survey  id.
        $students = GetListStudents();

        include("views/StudentHeader.html");
        include("views/reports/LoadBySurveys.php");
        include("views/footer.html");
        break;
    case strpos($action , "customerReport")===0:
        include_once "model/customersurvey.php";
        $surveys = FetchAllCustomerSurveys();
        include "views/Header.html";
        include "views/reports/EvaluationByCustomer.php";
        include "views/Footer.html";
        break;
    case strpos($action,"loadCustomerReport")===0:
        //var_dump($_POST);
        include "model/customersurvey.php";
        $result = FetchCustomerSurvey($_POST['selected_surveys']);
        //var_dump($result);
        foreach($result as $k=>$v){
            if($k =='project_name'){
                $_POST['projectName']=$v;
            }
            elseif ($k =='customer_name'){
                $_POST['name']=$v;
            }else{
                $_POST[$k]=$v;
            }
        }
        include "views/Header.html";
        include "views/CustomerSatisfactionSurvey.php";
        include "views/Footer.html";
        break;
    default:
        echo("<h1>Error: Please use links provided.</h1>");
        break;
}

?>
