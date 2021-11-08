<?php

namespace App\Http\Controllers;

use App\About;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\DataTables\AboutDataTable;
use App\Repositories\AboutRepository;
use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Prettus\Validator\Exceptions\ValidatorException;

class AboutController extends Controller
{
    public function __construct(AboutRepository $adRepo)
    {
        parent::__construct();
        $this->AboutRepository = $adRepo;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AboutDataTable $AboutDataTable)
    {
        return $AboutDataTable->render('about.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param CreateAboutRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutRequest $request)
    {
        $input = $request->except('files');
     
        try {
            $About = $this->AboutRepository->create($input);
          
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.saved_successfully', ['operator' => __('lang.About')]));

        return redirect(route('about.index'));
    }

    /**
     * Display the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $About = $this->AboutRepository->findWithoutFail($id);

        if (empty($About)) {
            Flash::error('About not found');
            return redirect(route('about.index'));
        }

        return view('about.show')->with('About', $About);
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $About = $this->AboutRepository->findWithoutFail($id);

        if (empty($About)) {
            Flash::error(__('lang.not_found', ['operator' => __('lang.About')]));

            return redirect(route('about.index'));
        }
       
        return view('about.edit')->with('About', $About);
    }

    /**
     * Update the specified About in storage.
     *
     * @param  int              $id
     * @param UpdateAboutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutRequest $request)
    {
        $About = $this->AboutRepository->findWithoutFail($id);

        if (empty($About)) {
            Flash::error('About not found');
            return redirect(route('about.index'));
        }
        $input = $request->except('files');
      try {
            $About = $this->AboutRepository->update($input, $id);

        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.updated_successfully', ['operator' => __('lang.About')]));

        return redirect(route('about.index'));
    }

    /**
     * Remove the specified About from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $About = $this->AboutRepository->findWithoutFail($id);

        if (empty($About)) {
            Flash::error('About not found');

            return redirect(route('about.index'));
        }

        $this->AboutRepository->delete($id);

        Flash::success(__('lang.deleted_successfully', ['operator' => __('lang.About')]));

        return redirect(route('about.index'));
    }

}