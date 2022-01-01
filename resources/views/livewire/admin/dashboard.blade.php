<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-list-ul"></i> Menu</h5>
                        <hr>
                        <ul class="list-group">
                            <livewire:admin.logout/>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-tachometer-alt"></i> Dashboard</h5>
                        <hr>
                        Hi, Selamat Datang <strong>{{ auth()->user()->name }}</strong> !
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
