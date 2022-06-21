<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Get(
 * path="/api/payment/index",
 *
 * description="Get all user payment, admin only",
 * operationId="index",
 * tags={"payment"},
 * security={{ "apiAuth": {} }},
 * @OA\Response(
 *    response=200,
 *    description="Success"
 *     ),
 * @OA\Response(
 *    response=401,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Not authorized"),
 *    )
 * )
 * )
 */

/**
 * @OA\Get(
 * path="/api/payment/show/{user_id}",
 *
 * description="Show payment",
 * operationId="show",
 * tags={"payment"},
 * security={{ "apiAuth": {} }},
 *  @OA\Parameter(
 *    description="ID user",
 *    in="path",
 *    name="user_id",
 *    required=true,
 *    example="1",
 *    @OA\Schema(
 *       type="integer",
 *       format="int64"
 *    )
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

/**
 * @OA\Post(
 * path="/api/payment/store",
 *
 * description="Store payment admin only",
 * operationId="store",
 * tags={"payment"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="user_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="name", type="string", example="Płatność zus"),
 *       @OA\Property(property="category", type="string",  example="ZUS"),
 *       @OA\Property(property="value", type="double", format="double", example="400.00"),
 *    )
*
* ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

 /**
 * @OA\Patch(
 * path="/api/payment/update",
 *
 * description="Update payment admin only",
 * operationId="update",
 * tags={"payment"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="payment_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="name", type="string", example="Silnik v2"),
 *       @OA\Property(property="category", type="string",  example="ZUS"),
 *       @OA\Property(property="value", type="double", format="double", example="400.00"),
 *    )
*
* ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

 /**
 * @OA\Delete(
 * path="/api/payment/destroy/{payment_id}",
 *
 * description="Destroy payment admin only",
 * operationId="destroy",
 * tags={"payment"},
 * security={{ "apiAuth": {} }},
 *  @OA\Parameter(
 *    description="ID payment",
 *    in="path",
 *    name="payment_id",
 *    required=true,
 *    example="1",
 *    @OA\Schema(
 *       type="integer",
 *       format="int64"
 *    )
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Payment::get();
        return response()->json([$show]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'category' => 'required|string',
            'value' => 'required',
            'deadline' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],401);

        }
        $user = $request->user_id;
        $name = $request->name;
        $category = $request->category;
        $value = $request->value;
        $deadline = $request->deadline;
        $paid = $request->paid;

        Payment::create([
            'user_id' => $user,
            'name' => $name,
            'category' => $category,
            'value' => $value,
            'deadline' => $deadline,
            'paid' => $paid
        ]);

        return response()->json(['200' => 'success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $show = Payment::where('user_id', 'like', '%'.$user_id.'%')->orderBy('deadline', 'asc')->get();
        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $edited = Payment::find($request->id);
        $edited->name = $request->name;
        $edited->category = $request->category;
        $edited->value = $request->value;
        $edited->deadline = $request->deadline;
        $edited->paid = $request->paid;
        $edited->save();
        return response()->json(['200' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($payment_id)
    {
        $destroy = Payment::find($payment_id);
        $destroy->delete();
        return response()->json(['200' => 'success']);
    }
}
