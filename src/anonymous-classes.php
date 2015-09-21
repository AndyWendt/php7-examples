<h2><?= 'Anonymous Classes'; ?></h2>

<?php

interface Dog {
    public function bark();
}


class NoiseMaker {

    public function start(Dog $dog)
    {
        echo $dog->bark();
    }
}

(new NoiseMaker())->start(
    new class implements Dog {
         public function bark()
         {
            return 'woof';
         }
    }
);
