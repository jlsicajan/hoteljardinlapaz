<div class="row col-md-12 section_five padding-unset mb-3 mt-2">
    <div class="col-md-12 text-center">
        <div class="only_logo background_default mb-2 d-inline-block"></div>
        <h2 class="text-uppercase"><i class="fa fa-seedling text_secondary_color"></i><strong> Galeria de
                fotos </strong> <i class="fa fa-seedling text_secondary_color"></i></h2>
        <h3 class="text_secondary_color">Descubra la elegancia de nuestra residencia</h3>
    </div>
</div>
<div class="row col-md-12 padding-unset margin-x-unset wrapper">
    @if(isset($images_one))
        <div class="masonry w-100">
            @foreach($images_one as $image_one)
                <div class="brick">
                    <a href="{{ $image_one }}" class="js-img-viwer" data-caption="" data-id="">
                        <img src="{{ $image_one }}" width="100%" height=""/>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
    @if(isset($images_two))
            <div class="masonry w-100">
                @foreach($images_two as $image_one)
                    <div class="brick">
                        <a href="{{ $image_one }}" class="js-img-viwer" data-caption="" data-id="">
                            <img src="{{ $image_one }}" width="100%" height=""/>
                        </a>
                    </div>
                @endforeach
            </div>
    @endif
</div>
