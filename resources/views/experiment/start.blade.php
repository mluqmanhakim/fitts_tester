@extends('layout.base')
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 100%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 text-left">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Fitt's Law <br />
            <span class="text-primary">Experiment</span>
          </h1>
          <p>
            In the following 5 minutes you will participate in Fitts’ Law Test. Paul Fitts was a psychologist who
            examined the human motor system and showed that the time required to move to a target depends on the
            distance to it yet relates inversely to its size. Fitts’ law is widely applied in user experience (UX) and
            user interface (UI) design.
          </p>
          <p>
            You will participate in two different experiments. Your goal is to click 2 rectangles. On the left corner
            you will see a black rectangle as a starting point. Your task is the following:
          </p>
          <p>
          <ol>
            <li> Click on the first rectangle to start</li>
            <li> Then click on the same color appearing rectangle.</li>
            <li> Repeat these two steps till the game finished (120 seconds)</li>
          </ol>

          In both experiments you will meet disturbing factors. In the first experiment the background color will
          change randomly, in the second experiment an unusual color(red) movable rectangle will appear next to the
          black clickable object.
          <h3>You have to be as accurate as you can.</h3>

          Please use the same nickname at the Game what you gave us by filling the Google Form!

          Have fun!
          </p>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="{{ route('menu') }}">

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Your nickname:</label>
                  <input type="input" id="nickname" class="form-control" />

                </div>

                <!-- Checkbox -->
                <div class="form-outline mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="agreement" checked />
                  <label class="form-check-label" for="form2Example33">
                    I have read and agree to the Privacy Policy
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
    //localStorage.setItem("savetime", new Date().getTime());
  }
</script>