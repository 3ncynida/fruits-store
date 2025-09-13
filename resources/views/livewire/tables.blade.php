    <div class="">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Users table</h6>
                                <a href="{{ route('register') }}" class="btn btn-light text-primary font-weight-bold me-3">
                                    <i class="material-icons">person_add</i> Tambah Akun User
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Total Penjualan</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-4.jpg"
                                                            class="avatar avatar-sm me-3 border-radius-lg"
                                                            alt="user6">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ auth()->user()->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ auth()->user()->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Programator</p>
                                                <p class="text-xs text-secondary mb-0">Developer</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-secondary">{{auth()->user()->role}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;"
                                                    class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Fruits table</h6>
                                <a href="#" class="btn btn-light text-primary font-weight-bold me-3">
                                    <i class="material-icons">add_circle</i> Tambah Buah
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Harga</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Satuan</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Harga Terjual</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fruits as $fruit)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/small-logos/devto.svg"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="buah">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $fruit->nama_buah }}</h6>
                                                        <small class="text-muted">{{ $fruit->deskripsi }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">Rp{{ number_format($fruit->harga,0,',','.') }}</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $fruit->satuan }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-xs font-weight-bold">{{ $fruit->stok }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-link text-secondary mb-0"
                                                    aria-haspopup="true" aria-expanded="false">
                                                       <i class="fa fa-ellipsis-v text-xs"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>