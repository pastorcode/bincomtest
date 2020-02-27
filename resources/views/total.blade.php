@include('layout/header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">(2) Total Result for Local Goverment</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form class="" id="total_form">
                        @csrf
                            <div class="form-group" style="width:100%">
                                <select class="form-control" id="lga" required>
                                    <option value="">Select Local Goverment</option>
                                    @foreach ($lgas as $lga)
                                        <option value="{{$lga->uniqueid}}">{{$lga->lga_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2" id="total_btn">Get Total!</button>
                            </form><br><br>
                            <h2 id="total_text"></h2>
                            <ul class="list-group" id="total_list"></ul>
                
                    </div>
                    
        </div>
    </main>
</div>
</div>

@include('layout/footer')
