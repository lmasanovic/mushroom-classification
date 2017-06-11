<?php
$data = array(
	"Inputs" => array(
		"input1" => array(
			"ColumnNames" => $properties,
			"Values" => array($values)
		),
	),
	'GlobalParameters'=> null
);

$requestData = json_encode($data);
define("WEB_SERVICE_URL", "https://ussouthcentral.services.azureml.net/workspaces/44783bd0cbec4e78bb1e0863173fc270/services/9bd06ae8ac2f403a81fd9218f0f733f2/execute?api-version=2.0&details=true");
define("API_KEY", "UYrar2CFTv4lsG6qmx5w8nLxqk8XhX//EbtEpbbrovcXvNzAEfjfA6nlgfcvW+/j7ChU3HwLytGbr2+nbHzo1w==");
$requestHeader = array(
	"Authorization:Bearer " . API_KEY,
	"Content-Length:" . strlen($requestData),
	"Content-Type:application/json",
	"Accept: application/json"
);

$curl = curl_init(WEB_SERVICE_URL);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($curl, CURLOPT_HTTPHEADER, $requestHeader);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
$result = json_decode($result);

echo "<pre>";
print_r($result);
echo "</pre>";


?>
