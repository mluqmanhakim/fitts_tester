@extends('layout.base')
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 100%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Fitt's Law  <br />
            <span class="text-primary">Experiment</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            You are attending Fitt's Law Experiment held by master student of computer science Eotvos Lorand University.
            Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet.
          </p>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="{{ route('menu') }}">

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Write your nickname here:</label>
                  <input type="input" id="nickname" class="form-control" />
                  
                </div>

                <!-- Checkbox -->
                <div class="form-outline mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="agreement" checked />
                  <label class="form-check-label" for="form2Example33">
                    Agreement...
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" onclick="start()">
                  Start The Experiment
                </button>

  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<script>
  // Save nickname and current time
  function start(){
    var nickname = document.getElementById("nickname").value;
    localStorage.setItem("nickname", nickname);
    localStorage.setItem("savetime", new Date().getTime());
  }
</script>