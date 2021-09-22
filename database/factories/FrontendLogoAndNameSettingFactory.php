<?php

namespace Database\Factories;

use App\Models\FrontendLogoAndNameSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class FrontendLogoAndNameSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FrontendLogoAndNameSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'বাগেরহাট জেলা এনজিও পোর্টাল',
            'logo' => 'gov.png'
        ];
    }
}
