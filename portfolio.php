<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #000; 
            color: white; 
            background-image: url('pic/n1back.png'); 
            background-size: cover; 
            background-position: center center; 
            background-attachment: fixed; 
        }

        section {
            width: 100vw;
            padding: 50px;
            transition: 0.3s ease-in-out;
        }

        .navbar-center {
    display: flex;
    justify-content: flex-start; 
    width: 100%; 
    padding-left: 20px; 
}

       
        .navbar-inverse {
            background-color: #222; 
            border-color: #444;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        .navbar-inverse .navbar-nav>li>a:hover {
            background-color: #00bcd4; 
            color: white;
        }
        
      .navbar-center {
    display: flex;
    justify-content: flex-start; 
    width: 50%; 
    padding-left: 0; 
    margin-left: -310px; 
}


    
        #home {
            background: url('pic/background.png') no-repeat center center; 
            background-size: cover;100
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }


        img {
            width: 300px;
            transition: opacity 0.3s ease-in-out;
            margin: 10px;
        }

        img:hover {
            opacity: 0.7;
        }


        .col-text {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            margin-bottom: 20px;
        }

       
        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        
        html {
            scroll-behavior: smooth;
        }

        
        .btn-hover:hover {
            background-color: #333;
            color: white;
        }

        
        .form-control:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }

        .page-header {
            margin-top: 30px;
            margin-bottom: 30px;
            color: #00bcd4; 
        }

        
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        
        @media (max-width: 768px) {
            .col-text {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
            }
            .carousel-inner img {
                width: 100%;
                height: auto;
            }
        }

       
        .form-control {
            border-radius: 10px;
            background-color: #333;
            color: white;
        }

        .btn-success {
            background-color: #00bcd4;
            border-color: #00bcd4;
            color: white;
        }

        .btn-success:hover {
            background-color: #0097a7;
            border-color: #0097a7;
        }

        .btn-default {
            background-color: #444;
        }

        .btn-default:hover {
            background-color: #333;
            color: white;
        }

        
        #Work, #about, #Contact {
            margin-bottom: 50px; 
        }

        
        #featuredCarousel {
            margin-bottom: 30px; 
        }

        /* Add padding to Contact section */
        #Contact {
            padding-top: 50px; 
        }

        
        #Contact {
            min-height: 500px; 
        }

       
        #mycarousel {
            width: 100%; 
            margin: 0 auto; 
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5); 
            color: white;
        }

        .video-container {
            display: flex; 
            justify-content: center; 
            align-items: center;
            height: 500px; 
            background: #000;
        }

       
        .video-container video {
            max-width: 90%; 
            max-height: 90%; 
        }

       
        .text-center {
            text-align: center !important;
        }

        .row.text-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        page-header h1 {
            color: orange;
        }
        .logo-top {
    position: relative;
    top: -25px; /* Adjust this value to position the logo higher */
     left: -290px;
     }   

    </style>
</head>
<body data-spy="scroll" data-target=".navbar">
  <!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Toggle button for mobile view -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="pic/logo.png" alt="Mayo Visual Logo" class="logo-top" style="height: 50px; width: auto;">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="#home">Home</a></li>
                <li><a href="#Work">Tools I use</a></li>
                <li><a href="#about">What About Me</a></li>
                <li><a href="#Contact">Book Session</a></li>
            </ul>
        </div>
    </div>
</nav>





    <!-- Home Section -->
<section id="home" class="cl_white fade-in fullpage" style="background: url('pic/nbackground.png') no-repeat center center; background-size: cover;">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <!-- Text Section (Left Column) -->
            <div class="col-md-6 text-left">
                <p class="lead" style="font-size: 2rem;">Mayo Visual</p>
                <p class="text-muted" style="font-size: 1.2rem; line-height: 1.6; color: whitesmoke;">
                    Photography is not just about taking pictures; it’s about capturing moments, emotions, and stories. 
                    It’s about freezing time and preserving the essence of life in a single frame. Through my lens, 
                    I aim to share the world I see—full of beauty, mystery, and emotion. 
                    Whether it's a candid moment or a carefully composed shot, every photograph tells a unique story.
                </p>
                <a href="#Work" class="btn btn-lg mt-4" style="background-color: orange; color: white; border: none;">Explore My Work</a>
            </div>
        </div>
    </div>
</section>



    <!-- My Work Section -->
    <section id="Work" class="container fade-in">
        <div class="page-header">
    <h1 class="text-center" style="color: orange;">Tools</h1>
