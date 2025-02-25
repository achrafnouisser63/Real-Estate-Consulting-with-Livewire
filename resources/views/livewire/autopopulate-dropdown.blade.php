<div>
    <style type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    table select{
         padding: 5px;
         min-width: 200px;
    }
    </style>




                <select name="contry" class="form-select" aria-label="Default select example" wire:model="country_id" wire:change="getCountryStates">
                    <option value="0">{{ __('app.contr') }}</option>
                    @foreach($countries as $country)
                         <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            <br>


                <select name="sttate" class="form-select" aria-label="Default select example" wire:model="state_id" wire:change="getStateCities">
                    <option value="0">{{ __('app.jiha') }}</option>
                    @if(!empty($states))
                         @foreach($states as $state)
                              <option value="{{ $state->id }}">{{ $state->name }}</option>
                         @endforeach
                    @endif

                </select>
           <br>
                <select name="ville"  class="form-select" aria-label="Default select example" wire:model="city_id">
                    <option value="0">{{ __('app.karya') }}</option>
                    @if(!empty($cities))
                        @foreach($cities as $city)
                             <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    @endif
                </select>



                <br>
                <select name="type"  class="form-select" aria-label="Default select example" wire:model="type_id">
                    <option value="0">{{ __('app.karya') }}</option>
                    @if(!empty($types))
                        @foreach($types as $type)
                             <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    @endif
                </select>
                <br>
                <select name="branch"  class="form-select" aria-label="Default select example" wire:model="branch_id">
                    <option value="0">{{ __('app.karya') }}</option>
                    @if(!empty($branches))
                        @foreach($branches as $branch)
                             <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    @endif
                </select>
                <br>

</div>
