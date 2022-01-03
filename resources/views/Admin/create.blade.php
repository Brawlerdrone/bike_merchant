
@extends('Admin.master')

@section('content')
<div class="create_section">
    <div class="form-container">
        <div class="heading">
            <h4>Create your category here</h4>
        </div>
        <form action="">
            <input type="text" name="" id="" placeholder="title" class =" fmargin" >
            <input type="file" name="" id="inpFile" class = "fmargin">
            <div class="image-preview fmargin" id = "imagePreview" >
                <img src="" alt="" srcset="" class = "preview__image">
                <span class="default-text">
                    Image Preview
                </span>
            </div>
            <button type="submit" class = "submit_button fmargin">Create category</button>
        </form>
    </div>

    <div class="form-container">
        <div class="heading">
            <h4>Set up a new bike</h4>
        </div>
        <form action="">
            <input type="text" name="" id="" placeholder="title" class =" fmargin" >
            <select name="" id="" class = "fmargin" >
                <option value="ip1">op 1</option>
                <option value="op2">option 2</option>
            </select>
            <textarea name="description"class = "fmargin" id="" cols="30" rows="10"></textarea>
            <input type="file" name="" id="inpFile" class = "fmargin">
            
            <div class="image-preview fmargin" id = "imagePreview" >
                <img src="" alt="" srcset="" class = "preview__image">
                <span class="default-text">
                    Image Preview
                </span>
            </div>
            <button type="submit" class = "submit_button fmargin">Create your category</button>
        </form>
    </div>

   
    
    
</div>

{{-- <div class="create__section">
    
    <div class="form">
        <h3>Create your Bike category</h3>
        <form action="" method="post">
            <div class="input-container ic1">
                <label for="title" class="placeholder"></label>
                <input type="text" name="" id="title" class = "input" placeholder=""/>
               
                
            </div>

            <div class="input-container">
                <input type="file" name="image" id="">
            </div>

            <div class="input-container">
                <button type="submit">Create category</button>
            </div>
        </form>

    </div>
    <div class="form">
        <h3>Create a new Bike</h3>
        
    </div>
</div> --}}

    <script>
        const inputButton = document.getElementById("inpFile");
        console.log(inputButton);
        const previewContainer = document.getElementById("imagePreview")
        //const previewContainer = document.querySelector("#imagePreview")
        console.log(previewContainer)
        const previewImage = previewContainer.querySelector(".preview__image")
        console.log(previewImage);
        const previewDefaultText = previewContainer.querySelector(".default-text");
        console.log(previewDefaultText)

        //const previewContainer = document.getElementById("imagePreview")
        //const previewImage  = previewContainer.querySelector(".preview__image")

        const navlink = document.querySelectorAll(".sidebar-menu > li > a")
        const navlinks = document.getElementsByClassName('link')

        inputButton.addEventListener("change", ()=> {
            const file = inputButton.files[0]

            if(file){
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImage.style.display = "block"

                reader.addEventListener("load", () => {
                    previewImage.setAttribute("src", reader.result)
                });

                reader.readAsDataURL(file);
            }
        })
        
    </script>
@endsection