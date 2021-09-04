<div>
    <section>
        
        
        <div id="fh5co-contact" class="animate-box">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="section-title">Client List</h3>
                            <ul class="client-list">
                                @foreach ($cfiles as $cfile)
                                    <a href="{{ route('home.family_members_of_client',['client_id'=>$cfile->id]) }}"><li>{{ $cfile->first_name }} {{ $cfile->last_name }}</li></a>
                                @endforeach
                            </ul>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END fh5co-contact -->
        
    </section>
</div>
