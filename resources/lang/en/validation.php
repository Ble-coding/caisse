<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    // 'accepted' => 'The :attribute must be accepted.',
    'accepted' => 'L\'attribut: doit être accepté.',
    // 'active_url' => 'The :attribute is not a valid URL.',
    'active_url' => 'L\'attribut: n\'est pas une URL valide.',
    // 'after' => 'The :attribute must be a date after :date.',
    'after' => 'L\'attribut: doit être une date après: date.',
    // 'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'after_or_equal' => 'L\'attribut: doit être une date postérieure ou égale à: date.',
    // 'alpha' => 'The :attribute may only contain letters.',
    'alpha' => 'L\'attribut: ne peut contenir que des lettres.',
    // 'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_dash' => 'L\'attribut: ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    // 'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'alpha_num' => 'L\'attribut: ne peut contenir que des lettres et des chiffres.',
    // 'array' => 'The :attribute must be an array.',
    'array' => 'L\'attribut: doit être un tableau.',
    // 'before' => 'The :attribute must be a date before :date.',
    'before' => 'L\'attribut: doit être une date antérieure à: date.',
    // 'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'before_or_equal' => 'L\'attribut: doit être une date antérieure ou égale à: date.',
    // 'between' => [
    //     'numeric' => 'The :attribute must be between :min and :max.',
    //     'file' => 'The :attribute must be between :min and :max kilobytes.',
    //     'string' => 'The :attribute must be between :min and :max characters.',
    //     'array' => 'The :attribute must have between :min and :max items.',
    // ],

    'between' => [
        'numeric' => 'L \' attribut: doit être compris entre: min et: max. ',
        'file' => 'L \' attribut: doit être compris entre: min et: max kilo-octets. ',
        'string' => 'L\'attribut: doit être compris entre: min et: max caractères.',
        'array' => 'L\'attribut: doit avoir entre: min et: max items.',
    ],
    // 'boolean' => 'The :attribute field must be true or false.',
    'boolean' => 'Le champ: attribut doit être vrai ou faux.',
    // 'confirmed' => 'The :attribute confirmation does not match.',
    'confirmed' => 'La confirmation de l\’attribut: ne correspond pas.',
    // 'date' => 'The :attribute is not a valid date.',
    'date' => 'L\'attribut: n\'est pas une date valide.',
    // 'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_equals' => 'L\'attribut: doit être une date égale à: date.',
    // 'date_format' => 'The :attribute does not match the format :format.',
    'date_format' => 'L\'attribut: ne correspond pas au format: format.',
    // 'different' => 'The :attribute and :other must be different.',
    'different' => 'Les attributs: and: other doivent être différents.',
    // 'digits' => 'The :attribute must be :digits digits.',
    'digits' => 'L \': attribut doit être: chiffres chiffres. ',
    // 'digits_between' => 'The :attribute must be between :min and :max digits.',
    'digits_between' => 'L’attribut: doit être compris entre: min et: max digits.',
    // 'dimensions' => 'The :attribute has invalid image dimensions.',
    'dimensions' => 'L \' attribut: a des dimensions d \'image non valides.',
    // 'distinct' => 'The :attribute field has a duplicate value.',
    'distinct' => 'Le champ: attribute a une valeur en double.',
    // 'email' => 'The :attribute must be a valid email address.',
    'email' => 'L \' attribut: doit être une adresse e-mail valide. ',
    // 'ends_with' => 'The :attribute must end with one of the following: :values.',
    'ends_with' => 'L \' attribut: doit se terminer par l \'un des éléments suivants:: valeurs.',
    // 'exists' => 'The selected :attribute is invalid.',
    'exists' => 'L \' attribut sélectionné: n \'est pas valide.',
    // 'file' => 'The :attribute must be a file.',
   'file' => 'L \' attribut doit être un fichier. ',
    // 'filled' => 'The :attribute field must have a value.',
    'filled' => 'Le champ: attribute doit avoir une valeur.',
    // 'gt' => [
    //     'numeric' => 'The :attribute must be greater than :value.',
    //     'file' => 'The :attribute must be greater than :value kilobytes.',
    //     'string' => 'The :attribute must be greater than :value characters.',
    //     'array' => 'The :attribute must have more than :value items.',
    // ],
    'gt' => [
        'numeric' => 'L\'attribut doit être supérieur à: valeur. ',
        'file' => 'L\'attribut doit être supérieur à: valeur kilo-octets. ',
        'string' => 'L\'attribut doit être supérieur à: valeur caractères. ',
        'array' => 'L\'attribut doit avoir plus de: éléments de valeur. ',
    ],
    // 'gte' => [
    //     'numeric' => 'The :attribute must be greater than or equal :value.',
    //     'file' => 'The :attribute must be greater than or equal :value kilobytes.',
    //     'string' => 'The :attribute must be greater than or equal :value characters.',
    //     'array' => 'The :attribute must have :value items or more.',
    // ],

