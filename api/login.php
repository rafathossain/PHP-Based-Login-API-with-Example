<?php

require_once "lib/lib.php";

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['EMAIL']) && isset($_POST['PASSWORD'])) {
		$EMAIL = $_POST['EMAIL'];
		$PASS = $_POST['PASSWORD'];
		if (isEmailValid($EMAIL)) {
		    if(isPasswordValid($PASS)){
		        $db = new DbOperation();
    			if ($db->isUserExist($EMAIL)) {
    			    if($db->hasPasswordMatched($EMAIL, $PASS)){
    			        $response['CODE'] = "S1000";
        				$response['MESSAGE'] = S1000;
    			    } else {
    			        $response['CODE'] = "E1007";
        				$response['MESSAGE'] = E1007;
    			    }
    			} else {
    				$response['CODE'] = "E1006";
    				$response['MESSAGE'] = E1006;
    			}
		    } else {
		        $response['CODE'] = "E1005";
    			$response['MESSAGE'] = E1005;
		    }
		} else {
			$response['CODE'] = "E1003";
			$response['MESSAGE'] = E1003;
		}
	} else {
		$response['CODE'] = "E1001";
		$response['MESSAGE'] = E1001;
	}
} else {
	$response['CODE'] = "E1000";
	$response['MESSAGE'] = E1000;
}

echo json_encode($response);

?>
