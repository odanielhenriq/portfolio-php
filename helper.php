<?php
function lang_badge_classes(string $lang): string
{
    // Mapeie como preferir. Usei suas cores custom (redp, purplep, bluep, greenp, yellowp)
    // e algumas cores do Tailwind padrão quando fizer sentido.
    static $map = [
        'PHP'        => 'bg-purplep text-black',
        'JavaScript' => 'bg-yellowp text-black',
        'TypeScript' => 'bg-sky-300 text-black',
        'HTML'       => 'bg-redp text-black',
        'CSS'        => 'bg-bluep text-black',
        'Python'     => 'bg-greenp text-black',
        'Shell'      => 'bg-gray-200 text-gray-900',
        'Dockerfile' => 'bg-blue-200 text-gray-900',
        'Java'       => 'bg-orange-300 text-gray-900',
        'C#'         => 'bg-indigo-500 text-white',
        'C'          => 'bg-slate-500 text-white',
        'C++'        => 'bg-slate-600 text-white',
        'Go'         => 'bg-cyan-300 text-gray-900',
        'Ruby'       => 'bg-rose-300 text-gray-900',
        'Swift'      => 'bg-orange-400 text-gray-900',
        'Kotlin'     => 'bg-violet-400 text-white',
        'SCSS'       => 'bg-pink-300 text-gray-900',
        'Vue'        => 'bg-emerald-400 text-gray-900',
        'SQL'        => 'bg-emerald-300 text-gray-900',
    ];

    // fallback padrão
    return $map[$lang] ?? 'bg-gray-200 text-gray-900';
}
