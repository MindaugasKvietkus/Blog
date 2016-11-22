@extends('base')


@section('header')
    <div class="col-lg-12">
        <img src="{{ asset("Desert.jpg") }}" class="img-responsive"  style="height: 250px; width: 100%">
    </div>
@endsection

@section('left-sub')
    <div class="col-lg-12">
        <?php
        foreach ($article as $article){
        ?>
        <label class="col-lg-12"> <h2><?php echo $article->name ?></h2></label>
        <label class="col-lg-12"> <h4><?php echo $article->mini_text ?> </h4></label>
        <label class="col-lg-12"> <?php echo $article->text ?></label>

    </div>
@endsection

@section('post_add')

        <form method="POST" action="{{ url('/straipnis') }}/{{ $article->id }}/post">
            {{ csrf_field() }}

            <div class="col-lg-8 col-lg-offset-2" style="padding-top: 25px">
                <label class="col-lg-12">Rasyti nauja komentara</label>
                <label>Vardas</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <label>Tekstas</label>
                <textarea id="post" class="form-control" name="post"></textarea>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">
                        Prideti
                    </button>
                </div>
            </div>
        </form>
        <?php }?>
@endsection

@section('post')

    @if(emptyArray($post) === True)
        <label>sadfsadf</label>
        @else
        <div class="col-lg-8 col-lg-offset-2" style="padding-top: 25px">
            <label class="col-lg-12">Seni Komentarai</label>
        @foreach($post as $post)
            <label class="col-lg-12" style="border: 1px solid; padding-top: 10px">{{ $post->name }}</label>
            <label class="col-lg-12" style="border: 1px solid">{{ $post->post }}</label>
            @endforeach
        </div>
        @endif



    @endsection
@section('right-sub')
    <label class="col-lg-12"><button class="btn btn-default btn-block">Delfi</button></label>
    <label class="col-lg-12"><button class="btn btn-default btn-block">Vakarų Ekspresas</button></label>
    <label class="col-lg-12"><button class="btn btn-default btn-block">15 min</button></label>
    <label class="col-lg-12"><button class="btn btn-default btn-block">Lietuvos rytas</button></label>
@endsection

