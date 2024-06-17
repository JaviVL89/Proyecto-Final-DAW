<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::redirect('/', '/login');

Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
});

Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');

Route::put('/update/{user}', [UserController::class, 'update'])->name('update');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/picture', [ProfileController::class, 'updatePicture'])->name('profile.updatePicture');

    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::post('/courses/{course}/add', [CourseController::class, 'addToMyCourses'])->name('courses.add');
    Route::get('/my-courses', [CourseController::class, 'myCourses'])->name('courses.my');
    Route::post('/my-courses/{course}/remove', [CourseController::class, 'removeFromMyCourses'])->name('courses.remove');

    Route::get('/courses/{course}/contents', [ContentController::class, 'index'])->name('contents.index');
    Route::get('/courses/{course}/contents/{content}', [ContentController::class, 'show'])->name('contents.show');
    Route::get('/courses/{course}/contents/{content}/download', [ContentController::class, 'download'])->name('contents.download');

    Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');
    Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
    Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
    Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forums.show');
    Route::get('/forums/{forum}/edit', [ForumController::class, 'edit'])->name('forums.edit');
    Route::put('/forums/{forum}', [ForumController::class, 'update'])->name('forums.update');
    Route::delete('/forums/{forum}', [ForumController::class, 'destroy'])->name('forums.destroy');

    Route::get('/forums/{forum}/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/forums/{forum}/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/forums/{forum}/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/forums/{forum}/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/forums/{forum}/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/forums/{forum}/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::post('/forums/{forum}/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/forums/{forum}/posts/{post}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/forums/{forum}/posts/{post}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/forums/{forum}/posts/{post}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

    Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
    Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
    Route::post('/tags', [TagController::class, 'store'])->name('tags.store');

    Route::get('/learning-test', [TestController::class, 'show'])->name('test.show');
    Route::post('/test-submit', [TestController::class, 'submit'])->name('test.submit');
});

Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.updatePicture');
Route::delete('/profile/delete-picture', [ProfileController::class, 'deletePicture'])->name('profile.deletePicture');

Route::get('/test', function () {
    return view('test');
});

Route::view('/privacy-policy', 'privacy-policy')->name('privacy.policy');
Route::view('/terms-conditions', 'terms-conditions')->name('terms.conditions');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

require __DIR__.'/auth.php';
