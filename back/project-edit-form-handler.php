<?php
session_start();
if($_SESSION['username']){


    if ($_POST) {

        if(
        isset($_POST['project_id']) && !empty($_POST['project_id']) &&
        isset($_POST['project_title'])&&!empty($_POST['project_title']) &&

        isset($_POST['project_begin'])&&!empty($_POST['project_begin']) &&
        isset($_POST['project_end'])&&!empty($_POST['project_end']) &&
        isset($_POST['project_context'])&&!empty($_POST['project_context']) &&
        isset($_POST['project_specs'])&&!empty($_POST['project_specs']) &&
        isset($_POST['project_githublink'])&&!empty($_POST['project_githublink']) &&
        isset($_POST['project_link'])&&!empty($_POST['project_link'])
        ){    
            
        require_once("db-connect.php");

        $id = strip_tags($_POST['project_id']);
        $title = strip_tags($_POST['project_title']);

        $begin = strip_tags($_POST['project_begin']);
        $end = strip_tags($_POST['project_end']);
        $context = strip_tags($_POST['project_context']);
        $specs = strip_tags($_POST['project_specs']);
        $github = strip_tags($_POST['project_githublink']);
        $link = strip_tags($_POST['project_link']);


$sql="UPDATE `projects` SET `project_title`=:project_title, `project_begining_date`=:project_begining_date, `project_ending_date`=:project_ending_date, `project_context`=:project_context, `project_specs`=:project_specs, `project_github`=:project_github, `project_link`=:project_link WHERE `project_id`=:project_id";



$query = $db->prepare($sql);

$query->bindValue(':project_id', $id, PDO::PARAM_INT);
$query->bindValue(':project_title', $title, PDO::PARAM_STR);

$query->bindValue(':project_begining_date', $begin, PDO::PARAM_STR);
$query->bindValue(':project_ending_date', $end, PDO::PARAM_STR);
$query->bindValue(':project_context', $context, PDO::PARAM_STR);
$query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
$query->bindValue(':project_github', $github, PDO::PARAM_STR);
$query->bindValue(':project_link', $link, PDO::PARAM_STR);

$query->execute();
echo 'success';
echo '<br><a href=home.php> Retour </a>';



} else {
    echo 'Remplissez tous les champs';
    }
} else {
    echo 'Pour accéder à cette page vous devez publier un projet';
    }
}else {
    echo 'vous n\'êtes pas identifié';
}
