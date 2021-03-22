<?php
namespace App\Http\Controllers\Transformes;

use App\Models\materia\Materia;
use Illuminate\Database\Eloquent\Model;
use League\Fractal;

class BookTransformer extends TransformerAbstract
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