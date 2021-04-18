<?php

namespace App\Http\Controllers;

use App\Models\Expense;
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
 *       @OA\Property(property="netto", type="double", format="double", example="400000"),
 *       @OA\Property(property="vat", type="integer", format="int64", example="23"),
 *       @OA\Property(property="brutto", type="double", format="double", example="492000"),
 *       @OA\Property(property="category", type="string",  example="Naprawy"),
 *       @OA\Property(property="paid", type="boolean",  example="true")
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
            'user' => 'required|integer',
            'number' => 'required|string|unique|min:1',
            'date' => 'required|date',
            'seller' => 'required|string',
            'nip' => 'required|integer|min:10|max:10',
            'name' => 'required|string|min:3',
            'netto' => 'required|double',
            'vat' => 'required|integer',
            'burtto' => 'required|double',
            'category' => 'required|string|min:3|max:255',
            'paid' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return response()->withErrors($validator);

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
            'user' => $user,
            'number' => $number,
            'date' => $date,
            'seller' => $seller,
            'nip' => $nip,
            'name' => $name,
            'netto' => $netto,
            'vat' => $vat,
            'burtto' => $brutto,
            'category' => $category,
            'paid' => $paid,
        ]);
        return response()->json(['200' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
