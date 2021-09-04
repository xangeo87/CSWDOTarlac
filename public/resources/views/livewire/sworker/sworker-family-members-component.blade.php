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
                    <h1>Family Members List</h1>
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
                                                All Family Members
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <a href="#" class="btn btn-info pull-right">Add New Family Member</a>
                                            </div> --}}
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
                                                    {{-- <th>Image</th> --}}
                                                    <th>Client File</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($family_members as $family_member)

                                                    <tr>
                                                        <td>{{ $family_member->name }}</td>
                                                        {{-- <td><img src="{{ asset('images/family_member/thumbnail') }}/{{ $family_member->thumbnail }}" height="60" /></td> --}}
                                                        <td>{{ $family_member->client->last_name }}, {{ $family_member->client->first_name }}</td>
                                                        <td>{{ $family_member->created_at }}</td>
                                                        <td>
                                                            <a href="#" style="margin-left: 10px; color:green;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-edit2 fa-2x text-info"></i>

                                                            </a>
                                                            <a href="#" style="margin-left: 10px; color:red;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-cross fa-2x text-danger"></i>

                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $family_members->links() }}
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
