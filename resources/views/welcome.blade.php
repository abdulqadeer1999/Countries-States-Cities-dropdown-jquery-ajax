<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>







INSERT INTO `subscribers` (`id`, `user_id`, `package_name`, `plan_detail`, `package_description`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(NULL, '1', 'test package', 'lorem', 'loremlorem', '12', '1', NULL, NULL),
(NULL, '3', 'basic', 'lorem', 'lorem', '12', '2', NULL, NULL);


Wikidata:Lists/US counties
< Wikidata:Lists
Jump to navigationJump to search
US counties
full list
numbers
named after (unique)
dashboard
This is a list of counties in the United States of America. It includes a few similar entities.

Manually update list
This list is periodically updated by a bot. Manual changes to the list will be removed on the next update!

entity	state	?st	?sl	?ids	WP	?coext
Autauga County
Baldwin County
Barbour County
Bibb County
Blount County
Bullock County
Butler County
Calhoun County
Chambers County
Cherokee County
Chilton County
Choctaw County
Clarke County
Clay County
Cleburne County
Coffee County
Colbert County
Conecuh County
Coosa County
Covington County
Crenshaw County
Cullman County
Dale County
Dallas County
DeKalb County
Elmore County
Escambia County
Etowah County
Fayette County
Franklin County
Geneva County
Greene County
Hale County
Henry County
Houston County
Jackson County
Jefferson County
Lamar County
Lauderdale County
Lawrence County
Lee County
Limestone County
Lowndes County
Macon County
Madison County
Marengo County
Marion County
Marshall County
Mobile County
Monroe County
Montgomery County
Morgan County
Perry County
Pickens County
Pike County
Randolph County
Russell County
Shelby County
St. Clair County
Sumter County
Talladega County
Tallapoosa County
Tuscaloosa County
Walker County
Washington County
Wilcox County
Winston County
Aleutians East Borough
Aleutians West Census Area
Anchorage
Anchorage Municipality
Bethel Census Area
Bristol Bay Borough
Chugach Census Area
Copper River Census Area
Denali Borough
Dillingham Census Area	Alaska
Fairbanks North Star Borough
Haines Borough	Alaska
Hoonah–Angoon Census Area
Juneau
Kenai Peninsula Borough
Ketchikan Gateway Borough
Kodiak Island Borough
Kusilvak Census Area
Lake and Peninsula Borough
Matanuska-Susitna Borough
Nome Census Area
North Slope Borough
Northwest Arctic Borough
Petersburg Borough
Prince of Wales–Hyder Census Area
Sitka
Southeast Fairbanks Census Area
Valdez–Cordova Census Area
Yakutat
Yukon–Koyukuk Census Area
Apache County
Cochise County
Coconino County
Gila County
Graham County
Greenlee County
La Paz County
Maricopa County
Mohave County
Navajo County
Pima County
Pinal County
Santa Cruz County
Yavapai County
Yuma County
 Arkanas County
Ashley County
Baxter County
Benton County
Boone County
Bradley County
Calhoun County
Carroll County
Chicot County
Clark County
Clay County
Cleburne County
Cleveland County
Columbia County
Conway County
Craighead County
Crawford County
Crittenden County
Cross County
Dallas County
Desha County
Drew County
Faulkner County
Franklin County
Fulton County
Garland County
Grant County
Greene County
Hempstead County
Hot Spring County
Howard County
Independence County
Izard County
Jackson County
Jefferson County
Johnson County
Lafayette County
Lawrence County
Lee County
Lincoln County
Little River County
Logan County
Lonoke County
Madison County
Marion County
Miller County

Monroe County
Montgomery County
Nevada County
Newton County
Ouachita County
Perry County
Phillips County
Pike County
Poinsett County
Polk County
Pope County
Prairie County
Pulaski County
Randolph County
Saline County
Scott County
Searcy County
Sebastian County
Sevier County
Sharp County
St. Francis County
Stone County
Union County
Van Buren County
Washington County
White County
Woodruff County
Yell County
Alameda County
Alpine County
Amador County
Butte County
Calaveras County
Colusa County
Contra Costa County
Del Norte County
El Dorado County
Fresno County
Glenn County
Humboldt County
Imperial County
Inyo County
Kern County
Kings County
Lake County
Lassen County
Los Angeles County
Madera County
Marin County
Mariposa County
Mendocino County
Merced County
Modoc County
Mono County
Monterey County
Napa County
Nevada County
Orange County
Placer County
Plumas County
Riverside County
Sacramento County
San Benito County
San Bernardino County
San Diego County
San Francisco County
San Joaquin County
San Luis Obispo County
San Mateo County
Santa Barbara County
Santa Clara County
Santa Cruz County
Shasta County
Sierra County
Siskiyou County
Solano County
Sonoma County
Stanislaus County
Sutter County
Tehama County
Trinity County
Tulare County
Tuolumne County
Ventura County
Yolo County
Yuba County
Adams County
Alamosa County
Arapahoe County
Archuleta County
Baca County
Bent County
Boulder County
Broomfield County
Chaffee County
Cheyenne County
Clear Creek County
Conejos County
Costilla County
Crowley County
Custer County
Delta County
Denver
Dolores County
Douglas County
Eagle County
El Paso County
Elbert County
Fremont County
Garfield County
Gilpin County
Grand County
Gunnison County
Hinsdale County
Huerfano County
Jackson County
Jefferson County
K County
Kit Carson County
La Plata County
Lake County
Larimer County
Las Animas County
Lincoln County
Logan County
Mesa County
Mineral County
Moffat County
Montezuma County
Montrose County
Morgan County
Otero County
Ouray County
Park County
Phillips County
Pitkin County
Prowers County
Pueblo County
Rio Blanco County
Rio Grande County
Routt County
Saguache County
San Juan County
San Miguel County
Sedgwick County
Summit County
Teller County
Washington County
Weld County
Yuma County
Fairfield County
Hartford County
Litchfield County
Middlesex County
New Haven County
New London County
Tolland County
Windham County
Kent County
New Castle County
Sussex County
Alachua County
Baker County
Bay County
Bradford County
Brevard County
Broward County
Calhoun County
Charlotte County
Citrus County
Clay County
Collier County
Columbia County
DeSoto County
Dixie County
Duval County
Escambia County
Flagler County
Franklin County
Gadsden County
Gilchrist County
Glades County
Gulf County
Hamilton County
Hardee County
Hendry County
Hernando County
Highlands County
Hillsborough County
Holmes County
Indian River County
Jackson County
Jefferson County
Lafayette County
Lake County
Lee County
Leon County
Levy County
Liberty County
Madison County
Manatee County
Marion County
Martin County
Miami-Dade County
Monroe County
Nassau County
Okaloosa County
Okeechobee County
Orange County
Osceola County
Palm Beach County
Pasco County
Pinellas County
Polk County
Putnam County
Santa Rosa County
Sarasota County
Seminole County
St. Johns County
St. Lucie County
Sumter County
Suwannee County
Taylor County
Union County
Volusia County
Wakulla County
Walton County
Washington County
Appling County
Atkinson County
Bacon County
Baker County
Baldwin County
Banks County
Barrow County
Bartow County
Ben Hill County
Berrien County
Bibb County
Bleckley County
Brantley County
Brooks County
Bryan County
Bulloch County
Burke County
Butts County
Calhoun County
Camden County
Candler County
Carroll County
Catoosa County
Charlton County
Chatham County
Chattahoochee County
Chattooga County
Cherokee County
Clarke County
Clay County
Clayton County
Clinch County
Cobb County
Coffee County
Colquitt County
Columbia County
Cook County
Coweta County
Crawford County
Crisp County
Dade County
Dawson County
DeKalb County
Decatur County
Dodge County
Dooly County
Dougherty County
Douglas County
Early County
Echols County
Effingham County
Elbert County
Emanuel County
Evans County
Fannin County
Fayette County
Floyd County
Forsyth County
Franklin County
Fulton County
Gilmer County
Glascock County
Glynn County
Gordon County
Grady County
Greene County
Gwinnett County
Habersham County
Hall County
Hancock County
Haralson County
Harris County
Hart County
Heard County
Henry County
Houston County
Irwin County
Jackson County
Jasper County
Jeff Davis County
Jefferson County
Jenkins County
Johnson County
Jones County
Lamar County
Lanier County
Laurens County
Lee County
Liberty County
Lincoln County
Long County
Lowndes County
Lumpkin County
Macon County
Madison County
Marion County
McDuffie County
McIntosh County
Meriwether County
Miller County
Mitchell County
Monroe County
Montgomery County
Morgan County
Murray County
Muscogee County
Newton County
Oconee County
Oglethorpe County
Paulding County
Peach County
Pickens County
Pierce County
Pike County
Polk County
Pulaski County
Putnam County
Quitman County
Rabun County
Randolph County
Richmond County
Rockdale County
Schley County
Screven County
Seminole County
Spalding County
Stephens County
Stewart County
Sumter County
Talbot County
Taliaferro County
Tattnall County
Taylor County
Telfair County
Terrell County
Thomas County
Tift County
Toombs County
Towns County
Treutlen County
Troup County
Turner County
Twiggs County
Union County
Upson County
Walker County
Walton County
Ware County
Warren County
Washington County
Wayne County
Webster County
Wheeler County
White County
Whitfield County
Wilcox County
Wilkes County
Wilkinson County
Worth County
Hawaii County
Honolulu County
Kalawao County
Kauai County
Maui County
Ada County
Adams County
Bannock County
Bear Lake County
Benewah County
Bingham County
Blaine County
Boise County
Bonner County
Bonneville County
Boundary County
Butte County
Camas County
Canyon County
Caribou County
Cassia County
Clark County
Clearwater County
Custer County
Elmore County
Franklin County
Fremont County
Gem County
Gooding County
Idaho County
Jefferson County
Jerome County
Kootenai County
Latah County
Lemhi County
Lewis County
Lincoln County
Madison County
Minidoka County
Nez Perce County
Oneida County
Owyhee County
Payette County
Power County
Shoshone County
Teton County
Twin Falls County
Valley County
Washington County
Adams County
Alexander County
Bond County
Boone County
Brown County
Bureau County
Calhoun County
Carroll County
Cass County
Champaign County
Christian County
Clark County
Clay County
Clinton County
Coles County
Cook County
Crawford County
Cumberland County
DeKalb County
DeWitt County
Douglas County
DuPage County
Edgar County
Edwards County
Effingham County
Fayette County
Ford County
Franklin County
Fulton County
Gallatin County
Greene County
Grundy County
Hamilton County
Hancock County
Hardin County
Henderson County
Henry County
Iroquois County
Jackson County
Jasper County
Jefferson County
Jersey County
Jo Daviess County
Johnson County
Kane County
Kankakee County
Kendall County
Knox County
LaSalle County
Lake County
Lawrence County
Lee County
Livingston County
Logan County
Macon County
Macoupin County
Madison County
Marion County
Marshall County
Mason County
Massac County
McDonough County
McHenry County
McLean County
Menard County
Mercer County
Monroe County
Montgomery County
Morgan County
Moultrie County
Ogle County
Peoria County
Perry County
Piatt County
Pike County
Pope County
Pulaski County
Putnam County
Randolph County
Richland County
Rock Island County
Saline County
Sangamon County
Schuyler County
Scott County
Shelby County
St. Clair County
Stark County
Stephenson County
Tazewell County
Union County
Vermilion County
Wabash County
Warren County
Washington County
Wayne County
White County
Whiteside County
Will County
Williamson County
Winnebago County
Woodford County
Adams County
Allen County
Bartholomew County
Benton County
Blackford County
Boone County
Brown County
Carroll County
Cass County
Clark County
Clay County
Clinton County
Crawford County
Daviess County
DeKalb County
Dearborn County
Decatur County
Delaware County
Dubois County
Elkhart County
Fayette County
Floyd County
Fountain County
Franklin County
Fulton County
Gibson County
Grant County
Greene County
Hamilton County
Hancock County
Harrison County
Hendricks County
Henry County
Howard County
Huntington County
Jackson County
Jasper County
Jay County
Jefferson County
Jennings County
Johnson County
Knox County
Kosciusko County
LaGrange County
LaPorte County
Lake County
Lawrence County
Madison County
Marion County
Marshall County
Martin County
Miami County
Monroe County
Montgomery County
Morgan County
Newton County
Noble County
Ohio County
Orange County
Owen County
Parke County
Perry County
Pike County
Porter County
Posey County
Pulaski County
Putnam County
Randolph County
Ripley County
Rush County
Scott County
Shelby County
Spencer County
St. Joseph County
Starke County
Steuben County
Sullivan County
Switzerland County
Tippecanoe County
Tipton County
Union County
Vanderburgh County
Vermillion County
Vigo County
Wabash County
Warren County
Warrick County
Washington County
Wayne County
Wells County
White County
Whitley County
Adair County
Adams County
Allamakee County
Appanoose County
Audubon County
Benton County
Black Hawk County
Boone County
Bremer County
Buchanan County
Buena Vista County
Butler County
Calhoun County
Carroll County
Cass County
Cedar County
Cerro Gordo County
Cherokee County
Chickasaw County
Clarke County
Clay County
Clayton County
Clinton County
Crawford County
Dallas County
Davis County
Decatur County
Delaware County
Des Moines County
Dickinson County
Dubuque County
Emmet County
Fayette County
Floyd County
Franklin County
Fremont County
Greene County
Grundy County
Guthrie County
Hamilton County
Hancock County
Hardin County
Harrison County
Henry County
Howard County
Humboldt County
Ida County
Iowa County
Jackson County
Jasper County
Jefferson County
Johnson County
Jones County
Keokuk County
Kossuth County
Lee County
Linn County
Louisa County
Lucas County
Lyon County
Madison County
Mahaska County
Marion County
Marshall County
Mills County
Mitchell County
Monona County
Monroe County
Montgomery County
Muscatine County
O'Brien County
Osceola County
Page County
Palo Alto County
Plymouth County
Pocahontas County
Polk County
Pottawattamie County
Poweshiek County
Ringgold County
Sac County
Scott County
Shelby County
Sioux County
Story County
Tama County
Taylor County
Union County
Van Buren County
Wapello County
Warren County
Washington County
Wayne County
Webster County
Winnebago County
Winneshiek County
Woodbury County
Worth County
Wright County
Allen County
Anderson County
Atchison County
Barber County
Barton County
Bourbon County
Brown County
Butler County
Chase County
Chautauqua County
Cherokee County
Cheyenne County
Clark County
Clay County
Cloud County
Coffey County
Comanche County
Cowley County
Crawford County
Decatur County
Dickinson County
Doniphan County
Douglas County
Edwards County
Elk County
Ellis County
Ellsworth County
Finney County
Ford County
Franklin County
Geary County
Gove County
Graham County
Grant County
Gray County
Greeley County
Greenwood County
Hamilton County
Harper County
Harvey County
Haskell County
Hodgeman County
Jackson County
Jefferson County
Jewell County
Johnson County
Kearny County
Kingman County
K County
Labette County
Lane County
Leavenworth County
Lincoln County
Linn County
Logan County
Lyon County
Marion County
Marshall County
McPherson County
Meade County
Miami County
Mitchell County
Montgomery County
Morris County
Morton County
Nemaha County
Neosho County
Ness County
Norton County
Osage County
Osborne County
Ottawa County
Pawnee County
Phillips County
Pottawatomie County
Pratt County
Rawlins County
Reno County
Republic County
Rice County
Riley County
Rooks County
Rush County
Russell County
Saline County
Scott County
Sedgwick County
Seward County
Shawnee County
Sheridan County
Sherman County
Smith County
Stafford County
Stanton County
Stevens County
Sumner County
Thomas County
Trego County
Wabaunsee County
Wallace County
Washington County
Wichita County
Wilson County
Woodson County
Wyandotte County
Adair County
Allen County
Anderson County
Ballard County
Barren County
Bath County
Bell County
Boone County
Bourbon County
Boyd County
Boyle County
Bracken County
Breathitt County
Breckinridge County
Bullitt County
Butler County
Caldwell County
Calloway County
Campbell County
Carlisle County
Carroll County
Carter County
Casey County
Christian County
Clark County
Clay County
Clinton County
Crittenden County
Cumberland County
Daviess County
Edmonson County
Elliott County
Estill County
Fayette County
Fleming County
Floyd County
Franklin County
Fulton County
Gallatin County
Garrard County
Grant County
Graves County
Grayson County
Green County
Greenup County
Hancock County
Hardin County
Harlan County
Harrison County
Hart County
Henderson County
Henry County
Hickman County
Hopkins County
Jackson County
Jefferson County
Jessamine County
Johnson County
Kenton County
Knott County
Knox County
LaRue County
Laurel County
Lawrence County
Lee County
Leslie County
Letcher County
Lewis County
Lincoln County
Livingston County
Logan County
Lyon County
Madison County
Magoffin County
Marion County
Marshall County
Martin County
Mason County
McCracken County
McCreary County
McLean County
Meade County
Menifee County
Mercer County
Metcalfe County
Monroe County
Montgomery County
Morgan County
Muhlenberg County
Nelson County
Nicholas County
Ohio County
Oldham County
Owen County
Owsley County
Pendleton County
Perry County
Pike County
Powell County
Pulaski County
Robertson County
Rockcastle County
Rowan County
Russell County
Scott County
Shelby County
Simpson County
Spencer County
Taylor County
Todd County
Trigg County
Trimble County
Union County
Warren County
Washington County
Wayne County
Webster County
Whitley County
Wolfe County
Woodford County
Acadia Parish
Allen Parish
Ascension Parish
Assumption Parish
Avoyelles Parish
Beauregard Parish
Bienville Parish
Bossier Parish
Caddo Parish
Calcasieu Parish
Caldwell Parish
Cameron Parish
Catahoula Parish
Claiborne Parish
Concordia Parish
DeSoto Parish
East Baton Rouge Parish
East Carroll Parish
East Feliciana Parish
Evangeline Parish
Franklin Parish
Grant Parish
Iberia Parish
Iberville Parish
Jackson Parish
Jefferson Davis Parish
Jefferson Parish
La Salle Parish
Lafayette Parish
Lafourche Parish
Lincoln Parish
Livingston Parish
Madison Parish
Morehouse Parish
Natchitoches Parish
Orleans Parish
Ouachita Parish
Plaquemines Parish
Pointe Coupee Parish
Rapides Parish
Red River Parish
Richland Parish
Sabine Parish
St. Bernard Parish
St. Charles Parish
St. Helena Parish
St. James Parish
St. John the Baptist Parish
St. Landry Parish
St. Martin Parish
St. Mary Parish
St. Tammany Parish
Tangipahoa Parish
Tensas Parish
Terrebonne Parish
Union Parish
Vermilion Parish
Vernon Parish
Washington Parish
Webster Parish
West Baton Rouge Parish
West Carroll Parish
West Feliciana Parish
Winn Parish
Androscoggin County
Aroostook County
Cumberland County
Franklin County
Hancock County
Kennebec County
Knox County
Lincoln County
Oxford County
Penobscot County
Piscataquis County
Sagadahoc County
Somerset County
Waldo County
Washington County
York County
Allegany County
Anne Arundel County
Baltimore
Baltimore County
Calvert County
Caroline County
Carroll County
Cecil County
Charles County
Dorchester County
Frederick County
Garrett County
Harford County
Howard County
Kent County
Montgomery County
Prince George's County
Queen Anne's County
Somerset County
St. Mary's County
Talbot County
Washington County
Wicomico County
Worcester County
Barnstable County
Berkshire County
Bristol County
Dukes County
Essex County
Franklin County
Hampden County
Hampshire County
Middlesex County
Nantucket County
Norfolk County
Plymouth County
Suffolk County
Worcester County
Alcona County
Alger County
Allegan County
Alpena County
Antrim County
Arenac County
Baraga County
Barry County
Bay County
Benzie County
Berrien County
Branch County
Calhoun County
Cass County
Charlevoix County
Cheboygan County
Chippewa County
Clare County
Clinton County
Crawford County
Delta County
Dickinson County
Eaton County
Emmet County
Genesee County
Gladwin County
Gogebic County
Grand Traverse County
Gratiot County
Hillsdale County
Houghton County
Huron County
Ingham County
Ionia County
Iosco County
Iron County
Isabella County
Jackson County
Kalamazoo County
Kalkaska County
Kent County
Keweenaw County
Lake County
Lapeer County
Leelanau County
Lenawee County
Livingston County
Luce County
Mackinac County
Macomb County
Manistee County
Marquette County
Mason County
Mecosta County
Menominee County
Midland County
Missaukee County
Monroe County
Montcalm County
Montmorency County
Muskegon County
Newaygo County
Oakland County
Oceana County
Ogemaw County
Ontonagon County
Osceola County
Oscoda County
Otsego County
Ottawa County
Presque Isle County
Roscommon County
Saginaw County
Sanilac County
Schoolcraft County
Shiawassee County
St. Clair County
St. Joseph County
Tuscola County
Van Buren County
Washtenaw County
Wayne County
Wexford County
Aitkin County
Anoka County
Becker County
Beltrami County
Benton County
Big Stone County
Blue Earth County
Brown County
Carlton County
Carver County
Cass County
Chippewa County
Chisago County
Clay County
Clearwater County
Cook County
Cottonwood County
Crow Wing County
Dakota County
Dodge County
Douglas County
Faribault County
Fillmore County
Freeborn County
Goodhue County
Grant County
Hennepin County
Houston County
Hubbard County
Isanti County
Itasca County
Jackson County
Kanabec County
Kandiyohi County
Kittson County
Koochiching County
Lac qui Parle County
Lake County
Lake of the Woods County
Le Sueur County
Lincoln County
Lyon County
Mahnomen County
Marshall County
Martin County
McLeod County
Meeker County
Mille Lacs County
Morrison County
Mower County
Murray County
Nicollet County
Nobles County
Norman County
Olmsted County
Otter Tail County
Pennington County
Pine County
Pipestone County
Polk County
Pope County
Ramsey County
Red Lake County
Redwood County
Renville County
Rice County
Rock County
Roseau County
Scott County
Sherburne County
Sibley County
St. Louis County
Stearns County
Steele County
Stevens County
Swift County
Todd County
Traverse County
Wabasha County
Wadena County
Waseca County
Washington County
Watonwan County
Wilkin County
Winona County
Wright County
Yellow Medicine County
Adams County
Alcorn County
Amite County
Attala County
Benton County
Bolivar County
Calhoun County
Carroll County
Chickasaw County
Choctaw County
Claiborne County
Clarke County
Clay County
Coahoma County
Copiah County
Covington County
DeSoto County
Forrest County
Franklin County
George County
Greene County
Grenada County
Hancock County
Harrison County
Hinds County
Holmes County
Humphreys County
Issaquena County
Itawamba County
Jackson County
Jasper County
Jefferson County
Jefferson Davis County
Jones County
Kemper County
Lafayette County
Lamar County
Lauderdale County
Lawrence County
Leake County
Lee County
Leflore County
Lincoln County
Lowndes County
Madison County
Marion County
Marshall County
Monroe County
Montgomery County
Neshoba County
Newton County
Noxubee County
Oktibbeha County
Panola County
Pearl River County
Perry County
Pike County
Pontotoc County
Prentiss County
Quitman County
Rankin County
Scott County
Sharkey County
Simpson County
Smith County
Stone County
Sunflower County
Tallahatchie County
Tate County
Tippah County
Tishomingo County
Tunica County
Union County
Walthall County
Warren County
Washington County
Wayne County
Webster County
Wilkinson County
Winston County
Yalobusha County
Yazoo County
Adair County
Andrew County
Atchison County
Audrain County
Barry County
Barton County
Bates County
Benton County
Bollinger County
Boone County
Buchanan County
Butler County
Caldwell County
Callaway County
Camden County
Cape Girardeau County
Carroll County
Carter County
Cass County
Cedar County
Chariton County
Christian County
Clark County
Clay County
Clinton County
Cole County
Cooper County
Crawford County
Dade County
Dallas County
Daviess County
DeKalb County
Dent County
Douglas County
Dunklin County
Franklin County
Gasconade County
Gentry County
Greene County
Grundy County
Harrison County
Henry County
Hickory County
Holt County
Howard County
Howell County
Iron County
Jackson County
Jasper County
Jefferson County
Johnson County
Knox County
Laclede County
Lafayette County
Lawrence County
Lewis County
Lincoln County
Linn County
Livingston County
Macon County
Madison County
Maries County
Marion County
McDonald County
Mercer County
Miller County

Moniteau County
Monroe County
Montgomery County
Morgan County
New Madrid County
Newton County
Nodaway County

Osage County
Ozark County
Pemiscot County
Perry County
Pettis County
Phelps County
Pike County
Platte County
Polk County
Pulaski County
Putnam County
Ralls County
Randolph County
Ray County
Reynolds County
Ripley County
Saline County
Schuyler County
Scotland County
Scott County
Shannon County
Shelby County
St. Charles County
St. Clair County
St. Francois County
St. Louis
St. Louis County
Ste. Genevieve County
Stoddard County
Stone County
Sullivan County
Taney County
Texas County
Vernon County
Warren County
Washington County
Wayne County
Webster County
Worth County
Wright County
Beaverhead County
Big Horn County
Blaine County
Broadwater County
Carbon County
Carter County
Cascade County
Chouteau County
Custer County
Daniels County
Dawson County
Deer Lodge County
Fallon County
Fergus County
Flathead County
Gallatin County
Garfield County
Glacier County
Golden Valley County
Granite County
Hill County
Jefferson County
Judith Basin County
Lake County
Lewis and Clark County
Liberty County
Lincoln County
Madison County
McCone County
Meagher County
Mineral County
Missoula County
Musselshell County
Park County
Petroleum County
Phillips County
Pondera County
Powder River County
Powell County
Prairie County
Ravalli County
Richland County
Roosevelt County
Rosebud County
Sanders County
Sheridan County
Silver Bow County
Stillwater County
Sweet Grass County
Teton County
Toole County
Treasure County
Valley County
Wheatland County
Wibaux County
Yellowstone County
Adams County
Antelope County
Arthur County
Banner County
Blaine County
Boone County
Box Butte County
Boyd County
Brown County
Buffalo County
Burt County
Butler County
Cass County
Cedar County
Chase County
Cherry County
Cheyenne County
Clay County
Colfax County
Cuming County
Custer County
Dakota County
Dawes County
Dawson County
Deuel County
Dixon County
Dodge County
Douglas County
Dundy County
Fillmore County
Franklin County
Frontier County
Furnas County
Gage County
Garden County
Garfield County
Gosper County
Grant County
Greeley County
Hall County
Hamilton County
Harlan County
Hayes County
Hitchcock County
Holt County
Hooker County
Howard County
Jefferson County
Johnson County
Kearney County
Keith County
Keya Paha County
Kimball County
Knox County
Lancaster County
Lincoln County
Logan County
Loup County
Madison County
McPherson County
Merrick County
Morrill County
Nance County
Nemaha County
Nuckolls County
Otoe County
Pawnee County
Perkins County
Phelps County
Pierce County
Platte County
Polk County
Red Willow County
Richardson County
Rock County
Saline County
Sarpy County
Saunders County
Scotts Bluff County
Seward County
Sheridan County
Sherman County
Sioux County
Stanton County
Thayer County
Thomas County
Thurston County
Valley County
Washington County
Wayne County
Webster County
Wheeler County
York County
Carson City
Churchill County
Clark County
Douglas County
Elko County
Esmeralda County
Eureka County
Humboldt County
Lander County
Lincoln County
Lyon County
Mineral County
Nye County
Pershing County
Storey County
Washoe County
White Pine County
Belknap County
Carroll County
Cheshire County
Coös County
Grafton County
Hillsborough County
Merrimack County
Rockingham County
Strafford County
Sullivan County
Atlantic County
Bergen County
Burlington County
Camden County
Cape May County
Cumberland County
Essex County
Gloucester County
Hudson County
Hunterdon County
Mercer County
Middlesex County
Monmouth County
Morris County
Ocean County
Passaic County
Salem County
Somerset County
Sussex County
Union County
Warren County
Bernalillo County
Catron County
Chaves County
Cibola County
Colfax County
Curry County
De Baca County
Doña Ana County
Eddy County
Grant County
Guadalupe County
Harding County
Hidalgo County
Lea County
Lincoln County
Los Alamos County
Luna County
McKinley County
Mora County
Otero County
Quay County
Rio Arriba County
Roosevelt County
San Juan County
San Miguel County
Sandoval County
Santa Fe County
Sierra County
Socorro County
Taos County
Torrance County
Union County
Valencia County
Albany County
Allegany County
Brooklyn
Broome County
Cattaraugus County
Cayuga County
Chautauqua County
Chemung County
Chenango County
Clinton County
Columbia County
Cortland County
Delaware County
Dutchess County
Erie County
Essex County
Franklin County
Fulton County
Genesee County
Greene County
Hamilton County
Herkimer County
Jefferson County
Lewis County
Livingston County
Madison County
Manhattan
Monroe County
Montgomery County
Nassau County
New York County
Niagara County
Oneida County
Onondaga County
Ontario County
Orange County
Orleans County
Oswego County
Otsego County
Putnam County
Queens
Rensselaer County
Rockland County
Saratoga County
Schenectady County
Schoharie County
Schuyler County
Seneca County
St. Lawrence County
Staten Island
Steuben County
Suffolk County
Sullivan County
The Bronx
Tioga County
Tompkins County
Ulster County
Warren County
Washington County
Wayne County
Westchester County
Wyoming County
Yates County
Alamance County
Alexander County
Alleghany County
Anson County
Ashe County
Avery County
Beaufort County
Bertie County
Bladen County
Brunswick County
Buncombe County
Burke County
Cabarrus County
Caldwell County
Camden County
Carteret County
Caswell County
Catawba County
Chatham County
Cherokee County
Chowan County
Clay County
Cleveland County
Columbus County
Craven County
Cumberland County
Currituck County
Dare County
Davidson County
Davie County
Duplin County
Durham County
Edgecombe County
Forsyth County
Franklin County
Gaston County
Gates County
Graham County
Granville County
Greene County
Guilford County
Halifax County
Harnett County
Haywood County
Henderson County
Hertford County
Hoke County
Hyde County
Iredell County
Jackson County
Johnston County
Jones County
Lee County
Lenoir County
Lincoln County
Macon County
Madison County
Martin County
McDowell County
Mecklenburg County
Mitchell County
Montgomery County
Moore County
Nash County
New Hanover County
Northampton County
Onslow County
Orange County
Pamlico County
Pasquotank County
Pender County
Perquimans County
Person County
Pitt County
Polk County
Randolph County
Richmond County
Robeson County
Rockingham County
Rowan County
Rutherford County
Sampson County
Scotland County
Stanly County
Stokes County
Surry County
Swain County
Transylvania County
Tyrrell County
Union County
Vance County
Wake County
Warren County
Washington County
Watauga County
Wayne County
Wilkes County
Wilson County
Yadkin County
Yancey County
Adams County
Barnes County
Benson County
Billings County
Bottineau County
Bowman County
Burke County
Burleigh County
Cass County
Cavalier County
Dickey County
Divide County
Dunn County
Eddy County
Emmons County
Foster County
Golden Valley County
Grand Forks County
Grant County
Griggs County
Hettinger County
Kidder County
LaMoure County
Logan County
McHenry County
McIntosh County
McKenzie County
McLean County
Mercer County
Morton County
Mountrail County
Nelson County
Oliver County
Pembina County
Pierce County
Ramsey County
Ransom County
Renville County
Richland County
Rolette County
Sargent County
Sheridan County
Sioux County
Slope County
Stark County
Steele County
Stutsman County
Towner County
Traill County
Walsh County
Ward County
Wells County
Williams County
Adams County
Allen County
Ashland County
Ashtabula County
Athens County
Auglaize County
Belmont County
Brown County
Butler County
Carroll County
Champaign County
Clark County
Clermont County
Clinton County
Columbiana County
Coshocton County
Crawford County
Cuyahoga County
Darke County
Defiance County
Delaware County
Erie County
Fairfield County
Fayette County
Franklin County
Fulton County
Gallia County
Geauga County
Greene County
Guernsey County
Hamilton County
Hancock County
Hardin County
Harrison County
Henry County
Highland County
Hocking County
Holmes County
Huron County
Jackson County
Jefferson County
Knox County
Lake County
Lawrence County
Licking County
Logan County
Lorain County
Lucas County
Madison County
Mahoning County
Marion County
Medina County
Meigs County
Mercer County
Miami County
Monroe County
Montgomery County
Morgan County
Morrow County
Muskingum County
Noble County
Ottawa County
Paulding County
Perry County
Pickaway County
Pike County
Portage County
Preble County
Putnam County
Richland County
Ross County
Sandusky County
Scioto County
Seneca County
Shelby County
Stark County
Summit County
Trumbull County
Tuscarawas County
Union County
Van Wert County
Vinton County
Warren County
Washington County
Wayne County
Williams County
Wood County
Wyandot County
Adair County
Alfalfa County
Atoka County
Beaver County
Beckham County
Blaine County
Bryan County
Caddo County
Canadian County
Carter County
Cherokee County
Choctaw County
Cimarron County
Cleveland County
Coal County
Comanche County
Cotton County
Craig County
Creek County
Custer County
Delaware County
Dewey County
Ellis County
Garfield County
Garvin County
Grady County
Grant County
Greer County
Harmon County
Harper County
Haskell County
Hughes County
Jackson County
Jefferson County
Johnston County
Kay County
Kingfisher County
K County
Latimer County
Le Flore County
Lincoln County
Logan County
Love County
Major County
Marshall County
Mayes County
McClain County
McCurtain County
McIntosh County
Murray County
Muskogee County
Noble County
Nowata County
Okfuskee County
Oklahoma County
Okmulgee County
Osage County
Ottawa County
Pawnee County
Payne County
Pittsburg County
Pontotoc County
Pottawatomie County
Pushmataha County
Roger Mills County
Rogers County
Seminole County
Sequoyah County
Stephens County
Texas County
Tillman County
Tulsa County
Wagoner County
Washington County
Washita County
Woods County
Woodward County
Baker County
Benton County
Clackamas County
Clatsop County
Columbia County
Coos County
Crook County
Curry County
Deschutes County
Douglas County
Gilliam County
Grant County
Harney County
Hood River County
Jackson County
Jefferson County
Josephine County
Klamath County
Lake County
Lane County
Lincoln County
Linn County
Malheur County
Marion County
Morrow County
Multnomah County
Polk County
Sherman County
Tillamook County
Umatilla County
Union County
Wallowa County
Wasco County
Washington County
Wheeler County
Yamhill County
Adams County
Allegheny County
Armstrong County
Beaver County
Bedford County
Berks County
Blair County
Bradford County
Bucks County
Butler County
Cambria County
Cameron County
Carbon County
Centre County
Chester County
Clarion County
Clearfield County
Clinton County
Columbia County
Crawford County
Cumberland County
Dauphin County
Delaware County
Elk County
Erie County
Fayette County
Forest County
Franklin County
Fulton County
Greene County
Huntingdon County
Indiana County
Jefferson County
Juniata County
Lackawanna County
Lancaster County
Lawrence County
Lebanon County
Lehigh County
Luzerne County
Lycoming County
McKean County
Mercer County
Mifflin County
Monroe County
Montgomery County
Montour County
Northampton County
Northumberland County
Perry County
Philadelphia County
Pike County
Potter County
Schuylkill County
Snyder County
Somerset County
Sullivan County
Susquehanna County
Tioga County
Union County
Venango County
Warren County
Washington County
Wayne County
Westmoreland County
Wyoming County
York County
Bristol County
Kent County
Newport County
Providence County
Washington County
Abbeville County
Aiken County
Allendale County
Anderson County
Bamberg County
Barnwell County
Beaufort County
Berkeley County
Calhoun County
Charleston County
Cherokee County
Chester County
Chesterfield County
Clarendon County
Colleton County
Darlington County
Dillon County
Dorchester County
Edgefield County
Fairfield County
Florence County
Georgetown County
Greenville County
Greenwood County
Hampton County
Horry County
Jasper County
Kershaw County
Lancaster County
Laurens County
Lee County
Lexington County
Marion County
Marlboro County
McCormick County
Newberry County
Oconee County
Orangeburg County
Pickens County
Richland County
Saluda County
Spartanburg County
Sumter County
Union County
Williamsburg County
York County
Aurora County
Beadle County
Bennett County
Bon Homme County
Brookings County
Brown County
Brule County
Buffalo County
Butte County
Campbell County
Charles Mix County
Clark County
Clay County
Codington County
Corson County
Custer County
Davison County
Day County
Deuel County
Dewey County
Douglas County
Edmunds County
Fall River County
Faulk County
Grant County
Gregory County
Haakon County
Hamlin County
Hand County
Hanson County
Harding County
Hughes County
Hutchinson County
Hyde County
Jackson County
Jerauld County
Jones County
Kingsbury County
Lake County
Lawrence County
Lincoln County
Lyman County
Marshall County
McCook County
McPherson County
Meade County
Mellette County
Miner County
Minnehaha County
Moody County
Oglala Lakota County
Pennington County
Perkins County
Potter County
Roberts County
Sanborn County
Spink County
Stanley County
Sully County
Todd County
Tripp County
Turner County
Union County
Walworth County
Yankton County
Ziebach County
Anderson County
Bedford County
Benton County
Bledsoe County
Blount County
Bradley County
Campbell County
Cannon County
Carroll County
Carter County
Cheatham County
Chester County
Claiborne County
Clay County
Cocke County
Coffee County
Crockett County
Cumberland County
Davidson County
DeKalb County
Decatur County
Dickson County
Dyer County
Fayette County
Fentress County
Franklin County
Gibson County
Giles County
Grainger County
Greene County
Grundy County
Hamblen County
Hamilton County
Hancock County
Hardeman County
Hardin County
Hawkins County
Haywood County
Henderson County
Henry County
Hickman County
Houston County
Humphreys County
Jackson County
Jefferson County
Johnson County
Knox County
Lake County
Lauderdale County
Lawrence County
Lewis County
Lincoln County
Loudon County
Macon County
Madison County
Marion County
Marshall County
Maury County
McMinn County
McNairy County
Meigs County
Monroe County
Montgomery County
Moore County
Morgan County
Obion County
Overton County
Perry County
Pickett County
Polk County
Putnam County
Rhea County
Roane County
Robertson County
Rutherford County
Scott County
Sequatchie County
Sevier County
Shelby County
Smith County
Stewart County
Sullivan County
Sumner County
Tipton County
Trousdale County
Unicoi County
Union County
Van Buren County
Warren County
Washington County
Wayne County
Weakley County
White County
Williamson County
Wilson County
Anderson County
Andrews County
Angelina County
Aransas County
Archer County
Armstrong County
Atascosa County
Austin County
Bailey County
Bandera County
Bastrop County
Baylor County
Bee County
Bell County
Bexar County
Blanco County
Borden County
Bosque County
Bowie County
Brazoria County
Brazos County
Brewster County
Briscoe County
Brooks County
Brown County
Burleson County
Burnet County
Caldwell County
Calhoun County
Callahan County
Cameron County
Camp County
Carson County
Cass County
Castro County
Chambers County
Cherokee County
Childress County
Clay County
Cochran County
Coke County
Coleman County
Collin County
Collingsworth County
Colorado County
Comal County
Comanche County
Concho County
Cooke County
Coryell County
Cottle County
Crane County
Crockett County
Crosby County
Culberson County
Dallam County
Dallas County
Dawson County
DeWitt County
Deaf Smith County
Delta County
Denton County
Dickens County
Dimmit County
Donley County
Duval County
Eastland County
Ector County
Edwards County
El Paso County
Ellis County
Erath County
Falls County
Fannin County
Fayette County
Fisher County
Floyd County
Foard County
Fort Bend County
Franklin County
Freestone County
Frio County
Gaines County
Galveston County
Garza County
Gillespie County
Glasscock County
Goliad County
Gonzales County
Gray County
Grayson County
Gregg County
Grimes County
Guadalupe County
Hale County
Hall County
Hamilton County
Hansford County
Hardeman County
Hardin County
Harris County
Harrison County
Hartley County
Haskell County
Hays County
Hemphill County
Henderson County
Hidalgo County
Hill County
Hockley County
Hood County
Hopkins County
Houston County
Howard County
Hudspeth County
Hunt County
Hutchinson County
Irion County
Jack County
Jackson County
Jasper County
Jeff Davis County
Jefferson County
Jim Hogg County
Jim Wells County
Johnson County
Jones County
Karnes County
Kaufman County
Kendall County
Kenedy County
Kent County
Kerr County
Kimble County
King County
Kinney County
Kleberg County
Knox County
La Salle County
Lamar County
Lamb County
Lampasas County
Lavaca County
Lee County
Leon County
Liberty County
Limestone County
Lipscomb County
Live Oak County
Llano County
Loving County
Lubbock County
Lynn County
Madison County
Marion County
Martin County
Mason County
Matagorda County
Maverick County
McCulloch County
McLennan County
McMullen County
Medina County
Menard County
Midland County
Milam County
Mills County
Mitchell County
Montague County
Montgomery County
Moore County
Morris County
Motley County
Nacogdoches County
Navarro County
Newton County
Nolan County
Nueces County
Ochiltree County
Oldham County
Orange County
Palo Pinto County
Panola County
Parker County
Parmer County
Pecos County
Polk County
Potter County
Presidio County
Rains County
Randall County
Reagan County
Real County
Red River County
Reeves County
Refugio County
Roberts County
Robertson County
Rockwall County
Runnels County
Rusk County
Sabine County
San Augustine County
San Jacinto County
San Patricio County
San Saba County
Schleicher County
Scurry County
Shackelford County
Shelby County
Sherman County
Smith County
Somervell County
Starr County
Stephens County
Sterling County
Stonewall County
Sutton County
Swisher County
Tarrant County
Taylor County
Terrell County
Terry County
Throckmorton County
Titus County
Tom Green County
Travis County
Trinity County
Tyler County
Upshur County
Upton County
Uvalde County
Val Verde County
Van Zandt County
Victoria County
Walker County
Waller County
Ward County
Washington County
Webb County
Wharton County
Wheeler County
Wichita County
Wilbarger County
Willacy County
Williamson County
Wilson County
Winkler County
Wise County
Wood County
Yoakum County
Young County
Zapata County
Zavala County
Beaver County
Box Elder County
Cache County
Carbon County
Daggett County
Davis County
Duchesne County
Emery County
Garfield County
Grand County
Iron County
Juab County
Kane County
Millard County
Morgan County
Piute County
Rich County
Salt Lake County
San Juan County
Sanpete County
Sevier County
Summit County
Tooele County
Uintah County
Utah County
Wasatch County
Washington County
Wayne County
Weber County
Addison County
Bennington County
Caledonia County
Chittenden County
Essex County
Franklin County
Grand Isle County
Lamoille County
Orange County
Orleans County
Rutland County
Washington County
Windham County
Windsor County
Accomack County
Albemarle County
Alexandria
Alleghany County
Amelia County
Amherst County
Appomattox County
Arlington County
Augusta County
Bath County
Bedford County
Bland County
Botetourt County
Bristol
Brunswick County
Buchanan County
Buckingham County
Buena Vista
Campbell County
Caroline County
Carroll County
Charles City County
Charlotte County
Charlottesville
Chesapeake
Chesterfield County
Clarke County
Colonial Heights
Covington
Craig County
Culpeper County
Cumberland County
Danville
Dickenson County
Dinwiddie County
Emporia
Essex County
Fairfax
Fairfax County
Falls Church
Fauquier County
Floyd County
Fluvanna County
Franklin
Franklin County
Frederick County
Fredericksburg
Galax
Giles County
Gloucester County
Goochland County
Grayson County
Greene County
Greensville County
Halifax County
Hampton
Hanover County
Harrisonburg
Henrico County
Henry County
Highland County
Hopewell
Isle of Wight County
James City County
King George County
King William County
King and Queen County
Lancaster County
Lee County
Lexington
Loudoun County
Louisa County
Lunenburg County
Lynchburg
Madison County
Manassas
Manassas Park
Martinsville
Mathews County
Mecklenburg County
Middlesex County
Montgomery County
Nelson County
New Kent County
Newport News
Norfolk
Northampton County
Northumberland County
Norton
Nottoway County
Orange County
Page County
Patrick County
Petersburg
Pittsylvania County
Poquoson
Portsmouth
Powhatan County
Prince Edward County
Prince George County
Prince William County
Pulaski County
Radford
Rappahannock County
Richmond
Richmond County
Roanoke
Roanoke County
Rockbridge County
Rockingham County
Russell County
Salem
Scott County
Shenandoah County
Smyth County
Southampton County
Spotsylvania County
Stafford County
Staunton
Suffolk
Surry County
Sussex County
Tazewell County
Verginia Beach
Warren County
Washington County
Waynesboro
Westmoreland County
Williamsburg
Winchester
Wise County
Wythe County
York County
Adams County
Asotin County
Benton County
Chelan County
Clallam County
Clark County
Columbia County
Cowlitz County
Douglas County
Ferry County
Franklin County
Garfield County
Grant County
Grays Harbor County
Island County
Jefferson County
King County
Kitsap County
Kittitas County
Klickitat County
Lewis County
Lincoln County
Mason County
Okanogan County
Pacific County
Pend Oreille County
Pierce County
San Juan County
Skagit County
Skamania County
Snohomish County
Spokane County
Stevens County
Thurston County
Wahkiakum County
Walla Walla County
Whatcom County
Whitman County
Yakima County
Barbour County
Berkeley County
Boone County
Braxton County
Brooke County
Cabell County
Calhoun County
Clay County
Doddridge County
Fayette County
Gilmer County
Grant County
Greenbrier County
Hampshire County
Hancock County
Hardy County
Harrison County
Jackson County
Jefferson County
Kanawha County
Lewis County
Lincoln County
Logan County
Marion County
Marshall County
Mason County
McDowell County
Mercer County
Mineral County
Mingo County
Monongalia County
Monroe County
Morgan County
Nicholas County
Ohio County
Pendleton County
Pleasants County
Pocahontas County
Preston County
Putnam County
Raleigh County
Randolph County
Ritchie County
Roane County
Summers County
Taylor County
Tucker County
Tyler County
Upshur County
Wayne County
Webster County
Wetzel County
Wirt County
Wood County
Wyoming County
Adams County
Ashland County
Barron County
Bayfield County
Brown County
Buffalo County
Burnett County
Calumet County
Chippewa County
Clark County
Columbia County
Crawford County
Dane County
Dodge County
Door County
Douglas County
Dunn County
Eau Claire County
Florence County
Fond du Lac County
Forest County
Grant County
Green County
Green Lake County
 County
Iron County
Jackson County
Jefferson County
Juneau County
Kenosha County
Kewaunee County
La Crosse County
Lafayette County
Langlade County
Lincoln County
Manitowoc County
Marathon County
Marinette County
Marquette County
Menominee County
Milwaukee County
Monroe County
Oconto County
Oneida County
Outagamie County
Ozaukee County
Pepin County
Pierce County
Polk County
Portage County
Price County
Racine County
Richland County
Rock County
Rusk County
Sauk County
Sawyer County
Shawano County
Sheboygan County
St. Croix County
Taylor County
Trempealeau County
Vernon County
Vilas County
Walworth County
Washburn County
Washington County
Waukesha County
Waupaca County
Waushara County
Winnebago County
Wood County
Albany County
Big Horn County
Campbell County
Carbon County
Converse County
Crook County
Fremont County
Goshen County
Hot Springs County
Johnson County
Laramie County
Lincoln County
Natrona County
Niobrara County
Park County
Platte County
Sheridan County
Sublette County
Sweetwater County
Teton County
Uinta County
Washakie County
Weston County
Eastern District 
Manu'a District
Rose Atoll
Swains Island
Western District
Washington, D.C.
Northern Islands Municipality
Rota
Saipan
Tinian Municipality
Adjuntas
Aguada
Aguadilla
Aguas Buenas
Aibonito
Arecibo
Arroyo
Añasco
Barceloneta
Barranquitas
Bayamón
Cabo Rojo
Caguas
Camuy
Canóvanas
Carolina
Cataño
Cayey
Ceiba
Ciales
Cidra
Coamo
Comerío
Corozal
Culebra
Dorado
Fajardo

Guayama
Guayanilla
Guaynabo
Gurabo
Guánica
Hatillo
Hormigueros
Humacao
Isabela
Jayuya
Juana Díaz
Juncos
Lajas
Lares
Las Marías
Las Piedras
Loíza
Luquillo
Manatí
Maricao
Maunabo
Mayagüez
Moca
Morovis
Naguabo
Naranjito
Orocovis
Patillas
Peñuelas
Ponce
Quebradillas
Rincón
Río Grande
Sabana Grande
Salinas
San Germán
San Juan
San Lorenzo
San Sebastián
Santa Isabel
Toa Alta
Toa Baja
Trujillo Alto
Utuado
Vega Alta
Vega Baja
Vieques
Villalba
Yabucoa
Yauco
Baker Island
Howland Island
Jarvis Island
Johnston Atoll
Kingman Reef
Midway Atoll
Navassa Island
Palmyra Atoll
Wake Island
Saint Croix
Saint John
Saint Thomas
