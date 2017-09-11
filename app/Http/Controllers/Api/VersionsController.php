<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Versions;
use Illuminate\Http\Request;

class VersionsController extends Controller
{

    protected $model;

    /**
     * Injeção de Dependências de Versions
     *
     * VersionsController constructor.
     * @param Versions $versions
     */
    public function __construct(Versions $versions)
    {
        $this->model = $versions;
    }


    public function index()
    {
        $result = $this->model->all();
        return response()->json($result);
    }

    public function store(Request $request)
    {
        $result = $this->model->create($request->all());
        return response()->json($result);
    }

    public function show($id)
    {
        $result = $this->model->findOrFail($id);
        return response()->json($result);
    }

    public function update(Request $request, $id)
    {
        $result = $this->model->findOrFail($id);
        $result->update($request->all());
        return response()->json($result);
    }

    public function destroy($id)
    {
        $result = $this->model->findOrFail($id);
        $result->delete();
        return response()->json($result);
    }

}
