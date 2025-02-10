<?

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

Helper\helpMe();
echo Helper\APPLICATION;

// Global namespace
// The global namespace is the root namespace in PHP. This namespace is not explicitly defined, so all classes, functions, and constants are part of the global namespace by default.

// namespace {
//     require_once 'data/Conflict.php';
//     require_once 'data/Helper.php';

//     $conflict1 = new Data\One\Conflict();
//     $conflict2 = new Data\Two\Conflict();

//     Helper\helpMe();
//     echo Helper\APPLICATION;
// }
