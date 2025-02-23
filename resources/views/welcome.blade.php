<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>MyCourse</title>

</head>

<body class="antialiased">
    @include('layouts.navbar')
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:items-center">
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Achieve your goals with
                    <strong class="font-extrabold text-indigo-800 mt-2 sm:block">MyCourse Premium</strong>
                </h1>

                <p class="mt-4 sm:text-xl/relaxed">
                    Learn from 325+ top instructor and companies
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a
                        class="block w-full rounded bg-indigo-800 px-12 py-3 text-sm font-medium text-white shadow hover:bg-indigo-500 focus:outline-none focus:ring sm:w-auto"
                        href="{{route('register')}}">
                        Register Now
                    </a>

                    <a
                        class="block w-full rounded px-12 py-3 text-sm font-medium text-indigo-800 shadow hover:text-indigo-500 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                        href="#">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-indigo-900 text-white mt-5">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-3xl font-bold sm:text-4xl mt-5 mb-5">Kickstart your career</h2>

                <p class="mt-4 text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur aliquam doloribus
                    nesciunt eos fugiat. Vitae aperiam fugit consequuntur saepe laborum.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>

                <a
                    class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                    href="#">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-10 text-pink-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Digital campaigns</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                        distinctio alias voluptatum blanditiis laudantium.
                    </p>
                </a>
            </div>
        </div>
    </section>

</body>

</html>