<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Formulario2;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/formulariodev', function (Request $request) {
    $stringPrincipal = '';
    $tecnologia1 = $request->tecnologia1;
    $tecnologia2 = $request->tecnologia2;
    $tecnologia3 = $request->tecnologia3;
    $tecnologia4 = $request->tecnologia4;
    $tecnologia5 = $request->tecnologia5;
    $tecnologia6 = $request->tecnologia6;
    $tecnologia7 = $request->tecnologia7;
    
    if ($tecnologia1 !=null){
            $stringPrincipal = $tecnologia1 . ",";
    }
    
    if ($tecnologia2 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia2 . ",";
    }
    
    if ($tecnologia3 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia3 . ",";
    }

    if ($tecnologia4 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia4 . ",";
    }

    if ($tecnologia5 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia5 . ",";
    }

    if ($tecnologia6 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia6 . ",";
    }

    if ($tecnologia7 !=null){
            $stringPrincipal = $stringPrincipal . $tecnologia7 . ",";
    }
    
    Formulario2::create([
        'nome' => $request->nome,
        'sobrenome' => $request->sobrenome,
        'email' => $request->email,
        'devweb' => $request->devweb,
        'senioridade' => $request->senioridade,
        'stringPrincipal' => $stringPrincipal,
        'experiencia' => $request->experiencia
    ]);

    echo "Dados enviados!";
});