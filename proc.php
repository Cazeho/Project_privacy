<?php 
include 'connex.php';

if (isset($_POST['q1'])  AND isset($_POST['q2'])  AND isset($_POST['q3'])  AND isset($_POST['q4'])  AND isset($_POST['q5'])  AND isset($_POST['q6'])  AND isset($_POST['q7'])  AND isset($_POST['q8'])  AND isset($_POST['q9'])  AND isset($_POST['q10'])  AND isset($_POST['q11'])  AND isset($_POST['q12'])  AND isset($_POST['q13'])  AND isset($_POST['q14'])  AND isset($_POST['q15'])  AND isset($_POST['q16']) AND isset($_POST['q17'])  AND isset($_POST['q18'])  AND isset($_POST['q19'])  AND isset($_POST['q20']))

	{
        #$requete=$bdd->prepare("INSERT INTO `livre`(`Titre`, `Auteur`, `Editeur`, `Année`, `Prix HT`) VALUES ("");
        $requete->execute(array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'] , $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10'], $_POST['q11'], $_POST['q12'], $_POST['q13'], $_POST['q14'], $_POST['q15'], $_POST['q16'], $_POST['q17'], $_POST['q18'], $_POST['q19'], $_POST['q20']));
		
	}	
    ?>