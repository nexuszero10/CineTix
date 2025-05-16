<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineTix - Bioskop Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/movies/native.css', 'resources/css/movies/component.css'])
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.getElementsByClassName("carousel-section");

            Array.from(sections).forEach(section => {
                const container = section.querySelector(".scrollContainer");
                const prevBtn = section.querySelector(".prev");
                const nextBtn = section.querySelector(".next");

                if (container && prevBtn && nextBtn) {
                    prevBtn.addEventListener("click", () => {
                        container.scrollBy({
                            left: -300,
                            behavior: 'smooth'
                        });
                    });

                    nextBtn.addEventListener("click", () => {
                        container.scrollBy({
                            left: 300,
                            behavior: 'smooth'
                        });
                    });
                }
            });
        });
    </script>

    <!-- Navbar -->
    <div>
        <nav class="cinetix-navbar">
            <a class="cinetix-navbar-brand-text">
                <span class="cinetix-brand-cine">CINE</span><span class="cinetix-brand-tix">Tix</span>
            </a>

            <div class="cinetix-navbar-right">
                <a href="login.html" class="btn btn-login">Login</a>
                <a href="register.html" class="btn btn-register">Register</a>
            </div>
        </nav>

        <div class="container mt-5 max-w-md mx-auto">
            <div class="relative">
                <input type="text" id="searchInput"
                    class="form-control bg-[#1a2332] text-white pl-10 pr-4 py-2 rounded w-full text-sm placeholder-gray-400 border border-gray-600 focus:ring-2 focus:bg-[#1a2332]"
                    placeholder="Cari film..." data-bs-toggle="dropdown" aria-expanded="false" autocomplete="off">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <ul id="searchDropdown"
                    class="dropdown-menu w-100 bg-[#1a2332] mt-2 rounded shadow-lg text-sm text-white divide-y divide-gray-700"
                    style="max-height: 200px; overflow-y: auto;">
                </ul>
            </div>
        </div>
        <!-- Film terbaik -->
        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Film Gila Terbaik Luar Negeri</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/XHr0f4R/avatar.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="#"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition trailer-btn"
                                    data-bs-toggle="modal" data-bs-target="#trailerModal1"
                                    data-video="https://www.youtube.com/embed/yMqDgbZmBdk">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Avatar</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="trailerModal1" tabindex="-1" aria-labelledby="trailerModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black border-0">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/d9MyW72ELq0?si=tMpQ2JZtG4Dc1dhx"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/pqdHbmk/blade.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="#"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition trailer-btn"
                                    data-bs-toggle="modal" data-bs-target="#trailerModal2">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">BLADE RUNNER 2049</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="trailerModal2" tabindex="-1" aria-labelledby="trailerModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black border-0">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/gCcx85zbxz4?si=JW0X9lDVlqltSXd-"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/wZ2DRQsJ/spiderman.png" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="#"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition trailer-btn"
                                    data-bs-toggle="modal" data-bs-target="#trailerModal3">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">SPIDER-MAN NO WAY HOME</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="trailerModal3" tabindex="-1" aria-labelledby="trailerModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black border-0">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/JfVOs4VSpmA?si=qIy9Yeg5gXLuLGVn"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/ksKRKp7G/avenger.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="#"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition trailer-btn"
                                    data-bs-toggle="modal" data-bs-target="#trailerModal4">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">AVENGERS INFINITY WAR</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="trailerModal4" tabindex="-1" aria-labelledby="trailerModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black border-0">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/6ZfuNTqbHE8?si=nyEBQc68ATMnKqju"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Y4bxVbBp/guardians.webp" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="#"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition trailer-btn"
                                    data-bs-toggle="modal" data-bs-target="#trailerModal5">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">GUARDIANS OF THE GALAXY</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="trailerModal5" tabindex="-1" aria-labelledby="trailerModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-black border-0">
                            <div class="modal-body p-0">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/u3V5KDHRQvk?si=XONQvobrGkxfyhC9"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/h1Mx9xRj/godfather.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Godfather</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/WpYf963p/batman.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Dark Knight</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Kjddxq9S/12-angry-man.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">12 Angry Men</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/6RZ71RqB/lord-of-the-ring.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Lord of the Rings: The Return of the King</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/zWmn9MjG/shawshank.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Shawshank Redemption</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yowis Ben Series -->
        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Indonesian Movie</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 hide-scrollbar scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/chqqfWYJ/yowis1.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">YOWIS BEN 1 : THE SERIES</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Fq49zq5w/yowis2.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">YOWIS BEN 2 : THE SERIES</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/MyM7r4CQ/yowis3.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">YOWIS BEN 3 : THE SERIES</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Sw1G4Qs6/download.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Lara Ati</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/hx3zyGKm/images.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Cocote Tonggo</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/p6gDVKHW/download-1.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sekawan Limo</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--Horror Movie-->
        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Koleksi Film Horor Indonesia</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 hide-scrollbar scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/LDrgsbyn/sitjin.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">SIJJIN</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/tp2rFGNC/perewangan.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Perewangan</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/vvqJFrCk/pamali.png" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Pamali</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/fGCmwwqF/pengabdi-setan.png" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Pengabdi Setan</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/KcRPQN3n/mangkujiwo.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Mangkujiwo</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/fVddGjkB/sewu.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sewu Dino</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/gF3wBdt9/ghost.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Hello Ghost</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/kswG8bHD/sosok.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sosok Ketiga</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/21tfYDGk/janji.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Perjanjian Gaib</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!--Trending-->
        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Trending</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 hide-scrollbar scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/nqb7rdfv/passing.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Passing</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/bgC6rVHR/trauma.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Trauma</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/39yHHpHz/lalu.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Lalu</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/39ftkrh9/satu-hari-nanti.webp" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Suatu Hari Nanti</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/hxfnF0qx/lily.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Lily</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/BVLPxJhW/ininnawa.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Ininnawa</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Nn7zwfYq/Diana.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Diana</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/kswG8bHD/sosok.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sosok Ketiga</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/21tfYDGk/janji.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 to-transparent text-white p-3 text-sm hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Perjanjian Gaib</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Film Dokumenter & Biografi</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/233qQ9jj/no-other-land.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">No Other Land</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/QF7vsgB7/ocean.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Ocean</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/nMGV8Vzm/le-film-de-mon-pere.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Le Film de Mon Père</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/VY97fX01/sly-lives.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <video
                            class="w-full h-full object-cover absolute top-0 left-0 hidden group-hover:block transition duration-300"
                            autoplay muted loop playsinline>
                            <source src="img/avengers_trailer.mp4" type="video/mp4" />
                        </video>
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sly Lives! (aka The Burden of Black Genius)</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/zVSKTFfz/luther.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Luther: Never Too Much</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/39bMcpS8/dahomey.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Dahomey</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/11Krf1D/yotc.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Year of the Cat</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/pvL57YXt/the-mother-load.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Motherload</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/NdscwyZK/we-were-the-scenery.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">We Were the Scenery</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="carousel-section container mt-5 mx-auto relative">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Film Animasi Keluarga</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/yBRPt8L2/jumbo.webp" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Jumbo</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/XvzwfnS/kfp4.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Kung Fu Panda 4</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/b0LVYFq/wallace-n-gromit.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Wallace & Gromit: Vengeance Most Fowl</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/YB4gG3t0/wild-robot.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Wild Robot </h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/vxsW9vhq/elemental.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <video
                            class="w-full h-full object-cover absolute top-0 left-0 hidden group-hover:block transition duration-300"
                            autoplay muted loop playsinline>
                            <source src="img/avengers_trailer.mp4" type="video/mp4" />
                        </video>
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Elemental</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/cXTKxfSN/wish.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Wish</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/RTQtwC2g/migration.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Migration</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/wrbQwYb9/nimona.png" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Nimona</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/cc9JxW1y/leo.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Leo</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/rK7gJQrz/sea-beast.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Sea Beast</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="carousel-section container mt-5 mx-auto relative mb-0">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3 w-[92%] mx-auto relative">
                <h2 class="section-title mb-3 text-white">Drama & Romansa Modern</h2>
            </div>

            <!-- Tombol Geser -->
            <button
                class="prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10094;
            </button>
            <button
                class="next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white px-3 py-2 rounded-full shadow hover:bg-black">
                &#10095;
            </button>

            <div class="scrollContainer flex overflow-x-auto gap-4 pb-4 scroll-smooth px-5">

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/qM95d4hx/TY.png" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Tastefully Yours</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/RpRJqZQH/mala-influencer.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Bad Influence (Mala Influencia)</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/Y4Q94hnW/love-unlike-k-drama.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Love Unlike in K-Dramas (Cinta Tak Seindah Drama Korea)</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/FL5L3sg1/s-t-s-j.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <video
                            class="w-full h-full object-cover absolute top-0 left-0 hidden group-hover:block transition duration-300"
                            autoplay muted loop playsinline>
                            <source src="img/avengers_trailer.mp4" type="video/mp4" />
                        </video>
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sampai Jumpa, Selamat Tinggal</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/zVW2pRQG/architecture-love.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Architecture of Love</h3>
                            <p class="text-xs">Action, Sci-fi, Comedy</p>
                            <p class="text-xs mt-1">2h 1m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/QSHqk77/Poster-Heartbreak-Motel.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Heartbreak Motel</h3>
                            <p class="text-xs">Suspenseful, Action Thriller</p>
                            <p class="text-xs mt-1">1h 49m • 16+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/wNH188gz/eleanor.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <a href="login.html"
                                class="px-2 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                            <a href="register.html"
                                class="px-2 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            <h3 class="text-sm font-bold">Eleanor the Great</h3>
                            <p class="text-xs">Sci-fi, Thriller</p>
                            <p class="text-xs mt-1">2h 44m • 13+</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/nKStk67/phoenician.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">The Phoenician Scheme</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 28m • All Age</p>
                        </div>
                    </div>
                </div>

                <div class="flex-none w-48">
                    <div class="movie-card relative h-72 group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://i.ibb.co.com/5gNxq9dB/sentimental-value.jpg" alt="Movie Poster"
                            class="w-full h-full object-cover movie-poster" />

                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/90 text-white p-4 leading-snug text-sm object-cover hidden group-hover:block transition duration-300">
                            <div class="mb-2 flex gap-2">
                                <a href="login.html"
                                    class="px-3 py-0.5 text-xs text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-black transition">Trailer</a>
                                <a href="register.html"
                                    class="px-3 py-0.5 text-xs bg-yellow-400 text-black rounded hover:bg-yellow-500 transition">Detail</a>
                            </div>
                            <h3 class="text-sm font-bold">Sentimental Value</h3>
                            <p class="text-xs">Action, Sci-fi</p>
                            <p class="text-xs mt-1">2h 29m • All Age</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Footer-->
        <footer class="text-white pt-16 pb-10 px-6"
            style=" font-family: 'Poppins', sans-serif; transform: translateY(100px);" id="footer">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 border-b border-gray-700 pb-10">

                <!-- Logo & Deskripsi -->
                <div>
                    <div class="flex items-center text-3xl font-extrabold mb-4">
                        <i class="fas fa-film text-red-500 mr-2 animate-pulse"></i>
                        <span>
                            <span class="text-red-500">CINE</span><span class="text-yellow-400">Tix</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Platform tiket bioskop dan hiburan modern yang menyatukan kemewahan dan kenyamanan dalam satu
                        klik. Jadikan pengalaman Anda tak terlupakan!
                    </p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-yellow-400">Navigasi</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#"
                                class="hover:text-yellow-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-home mr-2 text-yellow-400"></i>Beranda</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-ticket-alt mr-2 text-red-400"></i>Tiket</a></li>
                        <li><a href="#"
                                class="hover:text-green-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-utensils mr-2 text-green-400"></i>Makanan</a></li>
                        <li><a href="#"
                                class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-tags mr-2 text-blue-400"></i>Promo</a></li>
                    </ul>
                </div>

                <!-- Bantuan -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-red-400">Bantuan</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-question-circle mr-2 text-red-400"></i>FAQ</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-headset mr-2 text-red-400"></i>Hubungi Kami</a></li>
                        <li><a href="#"
                                class="hover:text-red-400 transition duration-300 ease-in-out transform hover:scale-110"><i
                                    class="fas fa-info-circle mr-2 text-red-400"></i>Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-blue-400">Ikuti Kami</h4>
                    <div class="flex gap-5 text-xl">
                        <a href="#"
                            class="hover:text-blue-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#"
                            class="hover:text-pink-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#"
                            class="hover:text-sky-400 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#"
                            class="hover:text-red-500 transition duration-300 transform hover:scale-125"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center text-sm text-gray-500 mt-8">
                &copy; 2025 <span>CINETix</span>. Hak Cipta Kelompok Kami.
            </div>
        </footer>


        <script>
            const filmList = [
                "Avatar",
                "Blade Runner 2049",
                "Spider-Man No Way Home",
                "Avengers Infinity War",
                "Guardians of the Galaxy",
                "The Godfather",
                "The Dark Knight",
                "12 Angry Men",
                "The Lord of the Rings: The Return of the King",
                "The Shawshank Redemption",
                "YOWIS BEN 1 : THE SERIES",
                "YOWIS BEN 2 : THE SERIES",
                "YOWIS BEN 3 : THE SERIES",
                "Lara Ati",
                "Cocote Tonggo",
                "Sekawan Limo",
                "SIJJIN",
                "Perewangan",
                "Pamali",
                "Pengabdi Setan",
                "Mangkujiwo",
                "Sewu Dino",
                "Hello Ghost",
                "Perjanjian Gaib",
                "Passing",
                "Trauma",
                "Lalu",
                "Suatu Hari Nanti",
                "Lily",
                "Ininnawa",
                "Diana",
                "Sosok Ketiga",
                "Le Film de Mon Père",
                "Sly Lives",
                "Luther: Never Too Much",
                "Dahomey",
                "Year of the Cat",
                "Jumbo",
                "The Motherload",
                "We Were the Scenery",
                "Wallace & Gromit",
                "The Wild Robot",
                "Leo",
                "The Sea Beast",
                "Tastefully Yours",
                "Bad Influence",
                "Love Unlike in K-Dramas (Cinta Tak Seindah Drama Korea)",
                "Sampai Jumpa, Selamat Tinggal",
                "The Architecture of Love",
                "Heartbreak Motel",
                "Eleanor the Great",
                "The Phoenician Scheme",
                "Sentimental Value",
                "Kung Fu Panda 4",
                "Wish",
                "No Other Land",
                "Ocean",
                "Elemental",
                "Migration",
                "Nimona"
            ];

            const searchInput = document.getElementById("searchInput");
            const searchDropdown = document.getElementById("searchDropdown");

            searchInput.addEventListener("input", () => {
                const value = searchInput.value.toLowerCase();
                searchDropdown.innerHTML = "";
                if (value) {
                    const filtered = filmList.filter(film => film.toLowerCase().includes(value));
                    filtered.forEach(film => {
                        const item = document.createElement("li");
                        item.classList.add("dropdown-item");
                        item.classList.add("text-white");
                        item.textContent = film;
                        item.onclick = () => {
                            searchInput.value = film;
                            searchDropdown.innerHTML = "";
                        };
                        searchDropdown.appendChild(item);
                    });
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
