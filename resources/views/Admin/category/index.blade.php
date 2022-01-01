@extends('Admin.master')

@section('content')
   {{-- Categories table --}}
    <div class="box">
        <div class="box-header">
            Avaliable categories
        </div>
        <div class="box-body overflow-scroll">
            <table>
                <thead>
                    <tr>
                        <th class = "id_section table_heading">ID</th>
                        <th class = "title-section table_heading">Category title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>

                            <td>
                                <span class = "order-status order-ready">
                                    {{$category->title}}
                                </span>
                            </td>
                            <td>
                               
                                <a 
                                    href="{{route('category.edit',$category->slug)}}">Edit<i class='bx bx-edit-alt'></i>
                                </a>
                            </td>
                            <td>
                                <form id="{{$category->id}}" action="{{route('category.destroy',$category->slug)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button>
                                        delete
                                        <i class='bx bx-trash' ></i>
                                    </button>
                                </form>
                               
                            </td>
                        </tr>
                      
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    
@endsection