<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Línies d'idioma per a validació
    |--------------------------------------------------------------------------
    |
    | Les següents línies contenen els missatges d'error per defecte utilitzats
    | per la classe validadora. Algunes regles tenen múltiples versions, com
    | les regles de mida. Pots ajustar cadascun d'aquests missatges aquí.
    |
    */

    'accepted' => 'El camp :attribute ha de ser acceptat.',
    'active_url' => 'El camp :attribute no és una URL vàlida.',
    'after' => 'El camp :attribute ha de ser una data posterior a :date.',
    'after_or_equal' => 'El camp :attribute ha de ser una data posterior o igual a :date.',
    'alpha' => 'El camp :attribute només pot contenir lletres.',
    'alpha_dash' => 'El camp :attribute només pot contenir lletres, números, guions i guions baixos.',
    'alpha_num' => 'El camp :attribute només pot contenir lletres i números.',
    'array' => 'El camp :attribute ha de ser un array.',
    'before' => 'El camp :attribute ha de ser una data anterior a :date.',
    'before_or_equal' => 'El camp :attribute ha de ser una data anterior o igual a :date.',
    'between' => [
        'numeric' => 'El camp :attribute ha d’estar entre :min i :max.',
        'file' => 'El camp :attribute ha de tenir entre :min i :max kilobytes.',
        'string' => 'El camp :attribute ha de tenir entre :min i :max caràcters.',
        'array' => 'El camp :attribute ha de tenir entre :min i :max elements.',
    ],
    'boolean' => 'El camp :attribute ha de ser veritable o fals.',
    'confirmed' => 'La confirmació del camp :attribute no coincideix.',
    'date' => 'El camp :attribute no és una data vàlida.',
    'date_equals' => 'El camp :attribute ha de ser una data igual a :date.',
    'date_format' => 'El camp :attribute no coincideix amb el format :format.',
    'different' => 'Els camps :attribute i :other han de ser diferents.',
    'digits' => 'El camp :attribute ha de tenir :digits dígits.',
    'digits_between' => 'El camp :attribute ha de tenir entre :min i :max dígits.',
    'dimensions' => 'El camp :attribute té dimensions d’imatge no vàlides.',
    'distinct' => 'El camp :attribute té un valor duplicat.',
    'doesnt_start_with' => 'El camp :attribute no pot començar amb cap dels següents valors: :values.',
    'email' => 'El camp :attribute ha de ser una adreça de correu vàlida.',
    'ends_with' => 'El camp :attribute ha de finalitzar amb algun dels següents valors: :values.',
    'exists' => 'El camp :attribute seleccionat no és vàlid.',
    'file' => 'El camp :attribute ha de ser un fitxer.',
    'filled' => 'El camp :attribute ha de tenir un valor.',
    'gt' => [
        'numeric' => 'El camp :attribute ha de ser més gran que :value.',
        'file' => 'El fitxer :attribute ha de ser més gran que :value kilobytes.',
        'string' => 'El camp :attribute ha de tenir més de :value caràcters.',
        'array' => 'El camp :attribute ha de tenir més de :value elements.',
    ],
    'gte' => [
        'numeric' => 'El camp :attribute ha de ser major o igual a :value.',
        'file' => 'El fitxer :attribute ha de ser major o igual a :value kilobytes.',
        'string' => 'El camp :attribute ha de tenir com a mínim :value caràcters.',
        'array' => 'El camp :attribute ha de tenir :value elements o més.',
    ],
    'image' => 'El camp :attribute ha de ser una imatge.',
    'in' => 'El camp :attribute seleccionat no és vàlid.',
    'in_array' => 'El camp :attribute no existeix a :other.',
    'integer' => 'El camp :attribute ha de ser un nombre enter.',
    'ip' => 'El camp :attribute ha de ser una adreça IP vàlida.',
    'ipv4' => 'El camp :attribute ha de ser una adreça IPv4 vàlida.',
    'ipv6' => 'El camp :attribute ha de ser una adreça IPv6 vàlida.',
    'json' => 'El camp :attribute ha de ser una cadena JSON vàlida.',
    'lt' => [
        'numeric' => 'El camp :attribute ha de ser menor que :value.',
        'file' => 'El fitxer :attribute ha de ser menor que :value kilobytes.',
        'string' => 'El camp :attribute ha de tenir menys de :value caràcters.',
        'array' => 'El camp :attribute ha de tenir menys de :value elements.',
    ],
    'lte' => [
        'numeric' => 'El camp :attribute ha de ser menor o igual a :value.',
        'file' => 'El fitxer :attribute ha de ser menor o igual a :value kilobytes.',
        'string' => 'El camp :attribute ha de tenir com a màxim :value caràcters.',
        'array' => 'El camp :attribute no ha de tenir més de :value elements.',
    ],
    'max' => [
        'numeric' => 'El camp :attribute no pot ser més gran que :max.',
        'file' => 'El fitxer :attribute no pot ser més gran que :max kilobytes.',
        'string' => 'El camp :attribute no pot tenir més de :max caràcters.',
        'array' => 'El camp :attribute no pot tenir més de :max elements.',
    ],
    'mimes' => 'El fitxer :attribute ha de ser del tipus: :values.',
    'mimetypes' => 'El fitxer :attribute ha de ser del tipus: :values.',
    'min' => [
        'numeric' => 'El camp :attribute ha de ser com a mínim :min.',
        'file' => 'El fitxer :attribute ha de tenir com a mínim :min kilobytes.',
        'string' => 'El camp :attribute ha de tenir com a mínim :min caràcters.',
        'array' => 'El camp :attribute ha de tenir com a mínim :min elements.',
    ],
    'not_in' => 'El camp :attribute seleccionat no és vàlid.',
    'not_regex' => 'El format del camp :attribute és invàlid.',
    'numeric' => 'El camp :attribute ha de ser un número.',
    'password' => 'La contrasenya és incorrecta.',
    'present' => 'El camp :attribute ha d’estar present.',
    'regex' => 'El format del camp :attribute és invàlid.',
    'required' => 'El camp :attribute és obligatori.',
    'required_if' => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless' => 'El camp :attribute és obligatori tret que :other estigui a :values.',
    'required_with' => 'El camp :attribute és obligatori quan :values està present.',
    'required_with_all' => 'El camp :attribute és obligatori quan :values estan presents.',
    'required_without' => 'El camp :attribute és obligatori quan :values no està present.',
    'required_without_all' => 'El camp :attribute és obligatori quan cap dels :values està present.',
    'same' => 'Els camps :attribute i :other han de coincidir.',
    'size' => [
        'numeric' => 'El camp :attribute ha de ser :size.',
        'file' => 'El fitxer :attribute ha de tenir :size kilobytes.',
        'string' => 'El camp :attribute ha de tenir :size caràcters.',
        'array' => 'El camp :attribute ha de contenir :size elements.',
    ],
    'starts_with' => 'El camp :attribute ha de començar amb algun dels següents valors: :values.',
    'string' => 'El camp :attribute ha de ser una cadena de text.',
    'timezone' => 'El camp :attribute ha de ser una zona vàlida.',
    'unique' => 'El camp :attribute ja ha estat registrat.',
    'uploaded' => 'No s’ha pogut pujar el camp :attribute.',
    'url' => 'El format del camp :attribute és invàlid.',
    'uuid' => 'El camp :attribute ha de ser un UUID vàlid.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'missatge-personalitzat',
        ],
    ],

    'attributes' => [],

];
