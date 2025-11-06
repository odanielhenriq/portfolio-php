<?php

$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        // ignora comentários
        [$name, $value] = explode('=', $line, 2);
        $_ENV[$name]    = trim($value);
        putenv("$name=$value");
    }
}

$username = "odanielhenriq";

$url   = "https://api.github.com/users/$username/repos";
$token = getenv('GITHUB_TOKEN');

$headers = [
    "User-Agent: PHP",
    "Accept: application/vnd.github.v3+json",
    "Authorization: token {$token}",
];

$options = [
    "http" => [
        "header"  => implode("\r\n", $headers) . "\r\n",
        "timeout" => 10,
    ],
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

if ($response === false) {

    if (isset($http_response_header)) {
        foreach ($http_response_header as $h) {
            error_log($h);
        }
    }
    die("Erro ao buscar repositórios. Verifique token / rate limit.");
}

$data = json_decode($response, true);

$projetos = [];

foreach ($data as $repo) {
    $langs = [];

    if (! empty($repo['languages_url'])) {
        $resp = file_get_contents($repo['languages_url'], false, $context);

        if ($resp !== false) {
            $map = json_decode($resp, true) ?: [];
            // ordena por bytes desc e pega top 3
            arsort($map);
            $langs = array_keys(array_slice($map, 0, 3, true));
        }
    }

    $projetos[] = [
        'name'        => $repo['name'] ?? '',
        'description' => $repo['description'] ?? '',
        'html_url'    => $repo['html_url'] ?? '',
        'languages'   => $langs,
    ];
}
// print_r($data);
// print_r($projetos);
// die();
