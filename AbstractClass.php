<?

require_once 'data/Location.php';

use Data\{Location, City, Country, Province};

// Error // Cannot instantiate abstract class Data\Location
// $location = new Location; 

$city = new City;
$city->name = 'Jakarta';
var_dump($city);

$country = new Country;
$country->name = 'Indonesia';
var_dump($country);

$province = new Province;
$province->name = 'Jawa Barat';
var_dump($province);