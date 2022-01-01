@extends('Admin.master')

@section('content')
<section class="content_section">
    <div class="box_section">
        <div class="form_header">
            <h4>Create a new category</h4>
        </div>
        <div class="create">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Title" >
                <input type="file" name="image">
                <button type="submit" class="form_btn">
                    Submit
                </button>
                
            </form>
        </div>
    </div>
    <div class="form_section">
        <div class="form_header">
            <h4>Create a new Product</h4>
        </div>
        <div class="create">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Title" >
                <input type="text" name="" placeholder="" >
                <textarea name="description" id="" cols="30" rows="10"></textarea>
                
                <input type="file" name="image">
                <button type="submit" class="form_btn">
                    Submit
                </button>
                
            </form>
        </div>
    </div>
</section>

<!--<div class="wrapper">
    <div class="title-text">
        <div class="title">
            Create your category
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="{{route('category.create')}}" method="post" enctype="multipart/form-data">
                    <div class="field">
                        <input type="text" name="title" placeholder="title" required>
                    </div>
                   
                       
                    
                    <div class="field btn">
                        <div class="btn-layer">
                            <input type="submit" value="Create Category">
                        </div>
                    </div>
                    
                </form>
            </div>
            
        </div>
        
    </div>

</div>-->

@endsection