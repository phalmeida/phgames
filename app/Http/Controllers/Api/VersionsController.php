<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Versions;
use Illuminate\Http\Request;

class VersionsController extends Controller
{

    protected $model;

    /**
     * Contrutor da classe
     *
     * VersionsController constructor.
     * @param Versions $versions
     */
    public function __construct(Versions $versions)
    {
        $this->model = $versions;
    }

    /**
     * Lista todas as versões
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $result = $this->model->all();
        return response()->json($result);
    }

    /**
     * Grava os dados da versão.
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
     * Detalhe da versão
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
     * Atualiza os dados da versão
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
     * Exclui versão
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
