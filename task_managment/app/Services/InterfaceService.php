<?php 

namespace App\Services;
use App\Interfaces\InterfaceTest;
class interfaceService implements InterfaceTest{
    public function interfaceFunction(){
        return 'interface_serve';
    }
}