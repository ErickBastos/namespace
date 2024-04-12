<?php

namespace App;

use App\Usuario;

class Administrador implements Usuario {
    protected $nome;
    protected $login;
    protected $senha;

    public function autenticar(string $login, string $senha): bool {
        return true;
    }

    public function autorizar(): array {
        return ['gerenciar_usuarios', 'gerenciar_notas', 'gerenciar_cursos'];
    }

}

?>