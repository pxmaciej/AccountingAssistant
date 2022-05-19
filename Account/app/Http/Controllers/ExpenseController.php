<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Get(
 * path="/api/expense/index",
 *
 * description="Get all user expense, admin only",
 * operationId="index",
 * tags={"expense"},
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
 * path="/api/expense/show/{user_id}",
 *
 * description="Show expense",
 * operationId="show",
 * tags={"expense"},
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
 * path="/api/expense/store",
 *
 * description="Store expense",
 * operationId="store",
 * tags={"expense"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="user_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="number", type="string",  example="125/B/45HK"),
 *       @OA\Property(property="date_issue", type="date", format="date",  example="1998-09-24 10:02:20"),
 *       @OA\Property(property="seller", type="string",  example="Mechanik Zbyszek"),
 *       @OA\Property(property="nip", type="integer", format="int64", example="9999999999"),
 *       @OA\Property(property="name", type="string", example="Silnik"),
 *       @OA\Property(property="value", type="double", format="double", example="40000.00"),
 *       @OA\Property(property="category", type="integer", format="int64", example="23"),
 *       @OA\Property(property="brutto", type="double", format="double", example="49200.00"),
 *       @OA\Property(property="category", type="string",  example="Naprawy"),
 *       @OA\Property(property="paid", type="boolean",  example="true"),
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
 * path="/api/expense/update",
 *
 * description="Update expense",
 * operationId="update",
 * tags={"expense"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="expense_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="number", type="string",  example="126/CN/655"),
 *       @OA\Property(property="date_issue", type="date", format="date",  example="2021-04-18 10:02:20"),
 *       @OA\Property(property="seller", type="string",  example="Mechanik Zbysio"),
 *       @OA\Property(property="nip", type="integer", format="int64", example="9999999999"),
 *       @OA\Property(property="name", type="string", example="Silnik v2"),
 *       @OA\Property(property="value", type="double", format="double", example="400.00"),
 *       @OA\Property(property="category", type="integer", format="int64", example="23"),
 *       @OA\Property(property="brutto", type="double", format="double", example="492.00"),
 *       @OA\Property(property="category", type="string",  example="Serwis"),
 *       @OA\Property(property="paid", type="boolean",  example="false"),
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
 * path="/api/expense/destroy/{expense_id}",
 *
 * description="Destroy expense",
 * operationId="destroy",
 * tags={"expense"},
 * security={{ "apiAuth": {} }},
 *  @OA\Parameter(
 *    description="ID expense",
 *    in="path",
 *    name="expense_id",
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
class ExpenseController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Expense::get();
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
            'date' => 'required|date',
            'category' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],401);

        }
        $user = $request->user_id;
        $date = $request->date;
        $name = $request->name;
        $value = $request->value;
        $category = $request->category;

        Expense::create([
            'user_id' => $user,
            'date' => $date,
            'name' => $name,
            'value' => $value,
            'category' => $category,
        ]);
        return response()->json(['200' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $show = Expense::where('user_id', 'like', '%'.$user_id.'%')->orderBy('date', 'desc')->get();
        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $edited = Expense::find($request->expense_id);
        $user = $request->user_id;
        $date = $request->date;
        $name = $request->name;
        $value = $request->value;
        $category = $request->category;


        $edited->user_id = $user;
        $edited->date = $date;
        $edited->name = $name;
        $edited->value = $value;
        $edited->category = $category;
        $edited->save();

        return response()->json(['200' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($expense_id)
    {
        $destroy = Expense::find($expense_id);
        $destroy->delete();
        return response()->json(['200' => 'success']);
    }
}
