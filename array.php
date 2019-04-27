<?php include 'header.php';?>

<section class="content">
	<?php
		echo "<h3>Array</h3>";
	?>
	<?php
		$car = array("volvo","toyota","nisan");
		$now = count($car);
		print_r($now);
	?>
	<br/>	
	<?php
		$car = array("volvo","toyota","nisan");
		$now = count($car);
		for ($i=0; $i <$now ; $i++) { 
			echo $car[$i]."<br/>";
		}
	?>
	<br/>	
	<?php
		$age = array(
			"Shohan"=>"14",
			"Taiyob"=>"26",	
			"Redon"=>"16",	
			"Labib"=>"14"	
		);
		foreach ($age as $key => $value) {
			echo $key.$value;
			echo "<br/>";
		}
	?>
	<br/>
	<?php
		$st=array(
			array("Volbo","100","46"),
			array("Toyota","45","55"),
			array("Nisan","458","55"),
			array("Lamborgini","5545","855")
		);
		echo $st[0][0]."<br/>";
		echo $st[0][1]."<br/>";
		echo $st[0][2]."<br/>";
		echo $st[1][0]."<br/>";
		echo $st[1][1]."<br/>";
		echo $st[1][2]."<br/>";
		echo $st[2][0]."<br/>";
		echo $st[2][1]."<br/>";
		echo $st[2][2]."<br/>";
		echo $st[3][0]."<br/>";
		echo $st[3][1]."<br/>";
		echo $st[3][2]."<br/>";
	?>
	<br/>
	<?php
		$name=array(
			"Jamal"=>"55",
			"Kamal"=>"60",
			"Tomal"=>"65",
			"Golmal"=>"52"
		);
		print("<pre>");
		print_r(array_change_key_case($name,CASE_UPPER));
		print("</pre>");
	?>
	<br/>
	<?php
		$info=array(
			array(
				"id"=>"101",
				"first_name"=>"Junaed",
				"last_name"=>"Shohan"
			),
			array(
				"id"=>"102",
				"first_name"=>"Md",
				"last_name"=>"Taiyob"
			),
			array(
				"id"=>"103",
				"first_name"=>"Rejbi",
				"last_name"=>"Redon"
			),
			array(
				"id"=>"104",
				"first_name"=>"Sabit Anjum",
				"last_name"=>"Labib"
			)
		);
		$lastname=array_column($info, 'last_name');
		print("<pre>");
			print_r($lastname);
		print("</pre>");

		$firstname=array_column($info, 'first_name');
		print("<pre>");
			print_r($firstname);
		print("</pre>");

		$lastname=array_column($info, 'last_name', 'id');
		print("<pre>");
			print_r($lastname);
		print("</pre>");
	?>
	<br/>
	<?php
		$name=array("Taiyob","Pranta","Prince");
		$department=array("CSE","CST","CSS");

		$combine= array_combine($name, $department);
		print("<pre>");
			print_r($combine);
		print("</pre>");
	?>	
	<br/>
	<?php
		$array_one =array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
		);
		$array_two =array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue"
		);

		$differ = array_diff($array_one, $array_two);

		print("<pre>");
			print_r($differ);
		print("</pre>");
	?>	
	<br/>
	<?php
		$array_one =array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
		);
		$array_two =array(
			"t"=>"red",
			"l"=>"green",
			"z"=>"blue"
		);
		$array_three =array(
			"h"=>"red",
			"d"=>"green",
			"c"=>"blue"
		);
		$differ = array_diff_assoc($array_one, $array_two,$array_three);

		print("<pre>");
			print_r($differ);
		print("</pre>");
	?>	
	<br/>
	<?php
		$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
		);
		$array_two = array(
				"e"=>"red",
				"f"=>"green",
				"g"=>"blue"
		);
		$result = array_intersect($array_one, $array_two);
		print("<pre>");
			print_r($result);
		print("</pre>");
	?>
	<br/>
	<?php
		$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
		);
		$array_two = array(
				"e"=>"red",
				"f"=>"black",
				"g"=>"purple"
		);
		$array_three = array(
				"a"=>"red",
				"b"=>"black",
				"h"=>"yellow"			
		);
		$result = array_intersect($array_one, $array_two,$array_three);
		print("<pre>");
			print_r($result);
		print("</pre>");
	?>
	<br/>
	<?php
		$array_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
		);
		$array_two = array(
				"e"=>"red",
				"f"=>"black",
				"g"=>"purple"
		);
		$result = array_intersect_assoc($array_one, $array_two);
		print("<pre>");
			print_r($result);
		print("</pre>");
	?>



</section>

<?php include 'footer.php';?>
