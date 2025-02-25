{{-- <div>
    <select wire:model="selectedType">
        <option value="">اختر نوع العقار</option>
        @foreach($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
</div>--}}
{{-- <div>
    <select wire:model="selectedType" class="form-control">
        <option value="">اختر نوع العقار</option>
        @foreach($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>

    @if($selectedType)
        <div class="mt-3">
            <p>تم اختيار: {{ $types->find($selectedType)->name }}</p>
        </div>
    @endif
</div>

<div class="mt-3">
    <select wire:model="selectedBranch" class="form-control" wire:change="getBranches">
        <option value="">اختر فرع العقار</option>
        @foreach($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
        @endforeach
    </select>

    @if($selectedBranch)
        <div class="mt-3">
            <p>تم اختيار: {{ $branches->find($selectedBranch)->name }}</p>
        </div>
    @endif
</div> --}}
<div>
    <style type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    table select{
         padding: 5px;
         min-width: 200px;
    }
    </style>




                <select name="contry" class="form-select" aria-label="Default select example" wire:model="selectedType" wire:change="getCountryStates">
                    <option value="0">نوع الملكية</option>
                    @foreach($types as $type)
                         <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            <br>


                <select name="sttate" class="form-select" aria-label="Default select example" wire:model="state_id" wire:change="getStateCities">
                    <option value="0">فرع الملكية</option>
                        @if(!empty($branches))
                         @foreach($branches as $branch)
                              <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                         @endforeach
                    @endif

                </select>
           <br>



</div>

