<?php

namespace Adibi\Translatable\Tests\Eloquent;

use Adibi\Translatable\Contracts\Translatable as TranslatableContract;
use Adibi\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryStrict extends Eloquent implements TranslatableContract
{
    use Translatable;

    /**
     * Array with the fields translated in the Translation table.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];

    /**
     * Here we set a custom model for translation.
     * The convention would be Adibi\Translatable\Tests\Models\CountryStrictTranslation.
     *
     * @var string Class containing the translation
     */
    public $translationModel = StrictTranslation::class;

    /**
     * @var string Foreign key for the translation relationship
     */
    public $translationForeignKey = 'country_id';

    /**
     * Column containing the locale in the translation table.
     * Defaults to 'locale'.
     *
     * @var string
     */
    public $localeKey;

    public $table = 'countries';

    /**
     * Add your translated attributes here if you want
     * fill them with mass assignment.
     *
     * @var array
     */
    public $fillable = ['code'];

    protected $softDelete = true;
}
