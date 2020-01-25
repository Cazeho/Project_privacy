<?php session_start();
require('data.php');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mr708660');
 
// Connexion à la base de données MySQL 
$connexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($connexion === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
<!DOCTYPE HTML>
<!-- Base de donnée

CREATE TABLE `question` (
  `id` int(200) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `q3` varchar(200) NOT NULL,
  `q4` varchar(200) NOT NULL,
  `q5` varchar(200) NOT NULL,
  `q6` varchar(200) NOT NULL,
  `q7` varchar(200) NOT NULL,
  `q8` varchar(200) NOT NULL,
  `q9` varchar(200) NOT NULL,
  `q10` varchar(200) NOT NULL,
  `q11` varchar(200) NOT NULL,
  `q12` varchar(200) NOT NULL,
  `q13` varchar(200) NOT NULL,
  `q14` varchar(200) NOT NULL,
  `q15` varchar(200) NOT NULL,
  `q16` varchar(200) NOT NULL,
  `q17` varchar(200) NOT NULL,
  `q18` varchar(200) NOT NULL,
  `q19` varchar(200) NOT NULL,
  `q20` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;



--> 
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="../privacy/CSS/style.css" />
		<title>Sondage "Privacy"</title>
		<script>
			function validate(){
					var valid = false;
					var x = document.myform.q1;
					var x = document.myform.q2;
					var x = document.myform.q3;
					var x = document.myform.q4;
					var x = document.myform.q5;
					var x = document.myform.q6;
					var x = document.myform.q7;
					var x = document.myform.q8;
					var x = document.myform.q9;
					var x = document.myform.q10;
					var x = document.myform.q11;
					var x = document.myform.q12;
					var x = document.myform.q13;
					var x = document.myform.q14;
					var x = document.myform.q15;
					var x = document.myform.q16;
					var x = document.myform.q17;
					var x = document.myform.q18;
					var x = document.myform.q19;
					var x = document.myform.q20;
					
					
					for(var i=0;i<x.length;i++){
						if(x[i].checked){
						valid= true;
						break;
						}
					}	
					
					if(valid){
						alert("Opération réussie");
					}
					else{
						alert("Vous avez oublié des questions");
						return false;
					}
					
					
				}
		</script>
	</head>
	<body>
		<div>
			<?php
			if(isset($_POST['submit'])){
				
				$q1 = $_POST['q1'];
				$q2 = $_POST['q2'];
				$q3 = $_POST['q3'];
				$q4 = $_POST['q4'];
				$q5 = $_POST['q5'];
				$q6 = $_POST['q6'];
				$q7 = $_POST['q7'];
				$q8 = $_POST['q8'];
				$q9 = $_POST['q9'];
				$q10 = $_POST['q10'];
				$q11 = $_POST['q11'];
				$q12 = $_POST['q12'];
				$q13 = $_POST['q13'];
				$q14 = $_POST['q14'];
				$q15 = $_POST['q15'];
				$q16 = $_POST['q16'];
				$q17 = $_POST['q17'];
				$q18 = $_POST['q18'];
				$q19 = $_POST['q19'];
				$q20 = $_POST['q20'];
				
				
				$result = mysqli_query($connexion, "INSERT INTO question(id, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20 ) VALUES ('','" . $q1. "', '" . $q2. "','" . $q3. "','" . $q4. "','" . $q5. "','" . $q6. "','" . $q7. "','" . $q8. "','" . $q9. "','" . $q10. "','" . $q11. "','" . $q12. "','" . $q13. "','" . $q14. "','" . $q15. "','" . $q16. "','" . $q17. "','" . $q18. "','" . $q19. "','" . $q20. "')");
				if($result){
				  $db_msg = "Vos informations de contact sont enregistrées avec succés.";
				  $type_db_msg = "success";
				}else{
				  $db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
				  $type_db_msg = "error";
				}
				
			}			
			?>
		</div>
		<header>
			<div class="container">
				<center><h1>Sondage "Privacy"</h1><center/>
			</div>	
		</header>
		<a href="#" class="back-to-top">Back-to top</a>
		<section>
			<div class="box">
			<form name="myform" method="post" id="" action="proc.php" onsubmit="return validate()">
				<div class="container">
					<div class="current">Question 1/20</div>	
					<p>
						 <label for="q1">	Pensez vous être espionné par vos appareils intelligents à la maison? </label>
					</p>
						<ul>
							
							<li><input name="q1" type="radio" value="1">Oui<li>
							<li><input name="q1" type="radio" value="2">Non<li>
						</ul>
				</div>
							<div class="container">
					<div class="current">Question 2/20</div>	
					<p>
						<label for="q2">	En quelle entreprise des GAFAM avez vous le moins confiance? En d'autre termes, laquelle est le plus suceptible de vous espionner</label>
					</p>
				
						<ul>
							<li><input name="q2" type="radio" value="1" >Google<li>
							<li><input name="q2" type="radio" value="2 " >Apple<li>
							<li><input name="q2" type="radio" value="3 " >Facebook<li>
							<li><input name="q2" type="radio" value="4 " >Amazon<li>
							<li><input name="q2" type="radio" value="5 " >Microsoft<li>
						</ul>
		
				</div>
							<div class="container">
					<div class="current">Question 3/20</div>	
					<p class="question">
						 <label for="q3">	Combien d'appareils intelligents (téléphone, four,frigidaire,caméra, remote-store,répéteur,lave linge) estimez vous avoir dans la maison?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q3" type="radio" value="1" >Moins de 5<li>
							<li><input name="q3" type="radio" value="2 " >Entre 6 et 10<li>
							<li><input name="q3" type="radio" value="3 " >Entre 10 et 15<li>
							<li><input name="q3" type="radio" value="4 " >Entre 15 et 20<li>
							<li><input name="q3" type="radio" value="5 " >Plus de 20<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 4/20</div>	
					<p class="question">
						 <label for="q4">	Quels moteurs de recherche utilisez vous à la maison? Plusieurs choix possibles</label>
					</p>
					
						<ul class="choix">
							<li><input name="q4" type="radio" value="1" >Google Chrome<li>
							<li><input name="q4" type="radio" value="2 " >Mozilla firefox<li>
							<li><input name="q4" type="radio" value="3 " >Internet Explorer<li>
							<li><input name="q4" type="radio" value="4 " >Qwant<li>
							<li><input name="q4" type="radio" value="5 " >Opéra<li>
							<li><input name="q4" type="radio" value="6 " >Safari<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 5/20</div>	
					<p class="question">
						 <label for="q5">	Utlisez-vous un assistant sonore chez vous?(type Alexa, Cortana, Siri ou autre)</label>
					</p>
					
						<ul class="choix">
							<li><input name="q5" type="radio" value="1" >Oui<li>
							<li><input name="q5" type="radio" value="2 " >Non<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 6/20</div>	
					<p class="question">
						 <label for="q6">	Possédez vous des bloqueurs de publicité sur vos navigateurs?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q6" type="radio" value="1" >Oui<li>
							<li><input name="q6" type="radio" value="2 " >Non<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 7/20</div>	
					<p class="question">
						 <label for="q7">	Pensez vous que l'anonnymat est impossible à l'ère du numérique?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q7" type="radio" value="1" >Oui c'est sûr<li>
							<li><input name="q7" type="radio" value="2 " >Probablement<li>
							<li><input name="q7" type="radio" value="3 " >Non<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 8/20</div>	
					<p class="question">
						 <label for="q8">	Faites vous toutes les mises à jour de sécurité sur votre téléphone et votre PC?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q8" type="radio" value="1" >Oui<li>
							<li><input name="q8" type="radio" value="2 " >Non<li>
						</ul>
						
				</div>	
							<div class="container">
					<div class="current">Question 9/20</div>	
					<p class="question">
						 <label for="q9">	Avez vous déjà été victime de piratage sur vos comptes connectés?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q9" type="radio" value="1" />Non, jamais<li>
							<li><input name="q9" type="radio" value="2 " >Oui, une fois<li>
							<li><input name="q9" type="radio" value="3 " >Oui, plusieurs fois<li>
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 10/20</div>	
					<p class="question">
						 <label for="q10">	Comment utilisez vous vos mots de passe?</label>
					</p>
					
						<ul class="choix">
							<li><input name="q10" type="radio" value="1" >J'utilise un mot de passe différent pour chaque compte en ligne en utilisant des moyens mémo technique pour me rappeler<li>
							<li><input name="q10" type="radio" value="2 " >J'ai un pool de mots de passe que je réutilise fréquemment<li>
							<li><input name="q10" type="radio" value="3 " >Je n'ai qu'un mot de passe que j'utilise à chaque fois pour me rappeler facilement<li>
							<li><input name="q10" type="radio" value="4 " >Un seul mot de passe que j'utilise<li>
							<li><input name="q10" type="radio" value="5 " >Gestionnaire de mots de passe<li>
							<li><input name="q10" type="radio" value="6 " >J'ai un mot de passe de base<li>
							<li><input name="q10" type="radio" value="7 " >J'utilise une série de mot de passe<li>
							<li><input name="q10" type="radio" value="8 " >J'ai une racine de mot de passe<li>
							
						
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 11/20</div>	
					<p class="question">
						 <label for="q11">	Possédez vous des caméraras connectées chez vous ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q11" type="radio" value="1" >Oui<li>
							<li><input name="q11" type="radio" value="2" >Non<li>
						</ul>
						
				</div>	
							<div class="container">
					<div class="current">Question 12/20</div>	
					<p class="question">
						 <label for="q12">	Avez-vous masqué la webcam de vos ordinateurs ou pensez-vous à le faire ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q12" type="radio" value="1" >Oui bien-sûr<li>
							<li><input name="q12" type="radio" value="2" >Oui certaines<li>
							<li><input name="q12" type="radio" value="3" >Non mais je devrais<li>
							<li><input name="q12" type="radio" value="4" >Non ce n'est pas utile<li>
						
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 13/20</div>	
					<p class="question">
						 <label for="q13">	Avez-vous déjà reconfigurés votre box ? (Changement de nom, mot de passe, cryptage, etc).</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q13" type="radio" value="1" >Oui et pas seulement le mot de passe<li>
							<li><input name="q13" type="radio" value="2" >Seulement le mot de passe<li>
							<li><input name="q13" type="radio" value="3" >Non<li>
						
						</ul>
						
				</div>
							<div class="container">
					<div class="current">Question 14/20</div>	
					<p class="question">
						 <label for="q14">	Pensez-vous que votre antivirus sur votre PC est performant ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q14" type="radio" value="1" >Oui, je suis satisfait<li>
							<li><input name="q14" type="radio" value="2" >Non, pas assez<li>
							<li><input name="q14" type="radio" value="3" >Je n'en ai pas<li>
						
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 15/20</div>	
					<p class="question">
						 <label for="q15">	Avez-vous pour habitude d'utiliser des pseudos quand vous créez un compte en ligne ou vous préférez utiliser votre nom ou prénom ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q15" type="radio" value="1" >Un pseudo dès que je peux pour passer inaperçu auprès des inconnus<li>
							<li><input name="q15" type="radio" value="2" >Mon nom ou prénom pour que les gens me reconnaissent<li>
							<li><input name="q15" type="radio" value="3" >Ça dépend du compte<li>
					
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 16/20</div>	
					<p class="question">
						 <label for="q16">	Pensez- vous qu'il est possible de pirater une voiture connectée ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q16" type="radio" value="1" >Oui<li>
							<li><input name="q16" type="radio" value="2" >Non<li>
						
						</ul>
						
				</div>	
							<div class="container">
					<div class="current">Question 17/20</div>	
					<p class="question">
						 <label for="q17">	Pensez-vous que vos données sont protégées dans une voiture connectée ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q17" type="radio" value="1" >Oui<li>
							<li><input name="q17" type="radio" value="2" >Non<li>
							<li><input name="q17" type="radio" value="3" >Partiellement<li>
							
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 18/20</div>	
					<p class="question">
						 <label for="q18">	Pensez-vous qu'une voiture connectée augmente le risque d'accident ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q18" type="radio" value="1" >Oui<li>
							<li><input name="q18" type="radio" value="2" >Non<li>
							
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 19/20</div>	
					<p class="question">
						 <label for="q19">	A combien estimez-vous le nombre de voitures connectées en circulation en France en 2018 ?</br></label>
					</p>
					
						<ul class="choix">
							<li><input name="q19" type="radio" value="1" >1 million<li>
							<li><input name="q19" type="radio" value="2" >2 millions<li>
							<li><input name="q19" type="radio" value="3" >3 millions<li>
							<li><input name="q19" type="radio" value="4" >4 millions<li>
							<li><input name="q19" type="radio" value="5" >5 millions<li>
							<li><input name="q19" type="radio" value="6" >6 millions ou plus<li>
							
						</ul>
					
				</div>	
							<div class="container">
					<div class="current">Question 20/20</div>	
					<p>
						 <label for="q20"> Possédez-vous une voiture connectée ?</br></label>
					</p>
					
						<ul>
							<li><input name="q20" type="radio" value="1" >Oui<li>
							<li><input name="q20" type="radio" value="2" >Non<li>
							
						</ul>
					<center><input class="g" type="submit" name="submit" value="submit"/></center>
				</div>
			</div>
			</form>
		</section>
		<footer>
			<div class="container">
				Copyright &copy; 2019, Sondage "Privacy"
			</div>	
		</footer>
	</body>
</html>	
