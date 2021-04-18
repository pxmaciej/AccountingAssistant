<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
 * @OA\Post(
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
 * @OA\Post(
 * path="/api/expense/show",
 *
 * description="Show expense",
 * operationId="show",
 * tags={"expense"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="user_id", type="integer", format="int64", example="1"),
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
 * path="/api/expense/destroy",
 *
 * description="Destroy expense",
 * operationId="destroy",
 * tags={"expense"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="expense_id", type="integer", format="int64", example="1"),
 *    )
*
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
    public function __construct() {
        $this->middleware('auth');
     }

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
            'seller' => 'required|string',
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
        $seller = $request->seller;
        $nip = $request->nip;
        $name = $request->name;
        $netto = $request->netto;
        $vat = $request->vat;
        $brutto = $request->brutto;
        $category = $request->category;
        $paid= $request->paid;

        Expense::create([
            'user_id' => $user,
            'number' => $number,
            'date_issue' => $date,
            'seller' => $seller,
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
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $request)
    {
        $id = $request->user_id;
        $show =Expense::where('user_id',$id)->first();

        return response()->json([
            $show
        ]);

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
        $number = $request->number;
        $date = $request->date_issue;
        $seller = $request->seller;
        $nip = $request->nip;
        $name = $request->name;
        $netto = $request->netto;
        $vat = $request->vat;
        $brutto = $request->brutto;
        $category = $request->category;
        $paid = $request->paid;

        $edited->number = $number;
        $edited->date_issue = $date;
        $edited->seller= $seller;
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $request)
    {
        $destroy = Expense::find($request->expense_id);
        $destroy->delete();
        return response()->json(['200' => 'success']);
    }
}
