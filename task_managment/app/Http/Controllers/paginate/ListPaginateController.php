<?php

namespace App\Http\Controllers\paginate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Traits\TestTrait;
use App\Helpers\Helper2;
use App\Services\InterfaceService;

class ListPaginateController extends Controller
{
    public function __construct(InterfaceService $service){
        //traits
        // $data = TestTrait::test();
        // $data = TestTrait::test2();

        //helper function with composer .json file
        // $data = data();
        //helper2 function  with simple class 
        // $data = Helper2::helperTest();

        ///for service provider with interface and singleton 
        // $data = $service->interfaceFunction();

        
        // dd($data);

    }
    public function index(request $request){
        
        $post = Post::paginate(10);
        if($request->search!=''){
            $post = Post::where('name','like','%'.$request->search.'%')->get();
            $post = $this->paginate($post);
        }
        if($request->ajax()){
            return view('pages.paginate.fetch_paginate',compact('post'))->render();
        }
        return view('pages.paginate.paginate_table',compact('post'));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
