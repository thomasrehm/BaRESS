
<?php
// Include the autoloader - edit this path!
require_once 'wurfl/src/autoload.php';

// Create a configuration object
$config = new ScientiaMobile\WurflCloud\Config();

// Set your WURFL Cloud API Key
$config->api_key = '112233:abcdefghijklmnopqrstuvwqyzABCDEF';

// Create the WURFL Cloud Client
$client = new ScientiaMobile\WurflCloud\Client($config);

// Detect your device
$client->detectDevice();

$yep = "<span class='true'>yep</span>"; $no = "<span class='false'>nope</span>";
if ($client->getDeviceCapability('svgt_1_1')) {$svgtpng = "svg";} else {$svgtpng = "png";}

?>
<!---->
<!--<p>-->
<!--bist du an einem wireless_device?-->
<?//
//
//// Use the capabilities
//if ($client->getDeviceCapability('is_wireless_device')) {
//    print $yep;} else {print $no;}
//?>
<!--   svgt1.1 support?-->
<!--    deine maximale geschwindigkeit:-->
<?// if ($client->getDeviceCapability('max_data_rate')) {
//    print $client->getDeviceCapability('max_data_rate'); echo '<br>';} else {print $no;}?>
<!--    kannst du ajax_manipulation_dom?-->
<?// if ($client->getDeviceCapability('ajax_manipulate_dom')) {
//    print $yep;} else {print $no;}?>
<!--    dein xhtml_support_level ist:-->
<?// if ($client->getDeviceCapability('xhtml_support_level')) {
//    print $client->getDeviceCapability('xhtml_support_level');} else {print $no;} ?>
<!---->
<!--</p>-->