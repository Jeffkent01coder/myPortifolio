

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portifolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong|Monda">
    <script src="https://kit.fontawesome.com/1730a69f4a.js" crossorigin="anonymous"></script>
</head>
<body>
    <button id="mybtn">&#8593;</button>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" alt="" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#contact">Contact</a></li> 
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="section">
                <div class="header-text">
                    <h1>HI, I am <span>Jeff</span> and I am a fullstack Android Developer,<br>Web Developer, UI/UX Designer and<br> Pyhon Scripter<br><br>
                        <div class="inner">
                            <a href="#portifolio" class="btn work">Check My Work</a>
                        <a href="#contact" class="btn work">Contact Me</a>
                        </div>
                        
                </div>
                <img src="images/jj2.jpg" alt="" class="cover">
            </h1>
            </div>
            
        </div>
    </div>


    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/about.jpg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1><br>
                    <h4>Who am I?</h4><br><br>
                    <p class="desc"> I am Fullstack Android Developer based in Nairoi kenya. I have 1 year Experience of commercial production and 3 years of non- commercial production of various software products ranging from websites, android Apps , Designs and API’s. I am open for new opportunities and interesting Projects.</p><br><br>
                    <div class="personal-info">
                        <div class="info-item">
                            <p class="line">Full Name: <span class="span-color">Geoffrey Erastus</span></p>
                        </div>
                        <div class="info-item">
                            <p class="line">Title: <span class="span-color">Full Stack Developer</span></p>
                        </div>
                        <div class="info-item">
                            <p class="line">Email: <span class="span-color">geoffreyerastus956@gmail.com</span></p>
                        </div>
                        <div class="info-item">
                            <p class="line">Motivation: <span class="span-color-1"><b>SKY IS NOT THE LIMIT</b></span></p><br>
                        </div>
                    </div>
                    <div class="funfact">
                        <p>80+ Github Repos</p>
                        <span class="vertical-line-1"></span>
                        <p>10000+ Cups of Cofee</p>
                        <span class="vertical-line-2"></span>
                        <p>No limit of working Hours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div id="resume">
            <h1 class="heading">Resume</h1><br>
            <p class="exp">
                Here is a breif description of my journey as a programmer when I started my first coding experience since 2019 - ... 
            </p>
            <div class="row">
            <div class="tab-title">
                <p class="tab-links active-link " onclick="opentab('education')"><b>Education</b></p>
                <p class="tab-links" onclick="opentab('work')"><b> Experience</b></p>
                <p class="tab-links" onclick="opentab('skills')"><b>Skills</b></p>
            </div>
            <div class="tab-contents active-tab" id="education">
                <ul>
                    <li><span><b>Modcom Institute of Technology</b></span><br> 2020 - 2021</li><br>
                    <li><span><b>Meru University of Science and Technology</b></span><br> 2020 - ...</li><br>
                    <li><span><b>Andela Scholarship(PluralSight)</b></span><br> 2020 - 2021</li>
                    <img src="images/cap.png" alt="">
                </ul>
            </div>
            <div class="tab-contents" id="work">
                <ul>
                    <li><span><b>Upwork</b></span><br> 2022 - ...</li><br>
                    <li><span><b>Freelance Jobs</b></span><br> 2020 - ...</li><br>
                    <img src="images/work.png" alt="">
                </ul>
            </div>
            <div class="tab-contents" id="skills">
                <h4>Android Mobile App Dev(Compose/XML)</h4>
                <div class="progress-bar">
                    <div class="android"><span>93%</span></div>
                </div>
                <h4>Design(UI/UX Interfaces)</h4>
                <div class="progress-bar">
                    <div class="design"><span>98%</span></div>
                </div>
                <h4>Python</h4>
                <div class="progress-bar">
                    <div class="python"><span>75%</span></div>
                </div>
                <h4>API's(Design/Testing)</h4>
                <div class="progress-bar">
                    <div class="api"><span>60%</span></div>
                </div>
                <h4>Flutter</h4>
                <div class="progress-bar">
                    <div class="flutter"><span>50%</span></div>
                </div>
                <h4>Web(HTML,CSS,JS,Bootstrap,flask...etc)</h4>
                <div class="progress-bar">
                    <div class="web"><span>85%</span></div>
                </div>
                <h4>Software and Database(room,mySql, firebase)</h4>
                <div class="progress-bar">
                    <div class="software"><span>72%</span></div>
                </div>
                <h4>Rest API</h4>
                <div class="progress-bar">
                    <div class="retrofit"><span>95%</span></div>
                </div>
                <h4>Android studio(SDKs)</h4>
                <div class="progress-bar">
                    <div class="studio"><span>70%</span></div>
                </div>
                <h4>GIT(Github)</h4>
                <div class="progress-bar">
                    <div class="git"><span>100%</span></div>
                </div>
                <h4>Figma(Design)</h4>
                <div class="progress-bar">
                    <div class="figma"><span>100%</span></div>
                </div>
            </div>
        </div>
    </div>


    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1><br>
            <h4>What do I do? Here are some of my expertise</h4><br><br>
            <p class="serve">These are part of the few services i offer but mostly and fully experienced in Android app development and UI/UX Designs(Basicaly graphic design).Python is a broad one so it depends on which servivce you want. <span> Enjoy!!!</span></p>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <h3>FullStack Android Developer(Kotlin)</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                 <div>
                    <i class="fa-solid fa-crop-simple"></i>
                    <h3>Web Design</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                 <div>
                    <i class="fa-regular fa-image"></i>
                    <h3>UI/UX designs</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                 <div>
                    <i class="fa-brands fa-python"></i>
                    <h3>Python programming</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                 <div>
                    <i class="fa-solid fa-code"></i>
                    <h3>API Creation and testing Enthusiast</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                 <div>
                    <i class="fa-brands fa-apple"></i>
                    <h3>Flutter Enthusiast</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
                <div>
                    <i class="fa-solid fa-database"></i>
                    <h3>Software and Databade</h3>
                    <p>I create fully fuctional high perfomance android application applying the latest programming pardgms, technology and techniques. I also employ very user friendly designs of applicaions.</p>
                    <a href="#contact">Learn More</a>
                </div>
            </div>

            
        </div>

    </div>

    <div id="portifolio">
        <div class="container">
            <h1>My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/android.jpg" alt="">
                    <div class="layer">
                        <h3>Health IQ App</h3>
                        <p>This is a simple health awareness app meant to educate people on various health diseases and how to live and deal with them.</p>
                        <a href="https://github.com/Jeffkent01coder/Health_IQ"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/UI.jpg"alt="">
                     <div class="layer">
                        <h3>School UI Design</h3>
                        <p>This is a design of a school exam management system</p>
                        <a href="https://www.figma.com/proto/xf1COQViAjEQY6f2lQtXsN/Joe?node-id=1%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A2"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/web.jpg" alt="">
                     <div class="layer">
                        <h3>Website</h3>
                        <p>This is a basic furniture store. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio voluptatibus, voluptatum ullam quas debitis ducimus eveniet labore sunt hic similique assumenda atque quam dolore deserunt illo soluta non omnis nemo!</p>
                        <a href="https://github.com/Jeffkent01coder/bootrap-funiture-store"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <a href="https://github.com/Jeffkent01coder" class="btn">See more</a>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="row1">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <h4>Get in tounch</h4>
                    <p><i class="fa-solid fa-paper-plane"></i> : geoffreyerastus956@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>  <i class="fa-solid fa-message"></i>  <i class="fa-brands fa-whatsapp"></i> : +254110177553</p>
                    <p><i class="fa-solid fa-location-dot"></i> : Meru/ Nairobi, kenya</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/geoffrey-erastus-3a185a214/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/Jeffkent01coder"><i class="fa-brands fa-github"></i></a>
                        <a href="https://twitter.com/CodexKent"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <a href="images/MyResume.pdf" download class="btn btn2"> Download CV</a>
                </div>
                <div class="contact-right"></div>
                <form id="contact" action="index.php" method="post">

                    
                    <input type="text" class="input" name="name" id="name" placeholder="Your Name" >
                    <input type="email" class="input" name="email" id= "email" placeholder="Your Email" >
                    <textarea name="message" required class="input" rows="6"  id="message" placeholder="Your message"></textarea><br>
                    <a href="mailto:geoffreyerastus956@gmail.com" style = "text-decoration: none; color: white;">Leave a Direct Email</a>

                    <div> <p id="sent"></p>
                     
                    </div>
                   
                    <button type="submit" class="btn btn2" name="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>


    <div class="copyright">
        <p>Copyright @Jeffkent01coder. Made by Jeffkent01coder<i class="fa-solid fa-heart"></i></p>
    </div>
    
    <script src="./jQuery.js"></script>
    <script> 
        var form = document.getElementById("contact");
        var btn = document.getElementById("contact-submit");

        form.addEventListener("submit", (e)=>{
            e.preventDefault()
        });
        btn.addEventListener("click", ()=>{
            $(document).ready(()=>{
                var name, email, message;
                name = $("#name").val()
                email = $("#email").val()
                message = $("#message").val()
                
                var inputs = $("input");

                for(var i = 0; i<inputs.length; i++)
                {
                    if(inputs[i].value.length == 0)
                    {
                        $("#"+inputs[i].getAttribute("id")).css({
                            'border' : '1px solid #fb2b2b'
                        })
                    }
                    else
                    {
                            $("#"+inputs[i].getAttribute("id")).css({
                            'border' : '1px solid #1c1c2467'
                        })
                    }
                }

                if(name.val().length > 0 && email.val().length > 0 && message.val().length > 0)
                {
                    $.ajax({
                    type : "post",
                    url :"./contact.php",
                    data : {
                        name :name,
                        email : email,
                        message : message 
                    },
                    success : (res) => {
                        $("#sent").html(res)

                        setTimeout(()=>{
                            $("#sent").html("")
                            $("#name").val("")
                            $("#email").val("")
                            $("#message").val("")
                        }, 2000)
                    }
                })
                }
            })
        })
    </script>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
    
    <script>
        var sidemenu = document.getElementById("sidemenu")
        function openmenu(){
            sidemenu.style.right = "0";
        }

        function closemenu(){
            sidemenu.style.right = "-200px"
        }
    </script>

    <script>
        let myButton = document.getElementById('mybtn');
        window.onscroll = function(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                myButton.style.display = 'block';
            }else{
                myButton.style.display  = 'none';
            }
        }
        myButton.addEventListener('click', () =>{
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

        })
    </script>
</body>
</html>