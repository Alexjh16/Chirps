<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chirps | lorem </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body class="antialiased">
        <!-- Navbar -->
        <header
            x-data="{ isOpen: false, isScrolled: false }"
            x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 10 })"
            :class="{ 'bg-white shadow-md': isScrolled }"
            class="fixed top-0 w-full z-50 transition-all duration-300"
            @scroll.window="isScrolled = (window.pageYOffset > 10)"
        >
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/favicon.ico-ttiAUwkpm8llCzztMLQ01jzFD0keNp.png" alt="Logo" class="w-8 h-8">
                            <span class="text-xl font-bold" :class="{ 'text-gray-800': isScrolled, 'text-white': !isScrolled }">
                                Momentum
                            </span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-8">
                        @foreach(['Inicio', 'Precios', 'Contacto'] as $item)
                            <a
                                href="#{{ strtolower($item) }}"
                                class="font-medium transition-colors hover:text-indigo-600"
                                :class="{ 'text-gray-700': isScrolled, 'text-white': !isScrolled }"
                            >
                                {{ $item }}
                            </a>
                        @endforeach
                        <a
                            href="{{ route('login') }}"
                            class="px-4 py-2 rounded-md bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors"
                        >
                            Login
                        </a>
                    </nav>

                    <!-- Mobile Navigation Button -->
                    <button
                        @click="isOpen = !isOpen"
                        class="md:hidden"
                        :class="{ 'text-gray-800': isScrolled, 'text-white': !isScrolled }"
                    >
                        <svg
                            x-show="!isOpen"
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg
                            x-show="isOpen"
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            x-cloak
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="md:hidden"
                x-cloak
            >
                <div class="px-4 py-5 bg-white shadow-lg">
                    <nav class="flex flex-col space-y-4">
                        @foreach(['Inicio', 'Características', 'Testimonios', 'Precios', 'Contacto'] as $item)
                            <a
                                href="#{{ strtolower($item) }}"
                                class="font-medium text-gray-700 hover:text-indigo-600 transition-colors"
                                @click="isOpen = false"
                            >
                                {{ $item }}
                            </a>
                        @endforeach
                        <a
                            href="#contacto"
                            class="px-4 py-2 rounded-md bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors text-center"
                            @click="isOpen = false"
                        >
                            Empezar
                        </a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section
            id="inicio"
            class="relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-gray-900 to-gray-800 text-white overflow-hidden"
            x-data="{ show: false }"
            x-init="setTimeout(() => show = true, 500)"
        >
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fillRule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fillOpacity=\'0.2\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            </div>

            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                    <div
                        class="w-full md:w-1/2 space-y-6"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform -translate-x-12"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                    >
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                            Impulsa tu negocio al <span class="text-indigo-400">siguiente nivel</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300">
                            Soluciones innovadoras que transforman la manera en que interactúas con tus clientes y potencias tu crecimiento.
                        </p>
                        <div class="flex flex-wrap gap-4 pt-2">
                            <a
                                href="#contacto"
                                class="px-6 py-3 rounded-md bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors"
                            >
                                Comenzar ahora
                            </a>
                            <a
                                href="#caracteristicas"
                                class="px-6 py-3 rounded-md bg-white bg-opacity-10 text-white font-medium hover:bg-opacity-20 transition-colors"
                            >
                                Conocer más
                            </a>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-1/2"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                        <div class="relative">
                            <div class="absolute -inset-1 bg-indigo-500 rounded-lg opacity-30 blur-xl"></div>
                            <div class="relative bg-gray-800 p-6 rounded-lg shadow-xl">
                                <div class="aspect-video rounded-md overflow-hidden bg-gray-700">
                                    <img
                                        src="https://placehold.co/600x400"
                                        alt="Dashboard Preview"
                                        class="w-full h-full object-cover"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div
                    class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 pt-8 border-t border-gray-700"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-700 delay-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    @foreach([
                        ['98%', 'Satisfacción'],
                        ['24/7', 'Soporte'],
                        ['10k+', 'Clientes'],
                        ['15+', 'Países']
                    ] as [$value, $label])
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold text-indigo-400">{{ $value }}</div>
                            <div class="text-gray-400 mt-1">{{ $label }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Wave Divider -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" class="w-full h-auto">
                    <path
                        fill="#ffffff"
                        fill-opacity="1"
                        d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"
                    ></path>
                </svg>
            </div>
        </section>



        <!-- Testimonials Section -->
        <section
            id="testimonios"
            class="py-20 bg-gradient-to-br from-indigo-900 to-indigo-800 text-white"
            x-data="{
                testimonials: [
                    {
                        content: 'Implementar esta solución transformó completamente nuestro negocio. El aumento en productividad y eficiencia ha sido notable desde el primer día.',
                        author: 'María Rodríguez',
                        position: 'CEO, TechSolutions',
                        avatar: 'https://placehold.co/80x80'
                    },
                    {
                        content: 'El soporte técnico es excepcional. Siempre están disponibles para resolver cualquier duda y el producto ha superado todas nuestras expectativas.',
                        author: 'Carlos Mendoza',
                        position: 'Director de Operaciones, InnovateCorp',
                        avatar: 'https://placehold.co/80x80'
                    },
                    {
                        content: 'La facilidad de uso combinada con funcionalidades avanzadas hace que este producto sea perfecto tanto para principiantes como para usuarios experimentados.',
                        author: 'Laura Sánchez',
                        position: 'Gerente de Marketing, GrowthBrand',
                        avatar: 'https://placehold.co/80x80'
                    }
                ],
                activeIndex: 0,
                init() {
                    setInterval(() => {
                        this.activeIndex = (this.activeIndex + 1) % this.testimonials.length
                    }, 5000)
                }
            }"
        >
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Lo que dicen nuestros clientes</h2>
                    <p class="text-lg text-indigo-200">
                        Miles de empresas confían en nosotros para impulsar su crecimiento
                    </p>
                </div>

                <div class="relative max-w-4xl mx-auto">
                    <div class="overflow-hidden">
                        <div
                            class="flex transition-transform duration-500 ease-in-out"
                            :style="{ transform: `translateX(-${activeIndex * 100}%)` }"
                        >
                            <template x-for="(testimonial, index) in testimonials" :key="index">
                                <div class="w-full flex-shrink-0 px-4">
                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-lg text-center">
                                        <div class="mb-6">
                                            <svg class="w-10 h-10 text-indigo-300 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                            </svg>
                                        </div>
                                        <p class="text-lg mb-6" x-text="testimonial.content"></p>
                                        <div class="flex items-center justify-center">
                                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                                <img
                                                    :src="testimonial.avatar"
                                                    :alt="testimonial.author"
                                                    class="w-full h-full object-cover"
                                                >
                                            </div>
                                            <div class="text-left">
                                                <div class="font-semibold" x-text="testimonial.author"></div>
                                                <div class="text-indigo-300 text-sm" x-text="testimonial.position"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <div class="flex justify-center mt-8 space-x-2">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <button
                                class="w-3 h-3 rounded-full transition-colors"
                                :class="activeIndex === index ? 'bg-white' : 'bg-white bg-opacity-30'"
                                @click="activeIndex = index"
                                :aria-label="`Go to slide ${index + 1}`"
                            ></button>
                        </template>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section
            id="precios"
            class="py-20 bg-white"
            x-data="{
                annual: false,
                plans: [
                    {
                        name: 'Básico',
                        description: 'Perfecto para pequeñas empresas y startups',
                        monthlyPrice: 29,
                        annualPrice: 290,
                        features: [
                            'Hasta 5 usuarios',
                            '10GB de almacenamiento',
                            'Soporte por email',
                            'Actualizaciones gratuitas',
                            'Acceso a funciones básicas'
                        ],
                        cta: 'Comenzar gratis',
                        highlighted: false
                    },
                    {
                        name: 'Profesional',
                        description: 'Ideal para empresas en crecimiento',
                        monthlyPrice: 79,
                        annualPrice: 790,
                        features: [
                            'Hasta 20 usuarios',
                            '50GB de almacenamiento',
                            'Soporte prioritario',
                            'Actualizaciones gratuitas',
                            'Acceso a todas las funciones',
                            'Integraciones avanzadas',
                            'Análisis detallados'
                        ],
                        cta: 'Comenzar ahora',
                        highlighted: true
                    },
                    {
                        name: 'Empresarial',
                        description: 'Para grandes organizaciones',
                        monthlyPrice: 199,
                        annualPrice: 1990,
                        features: [
                            'Usuarios ilimitados',
                            '500GB de almacenamiento',
                            'Soporte 24/7',
                            'Actualizaciones prioritarias',
                            'Acceso a todas las funciones',
                            'Integraciones personalizadas',
                            'Análisis avanzados',
                            'API dedicada',
                            'Gestor de cuenta personal'
                        ],
                        cta: 'Contactar ventas',
                        highlighted: false
                    }
                ]
            }"
        >
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
                        Planes que se adaptan a tus necesidades
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Elige el plan perfecto para tu negocio con precios transparentes y sin sorpresas
                    </p>

                    <div class="flex items-center justify-center mb-8">
                        <span :class="annual ? 'text-gray-500' : 'text-gray-900 font-medium'">Mensual</span>
                        <button
                            class="relative inline-flex h-6 w-11 mx-3 items-center rounded-full bg-gray-200"
                            @click="annual = !annual"
                            role="switch"
                            :aria-checked="annual"
                        >
                            <span
                                class="inline-block h-4 w-4 transform rounded-full bg-white transition"
                                :class="annual ? 'translate-x-6' : 'translate-x-1'"
                            ></span>
                        </button>
                        <span :class="annual ? 'text-gray-900 font-medium' : 'text-gray-500'">
                            Anual <span class="text-indigo-600 text-sm font-medium">(-20%)</span>
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <template x-for="(plan, index) in plans" :key="index">
                        <div
                            :class="plan.highlighted
                                ? 'bg-gradient-to-b from-indigo-600 to-indigo-700 text-white shadow-xl transform hover:-translate-y-2'
                                : 'bg-gray-50 border border-gray-200 hover:shadow-lg transform hover:-translate-y-1'"
                            class="rounded-xl overflow-hidden transition-all duration-300"
                        >
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold mb-2"
                                    :class="plan.highlighted ? 'text-white' : 'text-gray-900'"
                                    x-text="plan.name"
                                ></h3>
                                <p
                                    class="mb-6"
                                    :class="plan.highlighted ? 'text-indigo-100' : 'text-gray-600'"
                                    x-text="plan.description"
                                ></p>
                                <div class="mb-6">
                                    <span
                                        class="text-4xl font-bold"
                                        :class="plan.highlighted ? 'text-white' : 'text-gray-900'"
                                        x-text="`$${annual ? plan.annualPrice : plan.monthlyPrice}`"
                                    ></span>
                                    <span :class="plan.highlighted ? 'text-indigo-100' : 'text-gray-600'">
                                        /<span x-text="annual ? 'año' : 'mes'"></span>
                                    </span>
                                </div>

                                <ul class="space-y-3 mb-8">
                                    <template x-for="(feature, i) in plan.features" :key="i">
                                        <li class="flex items-start">
                                            <svg
                                                class="w-5 h-5 mr-2 flex-shrink-0"
                                                :class="plan.highlighted ? 'text-indigo-200' : 'text-indigo-500'"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            <span
                                                :class="plan.highlighted ? 'text-indigo-100' : 'text-gray-600'"
                                                x-text="feature"
                                            ></span>
                                        </li>
                                    </template>
                                </ul>

                                <a
                                    href="#contacto"
                                    class="block w-full py-3 px-4 rounded-md text-center font-medium transition-colors"
                                    :class="plan.highlighted
                                        ? 'bg-white text-indigo-600 hover:bg-gray-100'
                                        : 'bg-indigo-600 text-white hover:bg-indigo-700'"
                                    x-text="plan.cta"
                                ></a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="contacto" class="bg-gray-900 text-white pt-16 pb-8">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                    <div>
                        <div class="flex items-center space-x-2 mb-6">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/favicon.ico-ttiAUwkpm8llCzztMLQ01jzFD0keNp.png" alt="Logo" class="w-8 h-8 invert">
                            <span class="text-xl font-bold">Momentum</span>
                        </div>
                        <p class="text-gray-400 mb-6">
                            Soluciones innovadoras que transforman la manera en que interactúas con tus clientes y potencias tu crecimiento.
                        </p>
                        <div class="flex space-x-4">
                            @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <i data-feather="{{ $social }}" class="w-5 h-5"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Enlaces Rápidos</h3>
                        <ul class="space-y-3">
                            @foreach(['Inicio', 'Características', 'Testimonios', 'Precios', 'Contacto'] as $item)
                                <li>
                                    <a
                                        href="#{{ strtolower($item) }}"
                                        class="text-gray-400 hover:text-white transition-colors"
                                    >
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Recursos</h3>
                        <ul class="space-y-3">
                            @foreach(['Blog', 'Documentación', 'Guías', 'Soporte', 'API'] as $item)
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-400 hover:text-white transition-colors"
                                    >
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contacto</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i data-feather="mail" class="w-5 h-5 mr-3 text-gray-400"></i>
                                <span class="text-gray-400">info@momentum.com</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="phone" class="w-5 h-5 mr-3 text-gray-400"></i>
                                <span class="text-gray-400">+1 (555) 123-4567</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="map-pin" class="w-5 h-5 mr-3 text-gray-400"></i>
                                <span class="text-gray-400">123 Business Ave, Suite 100<br>Ciudad, CP 12345</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-8 mt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
                    <p>&copy; {{ date('Y') }} Momentum. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <script>
            feather.replace()
        </script>
    </body>

</html>
