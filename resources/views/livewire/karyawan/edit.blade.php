<div>

    <div wire:ignore.self class="modal  modal-primary fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInput()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Karyawan Baru</h4>
                </div>
                <div class="modal-body">
                    <form action=""  wire:submit.prevent="update">

                        <input type="hidden" wire:model="ids">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" wire:model='nama' class="form-control validate[required]"  placeholder="Nama">
                    @error('nama') <span class="error">{{ $message }}</span> @enderror
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">NIK</label>
                    <input type="text" wire:model='NIK' class="form-control"  placeholder="NIK">
                    @error('NIK') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" wire:model='email' class="form-control"  placeholder="Email">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Telepon</label>
                    <input type="text" wire:model='no_telepon' class="form-control" placeholder="No Telepon">
                    @error('no_telepon') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">

                    <label>Jabatan</label>
                    <select wire:model='kategori' class="form-control" data-prompt-position="topLeft" >
                        <option value="">Pilih Jabatan</option>
                            @foreach ($k_k as $k)
                            <option value="{{$k->no_kategori}}">{{$k->kategori}}</option>
                            @endforeach
                    </select>
                    @error('kategori') <span class="error">{{ $message }}</span> @enderror
                </div>





                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" wire:click.prevent="resetInput()">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="update()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
