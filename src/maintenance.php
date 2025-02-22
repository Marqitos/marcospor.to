<!doctype html>
<html class="no-js min-h-full" lang="es">

    <head>
        <meta charset="utf-8">
        <title>// TODO: Portfolio // Marcos Porto</title>
        <meta name="description" content="Página de mantenimiento, del portafolio de Marcos Porto">
        <meta name="author" content="Marcos Porto">
        <meta name="keywords" content="Marcos Porto, Portafolio Marcos, Marqitos, Desarrollador web Ponteareas, Programador Ponteareas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#F8FAFC"><?php /* slate-50 */ ?>

<?php /* 👨‍🦲 para navegadores antiguos */ ?>
        <link rel="icon" href="/favicon.ico" sizes="any">
<?php /* 🚀 SVG con modo claro/oscuro para navegadores modernos */ ?>
        <link rel="icon" href="/favicon.svg" sizes="image/svg+xml">
<?php /* 📱Imagen 180x180 para dispositivos Apple */ ?>
        <link rel="apple-touch-icon" href="/icon-180.png">
<?php /* 🍏 2 imágenes 192x192 y 512x512 para android */ ?>
        <link rel="manifest" href="/site.webmanifest">
<?php /* 🖥️ 4 imágenes para mosaicos de internet explorer 11 */ ?>
        <meta name="msapplication-config" content="/ieconfig.xml" />

        <link rel="stylesheet" href="/maint/css/normalize.css">
        <link rel="stylesheet" href="/maint/css/main.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/CourierPrime.css">

        <link type="text/plain" rel="author" href="/humans.txt" />
        <script>
<?php /* On page load or when changing themes, best to add inline in `head` to avoid FOUC */ ?>
          document.documentElement.classList.remove("no-js");
          if (localStorage.theme === "dark" || // Tema oscuro establecido por el usuario
              (!("theme" in localStorage) &&   // Usamos el tema del sistema
               window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
          }
        </script>
    </head>

    <body class="min-h-full bg-left-top bg-repeat bg-slate-50 text-gray-800 dark:bg-slate-800 dark:text-gray-50">
        <div id="background" class="min-h-full min-w-full bg-left-top bg-no-repeat">
            <div class="min-h-screen ml-auto mr-auto 2xl:w-7xl bg-slate-50/70 dark:bg-slate-800/70">
                <header class="p-6 pt-8">
                    <h1 class="courier-prime-regular text-violet-800 dark:text-violet-100 text-center">// TODO: PORTAFOLIO WEB</h1>
                </header>
                <main class="grid grid-cols-4 gap-4 items-stretch pl-2 pr-2">
                    <section id="principal" class="text-gray-800 dark:text-gray-200">
                        <h2>Principal</h2>
                        <ul class="roboto-slab-regular border-gray-800 dark:border-gray-200">
                            <li>UX/UI</li>
                            <li>Coherencia</li>
                            <li>Uniformidad</li>
                            <li>Responsive</li>
                            <li>Paleta de colores</li>
                            <li>Imágenes proporcionales</li>
                            <li>Sinceridad</li>
                            <li>Concisa</li>
                            <li>Actualizada</li>
                            <li>Navegación continua<br>
                                <small>Que el usuario siempre tenga algo que hacer</small>
                            </li>
                            <li>Encontrar el tono de comunicación</li>
                            <li>SEO</li>
                            <li>Menos es más</li>
                        </ul>
                    </section>
                    <section id="obligatorio" class="text-lime-700 dark:text-lime-300">
                        <h2>Obligatorio</h2>
                        <ul class="roboto-slab-regular border-lime-700 dark:border-lime-300">
                            <li>Nombre</li>
                            <li>Habilidad principal</li>
                            <li>Contacto <small>(email)</small></li>
                            <li>CV <small>(pdf)</small></li>
                            <li>Proyectos principales<br>
                                <small>(Descripción, tecnologías, imagen, código)</small>
                            </li>
                            <li>Habilidates técnicas</li>
                            <li>Categorizadas</li>
                            <li>Sobre mi</li>
                            <li>Experiencia laboral<br>
                                <small>En cualquier caso</small>
                            </li>
                            <li>Formación<br>
                                <small>Carrerar, bootcamp, cursos, autodidacta ...</small>
                            </li>
                        </ul>
                    </section>
                    <section id="recomendable" class="text-orange-700 dark:text-orange-300">
                        <h2>Recomendable</h2>
                        <ul class="roboto-slab-regular border-orange-700 dark:border-orange-300">
                            <li>GitHub</li>
                            <li>LinkedIn</li>
                            <li>Foto</li>
                            <li>Otros proyectos</li>
                            <li>Habilidades blandas</li>
                            <li>Dominio personalizado</li>
                            <li>Roles desempeñados</li>
                        </ul>
                    </section>
                    <section id="opcional" class="text-sky-700 dark:text-sky-300">
                        <h2>Opcional</h2>
                        <ul class="roboto-slab-regular border-sky-700 dark:border-sky-300">
                            <li>Dark / light</li>
                            <li>Traducción<br>
                                <small>Depende de tus objetivos laborales</small></li>
                            <li>Blog / artículos</li>
                            <li>Aficiones</li>
                            <li>Divulgación</li>
                            <li>Contribuciones</li>
                            <li>¿Qué estoy aprendiendo?</li>
                            <li>Reconocimientos</li>
                            <li>Participación en eventos</li>
                            <li>Certificaciones</li>
                            <li>Reseñas</li>
                            <li>Idiomas</li>
                        </ul>
                    </section>
                </main>
                <p class="p-4 text-right text-sky-700 dark:text-sky-300">Gracias a <a target="_blank" href="https://moure.dev/"><img alt="Emote MoureDev" src="/maint/img/mouredev_emote.png" class="inline" width="28px" height="28px"> @mouredev</a></p>
            </div>

        </div>

        <script type="javascript" src="/maint/js/polyfills/console.js"></script>
    </body>

</html>
