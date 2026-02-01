@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 pb-20 md:pt-32 md:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    <span class="block">Hi, I'm KHEUY Sophea</span>
                    <span
                        class="block text-indigo-400 bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-pink-500 typing-effect">Junior
                        MySQL Database Admin</span>
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-base text-slate-300 sm:text-lg md:mt-8 md:text-xl md:max-w-3xl">
                    Passionate about Database Management, Networking, System Analysis, and creating efficient IT solutions.
                </p>
                <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                    <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                        <a href="#contact"
                            class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 transition-all shadow-lg shadow-indigo-500/30">
                            Contact Me
                        </a>
                        <a href="#experience"
                            class="flex items-center justify-center px-8 py-3 border border-white/10 text-base font-medium rounded-full text-indigo-100 bg-white/5 hover:bg-white/10 backdrop-blur-sm md:py-4 md:text-lg md:px-10 transition-all">
                            My Experience
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Skills Section -->
    <section id="about" class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-indigo-400 font-semibold tracking-wide uppercase">About Me</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Technical Skills & Expertise
                </p>
                <p class="mt-4 max-w-2xl text-xl text-slate-300 lg:mx-auto">
                    I am currently studying Year 3, Semester 2 towards a Bachelor's Degree at SETEC Institute.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Skill Card 1: Database & Languages -->
                <div
                    class="p-8 bg-slate-900 rounded-2xl border border-white/5 hover:border-indigo-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/10 group">
                    <div
                        class="w-12 h-12 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <!-- Database Icon -->
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Database & Languages</h3>
                    <p class="text-slate-400 mb-2 font-semibold">Languages:</p>
                    <p class="text-slate-400 text-sm mb-4">HTML, CSS(Bootstrap), JS, PHP, C++, C#, Java</p>
                    <p class="text-slate-400 mb-2 font-semibold">Databases:</p>
                    <p class="text-slate-400 text-sm">MS Access, MySQL, Oracle</p>
                </div>

                <!-- Skill Card 2: Tools -->
                <div
                    class="p-8 bg-slate-900 rounded-2xl border border-white/5 hover:border-pink-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-pink-500/10 group">
                    <div
                        class="w-12 h-12 bg-pink-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <!-- Terminal/Code Icon -->
                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Tools & Environment</h3>
                    <p class="text-slate-400">
                        Visual Studio Code, dbForge for MySQL, Navicat Pro, SQL Developer, Postman, Apache Netbeans IDE, Git
                        Bash, VMWare, Xampp.
                    </p>
                </div>

                <!-- Skill Card 3: Design -->
                <div
                    class="p-8 bg-slate-900 rounded-2xl border border-white/5 hover:border-purple-500/30 transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/10 group">
                    <div
                        class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <!-- Design Icon -->
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Design Software</h3>
                    <p class="text-slate-400">
                        Photoshop (PS), Illustrator (AI), Premiere Pro (Pr), After Effects (Ae), InDesign.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Experience Section -->
    <section id="experience" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-pink-400 font-semibold tracking-wide uppercase">Career</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Work Experience
                </p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-slate-800"></div>

                <!-- Experience Item 1 -->
                <div class="relative mb-12">
                    <div class="flex items-center justify-between w-full">
                        <div class="order-1 w-5/12 text-left pr-8">
                            <h3 class="font-bold text-white text-xl">IT and Recruitment Officer</h3>
                            <p class="text-indigo-400 font-medium">Western Management Consultant</p>
                            <p class="text-slate-500 text-sm mb-2">August 2024 - Present</p>
                            <div class="text-slate-400 text-sm">
                                <p class="font-medium text-slate-300">IT Tasks:</p>
                                <ul class="list-none space-y-1 mt-1 mb-2">
                                    <li>- Fix and set up software for team work</li>
                                    <li>- Design poster for Job Announcement</li>
                                    <li>- Posting new positions to Website using WordPress</li>
                                </ul>
                                <p class="font-medium text-slate-300">Recruitment Tasks:</p>
                                <ul class="list-none space-y-1 mt-1">
                                    <li>- Sourcing and matching all candidates for Client</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="z-20 flex items-center order-1 bg-slate-900 shadow-xl w-8 h-8 rounded-full border-2 border-indigo-500">
                            <div class="mx-auto font-semibold text-lg text-white"></div>
                        </div>
                        <div class="order-1 w-5/12 pl-8"></div>
                    </div>
                </div>

                <!-- Experience Item 2 -->
                <div class="relative mb-12">
                    <div class="flex items-center justify-between w-full">
                        <div class="order-1 w-5/12 text-right pr-8"></div>
                        <div
                            class="z-20 flex items-center order-1 bg-slate-900 shadow-xl w-8 h-8 rounded-full border-2 border-pink-500">
                            <div class="mx-auto font-semibold text-lg text-white"></div>
                        </div>
                        <div class="order-1 w-5/12 pl-8 text-left">
                            <h3 class="font-bold text-white text-xl">Project Work & Assignments</h3>
                            <p class="text-pink-400 font-medium">SETEC Institute</p>
                            <p class="text-slate-500 text-sm mb-2">2023 - Present</p>
                            <p class="text-slate-400 text-sm">
                                Completed various projects and assignments relating to System Analysis, Database Management,
                                Networking, and other projects assigned by lecturers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Experience Item 3 -->
                <div class="relative">
                    <div class="flex items-center justify-between w-full">
                        <div class="order-1 w-5/12 text-left pr-8">
                            <h3 class="font-bold text-white text-xl">Barista</h3>
                            <p class="text-purple-400 font-medium">Tube Coffee</p>
                            <p class="text-slate-500 text-sm mb-2">January - October 2023</p>
                            <p class="text-slate-400 text-sm">Worked as a Barista, delivering excellent customer service.
                            </p>
                        </div>
                        <div
                            class="z-20 flex items-center order-1 bg-slate-900 shadow-xl w-8 h-8 rounded-full border-2 border-purple-500">
                            <div class="mx-auto font-semibold text-lg text-white"></div>
                        </div>
                        <div class="order-1 w-5/12 pl-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-indigo-400 font-semibold tracking-wide uppercase">Academic Background</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Education
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Education Card 1 -->
                <div
                    class="bg-slate-900 p-8 rounded-2xl border border-white/5 hover:border-indigo-500/30 transition-all duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-white">Bachelor Degree</h3>
                            <p class="text-indigo-400 font-medium">SETEC Institute</p>
                        </div>
                        <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 text-xs rounded-full">2022 -
                            Present</span>
                    </div>
                    <p class="text-slate-400 text-sm">Studying IT Skills: Designing, Programming, Networking, Database.</p>
                </div>

                <!-- Education Card 2 -->
                <div
                    class="bg-slate-900 p-8 rounded-2xl border border-white/5 hover:border-pink-500/30 transition-all duration-300">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-white">National Baccalaureate II</h3>
                            <p class="text-pink-400 font-medium">Prey Pnov High School</p>
                        </div>
                        <span class="px-3 py-1 bg-pink-500/10 text-pink-400 text-xs rounded-full">2019 - 2022</span>
                    </div>
                    <p class="text-slate-400 text-sm">Graduated in 2022.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-indigo-400 font-semibold tracking-wide uppercase">Portfolio</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Academic Projects
                </p>
                <p class="mt-4 text-slate-400">Selected coursework and assignments.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-slate-800 border border-white/5 hover:border-indigo-500/50 transition-all duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-700 h-48 overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-indigo-900 to-slate-900 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                            <span class="text-indigo-400 font-bold text-2xl">System Analysis</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">System Analysis</h3>
                        <p class="text-slate-400 text-sm mb-4">Analyzed and designed system requirements for coursework
                            projects.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-slate-800 border border-white/5 hover:border-pink-500/50 transition-all duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-700 h-48 overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-pink-900 to-slate-900 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                            <span class="text-pink-400 font-bold text-2xl">Database Mgmt</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Database Management</h3>
                        <p class="text-slate-400 text-sm mb-4">Designed, implemented and managed databases using MySQL and
                            Oracle.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-slate-800 border border-white/5 hover:border-purple-500/50 transition-all duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-700 h-48 overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-purple-900 to-slate-900 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                            <span class="text-purple-400 font-bold text-2xl">Networking</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">Network Design</h3>
                        <p class="text-slate-400 text-sm mb-4">Network configuration and setup projects during academic
                            studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-slate-800/50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-3xl p-8 md:p-12 border border-white/10 shadow-2xl">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Get in touch</h2>
                    <p class="mt-4 text-lg text-slate-400">Feel free to reach out for opportunities.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="flex items-center space-x-4 text-slate-300">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-400">Phone</p>
                            <p class="text-white">096 488 429 / 085 418 439</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 text-slate-300">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-400">Email</p>
                            <p class="text-white">sopheakheuy31@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 text-slate-300 md:col-span-2">
                        <div class="flex-shrink-0 w-10 h-10 bg-indigo-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-400">Address</p>
                            <p class="text-white">Songkat Ou Baek'am, Khan Sen Sok, Phnom Penh</p>
                        </div>
                    </div>
                </div>

                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-300">Name</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name"
                                class="block w-full shadow-sm bg-slate-800 border-slate-700 text-white focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-lg py-3 px-4">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300">Email</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email"
                                class="block w-full shadow-sm bg-slate-800 border-slate-700 text-white focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-lg py-3 px-4">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-300">Message</label>
                        <div class="mt-1">
                            <textarea id="message" name="message" rows="4"
                                class="block w-full shadow-sm bg-slate-800 border-slate-700 text-white focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-lg py-3 px-4"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-700 hover:to-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all transform hover:scale-[1.01]">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection