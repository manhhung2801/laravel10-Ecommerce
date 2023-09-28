<?php 

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

// Vendor rooute
Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');