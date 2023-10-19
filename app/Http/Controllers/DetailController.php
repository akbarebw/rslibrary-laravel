<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionDetail;
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
    $user = Auth::user();

    $currentTransaction = Transaction::where('users_id', $user->id)
        ->where('status', 'dipinjam')
        ->first();

    $bookInCart = Cart::where('users_id', $user->id)
            ->where('books_id', $id)
            ->first();

        if ($bookInCart) {
            return redirect()->route('cart')->with('error', 'Buku ini sudah ada dalam keranjang Anda.');
        }

    if ($currentTransaction) {
        $bookAlreadyBorrowed = TransactionDetail::where('transactions_id', $currentTransaction->id)
            ->where('books_id', $id)
            ->first();

        if ($bookAlreadyBorrowed) {
            return redirect()->route('cart')->with('error', 'Anda telah meminjam buku ini sebelumnya. Cek dashboard anda untuk detailnya.');
        }
    }

    $data = [
        'books_id' => $id,
        'users_id' => $user->id
    ];

    Cart::create($data);

    return redirect()->route('cart')->with('success', 'Item berhasil ditambahkan ke dalam keranjang.');
    }

}
