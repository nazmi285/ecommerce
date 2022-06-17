<div>
    @section('title')
        <h4 class="fw-bold p-2 mb-0">Members</h4>
    @endsection

    <nav class="navbar fixed-bottom navbar-light" style="bottom:55px;">
        <div class="container">
            <div class="navbar-brand">
            </div>
            <div class="col-md-12">
                <button type="button" class="btn btn-circle btn-lg btn-primary shadow-sm float-end" id="btnAddMember" disabled data-bs-toggle="modal" data-bs-target="#addMemberModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
        </div>
    </nav>
    
    <div class="row justify-content-center mb-5">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8">
            <div class="clearfix mb-3">
                <div class="input-group">
                    <input type="search" class="form-control bg-white border-0" wire:model="keyword" id="keyword" placeholder="Search Member" >
                    <span class="btn bg-white rounded-end"><i class="fas fa-search"></i></span>
                    <button type="button" class="btn bg-white rounded float-end ms-2" data-bs-toggle="modal" data-bs-target="#filterModal"><i class="fa-solid fa-filter"></i></button>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <p class="text-muted"> Total {{count($users)}} </p>
            </div>
            <div class="card card-body border-0">
                @foreach($users as $user)
                    <div class="d-flex text-muted pt-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{$user->name}}</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">{{$user->name}}</strong>
                                <span class="d-block">{{$user->getRoleNames()->first()}}</span>
                                <a href="#" class="text-dark me-2" id="btnMoreAction_1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-lg fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="btnMoreAction_1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Role</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                            <span class="d-block">{{$user->email}}</span>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
