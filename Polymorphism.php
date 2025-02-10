<?

require_once 'data/Programmer.php';

$company             = new Company;
$company->programmer = new Programmer('Alvin');
var_dump($company);

$company->programmer = new BackendProgrammer('Joko');
var_dump($company);

$company->programmer = new FrontendProgrammer('Ridwan');
var_dump($company);

sayHelloProgrammer(new Programmer('Doni'));
sayHelloProgrammer(new BackendProgrammer('Kevin'));
sayHelloProgrammer(new FrontendProgrammer('Alvin'));
