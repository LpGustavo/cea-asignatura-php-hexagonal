<?php
namespace Domain\Model;

class Usuario {
    private string $id;
    private string $nombre;
    private string $email;
    private string $password;

    public function __construct(string $id, string $nombre, string $email, string $password) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \DomainException("Email inválido");
        }
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function validarPassword(string $input): bool {
        return password_verify($input, $this->password);
    }
}
