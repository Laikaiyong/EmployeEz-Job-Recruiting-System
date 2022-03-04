<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ url('/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Poppins:wght@200;300;400;500;600&display=swap">
    <style>
        body {
            font-family: 'Poppins';
        }
        .overlap {
            margin-bottom: -150px;
            background-color: transparent;
            border: 0;
            z-index: -1;
        }
    </style>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <div>
                <h1 class="text-9xl" style="font-family: 'Architects Daughter'">404</h1>
              </div>
              <p class="font-bold text-2xl">Oops, something's missing</p>
              <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold my-10 py-3 px-4 rounded-xl">
                <a href="{{ URL::to('/') }}">Back to Main Menu</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <p class="overlap">EmployEz 2022</p>
    <svg xmlns="http://www.w3.org/2000/svg" style="bottom:0; position: fixed;" viewBox="0 0 1440 250"><path fill="#FFB6B6" fill-opacity="0.5" d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,101.3C672,85,768,75,864,90.7C960,107,1056,149,1152,165.3C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</body>
</html>