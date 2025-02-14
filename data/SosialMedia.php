<?php
// Final Class
// Final class adalah class yang tidak bisa diturunkan lagi. Jika kita membuat class dengan kata kunci final, maka class tersebut tidak bisa diwariskan ke class lain.
class SosialMedia {
    public string $name;
}

final class Facebook extends SosialMedia {

} 

// Error karena Facebook adalah final class
class FakeFacebook extends Facebook { 

}

// Final Function
// Final function adalah function yang tidak bisa di override lagi. Jika kita membuat function dengan kata kunci final, maka function tersebut tidak bisa di override di class turunannya.

class Instagram {
    final public function login(): void {
        echo "Login Instagram" . PHP_EOL;
    }
}

class FakeInstagram extends Instagram {
    public function login(): void {
        echo "Login Fake Instagram" . PHP_EOL;
    }
}