<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\InstutionCreateRequest;
use App\Http\Requests\InstutionUpdateRequest;
use App\Repositories\InstutionRepository;
use App\Validators\InstutionValidator;


class InstutionsController extends Controller
{

    /**
     * @var InstutionsRepository
     */
    protected $repository;

    /**
     * @var InstutionsValidator
     */
    protected $validator;

    public function __construct(InstutionRepository $repository, InstutionValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $instutions = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $instutions,
            ]);
        }

        return view('instituicao.list_instituicao',  compact('instutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  InstutionsCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function form_cad()
    {
        return view('instituicao.cad_instituicao');
    }

    public function store(Request $request)
    {

        try {


            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $instution = $this->repository->create($request->all());

            $response = [
                'message' => 'Instutions created.',
                'data'    => $instution->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instution = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $instution,
            ]);
        }

        return view('instutions.show', compact('instution'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $instution = $this->repository->find($id);

        return view('instutions.edit', compact('instution'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  InstutionsUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(InstutionsUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $instution = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Instutions updated.',
                'data'    => $instution->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Instutions deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Instutions deleted.');
    }
}
