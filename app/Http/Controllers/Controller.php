<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
*@OA\Info(
*    version="1.0.0",
*        title="API de Daniel Ernesto Lopez Sibrian",
*        description="API de ejemplo para la clase de desarrollo de backend y apis",
*        @OA\Contact(
*           email="ia.daniellopez1@ufg.edu.sv",
 *           name="Daniel Ernesto Lopez Sibrian",
 *           url="https://localhost/api/"
  *      ),
 *       @OA\License(
  *          name="Apache 2.0",
   *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
   *     )
*)
*/

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
