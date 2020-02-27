@include('layout/header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Polling Unit Result</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                        <form class="" id="result_form">
                            @csrf
                                <div class="form-group" style="width:100%">
                                    <select class="form-control" id="pu" required>
                                        <option value="">Select Polling Unit</option>
                                        @foreach ($punits as $pu)
                                            <option value="{{$pu->uniqueid}}">{{$pu->polling_unit_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2" id="result_btn">Get Result!</button>
                              </form><br><br>
                              <h2 id="result_text"></h2>
                              <ul class="list-group" id="result_list">
                                   
                                  </ul>
                    
                    </div>
                    
        </div>
    </main>
</div>
</div>

@include('layout/footer')
