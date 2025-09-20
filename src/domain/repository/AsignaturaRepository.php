<?php
namespace Domain\Repository;

use Domain\Model\Asignatura;

interface AsignaturaRepository {
    public function guardar(Asignatura $asignatura): void;
    public function buscarPorNombre(string $nombre): ?Asignatura;
    public function listar(): array;
}
