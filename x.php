<html>

<head>
  <title>Intro Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
          viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Narcotics Department</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-white" input type=button onClick="parent.location='aboutus.php'">About us</a>

        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 hover:text-white" input type=button onClick="parent.location='index.php'">Admin Panel</a>
      </nav>
    </div>
  </header>

  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="intro.jpg">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Say no to Drugs!!!
        </h1>
        <p class="leading-relaxed mb-8">Drug culture is extremely prevalent and probably most people know somebody whose
          life has been affected by drugs, if it's not their own or in their own family they have friends. It's a
          never-ending process. But that doesn't mean we should lose hope if you know somebody who has been affected by
          drugs or any kind of news on drug trafficking or drug dealing contact us. Be the change!! Let us touch
          people's
          life in a positive manner and help them recover </p>
        <div class="flex justify-center">
          <button
            class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg"
            input type=button onClick="parent.location='contactus.php'">Report Anonymously</button>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
          viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Narcotics Department</span>
      </a>
      <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020
        Narcotics_Department —
        <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank"
          rel="noopener noreferrer">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>

</html>