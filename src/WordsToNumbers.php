<?php

namespace WordsToNumbers;

class WordsToNumbers{

    protected static $wordsTransformers = [
        'ru' => WordsTransformer\RussianWordsTransformer::class,
        'en' => WordsTransformer\EnglishWordsTransformer::class
    ];

    /**
     * @param string $language
     * @return mixed
     * @throws \Exception
     */
    public static function getWordsTransformer( $language = 'en' ){
        if (!array_key_exists($language, static::$wordsTransformers)) {
            throw new \Exception(sprintf(
                'Words transformer for "%s" language is not implemented.',
                $language
            ));
        }

        return new static::$wordsTransformers[$language];
    }
}