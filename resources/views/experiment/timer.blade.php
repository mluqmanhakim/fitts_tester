<script>
    function redirect () { 
        setTimeout("go_now()",3000); }
    function go_now ()   { 
        window.location.href = "{{ route('show_exp_1') }}"; }
</script>
    
<body onLoad="redirect()">
    
    <P>Mockup for timer. This page will automatically redirect to exp2 in 3 seconds without warning. Place the content here.
    <P>exp1 here

</body>

