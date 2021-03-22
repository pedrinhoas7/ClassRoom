<?php

namespace App\Http\Controllers\materia\Transformes;

use App\Models\materia\Materia;
use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

class MateriaTransformer extends TransformerAbstract
{
	 /**
     * @param Materias $materias
     * @return Materias
     */
    public function transform(Materia $materias)
    {

        if ($materias instanceof Model) {
            $materias = $materias->toArray();
        }

        return $materias;
    }
}