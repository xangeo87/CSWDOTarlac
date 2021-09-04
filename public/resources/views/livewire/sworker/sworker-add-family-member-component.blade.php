

<div>
    <section>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add Family Component to {{ $cfile->last_name}}, {{ $cfile->first_name}}</h1>
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

                                            </div>
                                            <div class="col-md-6">

                                                <a href="{{ route('sworker.client_files') }}" class="btn btn-info pull-right">Back to Client List</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert"><strong>{{ Session::get('message')}}</strong></div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="createNewFamilyMember">
                                            @csrf

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h4>Add a Family Member</h4>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-3 control-label">Name: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required class="form-control" id="name" placeholder="Full Name" name="name" wire:model="name">
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <label class="form-label" style="font-size:0.7em; color:red; margin-top: 5px;"> - No special characters(! " # $ % &amp; ' ( ) * + , - . /)</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="client_file_id" class="col-sm-3 control-label">Client Name: </label>
                                                    <div class="col-sm-7">
                                                        <select id="client_file_id" name="client_file_id" autocomplete="client_file_id" class="form-control" wire:model="client_file_id">
                                                        <option value="">Select Client Name</option>
                                                        @foreach ($cfiles as $cfile)
                                                            <option value="{{ $cfile->id }}">{{ $cfile->last_name }}, {{ $cfile->first_name }} {{ $cfile->middle_name }}</option>
                                                        @endforeach
                                                    </div>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="age" class="col-sm-3 control-label">Age: </label>
                                                    <div class="col-sm-7">
                                                        <input type="number" required class="form-control" id="age" placeholder="Age" name="age" wire:model="age">
                                                        {{-- @error('age')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror --}}
                                                        {{-- <label class="form-label" style="font-size:0.7em; color:red; margin-top: 5px;"> - No special characters(! " # $ % &amp; ' ( ) * + , - . /)</label> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="relationship" class="col-sm-3 control-label">Relationship to Client: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="relationship" placeholder="Relationship to Client" name="relationship" wire:model="relationship">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="educational_attainment" class="col-sm-3 control-label">Educational Attainment: </label>
                                                    <div class="col-sm-7">
                                                        <select id="educational_attainment" name="educational_attainment" autocomplete="educational_attainment" class="form-control" wire:model="educational_attainment">
                                                            <option>No Grade</option>
                                                            <option>Day Care</option>
                                                            <option>Nursery/Kindergarten/Preparatory</option>
                                                            <option>Elementary</option>
                                                            <option>High School</option>
                                                            <option>Post Secondary</option>
                                                            <option>College</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="occupation" class="col-sm-3 control-label">Profession/ Occupation: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="occupation" placeholder="occupation" name="occupation" wire:model="occupation">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="income" class="col-sm-3 control-label">Income: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="income" placeholder="income" name="income" wire:model="income">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    @if (Session::has('message'))
                                                        <div class="alert alert-success" role="alert"><strong>{{ Session::get('message')}}</strong></div>
                                                    @endif
                                                    <button type="submit" class="btn btn-info pull-right">Add Family Member</button>
                                                </div>
                                            </div>
                                        </form>
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

