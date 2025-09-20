<?php
namespace Domain\Model;

class Asignatura {
    private string $nombre;
    private string $nombreCompleto;
    private string $descripcion;
    private string $areaConocimiento;
    private string $carrera;
    private int $numeroCreditos;
    private string $contenidoTematico;
    private int $semestre;
    private string $profesor;

    public function __construct(
        string $nombre,
        string $nombreCompleto,
        string $descripcion,
        string $areaConocimiento,
        string $carrera,
        int $numeroCreditos,
        string $contenidoTematico,
        int $semestre,
        string $profesor
    ) {
        if ($numeroCreditos <= 0) {
            throw new \DomainException("El número de créditos debe ser mayor a 0");
        }
        if ($semestre < 1 || $semestre > 12) {
            throw new \DomainException("El semestre debe estar entre 1 y 12");
        }
        $this->nombre = $nombre;
        $this->nombreCompleto = $nombreCompleto;
        $this->descripcion = $descripcion;
        $this->areaConocimiento = $areaConocimiento;
        $this->carrera = $carrera;
        $this->numeroCreditos = $numeroCreditos;
        $this->contenidoTematico = $contenidoTematico;
        $this->semestre = $semestre;
        $this->profesor = $profesor;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}
