<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    public function __construct ()
    {
        parent::__construct('new');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = $this->db->select('*','new.id as newid')
        ->join('category','new.theloai','category.id')
        ->get();

        return $this->view_admin('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return $this->view_admin('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();

        $imageName = time().'-'.$request->hinhanhbaiviet->getClientOriginalName();  
        $request->hinhanhbaiviet->move(public_path('images/tintuc'), $imageName);
        $data['hinhanhbaiviet'] = $imageName;

        $this->db->insert($data);

        return $this->route_admin('index', [] ,['success' => 'Thêm thành viên thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = $this->db->where('id', $id);
        if ($new->exists()) {
            $data['new'] = $new->first();
            return $this->view_admin('edit', $data);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //$2y$10$mPwGYteZ41FlU0yZ11hB5OFu4dGkrLzMHKYYUCHDb.1DuZljHMdmy
     //$2y$10$mPwGYteZ41FlU0yZ11hB5OFu4dGkrLzMHKYYUCHDb.1DuZljHMdmy
     //$2y$10$D2z4B4ICsn6JTO67IflDw.BEgj1Yqp9d1P1mhWONY65AdH/0zBx6C
    public function update(NewsRequest $request, $id)
    {
        $user_current = $this->db->where('id', $id)->first();

        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();

        if (empty($request->hinhanhbaiviet)) {
            $data['hinhanhbaiviet'] = $user_current->hinhanhbaiviet; 
        } else {
            $image_path = public_path('images/tintuc') . "/" . $user_current->hinhanhbaiviet;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $imageName = time().'-'.$request->hinhanhbaiviet->getClientOriginalName();  
            $request->hinhanhbaiviet->move(public_path('images/tintuc'), $imageName);
            $data['hinhanhbaiviet'] = $imageName;
        }

        $this->db->where('id', $id)->update($data);

        return $this->route_admin('index', [] ,['success' => 'Sửa thành viên thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = $this->db->where('id', $id);

        if ($new->exists()) {
            $user_current = $new->first();

            if (!empty($user_current->avatar)) {
                $image_path = public_path('images') . "/" . $user_current->avatar;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new->delete();
            return $this->route_admin('index', [] ,['success' => 'Xóa thành viên thành công']);
        } else {
            abort(404);
        }
    }
}
