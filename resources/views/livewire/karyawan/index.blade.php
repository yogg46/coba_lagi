<div>
    @include('livewire.karyawan.edit')
    @include('livewire.karyawan.create')


    <div class="col-md-12">

        @if (session()->has('message'))
        <div class="alert alert-success">{{session('message')}}</div>

        @endif
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">

                    <button data-toggle="modal" data-target="#createmodal" type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i class="di di-plus"></i></span>                    Input Data Karyawan Baru
                    </button>
                </h3>
            </div>

        </div>
    </div>

    @include('livewire.karyawan.tabel')

    <script>
        window.livewire.on('edit',()=>{
            $('#editmodal').modal('hide');
        })
    </script>
    <script>
        window.livewire.on('save',()=>{
            $('#createmodal').modal('hide');
        })
    </script>

</div>
