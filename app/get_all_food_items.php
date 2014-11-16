<?php
 
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all products from products table
$result = mysql_query("SELECT *FROM food_items") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["food"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $food = array();
        $food["f_id"] = $row["f_id"];
        $food["f_name"] = $row["f_name"];
        $food["f_cal"] = $row["f_cal"];
        $food["f_fat"] = $row["f_fat"];
        $food["f_vit_a"] = $row["f_vit_a"];
        $food["f_vit_b"] = $row["f_vit_b"];
        $food["f_vit_c"] = $row["f_vit_c"];
        $food["f_vit_d"] = $row["f_vit_d"];
        $food["f_vit_e"] = $row["f_vit_e"];
        $food["f_vit_k"] = $row["f_vit_k"];
        
 
        // push single product into final response array
        array_push($response["food"], $food);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>