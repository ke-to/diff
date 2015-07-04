 <?php require_once('header.php');
// 変数の初期化
$comment = "";
$comment2 = "";
 
// POSTリクエストがあった時
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$comment = htmlspecialchars($_POST["comment"], ENT_QUOTES);
	$comment2 = htmlspecialchars($_POST["comment2"], ENT_QUOTES);
	
	//echo($comment2);
	
	$diff1 = preg_split("/\r\n|\r|\n/", $comment, -1, PREG_SPLIT_NO_EMPTY);
	$diff2 = preg_split("/\r\n|\r|\n/", $comment2, -1, PREG_SPLIT_NO_EMPTY);
	
	 echo(
	 "<div class='row'>
	 <div class='col s6'>
	 <h2>Not found in the list2</h2>");
	 
	foreach( $diff1 as $num => $value ){
		if( !in_array( $value, $diff2 ) ) {
			echo("<p><span style='color:#f33;'><i class='material-icons dp48 left'>report_problem</i>".$value."</span></p>");
			echo("<pre>");
			//var_dump($diff2);
			echo("</pre>");
	 	}else{
		 	echo("<p>".$value."</p>");
	 	}	 			
	}
	
	echo("</div>
	<div class='col s6'>
	<h2>Not found in the list1</h2>");

	//print_r($wrap1);
	foreach( $diff2 as $num => $value ){
		 if( !in_array( $value, $diff1 ) ) {
			 echo("<p><span style='color:#33f;'><i class='material-icons dp48 left'>report_problem</i>".$value."</span></p>");
			 //var_dump($diff1);
		 }else{
			 echo("<p>".$value."</p>");
		 }	 
	}
	
	echo(
	"</div>
	</div>
	<a href='index.php' class='waves-effect waves-light blue btn'>Go back</a>"
	);
	
} else {
	echo "フォームページからアクセスしてください。";
	exit(1);
};

 require_once('footer.php'); ?>