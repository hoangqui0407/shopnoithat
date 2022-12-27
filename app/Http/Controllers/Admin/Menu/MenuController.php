<?php

namespace App\Http\Controllers\Admin\Menu;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use Exception;

class MenuController extends Controller
{
    protected $menuService;
     
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function create()
    {
        return view('admin.menu.add',[
            'title'=>'Thêm Danh Mục Mới',
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        // dd($request->all());
        $this->menuService->createMenu($request);

        return redirect()->back();
    }
    public function create2()
    {
        return view('Admin.Menu.list',[
        'title' => 'Danh sách danh mục mới',
        'menus' => $this->menuService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->menuService->destroy($request);
        if($result){
            return response()->json([
                'error'=> false,
                'message' =>'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error'=> true,
            
        ]);
    }
}
