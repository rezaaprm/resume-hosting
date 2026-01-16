<!DOCTYPE html>
<html lang="en">

<head>
    {{-- set metadata on this website --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Reza Adi Pratama</title>

    {{-- set icon --}}
    <link rel="icon" href="{{ asset('img/laravel-merah.png') }}" type="image/png">

    {{-- template style - bootstrap 5.2.x --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.2.3/dist/css/bootstrap.min.css') }}">

    {{-- template style - bootstrap-custom --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/template.css') }}">

    {{-- template plugins - fontawesome --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/plugins/fontawesome-free-6.7.2-web/css/all.min.css') }}">

    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    <main class="container">
        <div class="row g-1">
            <h5 class="border-bottom opacity-75 pb-3 mb-4"></h5>
            <div class="col-sm-4">
                <section class="container mb-4">
                    <h5 class="border-bottom opacity-75 pb-3 mb-3"></h5>
                </section>
                <section class="container mb-4">
                    <div class="card text">
                        <div class="card-header text-center bg-light">
                            <span class="fw-bold">
                                Muhammad Reza Adi Pratama
                            </span>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/foto-profil.jpg') }}" class="img-thumbnail img-fluid mb-3" alt="...">
                            <span class="d-block"><i class="fa-solid fa-calendar-check me-3"></i>Jakarta, Indonesia</span>
                            <span class="d-block"><i class="fa-solid fa-phone me-3"></i>+62 811-9339-330</span>
                            <span class="d-block"><i class="fa-solid fa-at me-3"></i>reza310105@gmail.com</span>
                            <span class="d-block"><i class="fa-brands fa-github me-3"></i>https://github.com/rezaaprm</span>
                        </div>
                    </div>
                </section>
                <section class="container mb-4">
                    <div class="card text">
                        <div class="card-header text-center bg-transparent">
                            <span class="fw-bold">
                                Skills
                            </span>
                        </div>
                        <div class="card-body">
                            <span class="d-block"><i class="fa-solid fa-database me-3"></i>SQL Database management</span>
                            <span class="d-block"><i class="fa-brands fa-linux me-3"></i>Linux/Unix Command Line</span>
                            <span class="d-block"><i class="fa-brands fa-python me-3"></i></i>Python</span>
                            <span class="d-block"><i class="fa-brands fa-php me-3"></i>PHP</span>
                            <span class="d-block"><i class="fa-brands fa-laravel me-3"></i>Laravel</span>
                        </div>
                    </div>
                </section>
                <section class="container mb-4">
                    <div class="card text">
                        <div class="card-header text-center bg-transparent">
                            <span class="fw-bold">
                                Languages
                            </span>
                        </div>
                        <div class="card-body">
                            <span class="d-block"><i class="fa-solid fa-language me-3"></i>Indonesia</span>
                            <span class="d-block"><i class="fa-solid fa-globe me-3"></i>English</span>
                        </div>
                    </div>
                </section>
                <section class="container mb-4">
                    <div class="card text">
                        <div class="card-header text-center bg-transparent">
                            <span class="fw-bold">
                                Hobbies
                            </span>
                        </div>
                        <div class="card-body">
                            <span class="d-block"><i class="fa-solid fa-headphones me-3"></i>Music</span>
                            <span class="d-block"><i class="fa-solid fa-film me-3"></i>Movies</span>
                            <span class="d-block"><i class="fa-solid fa-camera me-3 "></i>Photography</span>
                        </div>
                    </div>
                </section>
                <section class="container mb-4">
                    <div class="card text">
                        <div class="card-header text-center bg-transparent">
                            <span class="fw-bold">Productivity Skills</span>
                        </div>
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Data Visualization</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Web Design / UI Prototyping</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Logo & Logotype</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Photo Editing</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Video Editing</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Presentation Design</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Social Media Design</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="font-size: 0.9rem;">Print</span>
                                <div class="text-dark">
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-solid fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                    <i class="fa-regular fa-circle fa-xs"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div> {{-- col --}}
            <div class="col-sm-8">
                <section class="container mb-5">
                    <h5 class="border-bottom opacity-75 pb-3 mb-4"></h5>
                    <div class="card text">
                        <div class="card-header bg-light text-center">
                            <span class="fw-bold">
                                About Me
                            </span>
                        </div>
                        <div class="card-body">
                            <p class="text-justify">
                                I am a highly self-motivated individual with a strong sense of personal responsibility. I possess excellent verbal
                                and written communication skills and am able to learn quickly and adapt to new situations. I thrive both
                                independently and in team environments. I am organized, dependable, and able to manage multiple priorities
                                with a positive attitude. I am also willing to take on additional responsibilities to help achieve team goals. My skills
                                include problem-solving, time management, multitasking, and computer proficiency, which have helped me gain
                                valuable experience in a personal project in Jakarta while further developing skills in teamwork, collaboration,
                                and management.

                            </p>
                        </div>
                    </div>
                </section>
                <section class="container mb-5">
                    <div class="card text">
                        <div class="card-header bg-transparent text-align-left">
                            <span class="fw-bold">
                                Education Level
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="text-start">Universitas Pembangunan Nasional Veteran Jakarta ✓ - Pondok Labu, Jakarta, Indonesia</p>
                                <p class="text-end">Jul 2022 - Jul 2026 (Expected)</p>
                            </div>
                            <div>
                                <p class="fst-italic">High School Diploma, 3.88/4.00</p>
                                <ul>
                                    <li class="text-justify">Demonstrated proficiency in completing academic projects, highlighting expertise in problem-solving, time management, and
                                        collaborative teamwork. Actively participated in faculty conferences and research initiatives, developing communication and
                                        collaboration abilities. Gained practical experience through personal projects, demonstrating leadership and the ability to work
                                        independently.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container mb-5">
                    <div class="card text">
                        <div class="card-header bg-transparent text-align-left">
                            <span class="fw-bold">
                                Practical Experiences
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="text-start">University of Pembangunan Nasional Veteran Jakarta - Pondok Labu</p>
                                <p class="text-end">- Present</p>
                            </div>
                            <div>
                                <p class="fst-italic">Undergraduate</p>
                                <ul>
                                    <li class="text-justify">Developed and successfully implemented a course final project, delivering a practical solution demonstrating technical proficiency and
                                        potential impact.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container mb-5">
                    <div class="card text">
                        <div class="card-header bg-transparent text-align-left">
                            <span class="fw-bold">
                                Organisational Experience
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="text-start">Academic Study Workshop - Jakarta</p>
                                <p class="text-end">Apr 2023 - Jun 2023</p>
                            </div>
                            <div>
                                <p class="fst-italic">Participant</p>
                                <ul>
                                    <li class="text-justify">The Academic Study Group is a student organization focused on enhancing academic performance through collaborative learning,
                                        research initiatives, and knowledge sharing among peers. The group organizes regular study sessions, workshops, and discussions,
                                        fostering a collaborative environment for students to excel in their respective fields of study.
                                    </li>
                                    <li>This workshop covers multimedia motion, narrative, scripting, and presentation to create interactive digital content in IT.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container mb-5">
                    <div class="card text">
                        <div class="card-header bg-transparent text-align-left">
                            <span class="fw-bold">
                                Skills, Achievements & Other Experience
                            </span>
                        </div>
                        <div class="card-body">
                            <div>
                                <p class="fst-italic">Webinars and Workshops</p>
                                <ul>
                                    <li class="text-justify">Webinars Attended (2023): Participated in ICIMCIS 2023 - As an assigned student, responsible for summarizing meeting
                                        discussions, collecting distributed materials, documenting Q&A sessions, managing attendance records, and providing timestamped
                                        documentation. This role enhanced my organizational skills, attention to detail, and ability to handle academic and technical materials
                                        efficiently
                                    </li>
                                    <li class="text-justify">Modules Taken  (2023): Wadhwani Foundation - Completed the Bootcamp on Employability Skills (Intermediate Level), a
                                        semester-long program enhancing workplace readiness through communication, teamwork, problem-solving, and time management.
                                        Earned certification, showcasing commitment to career development. Combined with an interest in IT as a beginner, exploring
                                        foundational skills to enhance career readiness.
                                    </li>
                                    <li class="text-justify">
                                        Soft Skills: Teamwork, Effective Communication, Problem Solving, Critical Thinking, Time Management, Conflict Resolution,
                                        Collaboration, Empathy, Emotional Intelligence, Active Listening, Work Ethic, Self-Motivation, Flexibility, Stress Management, Positive
                                        Attitude, Multitasking, Patience, Negotiation, Interpersonal Skills, Dependability.
                                    </li>
                                    <li class="text-justify">
                                        Hard Skills : Programming (Python), Data Analysis (Excel, R, Python), Database Management (SQL, MongoDB), Analysis Design
                                        (Figma, Draw IO, Paint), Machine Learning/AI, Microsoft Office Suite (Word, Excel, PowerPoint), Data Visualization, Presentation,
                                        Technical Writing.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div> {{-- col --}}
        </div> {{-- row --}}
    </main> {{-- main container --}}

    {{-- footer --}}

    {{-- scripts bootstrap 5.2.x --}}
    <script src="{{ asset('bootstrap/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- scripts fontawesome 6.7.2 --}}
    <script src="{{ asset('bootstrap/plugins/fontawesome-free-6.7.2-web/js/all.min.js') }}"></script>

    @stack('scripts')
</body>

</html>