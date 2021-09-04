<div>
    {{-- {{dd($cfile->familyMembers)}} --}}
    <section>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Family Component</h1>
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
                                                Client: {{ $cfile->last_name }}, {{ $cfile->first_name }}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('sworker.add_family_member', ['client_id'=>$cfile->id]) }}" class="btn btn-info pull-right">Add New Family Member</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    {{-- <th>Image</th> --}}
                                                    <th>Age</th>
                                                    <th>Rel. to Client</th>
                                                    <th>Educ. Attainment</th>
                                                    <th>Occupation</th>
                                                    <th>Income</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cfile->familyMembers as $family_member)

                                                    <tr>
                                                        <td>{{ $family_member->name }}</td>
                                                        <td>{{ $family_member->age }}</td>
                                                        <td>{{ $family_member->relationship }}</td>
                                                        <td>{{ $family_member->educational_attainment }}</td>
                                                        <td>{{ $family_member->occupation }}</td>
                                                        <td>{{ $family_member->income }}</td>
                                                        <td>
                                                            {{-- <a href="#" style="margin-left: 10px; color:green;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-edit2 fa-2x text-info"></i>

                                                            </a>
                                                            <a href="#" style="margin-left: 10px; color:red;text-shadow:2px 2px 4px #A49393;">
                                                                <i class="icon-cross fa-2x text-danger"></i> --}}

                                                            </a>
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
        </section>
        <!-- END fh5co-contact -->

    </section>
</div>
