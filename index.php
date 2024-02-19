
//////////////////////////////
// Commenting
/////////////////////////////

/*echo "Hello FUNAAB";

$name = 'John';*/

# $age = 5;

// echo $age;

//////////////////////////////
// Variables
/////////////////////////////
// $age = 5;
// $name = "Emmanuel";

# echo "Hello, my name is " . $name . " i am " . $age . " years old";


//////////////////////////////
// Data Types
/////////////////////////////

//==================
// STRING
//==================

// $x = "John";
// echo "Hello\n$x";

// echo '<br/> ';

// $x = "John";
// echo 'Hello $x';

// $x = "Hello World!";
// echo strtoupper($x);

// $x = "Hello World!";
// echo strrev($x);

//==================
// NUMBERS
//==================

// $a = 5;
// $b = 5.34;
// $c = "Yusuff";

// var_dump($a);
// var_dump($b);
// var_dump($c);
// $x = 5985;
// var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));

// Cast float to int
// $x = 23465.768;
// $int_cast = (int)$x;
// echo $int_cast;

// echo "<br>";

// Cast string to int
// $x = "23465.768";
// $int_cast = (int)$x;
// echo $int_cast;

// echo readfile("file.txt");

// $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
// $txt = "Donald Duck\n";
// fwrite($myfile, $txt);
// $txt = "Goofy Goof\n";
// fwrite($myfile, $txt);
// fclose($myfile);
// echo readfile("newfile.txt");

<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>