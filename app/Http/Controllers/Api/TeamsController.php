<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    protected $model;

    /**
     * Contrutor da classe
     *
     * TeamsController constructor.
     * @param Teams $teams
     */
    public function __construct(Teams $teams)
    {
        $this->model = $teams;
    }

    /**
     * Lista todas os times
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $result = $this->model->all();
        return response()->json($result);
    }

    /**
     * Grava os dados do time.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $result = $this->model->create($request->all());
        return response()->json($result);
    }

    /**
     * Detalhe do time
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $result = $this->model->findOrFail($id);
        return response()->json($result);
    }

    /**
     * Atualiza os dados do time
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $result = $this->model->findOrFail($id);
        $result->update($request->all());
        return response()->json($result);
    }

    /**
     * Exclui time
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $result = $this->model->findOrFail($id);
        $result->delete();
        return response()->json($result);
    }

}
