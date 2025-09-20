<?php
namespace Application\UseCases;

use Domain\Model\Asignatura;
use Domain\Repository\AsignaturaRepository;

class CrearAsignaturaService {
    private AsignaturaRepository $repo;

    public function __construct(AsignaturaRepository $repo) {
        $this->repo = $repo;
    }

    public function ejecutar(Asignatura $asignatura): void {
        $this->repo->guardar($asignatura);
    }
}
