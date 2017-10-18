<?php
require_once('logger.php');

logger('testing!');

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
echo 'working';



//  ****
// require_once('credentials.php');
// echo 'backend says I am working\n';
// error_log("user is $admin", 3, 'notices.log');
//
// for ($counter = 0; $counter <= 10; $counter++) {
//     $message = "The number is: $counter\n";
//     echo $message;
//     error_log($message, 3, 'notices.log');
// }
// writeMsg(); // call the function
// function writeMsg() {
//     echo "Hello world!\n";
//     error_log("Hello world\n", 3, 'notices.log');
//
// }
// $cars = array("Volvo", "BMW", "Toyota");
// echo json_encode($cars);
// error_log($cars, 3, 'notices.log');
