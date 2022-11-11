<script>
    //function redirect () { 
    //    setTimeout("go_now()",3000); }
    
    var currentTime = parseInt(new Date().getTime());
    function check(){
        document.getElementById("nickname").innerHTML = localStorage.getItem("nickname");
        document.getElementById("savetime").innerHTML = parseInt(localStorage.getItem("savetime")) + 90000;
        var anyTime = parseInt(localStorage.getItem("savetime")) + 90000; //set timer here
        if (currentTime > anyTime){
                return go_now();
        }
    }
    function go_now ()   { 
        localStorage.setItem("savetime", new Date().getTime());
        window.location.href = "{{ route('menu') }}"; 
    }
    
</script>
    
<body onLoad="check()">
    
</body>

