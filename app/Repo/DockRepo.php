<?php
namespace App\Repo;

use Illuminate\Support\Facades\Validator;
use App\Models\InteriorDesigner;
use Illuminate\Support\Facades\Auth;

Class DockRepo extends AbstractRepo
{
    /**
     *
     * @param type $modelName
     * @param type $numberOfPagination
     * @param type $url (link view that show this data)
     */
    public function listData($modelName, $numberOfPagination, $url)
    {
        $data = $modelName::latest()->paginate($numberOfPagination);
        //return view($url, ['data' => $data]);
        try {
            return view($url, ['data' => $data]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }

    /**
     * @param $modelName
     * @param $id
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function findOne($modelName, $id, $url)
    {
        $data = $modelName::findOrFail($id);
        try {
            return view($url, ['data' => $data]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }

    }

    /**
     * @param $modelName
     * @param $id
     * @param $fk foreign key
     * @param $numberOfPagination
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */

    public function listDataAsFK($modelName, $id, $fk, $numberOfPagination, $url)
    {
        $data = $modelName::latest()->where($fk, $id)->paginate($numberOfPagination);
        try {
            return view($url, ['data' => $data]);
        } catch (\PDOException $ex) {
            return response()->json(array('message' => 'error', 'result' => $ex->getMessage()), 100);
        }
    }
}