<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
     

      public function index(Request $request, $id)
    {
        $book = Book::with(['galleries','penulis', 'penerbit', 'Category'])->where('slug', $id)->firstOrFail();

        return view('pages.detail', [
            'book' => $book
        ]);
    }
     public function add(Request $request, $id)
    {
         // Dapatkan jumlah item dalam keranjang saat ini untuk pengguna yang sedang login.
    $currentCartCount = Cart::where('users_id', Auth::user()->id)->count();

    // Batasi jumlah maksimal item dalam keranjang menjadi 5.
    if ($currentCartCount >= 5) {
        // Jika jumlah item dalam keranjang sudah mencapai 5, tampilkan pesan kesalahan.
        return redirect()->route('cart')->with('error', 'Anda sudah mencapai jumlah maksimal item dalam keranjang (5 item).');
    }

    // Jika belum mencapai 5, tambahkan item ke dalam keranjang seperti biasa.
    $data = [
        'books_id' => $id,
        'users_id' => Auth::user()->id
    ];

    Cart::create($data);

    return redirect()->route('cart')->with('success', 'Item berhasil ditambahkan ke dalam keranjang.');
    }

}
