<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlumnoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            "id"=>$this->id,
            "type"=>"alumnos",
            "attributes"=>
            [
                "nombre"=>$this->nombre,
                "apellido"=>$this->apellido,
                "email"=>$this->email,
                "telefono"=>$this->telefono,
            ]
            ];
    }
}
