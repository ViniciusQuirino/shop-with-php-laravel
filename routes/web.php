<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');

Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');

Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');

Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');

Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');
//isso ou view
// Route::get('/empresa', function () {
//     return view('site/empresa');
// });

//isso ou view
// Route::view('/empresa', 'site/empresa');

// Route::any('/any', function () {
//     return "Permite todos acesso http, Todos os Métodos";
// });

// Route::match(['get', 'post'], '/match', function () {
//     return "Permite apenas acessos definidos";
// });

// //Rota dinamica
// Route::get('/produto/{id}/{cat}', function ($id, $cat) {
//     return "O id do produto é:" . $id . "<br>" . "A categoria é:" . $cat;
// });

// //redirect
// Route::get('/sobre', function () {
//     return redirect("empresa");
// });

// //redirect
// Route::redirect('/politica', '/empresa');

// //rota nomeada
// Route::get("/news", function () {
//     return view("news");
// })->name('noticias');

// Route::get("/novidades", function () {
//     return redirect()->route("noticias");
// });

// Route::prefix("admin")->group(function () {
//     Route::get("dashboard", function () {
//         return "dashboard";
//     });

//     Route::get("users", function () {
//         return "users";
//     });

//     Route::get("clientes", function () {
//         return "clientes";
//     });
// });

// Route::get('/bla', function () {
//     return redirect()->route("admin.clientes");
// });

// Route::group([
//     'prefix' => "admin",
//     "as" => "admin."
// ], function () {
//     Route::get("dashboard", function () {
//         return "dashboard";
//     })->name("dashboard");

//     Route::get("users", function () {
//         return "users";
//     })->name("users");

//     Route::get("clientes", function () {
//         return "clientes";
//     })->name("clientes");
// });
