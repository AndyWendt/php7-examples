
<h2><?= 'Grouped Imports'; ?></h2>

<?php

require_once('vendor/autoload.php');

use GroupedImports\{One, Two, Three};

class GroupedImportsDemo {



    public function fire()
    {
        (new One)->run();
        (new Two)->run();
        (new Three)->run();
    }

}

(new GroupedImportsDemo())->fire();
