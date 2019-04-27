		<?php 
		session_start();
		include 'header.php';
		?>
			<section class="content">
				<?php
					echo "<h3>I WILL BE A WEB DEVELOPER.... IN SAHH ALLAH</h3>";
				?>
				<?php
					$a="TAIYOB";
					var_dump($a);
					echo "1. String 2. Integer 3. Float 4.Boolean 5.Array 6.Object 7.Null 8. Resource.";
					echo "<br/>";
					$b=array('Omi',"Jui","She");
					var_dump($b);
				?>
				<?php
					/**
					 * 
					 */
					/**class student
					{
						
						function department()
						{
							return "DEVELOPER";
						}
						function details()
						{
							echo $this->department;
						}
					}
					$st= new student;
					$st->details;*/




					class student
					{

						function department()
						{
							return "DEVELOPER";
						}
						function details()
						{
							echo $this->department();
						}
					}
					$st = new student;
					$st->details();
				?>
				<br/>
				<?php
					define("RUN","When Programme is Correct.");
					echo RUN;

					function alert(){
						return RUN;
					}
					echo alert();

				?>
				<br/>
				<?php
					$h=10;
					$p=5;
					echo $h+$p;
				?>
				<br/>
				<?php
					$s=12;
					$s+=10;
					echo $s;
				?>
				<br/>
				<?php
					$i=15;
					$p=25;
					var_dump($i>$p);
					var_dump($i==$p);
					var_dump($i===$p);
					var_dump($i<!$p);
				?>
				<br/>
				<?php
					$c=10;
					if ($c>5) {
						echo "I am Senior Developer";
					}
				?>
				<br/>
				<?php
					$c=10;
					if ($c>15) {
						echo "I am Senior Developer";
					}else{
						echo "I am a Junior Developer";
					}
				?>
				<br/>
				<?php
					$r="php";

					switch ($r) {

						case 'html':
						echo "He is a web designer";
						break;

						case 'java':
						echo "He is a apps developer";
						break;

						case 'php':
						echo "He is a web developer";
						break;
						
						default:
						echo "He is programmer";
						break;
					}
				?>
				<br/>
				<?php
					$z=1;

					while ($z <= 10) {
						echo "The number is: $z <br/>";
						$z++;
					}
				?>
				<br/>
				<?php
					$q=10;

					do {
						echo "This number is: $q <br/>";
						$q++;
					} while ($q <= 10);
				?>
				<br/>
				<?php
					for ($i=0; $i < 20; $i++) { 
						echo "The number is: $i <br/>";
					}
				?>
				<br/>
				<?php
					for ($i=0; $i < 20; ++$i) { 
						echo "The number is: $i <br/>";
					}
				?>
				<br/>
				<?php
					$colors = array("red","yellow","white");

					foreach ($colors as $color) {
						echo "THe color is $color <br/>";
					}
				?>
				<br/>
				<?php
					function school($name,$year){
						echo "I am a student of $name in $year <br/>";
					}
					school("Adamjee Cantt","2004");
					school("Sant Vincent","1999");
					school("Gilbard kinder","1998");
					school("Tajgaon farmgate","2011");
				?>
				<br/>
				<?php
					function me($car="sports car"){
						echo "I will have a $car<br/>";
					}
					me("pious and beautiful wife");
					me();
					me("cute and patient son and girl.");
				?>
				<br/>
				<?php
					function sum($x,$y){
						$z=$x+$y;
						return $z;
					}
					echo "The result is " . sum(5,10);
				?>
				<br/>
				<?php
					$l=array(5,3,9,10,15);
					$go=count($l);

					for ($i=0; $i < $go; $i++) { 
						echo $l[$i];
						echo "<br/>";
					}
				?>
				<br/>
				<?php
					$ages=array("Shohan"=>"13","Ridon"=>"16","Labib"=>"13");
					foreach ($ages as $age => $birth) {
						echo "key = ".$age." value = ".$birth;
						echo "<br/>";
					}
				?>
				<?php
					$teams=array(
							array("Shohan","Ridon","Oli"),
							array("Prince","Shakil","Azmaine"),
							array("Sahadat","Antor","Anik"),
							array("Khalid","Raju","Rimon")
					);

					for ($row=0; $row <4 ; $row++) { 
						echo "<p>Row Number $row</p>";

						//echo "<ul>";
							for ($col=0; $col < 3; $col++) { 
								echo "<li>".$teams[$row][$col]."</li>";
							}
						//echo "</ul>";
					}
				?>
				<br/>
				<?php
					$names=array("Shohan","Ridon","Labib","Hasib","Arif","Baby");
					sort($names);
					$length=count($names);

					for ($i=0; $i <$length ; $i++) { 
						echo $names[$i];
						echo "<br/>";
					}
				?>
				<br/>
				<?php
					$names=array("10","20","5","25","30","15");
					sort($names);
					$length=count($names);

					for ($i=0; $i <$length ; $i++) { 
						echo $names[$i];
						echo "<br/>";
					}
				?>
				<br/>
				<?php
					$names=array("10","20","5","25","30","15");
					rsort($names);
					$length=count($names);

					for ($i=0; $i <$length ; $i++) { 
						echo $names[$i];
						echo "<br/>";
					}
				?>
				<br/>
				<?php
					$history=array("Brazil"=>"5","Germany"=>"4","Italy"=>"3","France"=>"2","Spain"=>"1");
					asort($history);

					foreach ($history as $key => $value) {
						echo $key.$value;
						echo "<br/>";
					}

				?>
				<br/>
				<?php
					$history=array("Brazil"=>"5","Germany"=>"4","Italy"=>"3","France"=>"2","Spain"=>"1");
					ksort($history);

					foreach ($history as $key => $value) {
						echo $key.$value;
						echo "<br/>";
					}

				?>
				<br/>
				<?php
					$i="I love it";
					function test1(){
						global $i;
						$b=5;
						echo $b.$i;
					}
					test1();
						echo "<br/>";
					function test2(){
						global $i;
						$j=10;
						echo $j.$i;
					}
					test2();
				?>
				<br/>
				<h1>Super Global:<br/>
					1.$GLOBALS
					2.$_SERVER
					3.$_REQUEST
					4.$_POST
					5.$_GET
					6.$_FILE
					7.$_ENV
					8.$_COOKIE
					9.$_SESSION
				</h1>
				<br/>
				<?php
					$t=2;
					$o=8;
					function sum1(){
						$GLOBALS['m']=$GLOBALS['t']+$GLOBALS['o'];
					}
					sum1();
					echo $m;	

				?>
				<br/>
				<?php
					echo $_SERVER['PHP_SELF'];
					echo "<br/>";
					echo $_SERVER['SERVER_NAME'];
					echo "<br/>";
					echo $_SERVER['HTTP_USER_AGENT'];
					echo "<br/>";
					echo $_SERVER['SERVER_ADDR'];
				?>
				<br/>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
					username:<input type="text" name="username">
					<input type="submit" value="submit">
				</form>

				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$name = $_REQUEST['username'];
						if (empty($name)) {
							echo "<span style='color:red'>This field is not fill!!!</span>";
						} else {
							echo "<span style='color:green'>Your name is submitted successfully.$name.</span>";
						}
						
					}
				?>
				<br/>
				<a href="txt.php?msg=good&text=bye">sent data</a>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<form action="" method="post">
					<table>
						<p style="color: red">This field is required</p>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name">*<?php echo $errnames;?></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="text" name="mail">*<?php echo $errmail;?></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><input type="text" name="web">*<?php echo $errweb;?></td>
						</tr>
						<tr>
							<td>Comments</td>
							<td><textarea name="comments" rows="5" cols="40" ></textarea></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								<input type="radio" name="gender" value="male">Male
								<input type="radio" name="gender" value="female">Female
								*<?php echo $errgender;?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit"></td>
						</tr>
					</table>
				</form>

				<?php
					echo "Today is ".date("d.m.Y")."<br/>";
					echo "Today is ".date("l")."<br/>";
					echo "Time is ".date("h:i:sa")."<br/>";
					date_default_timezone_set('Asia/Dhaka');
					echo "Bangladesh is now ".date("h:i:sa")."<br/>";
					echo  date_default_timezone_get();
				?>	
				<br/>
				<?php
					$ourfile = fopen("read.txt", "r") or die("File not found!");
					echo fread($ourfile,filesize("read.txt"));
					fclose($ourfile);
				?>  
				<br/>
				<?php
					/*echo readfile("read.txt");*/
				?>
				
				
				<br/>
				<?php
					$ourfile = fopen("read.txt", "r") or die("File not found!");
					echo fgets($ourfile,filesize("read.txt"));
					fclose($ourfile);
				?>
				<br/>
				<?php
					$ourfile = fopen("read.txt", "r") or die("File not found!");
					echo fgetc($ourfile);
					fclose($ourfile);
				?>
				<br/>
				<?php
					$ourfile = fopen("read.txt", "r") or die("File not found!");
					while (!feof($ourfile)) {
						echo fgets($ourfile)."<br/>";
					}
					fclose($ourfile);
				?>
				<br/>
				<?php
					$ourfile = fopen("read.txt", "r") or die("File not found!");
					while (!feof($ourfile)) {
						echo fgetc($ourfile)."<br/>";
					}
					fclose($ourfile);
				?>
				<br/>
				<?php
					$creat = fopen("new.txt", "w") or die("File not found!");
					$one = "File creat and write sikha\n";
					fwrite($creat, $one);

					$two = "File creat and write sikha\n";
					fwrite($creat, $two);

					$three = "File creat and write sikha\n";
					fwrite($creat, $three);

					fclose($creat);
				?>
				<br/>
				<?php
					if (isset($_FILES['image'])) {
						$filename = $_FILES['image']['name'];
						$filetmp  = $_FILES['image']['tmp_name'];
						move_uploaded_file($filetmp,"images/". $filename);
						echo "Images is uploaded successfully";
					}
				?>
				<form method="post" action="" enctype="multipart/form-data">
					<input type="file" name="image">
					<input type="submit" value="submit">
				</form>

				<br/>
				<?php
					$_SESSION ['username']="Shohan";
					$_SESSION ['password']="123456";

					echo $_SESSION ['username']."<br>";
					echo $_SESSION ['password'];

					session_destroy();
				?>
				<br/>
				<table>
					<tr>
						<td>filter name</td>
						<td>filter id</td>
					</tr>
				<?php
					foreach (filter_list() as $id => $filter) {
						echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
					}
				?>
				</table>
				<br/>
				<?php
					$str = "<h2>I am learning Php</h2>";
					$newstr = filter_var($str,'FILTER_SANITZE_STRING');
					echo $newstr ;
				?>
				<br/>
				<?php
					$int = 52.36;
					if (filter_var($int, FILTER_VALIDATE_INT)) {
						echo "It is an integer value";
					} else {
						echo "It is not an integer value";
					}
					
				?>
				<br/>
				<?php
					$ip = "127.0.0.1";
					if (filter_var($ip, FILTER_VALIDATE_IP)) {
						echo "It is an real ip";
					} else {
						echo "It is not an real ip";
					}
				?>
				<br/>
				<?php
					$mail = "oli1412001@gmail.com";
					if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						echo "It is an valid mail";
					} else {
						echo "It is not an valid mail";
					}				
				?>
				<br/>
				<?php
					$url = "http://www.taiyob@gmail.com";
					if (filter_var($url, FILTER_VALIDATE_URL)) {
						echo "It is an valid url";
					} else {
						echo "It is not an valid url";
					}				
				?>
				<br/>
				<?php
					$intnum = 100;
					$min = 1;
					$max = 200;
					if (filter_var($intnum, FILTER_VALIDATE_INT,array("option"=>array("min_range"=>$min,"max_range"=>$max)))) {
							echo "It is valid range";
						} else {
							echo "It is not valid range";
						}
							
				?>
				<br/>
				<?php
					phpinfo();
				?>
				<br/>
				<?php
					error_reporting(E_ERROR | E_WARNING | E_PARSE |E_NOTICE);

					$price=45;
					if ($pric == 45) {
						print("This price is $price");
					} else {
						print("This price is not 45");					
					}				
				?>
				<br/>
				<?php
					function numCheck($num){
						if ($num>1) {
							throw new Exception("Yes, This is not bigger than 1");				
						}
						return true;
					}
					try {
						numCheck(2);
						echo "Yes, This is bigger than 1";
					}
					catch(Exception $e){
						echo $e->getMessage();
					}
				?>
				<br/>
				<?php
					$mystr = "I will be a programmer immediately";
					print_r (explode(" ", $mystr));
				?>
				<br/>
				<?php
					$mystr = "I will be a programmer immediately in shaa allah";
					 $str=explode(" ", $mystr);
					 echo $str[0]."<br/>";
					 echo $str[1]."<br/>";
					 echo $str[2]."<br/>";
					 echo $str[3]."<br/>";
					 echo $str[4]."<br/>";
					 echo $str[5]."<br/>";
					 echo $str[6]."<br/>";
					 echo $str[7]."<br/>";
					 echo $str[8]."<br/>";
				?>
				<br/>
				<?php
					$myst = array("I", "will", "be", "a", "programmer", "immediately", "in", "shaa", "allah");
					echo implode(" ", $myst);
				?>
				<br/>
				<?php
					if (isset($_POST['text'])) {
						$text = $_POST['text'];
						echo $text;
					}
				?>
				<form action="" method="post">
					<input type="text" name="text">
					<input type="submit" value="submit">					
				</form>




			</section>

			<?php include 'footer.php';?>
			