<?php include 'dados.php'; ?>
<?php include 'helper.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daniel — Desenvolvedor PHP</title>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Asap:wght@700&family=Inconsolata:wght@400;700&family=Maven+Pro:wght@400&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/bold/style.css" />

    <!-- Tailwind v4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2"></script>

    <style type="text/tailwindcss">
      /* Definições de tema */
      @theme {
        --color-redp:    #E3646E;
        --color-purplep: #BB72E9;
        --color-bluep:   #3996DB;
        --color-greenp:  #82BC4F;
        --color-yellowp: #EABD5F;

        --color-gray-100: #E2E4E9;
        --color-gray-200: #C0C4CE;
        --color-gray-300: #878EA1;
        --color-gray-400: #292C34;
        --color-gray-500: #16181D;
        --color-gray-600: #0D0E11;
      }

      /* Utilitários customizados ou CSS normal */
      body {
        font-family: "Maven Pro", system-ui, sans-serif;
      }
      .title-lg {
        font-family: "Asap";
        font-weight: 700;
        font-size: 56px;
        line-height: 1.2;
      }
      .title-md {
        font-family: "Asap";
        font-weight: 700;
        font-size: 24px;
        line-height: 1.2;
      }
      .tag {
        font-family: "Inconsolata";
        font-weight: 700;
        font-size: 12px;
      }
    </style>
  </head>

  <body class="bg-gray-500 text-gray-100">
    <section id="profile">
      <div
        class="bg-[url('assets/img/Background_Intro.png')] bg-cover bg-center min-h-screen flex items-center text-center">

        <div
          class="relative z-10 w-full max-w-screen-xl mx-auto px-4 py-16 text-center">
          <img
            class="rounded rounded-full w-20 md:w-28 lg:w-35 border-2 border-red-900 mx-auto"
            src="https://avatars.githubusercontent.com/u/41394871?v=4"
            alt="Profile Photo">

          <h3 class="text-base md:text-lg mt-2">
            Hello World! Meu nome é
            <span class="text-red-400 font-bold">Daniel Henrique</span> e sou
          </h3>

          <!-- título principal responsivo -->
          <h1
            class="mt-3 text-2xl md:text-4xl lg:text-5xl font-extrabold leading-tight">
            Desenvolvedor PHP
          </h1>

          <p
            class="mt-6 text-sm md:text-base lg:text-lg px-4 md:px-12 lg:px-[50px] max-w-3xl mx-auto text-gray-100/95">
            Transformo necessidades em aplicações reais, evolventes e
            funcionais.
            Desenvolvo sistemas através da minha paixão pela tecnologia,
            contribuindo
            com soluções inovadoras e eficazes para desafios complexos.
          </p>
          <div
            class="mt-8 flex flex-wrap items-center justify-center gap-3 text-black font-bold">

            <span class="bg-greenp rounded rounded-full px-5">GitHub</span>
            <span class="bg-purplep rounded rounded-full px-5">PHP</span>
            <span class="bg-bluep rounded rounded-full px-5">CSS</span>
            <span class="bg-redp rounded rounded-full px-5">HTML</span>
            <span class="bg-yellowp rounded rounded-full px-5">Javascript</span>
          </div>

        </div>
      </div>
    </section>

    <section id="projects">
      <div class="bg-gray-500 text-center mt-10">
        <h3 class="text-2xl text-red-400"> Meu Trabalho</h3>
        <h2 class="text-4xl">Veja os projetos em destaque</h2>
      </div>

      <div class="mx-auto max-w-screen-2xl px-4 mt-10 grid grid-cols-1 md:grid-cols-2 gap-5">
  <?php foreach ($projetos as $projeto): ?>
    <article class="h-full">

      <div class="flex h-full bg-gray-400 rounded-xl overflow-hidden mx-5 items-stretch">
        <div class="flex-shrink-0 w-40 md:w-48 lg:w-56">
           <a target="_blank" href="<?php echo htmlspecialchars($projeto['html_url'] ?? '#') ?>">
            <img
              src="assets/img/image.png"
              alt="<?php echo htmlspecialchars($projeto['name'] ?? 'Projeto') ?>"
              class="w-full h-full object-cover block"
            />
          </a>
        </div>

        <div class="p-4 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="text-xl font-bold text-gray-100">
              <?php echo htmlspecialchars($projeto['name'] ?? 'Sem nome') ?>
            </h3>
            <p class="mt-2 text-sm text-gray-200">
              <?php echo htmlspecialchars($projeto['description'] ?: 'Sem descrição') ?>
            </p>
          </div>

          <div class="mt-4">
            <div class="flex flex-wrap gap-2">
              <?php foreach ($projeto['languages'] as $lang): ?>
                <span class="<?php echo lang_badge_classes($lang) ?> rounded-full px-3 py-1 text-xs font-bold">
                  <?php echo htmlspecialchars($lang) ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
</div>


    </section>

    <section id="contact">

      <div
        class="bg-[url('assets/img/Background_Intro.png')] bg-cover bg-center min-h-screen flex items-center justify-center text-center">

        <div class>
          <div class="text-center mb-10">
            <h2 class="text-purplep text-xl m-2">Contato</h2>
            <h1 class="font-bold text-2xl m-2">Gostou do meu trabalho?</h1>
            <h3 class="m-2">Entre em contato ou acompanhe as minhas redes
              sociais!</h3>
          </div>

          <div class="bg-gray-400 rounded-md p-5 mb-3 flex justify-between">
            <span class="text-xl">
              <a href="/"><i class="ph ph-linkedin-logo"></i>
                Linkedin</span>
              <i class="text-bluep ml ph ph-arrow-up-right"></i>
            </a>
          </div>

          <div class="bg-gray-400 rounded-md p-5 mb-3 flex justify-between">
            <span class="text-xl">
              <i class="ph ph-linkedin-logo"></i>
              Linkedin</span>
            <i class="text-bluep ml ph ph-arrow-up-right"></i>
          </div>

          <div class="bg-gray-400 rounded-md p-5 mb-3 flex justify-between">
            <span class="text-xl">
              <i class="ph ph-linkedin-logo"></i>
              Linkedin</span>
            <i class="text-bluep ml ph ph-arrow-up-right"></i>
          </div>

          <div class="bg-gray-400 rounded-md p-5 mb-3 flex justify-between">
            <span class="text-xl">
              <i class="ph ph-linkedin-logo"></i>
              Linkedin</span>
            <i class="text-bluep ml ph ph-arrow-up-right"></i>
          </div>

        </div>
      </div>
    </section>

    <footer class="mx-auto max-w-screen-lg text-center mt-50">
      <div class="border-t border-gray-600 pt-6 px-3 text-gray-200">
        © Copyright
        <?php echo date('Y'); ?>. Construído por mim mesmo :) .
      </div>
    </footer>

  </body>
</html>
