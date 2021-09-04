<div>
    <section>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Client Information</h1>
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
                                            <div class="col-md-3" >
                                                <a href="{{ route('sworker.client_files') }}" class="btn btn-info pull-right">Back to Client List</a>
                                            </div>
                                            <div class="col-md-3">


                                            </div>
                                            <div class="col-md-3">


                                            </div>
                                            <div class="col-md-3">

                                                <a href="#" class="btn btn-info pull-right">Add Family Member</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert"><strong>{{ Session::get('message')}}</strong></div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="updateClientFile">
                                            @csrf

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Identifying Information: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required class="form-control" id="first_name" placeholder="Given Name" name="first_name" wire:model="first_name">
                                                        @error('first_name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <label class="form-label" style="font-size:0.7em; color:red; margin-top: 5px;"> - No special characters(! " # $ % &amp; ' ( ) * + , - . /)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" required class="form-control" id="last_name" placeholder="Family Name" name="last_name" wire:model="last_name">
                                                        @error('last_name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <label class="form-label" style="font-size:0.7em; color:red; margin-top: 5px;"> - No special characters(! " # $ % &amp; ' ( ) * + , - . /)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="middle_name" class="col-sm-3 control-label">Middle Name: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name" wire:model="middle_name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="suffix" class="col-sm-3 control-label">Suffix: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="suffix" placeholder="Suffix" name="suffix" wire:model="suffix">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="civil_status" class="col-sm-3 control-label">Civil Status: </label>
                                                    <div class="col-sm-7">
                                                        <select id="civil_status" name="civil_status" autocomplete="civil_status" class="form-control" wire:model="civil_status">
                                                            <option>Single</option>
                                                            <option>Married</option>
                                                            <option>Divorced</option>
                                                            <option>Separated</option>
                                                            <option>Widowed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_of_birth" class="col-sm-3 control-label">Date of Birth: </label>
                                                    <div class="col-sm-7">
                                                        <input type="date" min="1925-01-01" autocomplete="date_of_birth" class="form-control" id="date_of_birth" name="date_of_birth" wire:model="date_of_birth">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="place_of_birth" class="col-sm-3 control-label">Place of Birth: </label>
                                                    <div class="col-sm-7">
                                                        <select id="place_of_birth" name="place_of_birth" autocomplete="place_of_birth" class="form-control" wire:model="place_of_birth">
                                                            <option value="" disabled="" selected="" hidden="">Barangay</option>
                                                            <option value="Aguso">Aguso</option>
                                                            <option value="Alvindia">Alvindia</option>
                                                            <option value="Amucao">Amucao</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Asturias">Asturias</option>
                                                            <option value="Atioc">Atioc</option>
                                                            <option value="Balanti">Balanti</option>
                                                            <option value="Balete">Balete</option>
                                                            <option value="Balibago I">Balibago I</option>
                                                            <option value="Balibago II">Balibago II</option>
                                                            <option value="Balingcanaway">Balingcanaway</option>
                                                            <option value="Banaba">Banaba</option>
                                                            <option value="Bantog">Bantog</option>
                                                            <option value="Baras-baras">Baras-baras</option>
                                                            <option value="Batang-batang">Batang-batang</option>
                                                            <option value="Binauganan">Binauganan</option>
                                                            <option value="Bora">Bora</option>
                                                            <option value="Buenavista">Buenavista</option>
                                                            <option value="Buhilit">Buhilit</option>
                                                            <option value="Burot">Burot</option>
                                                            <option value="Calingcuan">Calingcuan</option>
                                                            <option value="Capehan">Capehan</option>
                                                            <option value="Carangian">Carangian</option>
                                                            <option value="Care">Care</option>
                                                            <option value="Central">Central</option>
                                                            <option value="Culipat">Culipat</option>
                                                            <option value="CutcutI">Cut-cut I</option>
                                                            <option value="CutcutII">Cut-cut II</option>
                                                            <option value="Dalayap">Dalayap</option>
                                                            <option value="Dela Paz">Dela Paz</option>
                                                            <option value="Dolores">Dolores</option>
                                                            <option value="Laoang">Laoang</option>
                                                            <option value="Ligtasan">Ligtasan</option>
                                                            <option value="Lourdes">Lourdes</option>
                                                            <option value="Mabini">Mabini</option>
                                                            <option value="Maligaya">Maligaya</option>
                                                            <option value="Maliwalo">Maliwalo</option>
                                                            <option value="Mapalacsiao">Mapalacsiao</option>
                                                            <option value="Mapalad">Mapalad</option>
                                                            <option value="Matatalaib">Matatalaib</option>
                                                            <option value="Paraiso">Paraiso</option>
                                                            <option value="Poblacion">Poblacion</option>
                                                            <option value="Salapungan">Salapungan</option>
                                                            <option value="San Carlos">San Carlos</option>
                                                            <option value="San Francisco">San Francisco</option>
                                                            <option value="San Isidro">San Isidro</option>
                                                            <option value="San Jose">San Jose</option>
                                                            <option value="San Jose de Urquico">San Jose de Urquico</option>
                                                            <option value="San Juan Bautista">San Juan Bautista</option>
                                                            <option value="San Juan de Mata">San Juan de Mata</option>
                                                            <option value="San Luis">San Luis</option>
                                                            <option value="San Manuel">San Manuel</option>
                                                            <option value="San Miguel">San Miguel</option>
                                                            <option value="San Nicolas">San Nicolas</option>
                                                            <option value="San Pablo">San Pablo</option>
                                                            <option value="San Pascual">San Pascual</option>
                                                            <option value="San Rafael">San Rafael</option>
                                                            <option value="San Roque">San Roque</option>
                                                            <option value="San Sebastian">San Sebastian</option>
                                                            <option value="San Vicente">San Vicente</option>
                                                            <option value="Santa Cruz">Santa Cruz</option>
                                                            <option value="Santa Maria">Santa Maria</option>
                                                            <option value="Santo Cristo">Santo Cristo</option>
                                                            <option value="Santo Domingo">Santo Domingo</option>
                                                            <option value="Santo Niño">Santo Niño</option>
                                                            <option value="Sapang Maragul">Sapang Maragul</option>
                                                            <option value="Sapang Tagalog">Sapang Tagalog</option>
                                                            <option value="Sepung Calzada">Sepung Calzada</option>
                                                            <option value="Sinait">Sinait</option>
                                                            <option value="Suizo">Suizo</option>
                                                            <option value="Tariji">Tariji</option>
                                                            <option value="Tibag">Tibag</option>
                                                            <option value="Tibagan">Tibagan</option>
                                                            <option value="Trinidad">Trinidad</option>
                                                            <option value="Ungot">Ungot</option>
                                                            <option value="Villa Bacolor">Villa Bacolor</option>
                                                        </select>
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
                                                    <label for="income" class="col-sm-3 control-label">Monthly Income: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="income" placeholder="income" name="income" wire:model="income">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="home_address" class="col-sm-3 control-label">Home Address: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="home_address" placeholder="home_address" name="home_address" wire:model="home_address">
                                                        <label class="form-label" style="font-size:0.7em; color:red; margin-top: 5px;">(House No., Street, Building Name, Unit/Floor)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="barangay" class="col-sm-3 control-label">Barangay: </label>
                                                    <div class="col-sm-7">
                                                        <select id="barangay" name="barangay" autocomplete="barangay" class="form-control" wire:model="barangay">
                                                            <option value="" disabled="" selected="" hidden="">Barangay</option>
                                                            <option value="Aguso">Aguso</option>
                                                            <option value="Alvindia">Alvindia</option>
                                                            <option value="Amucao">Amucao</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Asturias">Asturias</option>
                                                            <option value="Atioc">Atioc</option>
                                                            <option value="Balanti">Balanti</option>
                                                            <option value="Balete">Balete</option>
                                                            <option value="Balibago I">Balibago I</option>
                                                            <option value="Balibago II">Balibago II</option>
                                                            <option value="Balingcanaway">Balingcanaway</option>
                                                            <option value="Banaba">Banaba</option>
                                                            <option value="Bantog">Bantog</option>
                                                            <option value="Baras-baras">Baras-baras</option>
                                                            <option value="Batang-batang">Batang-batang</option>
                                                            <option value="Binauganan">Binauganan</option>
                                                            <option value="Bora">Bora</option>
                                                            <option value="Buenavista">Buenavista</option>
                                                            <option value="Buhilit">Buhilit</option>
                                                            <option value="Burot">Burot</option>
                                                            <option value="Calingcuan">Calingcuan</option>
                                                            <option value="Capehan">Capehan</option>
                                                            <option value="Carangian">Carangian</option>
                                                            <option value="Care">Care</option>
                                                            <option value="Central">Central</option>
                                                            <option value="Culipat">Culipat</option>
                                                            <option value="CutcutI">Cut-cut I</option>
                                                            <option value="CutcutII">Cut-cut II</option>
                                                            <option value="Dalayap">Dalayap</option>
                                                            <option value="Dela Paz">Dela Paz</option>
                                                            <option value="Dolores">Dolores</option>
                                                            <option value="Laoang">Laoang</option>
                                                            <option value="Ligtasan">Ligtasan</option>
                                                            <option value="Lourdes">Lourdes</option>
                                                            <option value="Mabini">Mabini</option>
                                                            <option value="Maligaya">Maligaya</option>
                                                            <option value="Maliwalo">Maliwalo</option>
                                                            <option value="Mapalacsiao">Mapalacsiao</option>
                                                            <option value="Mapalad">Mapalad</option>
                                                            <option value="Matatalaib">Matatalaib</option>
                                                            <option value="Paraiso">Paraiso</option>
                                                            <option value="Poblacion">Poblacion</option>
                                                            <option value="Salapungan">Salapungan</option>
                                                            <option value="San Carlos">San Carlos</option>
                                                            <option value="San Francisco">San Francisco</option>
                                                            <option value="San Isidro">San Isidro</option>
                                                            <option value="San Jose">San Jose</option>
                                                            <option value="San Jose de Urquico">San Jose de Urquico</option>
                                                            <option value="San Juan Bautista">San Juan Bautista</option>
                                                            <option value="San Juan de Mata">San Juan de Mata</option>
                                                            <option value="San Luis">San Luis</option>
                                                            <option value="San Manuel">San Manuel</option>
                                                            <option value="San Miguel">San Miguel</option>
                                                            <option value="San Nicolas">San Nicolas</option>
                                                            <option value="San Pablo">San Pablo</option>
                                                            <option value="San Pascual">San Pascual</option>
                                                            <option value="San Rafael">San Rafael</option>
                                                            <option value="San Roque">San Roque</option>
                                                            <option value="San Sebastian">San Sebastian</option>
                                                            <option value="San Vicente">San Vicente</option>
                                                            <option value="Santa Cruz">Santa Cruz</option>
                                                            <option value="Santa Maria">Santa Maria</option>
                                                            <option value="Santo Cristo">Santo Cristo</option>
                                                            <option value="Santo Domingo">Santo Domingo</option>
                                                            <option value="Santo Niño">Santo Niño</option>
                                                            <option value="Sapang Maragul">Sapang Maragul</option>
                                                            <option value="Sapang Tagalog">Sapang Tagalog</option>
                                                            <option value="Sepung Calzada">Sepung Calzada</option>
                                                            <option value="Sinait">Sinait</option>
                                                            <option value="Suizo">Suizo</option>
                                                            <option value="Tariji">Tariji</option>
                                                            <option value="Tibag">Tibag</option>
                                                            <option value="Tibagan">Tibagan</option>
                                                            <option value="Trinidad">Trinidad</option>
                                                            <option value="Ungot">Ungot</option>
                                                            <option value="Villa Bacolor">Villa Bacolor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Medical Record: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name_of_hospital" class="col-sm-3 control-label">Name of Hospital: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="name_of_hospital" placeholder="name_of_hospital" name="name_of_hospital" wire:model="name_of_hospital">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_of_admission" class="col-sm-3 control-label">Date of Admission: </label>
                                                    <div class="col-sm-7">
                                                        <input type="date" min="1925-01-01" autocomplete="date_of_admission" class="form-control" id="date_of_admission" name="date_of_admission" wire:model="date_of_admission">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_of_discharge" class="col-sm-3 control-label">Date of Discharge: </label>
                                                    <div class="col-sm-7">
                                                        <input type="date" min="1925-01-01" autocomplete="date_of_discharge" class="form-control" id="date_of_discharge" name="date_of_discharge" wire:model="date_of_discharge">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name_of_attending_md" class="col-sm-3 control-label">Name of Attending Physician: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="name_of_attending_md" placeholder="name_of_attending_md" name="name_of_attending_md" wire:model="name_of_attending_md">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="diagnosis" class="col-sm-3 control-label">Diagnosis: </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="diagnosis" placeholder="diagnosis" name="diagnosis" wire:model="diagnosis">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Problem Presented: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        Client's
                                                        <br>
                                                        <input type="text" class="form-control" id="problem_presented_1" placeholder="problem_presented_1" name="problem_presented_1" wire:model="problem_presented_1">

                                                        came to this office seeking possible assistance in the form of a social case study report to avail assistance from
                                                        <br>
                                                        <input type="text" class="form-control" id="problem_presented_2" placeholder="problem_presented_2" name="problem_presented_2" wire:model="problem_presented_2">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Brief Background of the Case: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control" id="narrative" name="narrative" style="width: 100%; height: 150px;">Client is suffering from {{ $diagnosis }} and he/she needs to undergo medical intervention/rehabilitation but client's family could not afford to defray the possible expenses due to poverty. Family's main source of income derives from {{ $occupation }} with measly Php {{ $income }} per month.
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Diagnostic Assessment: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control" id="narrative" name="narrative" style="width: 100%; height: 150px;">The family is in-dire need outside resources to cope up with their prevailing problem. The assistance to be given to them will be of great help for them especially to the patient/client and family to gain back their normal life.</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h3>Recommendation: </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        In view of the foregoing, undersigned social welfare officer respectfully recommends the client to avail assistance from
                                                        <br>
                                                        <input type="text" class="form-control" id="recommendation" placeholder="recommendation" name="recommendation" wire:model="recommendation">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-info pull-right">Save Changes</button>
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

    </section>
</div>
