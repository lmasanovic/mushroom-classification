<?php



define("WEB_SERVICE_URL", "https://studio.azureml.net/apihelp/workspaces/44783bd0cbec4e78bb1e0863173fc270/webservices/1870b917fe1647d3bf98671b006a698c/endpoints/9bd06ae8ac2f403a81fd9218f0f733f2/score");
define("API_KEY", "UYrar2CFTv4lsG6qmx5w8nLxqk8XhX//EbtEpbbrovcXvNzAEfjfA6nlgfcvW+/j7ChU3HwLytGbr2+nbHzo1w==");
$requestHeader = array(
	"Authorization:Bearer " . API_KEY,
	"Content-Length:" . strlen($requestData),
	"Content-Type:application/json",
	"Accept: application/json"
);



?>
