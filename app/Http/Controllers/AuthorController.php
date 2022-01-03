<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors;
     * 
     * @return Response
     */
    public function index(): Response
    {

    }

    /**
     * Create a new author;
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {

    }

    /**
     * Obtains and show an author;
     *
     * @param integer $id
     * @return Response
     */
    public function show(int $id): Response
    {

    }

    /**
     * Updates an author;
     *
     * @param Request $request
     * @param integer $id
     * @return Response
     */
    public function update(Request $request, int $id): Response
    {

    }

    /**
     * Removes an author;
     *
     * @param integer $id
     * @return Response
     */
    public function destroy(int $id): Response
    {

    }
}
