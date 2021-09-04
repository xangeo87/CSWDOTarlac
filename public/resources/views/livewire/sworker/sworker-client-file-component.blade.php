<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

    <section>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Client List</h1>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                All Clients
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('sworker.add_client_file') }}" class="btn btn-info pull-right">Add New Client</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-warning" role="alert"><strong>{{ Session::get('message')}}</strong></div>
                                        @endif
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cfiles as $cfile)

                                                    <tr>
                                                        <td>{{ $cfile->last_name }}, {{ $cfile->first_name }} {{ $cfile->middle_name }}</td>
                                                        <td>{{ $cfile->home_address }}</td>
                                                        <td>
                                                            <a href="{{ route('home.family_members_of_client',['client_id'=>$cfile->id]) }}" style="margin-left: 10px; color:blue;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-list22 fa-2x text-info"></i>

                                                            </a>

                                                            <a href="{{ route('sworker.edit_client_file', ['client_id'=>$cfile->id]) }}" style="margin-left: 10px; color:green;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-edit2 fa-2x text-info"></i>

                                                            </a>
                                                            <a href="#" onclick="confirm('Are you sure you want to delete this client file?') || event.stopImmediatePropagation()" wire:click.prevents="deleteClientFile({{ $cfile->id }})" style="margin-left: 10px; color:red;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-cross fa-2x text-danger"></i>

                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $cfiles->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END fh5co-contact -->

    </section>
</div>
