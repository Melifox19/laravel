<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class profileController extends AppBaseController
{
  /** @var  UserRepository */
  private $userRepository;

  public function __construct(UserRepository $userRepo)
  {
    $this->userRepository = $userRepo;
  }

  /**
  * Display a listing of the User.
  *
  * @param Request $request
  * @return Response
  */
  public function index(Request $request)
  {
    $this->userRepository->pushCriteria(new RequestCriteria($request));
    $users = $this->userRepository->all();

    return view('profile.index')
    ->with('user', $users);
  }

  /**
  * Show the form for editing the specified User.
  *
  * @param  int $id
  *
  * @return Response
  */
  public function edit($id)
  {
    $user = $this->userRepository->findWithoutFail($id);

    if (empty($user)) {
      Flash::error('Utilisateur introuvable');

      return redirect(route('home'));
    }

    return view('profile.edit')->with('user', $user);
  }

  /**
  * Update user in Database
  *
  * @param  int $id
  * @param  UpdateUserRequest $request
  *
  * @return Response
  */
  public function update($id, UpdateUserRequest $request)
  {
    $user = $this->userRepository->findWithoutFail($id);

    if (empty($user)) {
      Flash::error('Utilisateur introuvable');

      return redirect(route('home'));
    }

    $request['password'] = Hash::make($request['password']);

    $user = $this->userRepository->update($request->all(), $id);

    Flash::success('Votre compte a été mis à jour avec succès');

    return redirect(route('profile.index'));
  }
}
