<?php
use App\Events\MessagePosted;
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

//front end
Route::post('/contact/send','SendEmailController@send');
Route::get('/', 'AccueilController@home');
Route::post('/search','AccueilController@search');
Route::get('/contact', 'AccueilController@contact');
Route::get('accueil/galerie', 'AccueilController@galerie');
Route::get('/ueds/presentation', 'AccueilController@presentation');
Route::get('/actions/evenements', 'AccueilController@evenement');
Route::get('/actions/appels', 'AccueilController@appel');
Route::get('accueil/images/{id}', 'AccueilController@image');
Route::get('/devenir_partenaire/partenaire','PartenaireController@create2');
Route::post('/devenir_partenaire/partenaire/store','PartenaireController@store2');
Route::get('/devenir_partenaire/nos_partenaires','PartenaireController@partenaires');
Route::get('/evenements/actualite', 'AccueilController@actualite');
Route::get('/realisation', 'AccueilController@realisation');


Route::get('/actions/show/{id}','EvenementController@show');
Route::get('/actions/evenements/show/{id}','EvenementController@show2');
Route::get('actions/evenements, $Evenement)','EvenementsController@addPoint');

// Route::get('/actions/show/{id}','EvenementsController@show');

// Route::get('/evenements/index', 'EvenementsController@index')->name('home1');
Route::get('/donateurs/create','DonateurController@create');
Route::post('/donateurs/store','DonateurController@store');

Route::get('/actions/calendar', 'AccueilController@calendar');

Route::get('/home_validate', function () {
    return view('home_validate');
});


//evenements

Route::get('/evenements/index', 'EvenementController@liste')->name('evenements.list');
Route::post('/evenements/store','EvenementController@store');
Route::get('/evenements/create','EvenementController@create');
Route::get('/evenements/edit/{id}','EvenementController@edit');
Route::post('/evenements/update/{id}','EvenementController@update');
Route::get('/evenements/delete/{id}','EvenementController@delete');
//adminmodifierprofile
Route::get('profileadmin', 'AdminController@profile');

Route::post('profileadmin', 'AdminController@update_avatar');
//user
Route::get('profile', 'UserController@profile');
Route::get('editprofil', 'UserController@edit');
Route::get('utilisateurs/participer/{id}', 'UserEvenementController@create');
Route::get('admin/participation/list', 'UserEvenementController@list');
Route::get('admin/participation/destroy/{id}', 'UserEvenementController@destroy');
Route::get('admin/participation/list_valide', 'UserEvenementController@valide');

Route::get('/participation/activer/{id}', 'UserEvenementController@activer');
Route::post('/participation/activer/{id}', 'UserEvenementController@activer');
Route::post('utilisateurs/participer/store/{id}', 'UserEvenementController@store');
Route::get('utilisateurs/don', 'UserController@don');
Route::get('utilisateurs/faire_don', 'DonateurController@create2');
Route::post('utilisateurs/faire_don/store', 'DonateurController@store2');

Route::get('utilisateurs/organiser', 'PostController@index');
Route::post('/like','PostController@like')->name('like');
Route::post('/dislike','PostController@dislike')->name('dislike');
Route::post('/utilisateurs/organiser/{id}/store','CommentController@store');
Route::post('utilisateurs/organiser', 'PostController@store_post');

Route::get('utilisateurs/don', 'UserController@mes_dons');
Route::get('utilisateurs/profil', 'UserController@profil');
Route::get('utilisateurs/mes_evenements', 'UserController@evenements');
Route::post('updateprofil', 'UserController@updateprofil');
Route::post('updateprofil', 'UserController@update_profil');
Route::post('profile', 'UserController@update_avatar');
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');


//facebook
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

//google
Route::get('/redirect_google', 'SocialAuthGoogleController@redirect_google');
Route::get('/callback_google', 'SocialAuthGoogleController@callback_google');

