<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



/**
 * @OA\Post(
 * path="/api/auth/login",
 *
 * description="Login by email, password",
 * operationId="Login",
 * tags={"auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Pass user credentials",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="email", type="string", format="email", example="user@user"),
 *       @OA\Property(property="password", type="string", format="password", example="zaq1@WSX"),
 *    ),
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *     ),
 * @OA\Response(
 *    response=401,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Unauthorized")
 *        ),
 *     ),
 * @OA\Response(
 *    response=422,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Validation errors")
 *        ),
 *     )
 * )
 */

 /**
 * @OA\Post(
 * path="/api/auth/register",
 *
 * description="Register by email, password",
 * operationId="register",
 * tags={"auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="user credentials",
 *    @OA\JsonContent(
 *       required={"name", "email","password", "password_confirmation"},
 *       @OA\Property(property="name", type="string", format="text", example="user"),
 *       @OA\Property(property="role", type="string", format="text", example="admin"),
 *       @OA\Property(property="email", type="string", format="email", example="user@user"),
 *       @OA\Property(property="password", type="string", format="password", example="zaq1@WSX"),
 *       @OA\Property(property="password_confirmation", type="string", format="password", example="zaq1@WSX"),
 *    ),
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success"
 *     ),
 * @OA\Response(
 *    response=400,
 *    description="Bad Request",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The email has already been taken")
 *        ),
 *     )
 * )
 */

 /**
 * @OA\Post(
 * path="/api/auth/refresh",
 *
 * description="Refresh user token",
 * operationId="authRefresh",
 * tags={"auth"},
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
 * @OA\Post(
 * path="/api/auth/profile",
 *
 * description="Get user profile",
 * operationId="userProfile",
 * tags={"auth"},
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
 * path="/api/auth/users",
 *
 * description="Get all user profile, admin only",
 * operationId="alluserProfile",
 * tags={"auth"},
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
 * @OA\Patch(
 * path="/api/auth/update",
 *
 * description="Update user",
 * operationId="update",
 * tags={"auth"},
 * security={{ "apiAuth": {} }},
 * @OA\RequestBody(
*  @OA\JsonContent(
 *       @OA\Property(property="user_id", type="integer", format="int64", example="1"),
 *       @OA\Property(property="name", type="string",  example="Maciej"),
 *       @OA\Property(property="role", type="string",  example="user"),
 *       @OA\Property(property="email", type="string", format="email", example="user@user"),
 *       @OA\Property(property="password", type="string", format="password", example="zaq1@WSX"),
 *       @OA\Property(property="password_confirmation", type="string", format="password", example="zaq1@WSX"),
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
 * path="/api/auth/logout",
 *
 * description="Logout user and invalidate token",
 * operationId="logout",
 * tags={"auth"},
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
 * @OA\Delete(
 * path="/api/auth/destroy/{user_id}",
 *
 * description="Destroy user",
 * operationId="destroy",
 * tags={"auth"},
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

class AuthController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'role' => 'string',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

   /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }

    /**
     * Get the all user profile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function allUserProfile() {
        $users = User::all()->except(Auth::id());
        return response()->json($users);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\auth  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $edited = User::find($request->user_id);

        $validator = Validator::make($request->all(), [
            'name' => 'string|between:2,100',
            'role' => 'string',
            'email' => 'string|email|max:100',
            'password' => 'string|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],401);

        }

            $edited->name = $request->name;
            $edited->role = $request->role;
            $edited->email = $request->email;
            $edited->password = bcrypt($request->password);
            $edited->save();

        return response()->json([
            'message' => 'User successfully updated',
            'user' => $edited
        ], 200);
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 6000,
            'user' => auth()->user()
        ]);
    }

    public function checkToken() {
        return response()->json(['success' => true], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\auth  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $destroy = User::find($user_id);
        $destroy->delete();
        return response()->json(['200' => 'success']);
    }
}
