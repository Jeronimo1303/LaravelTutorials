<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pilot extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the pilot's name
     * $this->attributes['city_of_origin'] - string - contains the pilot's city of birth
     * $this->attributes['nitro_level'] - int - contains the pilot's nitro level.
     */
    protected $fillable = ['name', 'city_of_origin', 'nitro_level'];

    public $timestamps = false;

    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'nitro_level' => 'required',
        ]);

    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getCityOfOrigin(): string
    {
        return $this->attributes['city_of_origin'];
    }

    public function setCityOfOrigin(string $city_of_origin): void
    {
        $this->attributes['city_of_origin'] = $city_of_origin;
    }

    public function getNitroLevel(): int
    {
        return $this->attributes['nitro_level'];
    }

    public function setNitroLevel(int $nitro_level): void
    {
        $this->attributes['nitro_level'] = $nitro_level;
    }
}
