@section('title')
    Dashboard
@endsection
@include('layouts.main')
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                
            </div>
            <div class="content-body">
                <div class="container px-4 mx-auto">

                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>
                
                </div>
                
                
            </div>
        </div>
        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
@include('layouts.footer')