<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('book')->get();
        //$users = User::with('book')->find(2);
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $book = new Book([
        //     'name' => 'Book book',
        //     'description' => 'Book book description',
        // ]);

        // $user = User::find(1);
        // $user->book()->save($book);

        $user = User::find(3);
        $user->book()->create([
            'name' => 'Book book 2',
            'description' => 'Book book 2 description',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
