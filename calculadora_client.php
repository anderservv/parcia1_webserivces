
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $operacion = $_POST['operacion'];

    $options = array(
        'location' => "https://servicios.documentosige.com.co/service.php?wsdl",
        'uri' => "https://servicios.documentosige.com.co/service.php?wsdl"
    );
    $client = new SoapClient(NULL,  $options);

    $resultado = $client->hello($name);

    echo $resultado;
}
?>
