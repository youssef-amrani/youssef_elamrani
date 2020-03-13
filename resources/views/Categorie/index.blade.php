
@foreach($categories as $categorie)
<div class="card bg-dark text-light m-3">
    <div class="card-header">
        <h3 class="card-title">
            <p class="float-left">
    <a  href="{{url('categorie',[ $categorie->id ])}}">{{$categorie->name}}</a></p>
    <p class="float-right"> {{$categorie->slug}}</p>
</div>

<br>


                    @endforeach

                    <div class="container" >
                        {{ $categories-> links() }}
                    </div>
                
