<div>
    <input wire:model="search" name="search" type="text" class=" " list="mylist" placeholder="Search on sale..."/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs -> title}}"> {{$rs -> category -> title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
