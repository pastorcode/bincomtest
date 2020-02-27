<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2019</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{!! asset('asset/js/scripts.js') !!}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
    <script>
        $("#result_form").on('submit', function(e){
            e.preventDefault()
            $("#result_list").html('');
            $("#result_text").html('');
            $("#result_btn").attr("disabled", true)
            $("#result_btn").text("Loading...")

            $.ajax({
            url : "/get_result",
            type: "POST",
            dataType:'json',
            data : {'puid':$("#pu").val(), '_token':"{{ csrf_token() }}"},
            success: function(data)
            {
                const arr = data
                
                setTimeout(function(){
                    $("#result_btn").attr("disabled", false);
                    $("#result_btn").text("Get Result!")
                    $("#result_text").text('The result for '+$("#pu option:selected").html())
                    for(let i = 0; i < arr.length; i++){
                        console.log(arr[i]['party_abbreviation']+' '+arr[i]['party_score']);
                        $("#result_list").append("<li class='list-group-item'>"+arr[i]['party_abbreviation']+' : '+arr[i]['party_score']+"</li>");
                    }
                }, 1000)
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
        
            }
        });
        })
       
    </script>



<script>
        $("#total_form").on('submit', function(e){
            e.preventDefault()
            $("#total_list").html('');
            $("#total_text").html('');
            $("#total_btn").attr("disabled", true)
            $("#total_btn").text("Loading...")

            $.ajax({
            url : "/get_total",
            type: "POST",
            dataType:'json',
            data : {'lga_id':$("#lga").val(), '_token':"{{ csrf_token() }}"},
            success: function(data)
            {
                const arr = data
                
                setTimeout(function(){
                    $("#total_btn").attr("disabled", false);
                    $("#total_btn").text("Get Total!")
                    $("#total_text").text('The Total for '+$("#pu option:selected").html()+' area is')
                    // for(let i = 0; i < arr.length; i++){
                    //     console.log(arr[i]['party_abbreviation']+' '+arr[i]['party_score']);
                    //     $("#result_list").append("<li class='list-group-item'>"+arr[i]['party_abbreviation']+' : '+arr[i]['party_score']+"</li>");
                    // }
                    console.log(data)
                }, 1000)
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
        
            }
        });
        })
       
    </script>
</body>
</html>