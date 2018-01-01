@if(isset($image))
<img src="<?php echo asset("storage/$image")?>" class="col-md-9"/>
@endif


@if(isset($photo))
    <img src="<?php echo asset("storage/$photo")?>"  style="height: 50%;width: 100px;" class="col-md-9"/>
@endif
