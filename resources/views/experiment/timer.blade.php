<script>
    //function redirect () { 
    //    setTimeout("go_now()",3000); }

    function check(){
        document.getElementById("nickname").innerHTML = localStorage.getItem("nickname");
        document.getElementById("savetime").innerHTML = parseInt(localStorage.getItem("savetime")) + 3000;
        var anyTime = parseInt(localStorage.getItem("savetime")) + 3000; //set timer here
        var currentTime = new Date().getTime();
        if (currentTime > anyTime){
                return go_now();
        }
    }
    function go_now ()   { 
        window.location.href = "{{ route('menu') }}"; 
    }
    
</script>
    
<body onLoad="check()">
    
</body>

