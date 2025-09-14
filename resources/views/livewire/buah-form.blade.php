<div class="container my-auto mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                            Tambah Buah
                        </h4>
                    </div>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ session('success') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <!-- Nama Buah -->
                        <div class="input-group input-group-outline mt-3 @if(strlen($nama_buah ?? '') > 0) is-filled @endif">
                            <label class="form-label">Nama Buah</label>
                            <input type="text" wire:model="nama_buah" class="form-control">
                        </div>
                        @error('nama_buah') <p class="text-danger inputerror">{{ $message }}</p> @enderror

                        <!-- Stok -->
                        <div class="input-group input-group-outline mt-3 @if(strlen($stok ?? '') > 0) is-filled @endif">
                            <label class="form-label">Stok</label>
                            <input type="number" wire:model="stok" class="form-control">
                        </div>
                        @error('stok') <p class="text-danger inputerror">{{ $message }}</p> @enderror

                        <!-- Harga -->
                        <div class="input-group input-group-outline mt-3 @if(strlen($harga ?? '') > 0) is-filled @endif">
                            <label class="form-label">Harga</label>
                            <input type="number" step="0.01" wire:model="harga" class="form-control">
                        </div>
                        @error('harga') <p class="text-danger inputerror">{{ $message }}</p> @enderror

                        <!-- Satuan -->
                        <div class="input-group input-group-outline mt-3 is-filled">
                            <label class="form-label">Satuan</label>
                            <select wire:model="satuan" class="form-control">
                                <option value="kg">kg</option>
                                <option value="pcs">pcs</option>
                                <option value="ikat">ikat</option>
                            </select>
                        </div>
                        @error('satuan') <p class="text-danger inputerror">{{ $message }}</p> @enderror

                        <!-- Deskripsi -->
                        <div class="input-group input-group-outline mt-3 @if(strlen($deskripsi ?? '') > 0) is-filled @endif">
                            <label class="form-label">Deskripsi</label>
                            <textarea wire:model="deskripsi" class="form-control"></textarea>
                        </div>
                        @error('deskripsi') <p class="text-danger inputerror">{{ $message }}</p> @enderror

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
