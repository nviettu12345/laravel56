<form action="" method="POST">
       @csrf
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="{{old('name',isset($category->c_name)?$category->c_name:'')}}" id="name" placeholder="tên danh mục">
                @if ($errors->has('name'))
                        <span class="error-text" >
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">icon</label>
                <input type="text" class="form-control" name="icon" value="{{old('icon',isset($category->c_icon)?$category->c_icon:'')}}" id="icon" placeholder="icon">
                @if ($errors->has('icon'))
                        <span class="error-text" >
                            <strong>{{ $errors->first('icon') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name">Meta title</label>
                <input type="text" name="c_title_seo" class="form-control" value="{{old('c_title_seo',isset($category->c_title_seo)?$category->c_title_seo:'')}}" id="c_title_seo" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Meta Description</label>
                <input type="text" name="c_description_seo" class="form-control" value="{{old('c_description_seo',isset($category->c_description_seo)?$category->c_description_seo:'')}}" id="c_description_seo" placeholder="">
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot"/>nổi bật</label>
                </div>
            </div>
         
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </form>