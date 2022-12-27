@extends('Admin.main')

@section('content')
@include('Admin.Users.alert')
<form action="" method="POST">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Sản Phẩm
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Tên Sản Phẩm</label>
                    <input id="crud-form-1" name="name" type="text" class="form-control w-full" placeholder="Nhập tên">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Sản Phẩm</label>
                    <select id="crud-form-1" type="text" class="form-control w-full" name="parent_id" placeholder="text">
                    <option value="0">Sản Phẩm Chính</option>

                    {{-- sổ ra các menu đã tạo từ trước --}}
                    @foreach ($menus as $menu) 
                    <option value="{{$menu->id}}">{{$menu->name}}</option>   
                    @endforeach
                    </select>
                </div>
                <div class="mt-3">
                     <label>Kích Hoạt</label> 
                     <div class="form-check mt-2"> 
                        <input name="active" id="active" value="1" class="form-check-input" type="radio" value="vertical-radio-chris-evans"> 
                        <label class="form-check-label" for="active">Có</label> 
                    </div> 
                    <div class="form-check mt-2"> 
                        <input name="active" id="noactive" value="0" class="form-check-input" type="radio" value="vertical-radio-liam-neeson"> 
                        <label class="form-check-label" for="noactive">Không</label> 
                    </div> 
                
                </div> 
                
        
            <div class="mt-3">
                <label for="crud-form-1" class="form-label">Mô tả</label>
                <div class="crud-form-1">
                   <textarea name="description" id="" cols="50" rows="2"></textarea>
                </div>
            </div>
                
            <div class="mt-3">
                <div><span>Mô tả chi Tiết</span><br>
                <div class="ck ck-editor__main" >
                    <div name="content" class="ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred" lang="en" dir="ltr" id="content"  contenteditable="true">
                    </div>
                    </div>
                </div>
            </div>
            

                            <div class="text-right mt-5">
                                <button type="button" href="{{route('admin')}}" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="sumbit" class="btn btn-primary w-24">Save</button>
                            </div>
                        </div>    
                    </div>  
                     
            <!-- END: Form Layout -->
        </div>
    </div>
    @csrf
</form>
@endsection


@section('footer')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
