<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsurioRequest;
use App\Http\Requests\UpdateUsurioRequest;
use App\Repositories\UsurioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsurioController extends AppBaseController
{
    /** @var  UsurioRepository */
    private $usurioRepository;

    public function __construct(UsurioRepository $usurioRepo)
    {
        $this->usurioRepository = $usurioRepo;
    }

    /**
     * Display a listing of the Usurio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usurios = $this->usurioRepository->all();

        return view('usurios.index')
            ->with('usurios', $usurios);
    }

    /**
     * Show the form for creating a new Usurio.
     *
     * @return Response
     */
    public function create()
    {
        return view('usurios.create');
    }

    /**
     * Store a newly created Usurio in storage.
     *
     * @param CreateUsurioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsurioRequest $request)
    {
        $input = $request->all();

        $usurio = $this->usurioRepository->create($input);

        Flash::success('Usurio saved successfully.');

        return redirect(route('usurios.index'));
    }

    /**
     * Display the specified Usurio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usurio = $this->usurioRepository->find($id);

        if (empty($usurio)) {
            Flash::error('Usurio not found');

            return redirect(route('usurios.index'));
        }

        return view('usurios.show')->with('usurio', $usurio);
    }

    /**
     * Show the form for editing the specified Usurio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usurio = $this->usurioRepository->find($id);

        if (empty($usurio)) {
            Flash::error('Usurio not found');

            return redirect(route('usurios.index'));
        }

        return view('usurios.edit')->with('usurio', $usurio);
    }

    /**
     * Update the specified Usurio in storage.
     *
     * @param int $id
     * @param UpdateUsurioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsurioRequest $request)
    {
        $usurio = $this->usurioRepository->find($id);

        if (empty($usurio)) {
            Flash::error('Usurio not found');

            return redirect(route('usurios.index'));
        }

        $usurio = $this->usurioRepository->update($request->all(), $id);

        Flash::success('Usurio updated successfully.');

        return redirect(route('usurios.index'));
    }

    /**
     * Remove the specified Usurio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usurio = $this->usurioRepository->find($id);

        if (empty($usurio)) {
            Flash::error('Usurio not found');

            return redirect(route('usurios.index'));
        }

        $this->usurioRepository->delete($id);

        Flash::success('Usurio deleted successfully.');

        return redirect(route('usurios.index'));
    }
}
