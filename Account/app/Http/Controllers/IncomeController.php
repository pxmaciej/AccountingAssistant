<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 * path="/api/income/index",
 *
 * description="Get all user income, admin only",
 * operationId="index",
 * tags={"income"},
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
 * path="/api/income/show/{user_id}",
 *
 * description="Show income",
 * operationId="show",
 * tags={"income"},
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
 * path="/api/income/store",
 *
 * description="Store income",
 * operationId="store",
 * tags={"income"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="user_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="number", type="string",  example="125/B/45HK"),
 *       @OA\Property(property="date_issue", type="date", format="date",  example="1998-09-24 10:02:20"),
 *       @OA\Property(property="buyer", type="string",  example="Mechanik Zbyszek"),
 *       @OA\Property(property="nip", type="integer", format="int64", example="9999999999"),
 *       @OA\Property(property="name", type="string", example="Silnik"),
 *       @OA\Property(property="netto", type="double", format="double", example="40000.00"),
 *       @OA\Property(property="vat", type="integer", format="int64", example="23"),
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
 * path="/api/income/update",
 *
 * description="Update income",
 * operationId="update",
 * tags={"income"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="income_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="number", type="string",  example="126/CN/655"),
 *       @OA\Property(property="date_issue", type="date", format="date",  example="2021-04-18 10:02:20"),
 *       @OA\Property(property="buyer", type="string",  example="Mechanik Zbysio"),
 *       @OA\Property(property="nip", type="integer", format="int64", example="9999999999"),
 *       @OA\Property(property="name", type="string", example="Silnik v2"),
 *       @OA\Property(property="netto", type="double", format="double", example="400.00"),
 *       @OA\Property(property="vat", type="integer", format="int64", example="23"),
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
 * path="/api/income/destroy/{income_id}",
 *
 * description="Destroy income",
 * operationId="destroy",
 * tags={"income"},
 * security={{ "apiAuth": {} }},
 *  @OA\Parameter(
 *    description="ID income",
 *    in="path",
 *    name="income_id",
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

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Income::get();
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
            'name' => 'required|string|min:3',
            'date' => 'required|date'


        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],401);

        }
        $user = $request->user_id;
        $name = $request->name;
        $value = $request->value;
        $date = $request->date;


        Income::create([
            'user_id' => $user,
            'name' => $name,
            'value' => $value,
            'date' => $date,

        ]);

        return response()->json(['200' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $show = Income::where('user_id', 'like', '%'.$user_id.'%')->orderBy('date', 'desc')->get();
        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $edited = Income::find($request->income_id);

        $user = $request->user_id;
        $name = $request->name;
        $value = $request->value;
        $date = $request->date;

        $edited->user_id = $user;
        $edited->name = $name;
        $edited->value = $value;
        $edited->date = $date;
        $edited->save();

        return response()->json(['200' => 'success']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($income_id)
    {
        Income::where('id' , $income_id)->delete();
        return response()->json(['200' => 'success']);
    }
}
