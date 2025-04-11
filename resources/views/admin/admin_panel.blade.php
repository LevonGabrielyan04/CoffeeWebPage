<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">



    <meta charset="utf-8" />
</head>
<body>
<div class = "main admin_panel_main">
    @include('admin.admin_header')
    <div class = "center center-admin_panel">
        <div class = "form_at_center form_in_create">
            
            <form action="{{ route('store') }}" method="POST"  enctype="multipart/form-data" class="real_form">
                @csrf
                <h1>Create a new product</h1>
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
                @endif
                @if (\Session::has('fail'))
                <div class="alert alert-fail">
                        {!! \Session::get('fail') !!}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-fail">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                       </ul>
                     @endforeach
                </div>
            @endif
            <div class = "form_line_group">
                <div class = "form_line">
                    <label class="product_form_label" >Name:</label>
                    <input name = "name" class = "admin_form_input" placeholder="Lavazza">
                </div>
                <div class = "form_line">
                    <label class="product_form_label" >Category:</label>
                    <select name="category" class = "admin_form_input admin_select_input">
                        @foreach ($categories as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <div class = "form_line">
                    <label  class="product_form_label">Description:</label>
                    <textarea name = "description" class = "admin_form_input description_text_area" placeholder="Description"></textarea>
                </div>
                <div class = "form_line">
                    <label  class="product_form_label">Price:</label>
                    <input name = "price" class = "admin_form_input" placeholder="100$" style = "width: 400px">
                </div>
                <div class = "form_line_group">
                <div class = "form_line">
                    <label  class="product_form_label">Weight:</label>
                    <input name = "weight" class = "admin_form_input" placeholder="300 gr.">
                </div>
                <div class = "form_line">
                    <label  class="product_form_label">Altitude:</label>
                    <input name = "altitude" class = "admin_form_input" placeholder="2500m">
                </div>
                </div>
                <div class = "form_line_group">
                <div class = "form_line">
                    <label  class="product_form_label">Processing:</label>
                    <input name = "processing" class = "admin_form_input" placeholder="Wet processing">
                </div>
                <div class = "form_line">
                    <label  class="product_form_label">Variety:</label>
                    <input name = "variety" class = "admin_form_input" placeholder="Arabica">
                </div>
                </div>
                <div class = "form_line_group">
                    <div class = "form_line">
                        <label  class="product_form_label">Baking:</label>
                        <input name = "baking" class = "admin_form_input" placeholder="Strong">
                    </div>
                    <div class = "form_line">
                        <label class="product_form_label" >Grinding Type:</label>
                        <input name = "grinding" class = "admin_form_input" placeholder="Big grains">
                    </div>
                </div>
                    <div class = "product_form_buttons">
                        <img id="blah" src="#" alt="your image" class= "image_preview d_none"/>
                        <label for="image" class = "image-upload-label" ><svg style="width: 20px; -webkit-filter: invert(100%); filter: invert(100%);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm65.2 216H224v80c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16v-80H94.8c-14.3 0-21.4-17.3-11.3-27.4l96.4-95.7c6.7-6.6 17.4-6.6 24 0l96.4 95.7c10.2 10.1 3 27.4-11.3 27.4zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"/></svg>
                            Upload image</label>
                        <input name="image" accept="image/*" class = "image_input"  type='file' id="image" />
                        <button class = "header-button" type="submit">Create</button>
                    </div>
            </form>
            
        </div>
    </div>
</div>
@include('admin.admin_panel_JS')
</body>