Route::get('/utilisateurs', 'HomeController@index')->name('home');
//admin
Route::get('/admin', 'AdminController@index');

Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/','AdminController@dashboard')->name('admin.admin_admin');

});
///Route::get('user/destroy/{id}','AdminController@destroy');
//Route::post('user/destroy/{id}','AdminController@destroy');
Route::get('profile/{id}', 'UserController@showprofile')->name('profile');
Route::get('/eventactiv', 'EvenementController@index');
Route::get('/eventcalendar', 'EvenementController@calendar');
Route::post('/admin/valider/{id}','AdminController@valider');
Route::get('/admin/valider/{id}','AdminController@valider');

Route::post('/admin/desactiver/{id}','AdminController@desactiver');
Route::get('/admin/desactiver/{id}','AdminController@desactiver');
Route::get('/evenements/listevent','EvenementController@listeevents');

Route::get('/liste','AdminController@liste');
Route::get('/listeall','AdminController@listeall');


//appels
Route::get('admin/appels/create','AppelController@create');
Route::post('admin/appels/store','AppelController@store');
Route::get('admin/appels/list','AppelController@list');
Route::get('/appels/destroy/{id}','AppelController@destroy');
Route::get('admin/appels/edit/{id}','AppelController@edit');
Route::post('admin/appels/update/{id}','AppelController@update');
Route::get('/appels/show','AccueilController@appel');

//partenaire
Route::post('/partenaires/store','PartenaireController@store');
Route::get('/partenaires/create','PartenaireController@create');
Route::get('/partenaires/list','PartenaireController@show');
Route::get('/partenaires/destroy/{id}','PartenaireController@destroy');
Route::get('admin/partenaires/edit/{id}','PartenaireController@edit');
Route::post('admin/partenaires/update/{id}','PartenaireController@update');
Route::post('/partenaires/valider/{id}','PartenaireController@valider');
Route::get('/partenaires/valider/{id}','PartenaireController@valider');
Route::post('/partenaires/desactiver/{id}','PartenaireController@desactiver');
Route::get('/partenaires/desactiver/{id}','PartenaireController@desactiver');
Route::get('/partenaires/listdesac','PartenaireController@listdesac');

Route::get('/users/create','UserController@create');
Route::post('/users/store','UserController@store');
Route::resource('evenements', 'EvenementController');

//images
Route::get('/images/create','ImageController@create');
Route::post('/images/store','ImageController@store');
Route::get('/images/edit/{id}','ImageController@edit');
Route::post('/images/update/{id}','ImageController@update');
Route::get('/images/show','ImageController@show');
Route::get('/images/delete/{id}','ImageController@delete');


Route::resource('users', 'UserController');
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/logout', 'UserController@logout');


//activites
Route::get('/activites/create','ActiviteController@create');
Route::post('/activites/store','ActiviteController@store');
Route::get('/activites/list','ActiviteController@show');
Route::get('/activites/delete/{id}','ActiviteController@delete');
//statistiques
Route::get('/dash','AdminController@dashboard');
Route::get('/admin/statistiques','AdminController@statistique');

//presse
Route::get('admin/presses/create','PresseController@create');
Route::post('admin/presses/store','PresseController@store');
Route::get('/admin/presses/list','PresseController@list')->name('admin.presses.list');
Route::get('admin/presses/edit/{id}','PresseController@edit');
Route::post('admin/presses/update/{id}','PresseController@update');
Route::get('/admin/presses/delete/{id}','PresseController@delete');
Route::get('/presses', 'AccueilController@presse');

//chat

Route::get('/chat', function () {
    return view('utilisateurs/chat');
})->middleware('auth');
Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');
Route::post('/messages', function () {
    // Store the new message
    $user = Auth::user();
    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);
    // Announce that a new message has been posted
    broadcast(new MessagePosted($message, $user))->toOthers();
    return ['status' => 'OK'];
})->middleware('auth');


Auth::routes();

//Route::get('auth/login','Auth\LoginController@header')->name('login');
