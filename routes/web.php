<?php
use App\Models\NiveauEtude;
use App\Models\Filiere;
use App\Models\Inscription;
use App\Models\Cursus;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/cours', function () {
    return view('cours');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [MailController::class, 'sendEmail'])->name('contact.send');
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/bacheliers-apprenez-a-gerer-votre-stress', function () {
    return view('bacheliers-apprenez-a-gerer-votre-stress');
});
Route::get('/notre-pedagogie', function () {
    return view('notre-pedagogie');
});
Route::get('/qui-sommes-nous', function () {
    return view('qui-sommes-nous');
});
Route::get('/nos-formations-courtes-durees', function () {
    return view('nos-formations-courtes-durees');
});
Route::get('/pre-inscription', function () {

   
   
    $niveauEtude=NiveauEtude::all();
    $filiere=Filiere::all();
    $cursus = Cursus::with('filieres')->get();

    return view('inscription', compact('niveauEtude','filiere','cursus'));

});
Route::get('/ecole-des-talents', function () {
    return view('ecole-des-talents');
});
Route::get('/cours-certificat-gestion-digitale-de-la-marque', function () {
    return view('cours-certificat-gestion-digitale-de-la-marque');
});
Route::get('/cours-devops-mindset', function () {
    return view('cours-devops-mindset');
});
Route::get('/cours-certificat-marketing-digital-et-performance-commerciale', function () {
    return view('cours-certificat-marketing-digital-et-performance-commerciale');
});
Route::get('/cours-certificat-marketing-strategique', function () {
    return view('cours-certificat-marketing-strategique');
});
Route::get('/cours-devenir-developpeur-android', function () {
    return view('cours-devenir-developpeur-android');
});
Route::get('/cours-devenir-developpeur-mobile-ios', function () {
    return view('cours-devenir-developpeur-mobile-ios');
});
Route::get('/cours-mikrotik-certified-network-associate-mtcna', function () {
    return view('cours-mikrotik-certified-network-associate-mtcna');
});
Route::get('/cours-mikroTik-certified-network-security-engineer-mtcse', function () {
    return view('cours-mikroTik-certified-network-security-engineer-mtcse');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::post('inscription', [InscriptionController::class, 'store']);
Route::get('/dashboard', function () {
    $inscription = Inscription::orderBy('created_at', 'desc')->get(); 
    return view('dashboard',compact('inscription'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('inscription-details/{id}', [InscriptionController::class, 'show']);
});

require __DIR__.'/auth.php';
