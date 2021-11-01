<?php

namespace App\Http\Controllers\API;


use Flash;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\DatabaseStorageModel;
use App\Http\Traits\CartTrait;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Repositories\CartRepository;
use App\Repositories\UserRepository;
use App\Http\Requests\CreateCartRequest;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\CreateFavoriteRequest;
use Prettus\Repository\Criteria\RequestCriteria;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class CartController
 * @package App\Http\Controllers\API
 */

class CartAPIController extends Controller
{
    /** @var  CartRepository */
    private $cartRepository;
    private $userRepository;

    public function __construct(CartRepository $cartRepo ,UserRepository $userRepository)
    {
        $this->cartRepository = $cartRepo;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the Cart.
     * GET|HEAD /carts
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCart(Request $request, CartTrait $cart)
    {
 
            $user = $this->userRepository->findByField('api_token', $request->input('api_token'))->first();

            if(!$user){
                return $this->sendError('User Not Found');
            }
           
            $cart = $cart->get($user->id);          
            return $this->sendResponse($cart , 'Cart retrieved successfully');
    }

    /**
     * Display a listing of the Cart.
     * GET|HEAD /carts
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function count(Request $request)
    {
        try{
            $this->cartRepository->pushCriteria(new RequestCriteria($request));
            $this->cartRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }
        $count = $this->cartRepository->count();

        return $this->sendResponse($count, 'Count retrieved successfully');
    }

    /**
     * Display the specified Cart.
     * GET|HEAD /carts/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Cart $cart */
        if (!empty($this->cartRepository)) {
            $cart = $this->cartRepository->findWithoutFail($id);
        }

        if (empty($cart)) {
            return $this->sendError('Cart not found');
        }

        return $this->sendResponse($cart->toArray(), 'Cart retrieved successfully');
    }
    /**
     * Store a newly created Cart in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, CartTrait $cart)
    {
        $this->validate($request, [
         
            'cart'            =>  ['required','array'],            
            'api_token'       =>  ['required','string'],            
        ]);
       
        $user = $this->userRepository->findByField('api_token', $request->input('api_token'))->first();
        try {

             $cart->put($user->id,$request->cart);

             return $this->sendResponse('', 'Added To Cart');
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

      
    }

    /**
     * Update the specified Cart in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $cart = $this->cartRepository->findWithoutFail($id);

        if (empty($cart)) {
            return $this->sendError('Cart not found');
        }
        $input = $request->all();

        try {
//            $input['options'] = isset($input['options']) ? $input['options'] : [];
            $cart = $this->cartRepository->update($input, $id);

        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($cart->toArray(), __('lang.saved_successfully',['operator' => __('lang.cart')]));
    }

    /**
     * Remove the specified Favorite from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $cart = $this->cartRepository->findWithoutFail($id);

        if (empty($cart)) {
            return $this->sendError('Cart not found');

        }

        $cart = $this->cartRepository->delete($id);

        return $this->sendResponse($cart, __('lang.deleted_successfully',['operator' => __('lang.cart')]));

    }


    public function deleteCart(Request $request, CartTrait $cart)
    {
 
            $user = $this->userRepository->findByField('api_token', $request->input('api_token'))->first();

            if(!$user){
                return $this->sendError('User Not Found');
            }
           
            $cart = $cart->destory($user->id);          
            return $this->sendResponse('' , 'Cart Removed successfully');
    }

}