<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCreateTransportRequest;
use App\Http\Requests\UpdateCreateTransportRequest;
use App\Repositories\CreateTransportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CreateTransportController extends AppBaseController
{
    /** @var  CreateTransportRepository */
    private $createTransportRepository;

    public function __construct(CreateTransportRepository $createTransportRepo)
    {
        $this->createTransportRepository = $createTransportRepo;
    }

    /**
     * Display a listing of the CreateTransport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $createTransports = $this->createTransportRepository->all();

        return view('create_transports.index')
            ->with('createTransports', $createTransports);
    }

    /**
     * Show the form for creating a new CreateTransport.
     *
     * @return Response
     */
    public function create()
    {
        return view('create_transports.create');
    }

    /**
     * Store a newly created CreateTransport in storage.
     *
     * @param CreateCreateTransportRequest $request
     *
     * @return Response
     */
    public function store(CreateCreateTransportRequest $request)
    {
        $input = $request->all();

        $createTransport = $this->createTransportRepository->create($input);

        Flash::success('Create Transport saved successfully.');

        return redirect(route('createTransports.index'));
    }

    /**
     * Display the specified CreateTransport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $createTransport = $this->createTransportRepository->find($id);

        if (empty($createTransport)) {
            Flash::error('Create Transport not found');

            return redirect(route('createTransports.index'));
        }

        return view('create_transports.show')->with('createTransport', $createTransport);
    }

    /**
     * Show the form for editing the specified CreateTransport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $createTransport = $this->createTransportRepository->find($id);

        if (empty($createTransport)) {
            Flash::error('Create Transport not found');

            return redirect(route('createTransports.index'));
        }

        return view('create_transports.edit')->with('createTransport', $createTransport);
    }

    /**
     * Update the specified CreateTransport in storage.
     *
     * @param int $id
     * @param UpdateCreateTransportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreateTransportRequest $request)
    {
        $createTransport = $this->createTransportRepository->find($id);

        if (empty($createTransport)) {
            Flash::error('Create Transport not found');

            return redirect(route('createTransports.index'));
        }

        $createTransport = $this->createTransportRepository->update($request->all(), $id);

        Flash::success('Create Transport updated successfully.');

        return redirect(route('createTransports.index'));
    }

    /**
     * Remove the specified CreateTransport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $createTransport = $this->createTransportRepository->find($id);

        if (empty($createTransport)) {
            Flash::error('Create Transport not found');

            return redirect(route('createTransports.index'));
        }

        $this->createTransportRepository->delete($id);

        Flash::success('Create Transport deleted successfully.');

        return redirect(route('createTransports.index'));
    }
}
