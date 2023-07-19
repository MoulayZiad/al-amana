<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Accueil - Al Amana</title>
</head>
<body class="font-body">

    <!-- NAVBAR -->
    <div class="drawer drawer-end font-sans">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="w-screen border-b-4 border-b-black flex justify-center">

            <div class="navbar w-10/12 justify-between md:min-h-[5rem] lg:min-h-[6rem] lg:w-9/12 xl:w-8/12">

                <div class="px-2 mx-2 md:scale-125 lg:scale-150">
                <a href="?action=accueil">
                    <img class="w-10" src="assets/img/logo.png" alt="logo">
                </a>
                </div>

                <div class="flex-none hidden lg:block">
                <ul class="menu menu-horizontal">
                    <!-- Navbar menu content here -->
                    <li class="text-green text-xl"><a href="?action=accueil">Accueil</a></li>
                    <li class="text-green text-xl"><a href="?action=galerie">Galerie</a></li>
                    <li class="text-green text-xl"><a href="?action=evenements">Événements</a></li>
                    <li class="text-green text-xl"><a href="?action=en_savoir_plus">En savoir plus</a></li>
                </ul>
                </div>

                <button class="hidden lg:block btn bg-yellow border-yellow text-white text-xl normal-case">
                <a href="?action=adherez">
                    Adhérez
                </a>
                </button>

                <div class="px-2 mx-2 sm:scale-125 md:scale-150 lg:hidden">
                <label for="my-drawer-3" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </label>
                </div> 

            </div>

            </div>

    <!-- NAVBAR -->

    <!-- HERO -->
        <div class="absolute top-16 h-screen w-screen bg-gradient-to-b from-green to-transparent md:top-20 lg:top-24"></div>
        <div class="hero min-h-screen" style="background-image: url(assets/img/hero_accueil.png);"  >
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Al Amana</h1>
                <p class="mb-5">Texte descritpif</p>
                </div>
            </div>
        </div>
    <!-- HERO -->

    <!-- ACTIVITES -->
        <div class="flex flex-col items-center">
            <h1 class="my-10 text-5xl font-bold">Nos activités</h1>

            <!-- CARDS -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Activité 1</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                        </div>
                        <figure><img class="h-40 w-full object-cover" src="assets/img/hero_accueil" alt="activite" /></figure>
                    </div>
                </div>

                <div>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Activité 2</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                        </div>
                        <figure><img class="h-40 w-full object-cover" src="assets/img/hero_accueil" alt="activite" /></figure>
                    </div>
                </div>

                <div>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Activité 3</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                        </div>
                        <figure><img class="h-40 w-full object-cover" src="assets/img/hero_accueil" alt="activite" /></figure>
                    </div>
                </div>

                <div>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Activité 4</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                        </div>
                        <figure><img class="h-40 w-full object-cover" src="assets/img/hero_accueil" alt="activite" /></figure>
                    </div>
                </div>
            </div>
            <!-- CARDS -->

        </div>
    <!-- ACTIVITES -->


    <!-- CARDS -->
    <section class="my-20">

        <div class="card rounded-none border-4 border-black bg-gradient-to-br from-green to-transparent lg:card-side shadow-xl">
            <div class="flex flex-col w-1/2 justify-center items-center">
                <svg width="123" height="98" viewBox="0 0 123 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.6017 18.375C29.6945 18.375 33.8263 14.2598 33.8263 9.1875C33.8263 4.11523 29.6945 0 24.6017 0C19.509 0 15.3772 4.11523 15.3772 9.1875C15.3772 14.2598 19.509 18.375 24.6017 18.375ZM98.3983 18.375C103.491 18.375 107.623 14.2598 107.623 9.1875C107.623 4.11523 103.491 0 98.3983 0C93.3055 0 89.1737 4.11523 89.1737 9.1875C89.1737 14.2598 93.3055 18.375 98.3983 18.375ZM122.555 89.5973L114.099 68.5426L106.201 77.4238L105.816 80.9074L111.14 94.1527C112.101 96.5453 114.407 98 116.847 98C117.616 98 118.385 97.866 119.134 97.5598C122.286 96.2965 123.823 92.7363 122.555 89.5973ZM115.983 49.4402L112.427 34.0895C111.543 30.2613 108.853 27.0457 105.221 25.4953C101.665 23.9641 97.7256 24.2129 94.4394 26.127C90.0769 28.6918 86.8099 32.7305 85.1956 37.4965L83.024 43.9852L79.9491 45.9375V27.5625C79.9491 25.8781 78.5655 24.5 76.8743 24.5H46.1257C44.4346 24.5 43.0509 25.8781 43.0509 27.5625V45.9375L39.9568 43.9852L37.7852 37.4965C36.1901 32.7113 32.9038 28.6918 28.5414 26.127C25.2359 24.2129 21.3155 23.9641 17.7602 25.4953C14.128 27.0457 11.4375 30.2613 10.5535 34.0895L7.01739 49.4402C6.13337 53.2684 7.15192 57.3262 9.78476 60.293L22.6992 74.8207L24.6402 92.5449C24.9861 95.6648 27.6381 98 30.7514 98C30.9821 98 31.1935 97.9809 31.4241 97.9617C34.8064 97.598 37.2279 94.5738 36.8627 91.2051L34.9217 73.4426C34.6334 70.9543 33.5957 68.6383 31.9237 66.7434L23.6024 57.3645L26.9847 43.9086L28.2916 47.8133C29.0795 50.2059 30.5785 52.2922 32.9999 54.0531L42.8203 60.2738C43.7043 60.8289 45.1456 61.1543 46.1257 61.2309H76.8743C77.8544 61.1543 79.2957 60.8289 80.1798 60.2738L90.0001 54.0531C92.4215 52.2922 93.9205 50.225 94.7084 47.8133L96.0153 43.9086L99.3976 57.3645L91.0763 66.7434C89.4043 68.6383 88.3666 70.9543 88.0783 73.4426L86.1373 91.2051C85.7721 94.5738 88.2128 97.598 91.5759 97.9617C91.8065 97.9809 92.0179 98 92.2486 98C95.3426 98 98.0139 95.684 98.3598 92.5449L100.301 74.8207L113.215 60.293C115.829 57.3262 116.867 53.2684 115.983 49.4402ZM8.90074 68.5426L0.444889 89.5973C-0.823489 92.7363 0.713939 96.2965 3.86567 97.5598C7.09426 98.8231 10.6111 97.2344 11.8603 94.1527L17.1836 80.9074L16.7993 77.4238L8.90074 68.5426Z" fill="black"/>
                </svg>
                <p>Une équipe de bénévoles à votre service</p>
            </div>

            <figure class="w-1/2">
                <img class="hidden lg:block" src="assets/img/hero_accueil.png" alt="Album"/>
            </figure>
        </div>

        <div class="card rounded-none border-4 border-black bg-gradient-to-bl from-transparent to-green lg:card-side shadow-xl">
            <figure class="w-1/2"><img class="hidden lg:block" src="assets/img/hero_accueil.png" alt="Album"/></figure>
            
            <div class="flex flex-col w-1/2 justify-center items-center">
                <svg width="126" height="98" viewBox="0 0 126 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M118.613 0.0118794C106.625 0.692189 82.7983 3.16843 68.0893 12.1721C67.0743 12.7934 66.499 13.8981 66.499 15.0531V94.6492C66.499 97.1758 69.2618 98.7726 71.5916 97.6002C86.7249 89.9833 108.611 87.9052 119.433 87.3364C123.128 87.1418 126 84.1799 126 80.6296V6.72747C126.002 2.85343 122.642 -0.215619 118.613 0.0118794ZM57.9107 12.1721C43.2039 3.16843 19.3772 0.694376 7.3895 0.0118794C3.36006 -0.215619 0 2.85343 0 6.72747V80.6318C0 84.1843 2.87224 87.1461 6.56699 87.3386C17.3931 87.9074 39.2904 89.9877 54.4238 97.6089C56.7469 98.7792 59.501 97.1845 59.501 94.6645V15.0137C59.501 13.8565 58.9279 12.7956 57.9107 12.1721Z" fill="black"/>
                </svg>
                <p>Des formations selon la Sunna</p>
            </div>
        </div>

        <div class="card rounded-none border-4 border-black bg-gradient-to-bl from-green to-transparent lg:card-side shadow-xl">
            <div class="flex flex-col w-1/2 justify-center items-center">
                <svg width="123" height="98" viewBox="0 0 123 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M93.7917 36.749H64.5793V47.4686C64.5793 55.0681 58.3716 61.251 50.7418 61.251C43.112 61.251 36.9043 55.0681 36.9043 47.4686V24.1917L24.4314 31.6571C20.7222 33.8585 18.4543 37.8592 18.4543 42.1471V51.2014L3.07938 60.0451C0.138914 61.7296 -0.879677 65.4815 0.830788 68.4102L16.2058 94.9414C17.897 97.8701 21.6639 98.8655 24.6043 97.181L44.4765 85.7531H70.7292C77.5135 85.7531 83.0292 80.2593 83.0292 73.5021H86.1042C89.5059 73.5021 92.2542 70.7647 92.2542 67.3765V55.1255H93.7917C96.3478 55.1255 98.4042 53.0773 98.4042 50.5314V41.3431C98.4042 38.7972 96.3478 36.749 93.7917 36.749ZM122.178 29.5898L106.803 3.05862C105.112 0.129855 101.345 -0.865542 98.4042 0.818976L78.5321 12.2469H58.8905C56.5843 12.2469 54.3357 12.8977 52.3754 14.1037L45.9371 18.1044C44.1306 19.2147 43.0543 21.1863 43.0543 23.292V47.4686C43.0543 51.6991 46.4945 55.1255 50.7418 55.1255C54.9891 55.1255 58.4293 51.6991 58.4293 47.4686V30.6234H93.7917C99.7303 30.6234 104.554 35.4281 104.554 41.3431V46.7986L119.929 37.9549C122.87 36.2513 123.869 32.5185 122.178 29.5898Z" fill="black"/>
                </svg>
                <p>Un accompagnement bienveillant</p>
            </div>

            <figure class="w-1/2">
                <img class="hidden lg:block" src="assets/img/hero_accueil.png" alt="Album"/>
            </figure>
        </div>

    </section>


    <!-- CARDS -->

</body>
</html>