'gte' => [
        'numeric' => 'L \': attribut doit être supérieur ou égal à: valeur. ',
        'file' => 'L \': attribut doit être supérieur ou égal à: value kilo-octets. ',
        'string' => 'L \' attribut: doit être supérieur ou égal à: valeur caractères. ',
        'array' => 'L \': attribut doit avoir: éléments de valeur ou plus. ',
    ],
    // 'image' => 'The :attribute must be an image.',
     'image' => 'L \': attribut doit être une image. ',
    // 'in' => 'The selected :attribute is invalid.',
    'in' => 'L \' attribut sélectionné: n \'est pas valide.',
    // 'in_array' => 'The :attribute field does not exist in :other.',
    'in_array' => 'Le champ: attribute n\'existe pas dans: other.',
    // 'integer' => 'The :attribute must be an integer.',
    'integer' => 'L \': attribut doit être un entier. ',
    // 'ip' => 'The :attribute must be a valid IP address.',
    'ip' => 'L \': attribut doit être une adresse IP valide. ',
    // 'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv4' => 'L \': attribut doit être une adresse IPv4 valide. ',
    // 'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'ipv6' => 'L \': attribut doit être une adresse IPv6 valide. ',
    // 'json' => 'The :attribute must be a valid JSON string.',
     'json' => 'L \' attribut: doit être une chaîne JSON valide. ',
    // 'lt' => [
    //     'numeric' => 'The :attribute must be less than :value.',
    //     'file' => 'The :attribute must be less than :value kilobytes.',
    //     'string' => 'The :attribute must be less than :value characters.',
    //     'array' => 'The :attribute must have less than :value items.',
    // ],
    'lt' => [
        'numeric' => 'L \': attribut doit être inférieur à: valeur. ',
        'file' => 'L \': attribut doit être inférieur à: valeur kilo-octets. ',
        'string' => 'L \': attribut doit être inférieur à: caractères de valeur. ',
        'array' => 'L \': attribut doit avoir moins de: éléments de valeur. ',
    ],
    // 'lte' => [
    //     'numeric' => 'The :attribute must be less than or equal :value.',
    //     'file' => 'The :attribute must be less than or equal :value kilobytes.',
    //     'string' => 'The :attribute must be less than or equal :value characters.',
    //     'array' => 'The :attribute must not have more than :value items.',
    // ],

    'lte' => [
        'numeric' => 'L \': attribut doit être inférieur ou égal à: valeur. ',
        'file' => 'L \': attribut doit être inférieur ou égal à: valeur kilo-octets. ',
        'string' => 'L \' attribut: doit être inférieur ou égal à: valeur caractères. ',
        'array' => 'L \': attribut ne doit pas avoir plus de: éléments de valeur. ',
    ],
    // 'max' => [
    //     'numeric' => 'The :attribute may not be greater than :max.',
    //     'file' => 'The :attribute may not be greater than :max kilobytes.',
    //     'string' => 'The :attribute may not be greater than :max characters.',
    //     'array' => 'The :attribute may not have more than :max items.',
    // ],

    'max' => [
        'numeric' => 'L \': attribut ne doit pas être supérieur à: max. ',
        'file' => 'L \': attribut ne doit pas être supérieur à: max kilo-octets. ',
        'string' => 'L \': attribut ne peut pas être supérieur à: max caractères. ',
        'array' => 'L \': attribut ne peut pas avoir plus de: max éléments. ',
    ],
    // 'mimes' => 'The :attribute must be a file of type: :values.',
    'mimes' => 'L \' attribut: doit être un fichier de type:: values. ',
    // 'mimetypes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    // 'min' => [
    //     'numeric' => 'The :attribute must be at least :min.',
    //     'file' => 'The :attribute must be at least :min kilobytes.',
    //     'string' => 'The :attribute must be at least :min characters.',
    //     'array' => 'The :attribute must have at least :min items.',
    // ],

    'min' => [
        'numeric' => 'L \': attribut doit être au moins: min. ',
        'file' => 'L \': attribut doit être au moins: min kilo-octets. ',
        'string' => 'L \': attribut doit contenir au moins: min caractères. ',
        'array' => 'L \': attribut doit avoir au moins: min items. ',
    ],
    // 'not_in' => 'The selected :attribute is invalid.',
    'not_in' => 'L\'attribut selected: n\'est pas valide.',
    // 'not_regex' => 'The :attribute format is invalid.',
    'not_regex' => 'Le: format d\'attribut n\'est pas valide.',
    // 'numeric' => 'The :attribute must be a number.',
    'numeric' => 'L\'attribut: doit être un nombre.',
    // 'password' => 'The password is incorrect.',
    'password' => 'Le mot de passe est incorrect.',
    // 'present' => 'The :attribute field must be present.',
    'present' => 'Le champ: attribute doit être présent.',
    // 'regex' => 'The :attribute format is invalid.',
    'regex' => 'Le: format de l \' attribut n \'est pas valide.',
    // 'required' => 'The :attribute field is required.',
     'required' => 'Le champ  :attribute est obligatoire.',
    // 'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if' => 'Le champ: attribute est requis lorsque: other est: value.',
    // 'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_unless' => 'Le champ: attribute est obligatoire sauf si: other est dans: values.',
    // 'required_with' => 'The :attribute field is required when :values is present.',
     'required_with' => 'Le champ: attribute est obligatoire lorsque: values nest présent.',
    // 'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_with_all' => 'Le champ: attribute est requis lorsque: des valeurs sont présentes.',
    // 'required_without' => 'The :attribute field is required when :values is not present.',
     'required_without' => 'Le champ: attribute est requis lorsque: values n \' est pas présent. ',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
     'required_without_all' => 'Le champ: attribute est requis quand aucune des valeurs: n\'est présente.',
    // 'same' => 'The :attribute and :other must match.',
    'same' => 'Les attributs: et: other doivent correspondre.',
    // 'size' => [
    //     'numeric' => 'The :attribute must be :size.',
    //     'file' => 'The :attribute must be :size kilobytes.',
    //     'string' => 'The :attribute must be :size characters.',
    //     'array' => 'The :attribute must contain :size items.',
    // ],
    'size' => [
            'numeric' => 'L \': attribut doit être: taille. ',
            'file' => 'L \': attribut doit être: taille kilo-octets. ',
            'string' => 'L \': attribut doit être: caractères de taille. ',
            'array' => 'L \': attribut doit contenir: éléments de taille. ',
        ],
    // 'starts_with' => 'The :attribute must start with one of the following: :values.',
    'starts_with' => 'L\' attribut: doit commencer par l\'un des éléments suivants: : valeurs.',
    // 'string' => 'The :attribute must be a string.',
    'string' => 'L\'attribut: doit être une chaîne.',
    // 'timezone' => 'The :attribute must be a valid zone.',
    'timezone' => 'L\'attribut: doit être une zone valide.',
    // 'unique' => 'The :attribute has already been taken.',
    'unique' => 'L\'attribut: a déjà été pris.',
    // 'uploaded' => 'The :attribute failed to upload.',
    'uploaded' => 'L\'attribut: n\'a pas pu être téléchargé.',
    // 'url' => 'The :attribute format is invalid.',
    'url' => 'Le format de l\'attribut: n\'est pas valide.',
    // 'uuid' => 'The :attribute must be a valid UUID.',
    'uuid' => 'L\'attribut: doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

