<div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Project 1</h3>
                <div class="tools">
                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                </div>
            </div>



            @php

            $total=($progres+$progres2)/2

            @endphp
            <div class="panel-body">


                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{($progres+$progres2)/2}}" aria-valuemin="0" aria-valuemax="100" style="width: {{($progres+$progres2)/2}}%">
                        <span class="sr-only"></span> {{$total}}%
                    </div>
                </div>

                <form >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Progres</label>
                        <input typae="number" maxlength="3" min="0" max="100" wire:model="progres" class="form-control validate[required]"  placeholder="progres">
                        {{-- @error('nama') <span class="error">{{ $message }}</span> @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Progres</label>
                        <input type="number" min="0" maxlength="3" max="100" wire:model="progres2" class="form-control validate[required]"  placeholder="progres">
                        {{-- @error('nama') <span class="error">{{ $message }}</span> @enderror --}}
                    </div>


                    <form class="form-group">
                        <label for="exampleInputEmail1">Progres</label>
                        <input wire:model="progres"  class="range" type="range" />
                      </form>
                    <form class="form-group">
                        <label for="exampleInputEmail1">Progres</label>
                        <input wire:model="progres2"  class="range" type="range" />
                      </form>

                      <hr>


                      <button wire:click.prevent="reset1" type="button" class="btn btn-labeled btn-warning"><span class="btn-label"><i class="di di-plus"></i></span>reset</button>


                </form>

            </div>
        </div>
    </div>




</div>
