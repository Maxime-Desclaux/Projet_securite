<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Resources\AnimalResource;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of animals as JSON for authenticated users.
     */
    public function index(Request $request)
    {
        $query = Animal::query();

        $filter = $request->query('species') ?? $request->query('type');
        if (!empty($filter) && $filter !== 'all') {
            $query->whereRaw('LOWER(type) = ?', [strtolower($filter)]);
        }

        $animals = $query->get();

        return AnimalResource::collection($animals);
    }
}