</div>

        <div class="row text-center">
            <!-- Top Row -->
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/ae.png" class="img-thumbnail"/>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/ap.png" class="img-thumbnail"/>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/da.png" class="img-thumbnail"/>
            </div>
        </div>

        <div class="row text-center">
            <!-- Bottom Row -->
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/c.png" class="img-thumbnail"/>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/lr.png" class="img-thumbnail"/>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <img src="pic/ps.png" class="img-thumbnail"/>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
   <section id="about" class="container fade-in">
    <h2 class="text-center" style="color: orange;">My Skills</h2>
    <div class="col-text">
        Hi, I'm Janur, but you can call me Mayo. I live in Quezon City, where I find inspiration in the stories of everyday people I encounter—whether while biking, running, or simply walking down the street. Each moment holds a narrative, and I strive to capture these fleeting stories through my lens.
        Photography, for me, is more than just taking pictures; it’s about freezing time, preserving the essence of moments that we can revisit. I aim to capture not just an image but a feeling, a story, a slice of life that resonates. My journey as a photographer is fueled by these meaningful connections, and there’s nothing more rewarding than sharing that joy with others who see my work.
        In every shot, I find happiness, and I hope you find a bit of that happiness too.
    </div><br/>

    <div class="row">
        <div class="col-md-6">
            
            <div class="panel panel-success" style="background-color: #000; color: white;"> 
                <div class="panel-heading" style="background-color: #111; color: white;">
                    <h4 class="text-center">Visual Editor</h4>
                </div>
                <div class="panel-body" style="background-color: #000; color: white;">
                    <!-- Image with Modal Trigger -->
                    <img src="pic/janur2.jpg" class="img-circle center-block" data-toggle="modal" data-target="#modalVisualEditor">
                    <p class="lead text-center">I manipulate photos and Video</p>
                </div>
                <div class="panel-footer" style="background-color: #111; color: white;"></div>   
            </div>
        </div>

        <div class="col-md-6">
            
            <div class="panel panel-success" style="background-color: #000; color: white;"> 
                <div class="panel-heading" style="background-color: #111; color: white;">
                    <h4 class="text-center">Photographer</h4>
                </div>
                <div class="panel-body" style="background-color: #000; color: white;">
                    
                    <img src="pic/janur.jpg" class="img-circle center-block" data-toggle="modal" data-target="#modalPhotographer">
                    <p class="lead text-center">I am a Freelance Shooter</p>
                </div>
                <div class="panel-footer" style="background-color: #111; color: white;"></div>   
            </div>
        </div>
    </div>
</section>





    
    <section id="featuredCarousel" class="container fade-in">
        <div class="page-header">
           <h2 class="text-center" style="color: orange;">Photography and Videography</h2>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                        <li data-target="#mycarousel" data-slide-to="3"></li>
                        <li data-target="#mycarousel" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="pic/1.png" class="d-block w-50">
                        </div>
                        <div class="item">
                            <img src="pic/2.png" class="d-block w-100">
                        </div>
                        <div class="item">
                            <img src="pic/3.png" class="d-block w-100">
                        </div>

                        <div class="item">
                            <img src="pic/5.png" class="d-block w-100">
                        </div>
                        <div class="item">
                            <img src="pic/6.png" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#mycarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

           

            <div class="col-md-6 d-flex align-items-center" style="height: 100%;">
    <div class="video-container" style="margin-top: 13%; width: 100%; background-color: transparent;">
    <video controls>
        <source src="Hf.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>


        </div>
    </section>

    <!-- Contact Me Section -->
    <section id="Contact">
    <div class="page-header">
        <h2 class="text-center" style="color: orange;">Book Session</h2>
    </div>
    <form class="col-md-6 col-md-offset-3" onsubmit="return validateBookingForm()">
        
        <div class="form-group">
            <input class="form-control" id="name" placeholder="Enter your Name" type="text" required>
        </div>
        
        
        <div class="form-group">
            <input class="form-control" id="email" placeholder="Enter your E-mail" type="email" required>
        </div>
        
        
        <div class="form-group">
            <input class="form-control" id="phone" placeholder="Enter your Phone Number" type="tel" required>
        </div>
        
               <div class="form-group">
            <label for="date">Preferred Booking Date:</label>
            <input class="form-control" id="date" type="date" required>
        </div>
        
       
        <div class="form-group">
            <label for="time">Preferred Time:</label>
            <input class="form-control" id="time" type="time" required>
        </div>

        
        <div class="form-group">
            <label for="service">Select Service Type:</label>
            <select class="form-control" id="service" required>
                <option value="" disabled selected>Select a Service</option>
                <option value="photography">Photography Session</option>
                <option value="videography">Videography Session</option>
                <option value="photo_and_video">Photography + Videography</option>
                <option value="editing">Post-production / Editing</option>
            </select>
        </div>
        
        
        <div class="form-group">
            <textarea class="form-control" id="message" rows="5" placeholder="Additional Comments or Requests" required></textarea>
        </div>

        
        <div class="form-group">
            <input class="btn btn-success btn-block btn-hover" type="submit" value="Submit Booking">
        </div>
    </form>
</section>

<script>
    
    function validateBookingForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var service = document.getElementById("service").value;
        var message = document.getElementById("message").value;

        // Check if all fields are filled out
        if (name == "" || email == "" || phone == "" || date == "" || time == "" || service == "" || message == "") {
            alert("All fields must be filled out.");
            return false;
        }

        return true;
    }
</script>
    
</body>
</html>
