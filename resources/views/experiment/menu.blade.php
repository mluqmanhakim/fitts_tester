@extends('layout.base')
<div class="container">
    <!-- Content here -->
    <h2>Welcome,</h2><h2 id="nickname"></h2>
    <h3>Choose the experiment below by clicking the button. For each experiment it will take 120 seconds and will be end automatically.</h3>
    <form action="{{ route('show_exp_1') }}">
        <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="start()">Experiment 1</button>
    </form>
    <form action="{{ route('show_exp_2') }}">
        <button type="submit" class="btn btn-success btn-lg btn-block" onclick="start()">Experiment 2</button>
    </form>
</br>
    <form action="{{ route('start') }}">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Exit</button>
    </form>
    <!-- <p id="savetime"></p> -->
</div>

<script>
    document.getElementById("nickname").innerHTML = localStorage.getItem("nickname");
    document.getElementById("savetime").innerHTML = localStorage.getItem("savetime");
    function start(){
        //var nickname = document.getElementById("nickname").value;
        //localStorage.setItem("nickname", nickname);
        localStorage.setItem("savetime", new Date().getTime());
    }
</script>