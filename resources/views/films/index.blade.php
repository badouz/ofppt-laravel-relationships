<style>
    .container{
        display:felx;
    }
.card{
    background : #eee;
    border: solid 1px ;
    border-radius:3px;
    margin-top:10px;
}
.tag{
    border: solid 1px;
    display: initial;
    padding: 12px;
    margin-left: 10px;
    border-radius: 12px;
    background: #444;
    color: #eee;
}
.tags{
    display:flex;
}

</style>
<h2> list des film </h2>
<div class="container">
    

@foreach($films as $film)
    <div class="card" >
    <h3>Titre : {{$film->title  }} </h3>
    <h5>Date de relisation :  {{$film->release_date  }} </h5>
    <h4>Categorie {{ $film->category->name }} <h4>
    <p>Descriotion :  {{$film->description  }} </p>
   
<div class="tags">

    @foreach($film->tags as $tag)

       <div class="tag">#{{$tag->name}} </div>

    @endforeach


</div>
    </div>
@endforeach


</div>