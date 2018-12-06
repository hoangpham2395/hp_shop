@if (!empty($params['attrs'])) 
    @foreach ($params['attrs'] as $groupId => $attr)
        @if (!empty($attr))
            @foreach ($attr as $attrId => $attrName)
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{$attrName}}</label><br>
                        {!! Form::text('ProductValue['.$attrId.']', null, ['class' => 'form-control', 'placeholder' => $attrName]) !!}
                    </div>
                </div>
            @endforeach
        @endif
    @endforeach
@endif
    

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('image', 'Ảnh đại diện:') !!}
            @php
                $image = 'image';
                $sessionImage = 'current_file_name';
                $urlImage = null;

                if (!empty($entity->images[0])) {
                    $urlImage = $entity->images[0]->getUrlImage();
                }

                if (Session::has($sessionImage)) {
                    $urlImage = getTmpUrl() . '/' . Session::get($sessionImage);
                }
            @endphp

            <div class="input-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    @if ($urlImage)
                        <div class="fileinput-new thumbnail" style="max-width: 250px;">
                            <img src="{{ $urlImage }}" alt="Avatar">
                        </div>
                    @endif
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px;"></div>
                    <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <!-- Must have data-name and data-name is same name -> upload success  -->
                            <input type="file" name="{{$image}}">
                            <!-- Get name file input for base controller -->
                            <input type="hidden" name="{{ getConstant('FILE_INPUT_NAME') }}" value="{{$image}}">
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>