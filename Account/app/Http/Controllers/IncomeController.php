<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
        //
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
            'number' => 'required|string',
            'date_issue' => 'required|date',
            'buyer' => 'required|string',
            'nip' => 'required|integer',
            'name' => 'required|string|min:3',
            'netto' => 'required',
            'vat' => 'required|integer',
            'brutto' => 'required',
            'category' => 'required|string|min:3|max:255',
            'paid' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],401);

        }
        $user = $request->user_id;
        $number = $request->number;
        $date = $request->date_issue;
        $buyer = $request->buyer;
        $nip = $request->nip;
        $name = $request->name;
        $netto = $request->netto;
        $vat = $request->vat;
        $brutto = $request->brutto;
        $category = $request->category;
        $paid= $request->paid;

        Income::create([
            'user_id' => $user,
            'number' => $number,
            'date_issue' => $date,
            'buyer' => $buyer,
            'nip' => $nip,
            'name' => $name,
            'netto' => $netto,
            'vat' => $vat,
            'brutto' => $brutto,
            'category' => $category,
            'paid' => $paid,
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
        $show = Income::where('user_id', 'like', '%'.$user_id.'%')->get();
        return response()->json([$show]);;
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
        $number = $request->number;
        $date = $request->date_issue;
        $buyer = $request->buyer;
        $nip = $request->nip;
        $name = $request->name;
        $netto = $request->netto;
        $vat = $request->vat;
        $brutto = $request->brutto;
        $category = $request->category;
        $paid = $request->paid;

        $edited->number = $number;
        $edited->date_issue = $date;
        $edited->buyer= $buyer;
        $edited->nip = $nip;
        $edited->name = $name;
        $edited->netto = $netto;
        $edited->vat = $vat;
        $edited->brutto = $brutto;
        $edited->category = $category;
        $edited->paid = $paid;
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
        $destroy = Income::find($income_id);
        $destroy->delete();
        return response()->json(['200' => 'success']);
    }
}
