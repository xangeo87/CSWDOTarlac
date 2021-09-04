<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\Client\ClientDashboardComponent;
use App\Http\Livewire\ClientFilesComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FamilyMemberOfClientComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Sworker\SworkerAddClientComponent;
use App\Http\Livewire\Sworker\SworkerAddFamilyMemberComponent;
use App\Http\Livewire\Sworker\SworkerClientFileComponent;
use App\Http\Livewire\Sworker\SworkerDashboardComponent;
use App\Http\Livewire\Sworker\SworkerEditClientFileComponent;
use App\Http\Livewire\Sworker\SworkerFamilyMembersComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Route
Route::get('/', HomeComponent::class)->name('home');

//View Client List Route
Route::get('/client-files', ClientFilesComponent::class)->name('home.client_files');

//About Route
Route::get('/about', AboutComponent::class)->name('about');

//Contact Route
Route::get('/contact', ContactComponent::class)->name('contact');

//About Blog
Route::get('/blog', BlogComponent::class)->name('blog');


//Family Members by Client Route
Route::get('/{client_id}/family-members', FamilyMemberOfClientComponent::class)->name('home.family_members_of_client');

//For Client
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/client/dashboard', ClientDashboardComponent::class)->name('client.dashboard');
});

//For Social Worker
Route::middleware(['auth:sanctum', 'verified', 'authsworker'])->group(function(){
    Route::get('/sworker/dashboard', SworkerDashboardComponent::class)->name('sworker.dashboard');
    Route::get('/sworker/client-files', SworkerClientFileComponent::class)->name('sworker.client_files');
    Route::get('/sworker/client-files/add', SworkerAddClientComponent::class)->name('sworker.add_client_file');
    Route::get('/sworker/client-files/edit/{client_id}', SworkerEditClientFileComponent::class)->name('sworker.edit_client_file');
    Route::get('/sworker/all-family-members', SworkerFamilyMembersComponent::class)->name('sworker.all_family_members');
    Route::get('/sworker/family-member/add/{client_id}', SworkerAddFamilyMemberComponent::class)->name('sworker.add_family_member');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
