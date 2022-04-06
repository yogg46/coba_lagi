<div>

@include('livewire.client.edit')
@include('livewire.client.create')


<div class="col-md-12">

    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>

    @endif
</div>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <a  data-toggle="modal" data-target="#createmodal"  >
                Input Data Client Baru
                </a>
            </h3>
        </div>

    </div>
</div>
@include('livewire.client.tabel')

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
