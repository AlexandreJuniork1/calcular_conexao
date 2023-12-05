<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function showForm()
    {
        // Obtém a lista de conexões disponíveis
        $databaseConnections = config('database.connections');

        return view('database-selections', compact('databaseConnections'));
    }

    public function connectDatabase(Request $request)
    {
        $selectedDatabase = $request->input('database');

        $startTime = microtime(true);

        try {
            $result = DB::connection($selectedDatabase)->select('select 1');
        } catch (\Exception $e) {
            $result = null;
        }

        $elapsedTime = microtime(true) - $startTime;

        return view('database-results', compact('selectedDatabase', 'result', 'elapsedTime'));
    }
}
