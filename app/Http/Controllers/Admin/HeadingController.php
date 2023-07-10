<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        try {
            $clauses = "";
            if (!empty($request->category_id)) {
                $clauses .= " and np.category_id = '$request->category_id'";
            }
            if (!empty($request->title)) {
                $clauses .= " and n.title = '$request->title'";
            }
            $heading = DB::select("SELECT
                                np.*,
                                n.title
                            FROM news_publisheds np
                            LEFT JOIN news n ON n.id = np.news_id
                            WHERE 1 = 1 $clauses ORDER BY np.id DESC");

            $res = ["status"=> true, "msg" => $heading];
            return $res;
        } catch (\Throwable $th) {
            $res = ["status"=> false, "msg" => $th->getMessage()];
        }
    }

    public function create()
    {
        return view("admin.heading.create");
    }

    public function destroy(Request $request)
    {
        try {
            NewsPublished::where("id", $request->id)->first()->delete();
            $res = ["status"=> true, "msg" => "Delete News Heading"];
            return $res;
        } catch (\Throwable $th) {
            $res = ["status"=> false, "msg" => $th->getMessage()];
        }
    }
}
