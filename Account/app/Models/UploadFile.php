<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     title="UploaFile",
 *     description="Upload File",
 *     @OA\Xml(
 *         name="UploadFile"
 *     )
 * )
 */
class UploadFile extends Model
{
    use HasFactory;
    protected $guarded = [];
}
