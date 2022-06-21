<?php

namespace App\Http\Controllers;

use App\Models\UploadFile;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
/**
 * @OA\Get(
 * path="/api/file/index",
 *
 * description="Get all user file, admin only",
 * operationId="index",
 * tags={"file"},
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
 * path="/api/file/show/{user_id}",
 *
 * description="Show file",
 * operationId="show",
 * tags={"file"},
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
 * path="/api/file/store",
 *
 * description="Store file",
 * operationId="store",
 * tags={"file"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*       @OA\MediaType(
*           mediaType="multipart/form-data",
*           @OA\Schema(
*               type="object",
*               @OA\Property(property="file", type="array",
*                  @OA\Items( type="string", format="binary",)),
*               @OA\Property(property="user_id", type="integer", format="int64", example="1")
*           ),
*       )
* ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

/**
 * @OA\Delete(
 * path="/api/file/destroy/{file_id}",
 *
 * description="delete file",
 * operationId="delete",
 * tags={"file"},
 * security={{ "apiAuth": {} }},
 * @OA\Parameter(
 *    description="ID file",
 *    in="path",
 *    name="file_id",
 *    required=true,
 *    example="1",
 *    @OA\Schema(
 *       type="integer",
 *       format="int64"
 *    )
 * ),
 *
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *  )
 * )
*/

class UploadFileController extends Controller
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
        $savedfile = UploadFile::get();
        return response()->json([
            $savedfile
            ]);
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
       $rules = ['files[*]' => 'required|mimes:jpeg,png,jpg,gif,svg,zip,pdf'];
       $validator = Validator::make($request->all(), $rules);
       if ($validator->fails()) {
        return response()->json(['error' => $validator->messages()],401);
        }else{
            foreach ($request->file('files') as $file){
                $filename = $file->getClientOriginalName();
                $filename = time().'.'. $filename;
                $fileuser = $request->user;
                $file->storeAs('public', $filename);
                UploadFile::create([
                   'user_id' => $fileuser,
                   'file' => $filename,
               ]);

            }
            $status = true;
            return $status;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $savedfile = UploadFile::where('user_id', 'like', '%'.$user_id.'%')->get();

        return $savedfile;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadFile $uploadFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  /**
        *$editedFile = UploadFile::find($request->file_id);
        *$deletedFilename = $editedFile->file_name;
        *$deletedFilepath = public_path('storage/'.$deletedFilename);
        *unlink($deletedFilepath);

        *$file = $request->file('update_file');
        *$filename = $file->getClientOriginalName();
        *$filename = time().'.'. $filename;
        *$editedFile->file_name = $filename;
        *$editedFile->save();
        *$file->storeAs('public', $filename);


        *return response()->json([
        *    'status' => '200'
        *    ]);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadFile  $uploadFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($file_id)
    {
        $deleteFile = UploadFile::find($file_id);
        $deletedFilename = $deleteFile->file;
        $deletedFilepath = public_path('storage/'.$deletedFilename);
        unlink($deletedFilepath);
        $deleteFile->delete();


        return response()->json([
            'status' => '200'
            ]);
    }
}
