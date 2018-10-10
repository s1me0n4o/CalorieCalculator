
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Calculator</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">calorie calculator</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Get a free calculation of you daily calories today and build your body tommorow.</h2>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Calculate</a>
        </div>
      </div>
    </header>

  
    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Start your transformation now!</h2>          

            <form   class="ajax">
                <fieldset class="form-group" id="gender">
                <legend>Enter Your Gender Please  </legend>
                <div class="form-check">
                <div>  
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="Female" value="2" checked>Female
                  </label>    
                </div>
                <div>
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="Male" value="1">Male
                  </label>
                </div>
              </fieldset>

              <div class="form-group">
                <label for="AgeForm">Enter Your Age Please</label>
                <input type="text" class="form-control" name="age" placeholder="Enter Your Age..">
              </div>

              <div class="form-group">
                <label for="HeightForm">Height</label>
                <input type="text" class="form-control" name="height" placeholder="Enter Your Height in cm..">
              </div>

                <div class="form-group">
                <label for="HeightForm">Weight</label>
                <input type="text" class="form-control" name="weight" placeholder="Enter Your Weight in kg..">
              </div>

              <div class="form-group">
                <label for="exampleSelect1">Select Your Activity</label>
                <select class="form-control" name="activity">
                  <option value="1">Sedentary - Little or no exercises</option>
                  <option value="2">Lighty Active - Exercises/sports 1-3 times per week</option>
                  <option value="3">Moderately Active - Exercises/sports 3-5 times per week</option>
                  <option value="4">Very Active - Hard exercises/sports 6-7 times per week</option>
                  <option value="5">Extra Active - Very hard exercises/sports or physical job</option>
                </select>
              </div>
              <input type="submit" id="submit" class="btn btn-primary" value="Submit" onclick="return check()">
            </form>

          <div id="result"></div>
          </div>
        </div>
       
      </div>
    </section>



