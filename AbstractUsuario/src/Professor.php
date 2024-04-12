<?php

namespace App;

use App\Usuario;

class Professor extends Usuario {
    public function autenticar(string $login, string $senha): bool
    {
        return true;
    }

    public function autorizar(): array
    {
        return ['acessar_materiais', 'gerenciar_notas'];
    }
}

?>